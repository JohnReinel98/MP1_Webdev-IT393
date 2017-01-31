<?php
$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
	session_start();

	$track = $_SESSION['POST']['txtTrack'];
	$expected = $_SESSION['date'];
	$_SESSION['recptsession'] = $track;
	unset($_SESSION['POST']);
	$result = mysql_query("select * from tblmoney_remit");
	while($rows = mysql_fetch_array($result)){
		$id = $rows['ID'];
		$trackno = $rows['TrackNo'];
	}
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
<title> Success! </title>
<style>
body{
	background-color: white;
	background-repeat: no-repeat;
    background-attachment: fixed;
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
#panel1{
	position:absolute;
	background:#429bf4;
	width: 500px;
	height: 390px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 190px 160px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.button {
	background-color: white;
    color: black;
    border: 2px solid #4CAF50;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left: 20px;
}
.p1{
	position: absolute;
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	color: white;
	font-size: 35px;
    top: 200px;
	left: 225px;
}
.trackno1{
	position: absolute;
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	color: white;
	font-size: 20px;
    top: 330px;
	left: 230px;
}
.trackno2{
	position: absolute;
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	color: white;
	font-size: 20px;
    top: 330px;
	left: 380px;
}
.deldate1{
	position: absolute;
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	color: white;
	font-size: 20px;
    top: 410px;
	left: 230px;
}
.deldate2{
	position: absolute;
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	color: white;
	font-size: 20px;
    top: 410px;
	left: 470px;
}
.btnBack{
	position: absolute;
	top: 509px;
	left: 450px;
}
.back{
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
.back:hover{
	background-color: white;
	color: black;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.btnPrint{
	position: absolute;
	top: 510px;
	left: 220px;
}
.recpt{
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
.recpt:hover{
	background-color: white;
	color: black;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
#panel2{
	position: absolute;
    top: 10px;
    left: 0px;
    background: #edeff1;
    width: 1358px;
    height: 520px;
    margin: 130px -10px 0;
    color: #fff;
    padding: 20px;
    box-sizing: border-box;
}
.viewinc{
	position: absolute;
	top: 20%;
	left: 20%;
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
.transacsuc{
	position: absolute;
	top: 200px;
	left: 850px;
}
</style>
</head>
<body>
<div id="header">
</div>
<div id="panel2">
</div>
<div class="logo">
<a href="loginstaffcode.php">
<img src="Assets/indexlogo.png" width="180" height="180"/>
</a>
</div>
<div id="panel1">
</div>
<div class="p1">
<p> Transaction Successful! </p>
</div>
<div class="trackno1">
<p> Your Track No. : </p>
</div>
<div class="trackno2">
<p> <?php echo"$track"?> </p>
</div>
<div class="deldate1">
<p> Expected Delivery Date: </p>
</div>
<div class="deldate2">
<p> <?php echo"$expected"?> </p>
</div>
<div class= "btnBack">
<form method="POST" action="loginstaffcode.php">
<input type= "submit" value="Back to Staff Panel" class="back">
</form>
</div>
<div class= "btnPrint">
<form method="POST" action="receiptremit.php" target="_blank">
<input type= "submit" value="Print Receipt" class="recpt">
</form>
</div>
<div class="viewinc">
	<strong><h1 style="font-size:25pt;">Transaction Status</h1></strong>
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
<div class="transacsuc">
<img src="Assets/transacsuc.png" width="360" height="360" />
</div>
</body>
</html>