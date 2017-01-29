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
	background-color: white;
	background-repeat: no-repeat;
    background-attachment: fixed;
}
#panel{
    pposition: absolute;
    background: #edeff1;
    width: 1349px;
    height: 440px;
    float: center;
    margin: 130px -10px 0;
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
	top: -40px;
	left: 10px;
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
.table1{
    position: absolute;
    top:135px;
    left:0px;
    width: 1349px;
    height: 425px;
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
    padding: 5px;
}

tr:nth-child(even){
    background-color: white;
}

th {
    background-color: gray;
    color: white;
}
.line2{
  position: absolute;
  top: 11px;


  left: 180px;
  height: 110px;

    border-left: thin solid #C7D2D6;
}
#panel8{
  position: absolute;
  background:rgba(128,128,128,0.9);
  width: 1349px;
  height: 113px;
  float: left;
  margin: 1465px -8px 0;
  color: #fff;
  padding: 20px;
  box-sizing:border-box;
}
.p5{
  position: absolute;
  top: 620px;
  left: 550px;
  color: white;
  font-size: 14px;
  line-height: 20px;
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; 
}
.p6{
  position: absolute;
  top: 640px;
  left: 45px;
  color: white;
  font-size: 14px;
  line-height: 20px;
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; 
}
.p7{
  position: absolute;
  top: 610px;
  left: 45px;
  color: white;
  font-size: 14px;
  line-height: 20px;
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; 
}
.p8{
  position: absolute;
  top: 670px;
  left: 45px;
  color: white;
  font-size: 14px;
  line-height: 20px;
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; 
}
.p9{
  position: absolute;
  top: 620px;
  left: 1020px;
  color: white;
  font-size: 20px;
  line-height: 20px;
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; 
}
.panel2{
  position: absolute;
  background:rgba(128,128,128,0.9);
  width: 1349px;
  height: 113px;
  float: left;
  margin: 40px -8px 0;
  color: #fff;
  padding: 20px;
  box-sizing:border-box;
}
.img4{
  position: absolute;
  top: 620px;
  left: 14px;
}
.img5{
  position: absolute;
  top: 650px;
  left: 14px;
}
.img6{
  position: absolute;
  top: 680px;
  left: 14px;
}
.img7{
  position: absolute;
  top: -20px;
  left: 990px;
}
.img8{
  position: absolute;
  top: -10px;
  left: 1050px;
}
.line{
  position: absolute;
  top: -50px;
  left: 470px;
  height: 80px;
    border-left: thin solid #616464;
}
.line1{
  position: absolute;
  top: -50px;
  left: 980px;
  height: 80px;
    border-left: thin solid #616464;
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
<img src="Assets/indexlogo.png" width="180" height="180" />
</a>
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
<div class="line2">
&nbsp;
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

<div class="panel2">
</div>
<div class="p5">
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Converge Logistics™ <br>Money Remittance and Package Delivery<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Rights Reserved 2016 </p>
</div>
<div class="p6">
<p> Contact No.: <span style="color:#5DADE2;">+639354675163</span> </p>
</div>
<div class="p7">
<p> Email Address: <span style="color:#5DADE2;">convergelogistics2016@gmail.com</span> </p>
</div>
<div class="p8">
<p> Developer Address: Caniogan, City of Malolos, Bulacan </p>
</div>
<div class="p9">
<p> Follow Us: </p>
</div>
<div class="img4">
<img src="Assets/email.png" height="24" width="24" />
</div>
<div class="img5">
<img src="Assets/contact.png" height="24" width="24" />
</div>
<div class="img6">
<img src="Assets/address.png" height="24" width="24" />
<div class="img7">
<a href="https://www.facebook.com/johnreinel98" target="_blank">
<img src="Assets/fb.png" height="56" width="56" /></a>
</div>
<div class="img8">
<a href="https://twitter.com/Unt1tledDotA" target="_blank">
<img src="Assets/twitter.png" height="42" width="42" /></a>
</div>
<div class="line">
&nbsp;
</div>
<div class="line1">
&nbsp;
</div>
</body>
</html>	