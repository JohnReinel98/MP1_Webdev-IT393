<?php
session_start();
$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
	$username = $_SESSION['user'];
	$password = $_SESSION['password'];
	
	$show = mysql_query("Select Lname,Fname from tblstaff where Username ='$username'");
	$rows = mysql_fetch_array($show);
	$lname1 = $rows['Lname'];
	$fname = $rows['Fname'];
	echo "<p class=welcome> Welcome: $fname $lname1 </p>";
?>
<html>
<head>
<title> Update Money Remit Information </title>
<style>
body{
	background-color: white;
	background-repeat: no-repeat;
    background-attachment: fixed;
}
#panel2{
    position: absolute;
    top: 10px;
    left: 0px;
    background: #edeff1;
    width: 1358px;
    height: 550px;
    margin: 130px -10px 0;
    color: #fff;
    padding: 20px;
    box-sizing: border-box;
}
.welcome{
	position: absolute;
	top: 80px;
	left: 1100px;
	font-size: 14px;
	font-family: Verdana;
	font-weight: bold;
	color: #429bf4;
}
.fields{
	position:absolute;
	top:230px;
	left:40px;
}
.table1{
	position: absolute;
	top:210px;
	left:0px;
	width: 1345px;
	height: 370px;
	overflow-y: scroll;
}
table{
	border-collapse: collapse;
	background-color: lightgray;
	font-weight: bold;
    width:100%;
}
th, td {
    text-align: left;
    padding: 4px;
}

tr:nth-child(even){
	background-color: white;
}

th {
    background-color: gray;
    color: white;
}
.logo{
	position: absolute;
	top: -40px;
	left: 10px;
}
.btnCancel{
	position: absolute;
	top: 630px;
	left: 1230px;
}
.cancel{
	background-color: darkgray;
    border: none;
	border-color: darkgray;
    color: white;
    padding: 15px 30px;
	border-radius: 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
	cursor: pointer;
}
.cancel:hover{
	background-color: white;
	color: black;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.viewinc{
	position: absolute;
	top: 21%;
	left: 2%;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	font-weight: 300;
    color: #429bf4;
    font-size: 30px;
    line-height: 30px;
}
.menubar{
  position: absolute;
  top: 2px;
  left: 350px;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background:rgba(66,155,244,0.8);
}

li {
    float: left;
}


li a, .dropbtn_remits {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown_remits:hover .dropbtn_remits {
    background-color: rgba(128,128,128,0.9);
}

li.dropdown_remits {
    display: inline-block;
}

.dropdown-content_remits {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content_remits a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content_remits a:hover {background-color: rgba(128,128,128,0.5);}

.dropdown_remits:hover .dropdown-content_remits {
    display: block;
}
li a, .dropbtn_packages {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown_packages:hover .dropbtn_packages {
    background-color: rgba(128,128,128,0.9);
}

li.dropdown_packages {
    display: inline-block;
}

.dropdown-content_packages {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content_packages a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content_packages a:hover {background-color: rgba(128,128,128,0.5);}

.dropdown_packages:hover .dropdown-content_packages {
    display: block;
}
</style>
</head>
<body>
<div id="header">
</div>
<div id="panel2">
</div>


<div class = "table1">
	<table>
	<tr>
	<th> Date Remitted </th>
	<th> Date Delivered </th>
	<th> Track No </th>
	<th> Consignor </th>
	<th> Consignor No </th>
	<th> Consignee </th>
	<th> Consignee No </th>
	<th> Branch </th>
	<th> Amount </th>
	<th> Fee </th>
	<th> Total </th>
	<th> Status </th>
	<th> Archive </th>
	<th> Unarchive </th>
	<th> Remit Status </th>
	<th> Delivered </th></tr>
	
	<?php
	$sql = mysql_query("select * from tblmoney_remit");
	while( $rows=mysql_fetch_array($sql)){
			$id = $rows['ID'];
			$trackid = $rows['TrackNo'];
			$consignor = $rows['Consignor'];
			$consignorno = $rows['ConsignorNo'];
			$consigneeno = $rows['ConsigneeNo'];	
			$consignee = $rows['Consignee'];
			$amount = $rows['Amount'];
			$fee = $rows['Fee'];
			$total = $rows['TotalAmount'];
			$daterem = $rows['DateRemitted'];
			$datedel = $rows['DateDelivered'];
			$branch = $rows['Branch'];
			$status = $rows['Status'];
			$remitstatus = $rows['RemitStatus'];
	
	
	echo "<tr><td align = 'center'> $daterem </td>";
	echo "<td align = 'center'> $datedel</td>";
	echo "<td align = 'center'> $trackid </td>";
	echo "<td align = 'center'> $consignor </td>";
	echo "<td align = 'center'> $consignorno</td>";
	echo "<td align = 'center'> $consignee </td>";
	echo "<td align = 'center'> $consigneeno </td>";
	echo "<td align = 'center'> $branch </td>";
	echo "<td align = 'center'> $amount </td>";
	echo "<td align = 'center'> $fee </td>";
	echo "<td align = 'center'> $total </td>";
	echo "<td align = 'center'> $status </td>";
	echo "<td align = 'center'> <a href= 'archivemoneyremit_staff.php?id=$id'> Archive </a> </td>";	
	echo "<td align = 'center'> <a href= 'unarchivemoneyremit_staff.php?id=$id'> Unarchive </a> </td>";
	echo "<td align = 'center'> $remitstatus </td>";
	echo "<td align = 'center'> <a href= 'deliveredmoneyremit_staff.php?id=$id&consignorno=$consignorno&consignee=$consignee'> Delivered </a> </td></tr>";
	
	}
	?>
</table>
</div>
<div class="logo">
<a href="loginstaffcode.php">
<img src="Assets/indexlogo.png" width="180" height="180"/>
</a>
</div>
<div class="btnCancel">
<form method="POST" action="loginstaffcode.php">
<input type= "submit" value="Back" class="cancel">
</form>
</div>
<div class="viewinc">
	<strong><h1 style="font-size:25pt;">Money Remittances Information</h1></strong>
</div>
	<div class="menubar">
	<ul>
	  <li class="dropdown_remits">
	  <a href="#" class="dropbtn_remits"><img src="Assets/moneyrem.png" height="24" width="24"/>&nbsp;&nbsp;Manage Remittances</a>
		<div class="dropdown-content_remits">
		  <a href="createremitform_staff.php">Create Remittance</a>
		  <a href="updatemoneyremitcode_staff.php">Update Remittance Informations</a>
		  <a href="archivecodetablemonrem_staff.php">Archive/Unarchive Remittances</a>
		</div>
	  </li>
	  <li class="dropdown_packages">
	  <a href="#" class="dropbtn_packages"><img src="Assets/package.png" height="24" width="24"/>&nbsp;&nbsp;Manage Packages</a>
	  <div class="dropdown-content_packages">
		  <a href="createpackageform_staff.php">Create Package Delivery</a>
		  <a href="updatepackagecode_staff.php">Update Package Informations</a>
		  <a href="archivecodetablepackage_staff.php">Archive/Unarchive Packages</a>
		</div>
	  </li>
	  <li><a href="viewallratesstaff.php"><img src="Assets/rates.png" height="24" width="24"/>&nbsp;&nbsp;View Rates</a></li>
	  <li><a href="logoutsessioncode.php"><img src="Assets/logout.png" height="24" width="24"/>&nbsp;&nbsp;Logout</a></li>
	</ul>
	</div>
</body>
</html>