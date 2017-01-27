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
<title> Staff Panel </title>
<style>
body{
	background-image:url("Assets/wallpaper1.png");
	background-repeat: no-repeat;
    background-attachment: fixed;
}
#header{
	position: absolute;
	background:rgba(128,128,128,0.5);
	width: 1360px;
	height: 180px;
	border-radius: 0 0 15px 15px;
	float: left;
	margin: -5px -5px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
#panel{
    position: absolute;
    background: #429bf4;
    width: 1320px;
    height: 470px;
    border-radius: 15px 15px 15px 15px;
    float: center;
    margin: 190px 6px 0;
    color: #fff;
    padding: 20px;
    box-sizing: border-box;
}
#panel1{
    position: absolute;
    background: rgba(128,128,128,1.0);
    width: 1290px;
    height: 445px;
    border-radius: 15px 15px 15px 15px;
    float: center;
    margin: 202px 20px 0;
    color: #fff;
    padding: 20px;
    box-sizing: border-box;
}
.menubar{
	position: absolute;
	top: 2px;
	left: 400px;
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
.logo{
	position: absolute;
	top: -45px;
	left: 10px;
}
.welcome{
	position: absolute;
	top: 140px;
	left: 1100px;
	font-size: 14px;
	font-family: Verdana;
	font-weight: bold;
	color: white;
}
.table1{
    position: absolute;
    top:215px;
    left:31px;
width: 1280px;
  height: 425px;
  overflow-y: scroll;
}
table{
    border-collapse: collapse;
    background-color: gray;
    font-weight: bold;
    width:98%;
}
th, td {
    text-align: left;
    padding: 5px;
}

tr:nth-child(even){
    background-color: white;
}

th {
    background-color: gray;
    color: white;
}
</style>
</head>
<body>
<div id="header">
</div>
<div id="panel">
</div>
<div id="panel1">
</div>
<div class="logo">
<a href="loginstaffcode.php">
<img src="Assets/indexlogo.png"/>
</a>
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
<div class = "table1">
    <table>
    <tr>
    <th> Date Remitted </th>
    <th> Expected Delivey Date </th>
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
    <th> Remit Status </th></tr>
    
    <?php
    $sql = mysql_query("select * from tblmoney_remit where Status = 'Active' ");
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
    echo "<td align = 'center'> $datedel </td>";
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
    echo "<td align = 'center'> $remitstatus </td></tr>";
    
    }
    ?>
</table>
</div>
</body>
</html>	