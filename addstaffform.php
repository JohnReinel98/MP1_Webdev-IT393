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
<title> Add Employee/Staff </title>

<link rel="stylesheet" href="jquery/validation/form.css" type="text/css" />
  
<script src="jquery/validation/jquery-1.3.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="jquery/validation/jquery-ui-1.7.3.custom.min.js"></script>
<script src="jquery/validation/jquery.validate.min.js" type="text/javascript" ></script>
<script type="text/javascript" src="jquery/validation/script.js"></script>
<style>
body{
	/*background-image:url("Assets/wallpaper1.png");*/
	background-color: white;
	background-repeat: no-repeat;
    background-attachment: fixed;
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
.menubar{
	position: absolute;
	top: 2px;
	left: 240px;
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

li a, .dropbtn_staff {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown_staff:hover .dropbtn_staff {
    background-color: rgba(128,128,128,0.9);
}

li.dropdown_staff {
    display: inline-block;
}

.dropdown-content_staff {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content_staff a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content_staff a:hover {background-color: rgba(128,128,128,0.5);}

.dropdown_staff:hover .dropdown-content_staff {
    display: block;
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
li a, .dropbtn_pdfs {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown_pdfs:hover .dropbtn_pdfs {
    background-color: rgba(128,128,128,0.9);
}

li.dropdown_pdfs {
    display: inline-block;
}

.dropdown-content_pdfs {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content_pdfs a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content_pdfs a:hover {background-color: rgba(128,128,128,0.5);}

.dropdown_pdfs:hover .dropdown-content_pdfs {
    display: block;
}
.login{
	position: absolute;
	top:250px;
	left:600px;
}
#panel{
	position: absolute;
	background:#429bf4;
	width: 400px;
	height: 700px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 190px 60px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
#panel1{
	position: absolute;
	background: #edeff1;
	width: 1350px;
	height: 780px;
	margin: 130px -10px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.mnyrem{
	position:absolute;
	top:60px;
	left:530px;
	color:white;
	height:40px;
	width:190px;
	background-color:#0099cc;
}
.pckg{
	position:absolute;
	top:60px;
	left:750px;
	color:white;
	height:40px;
	width:190px;
	background-color:#0099cc;
}
.logo{
	position: absolute;
	top: -40px;
	left: 10px;
}
.username{
	font-family: Verdana;
	height: 30px;
	border:2px solid #456879;
	border-radius:10px;
	box-shadow:2px 2px 2px #999999;
	border-color: darkgray;
	width: 230px;
}
.passw{
	font-family: Verdana;
	height: 30px;
	border:2px solid #456879;
	border-radius:10px;
	box-shadow:2px 2px 2px #999999;
	border-color: darkgray;
	width: 230px;
}
.usertxt{
	position: absolute;
	top: -10px;
	left: 65px;
}
.pwtxt{
	position: absolute;
	top: 60px;
	left: 65px;
}
.sub{
	position: absolute;
	top: 435px;
	left: -200px;
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
.sub:hover{
	background-color: white;
	color: black;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.btnCancel{
	position: absolute;
	top: 835px;
	left: 340px;
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
#fields{
	position:absolute;
	top:220px;
	left:100px;
	width: 700px;
}
.fields2{
	position: absolute;
	top: 400px;
	left: 300px;
}
input[type=text] {
    width: 230px;
    padding: 12px 15px;
    margin: 3.5px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    height: 30px;
    outline: none;
}
input[type=text]:focus {
    border: 3px solid #555;
}
input[type=password] {
    width: 230px;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    height: 30px;
    outline: none;
}
input[type=password]:focus {
    border: 3px solid #555;
}
.officestaffs{
	position: absolute;
	top: 200px;
	left: 470px;
}
.viewinc{
	position: absolute;
	top: 22%;
	left: 15%;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	font-weight: 300;
    color: #429bf4;
    font-size: 30px;
    line-height: 30px;
}

</style>
</head>
<body>
<div id="header">
</div>

<div id="panel1">
</div>

<div>
<div class="officestaffs">
<img src="Assets/officestaffs.jpg" width="820" height="530" />
</div>
<div class="logo">
<a href="loginadmincode.php">
<img src="Assets/indexlogo.png" width="180" height="180" />
</a>
</div>

<div id="panel">
</div>
<div class="btnCancel">
<form method="POST" action="loginadmincode.php">
<input type= "submit" value="Back" class="cancel">
</form>
</div>
<div id = "fields">
<form name = "form" method = "post" action = "addstaffcode.php">

<div>
<label style="color:white;font-family:verdana;" for="name">Last Name:</label>
<input type = "text" name = "txtLname" id = "txtLname" autocomplete="off">
</div>
<div>
<label style="color:white;font-family:verdana;" for="name">First Name:</label>
<input type = "text" name = "txtFname" id = "txtFname" autocomplete="off">
</div>
<div>
<label style="color:white;font-family:verdana;" for="name">Middle Initial:</label> 
<input type = "text" name = "txtMI" id = "txtMI" autocomplete="off">
</div>
<div>
<label style="color:white;font-family:verdana;" for="name">Contact:</label>
<input type = "text" name = "txtContact" id = "txtContact" autocomplete="off">
</div>
<div>
<label style="color:white;font-family:verdana;" for="name">Address:</label>
<input type = "text" name = "txtAddress" id = "txtAddress" autocomplete="off">
</div>
<div>
<label style="color:white;font-family:verdana;" for="name">Email:</label>
<input type = "text" name = "txtEmail" id = "txtEmail" autocomplete="off">
</div>
<div>
<label style="color:white;font-family:verdana;" for="name">Username:</label>
<input type = "text" name = "txtUsername" id = "txtUsername" autocomplete="off">
</div>
<div>
<label style="color:white;font-family:verdana;" for="name">Password:</label>
<input type = "password" name = "txtPassword" id = "txtPassword" autocomplete="off">
</div>
<div>
<label style="color:white;font-family:verdana;" for="name">Confirm Password:</label>
<input type = "password" name = "txtConfPassword" id = "txtConfPassword" autocomplete="off">
</div>
</div>
<div class="fields2">
<input type = "submit" value= "Submit" class= "sub">
</div>
</form>
<div class="viewinc">
	<strong><h1 style="font-size:25pt;">Add Staff</h1></strong>
</div>
<div class="menubar">
<ul>
  <li class="dropdown_staff">
  <a href="#" class="dropbtn_staff"><img src="Assets/staff.png" height="24" width="24" />&nbsp;&nbsp;Manage Staffs</a>
	<div class="dropdown-content_staff">
      <a href="addstaffform.php">Add Staff</a>
      <a href="updateuserform.php">Update Staff Informations</a>
      <a href="archivecodetablestaff.php">Archive/Unarchive Staffs</a>
    </div>
  </li>
  <li class="dropdown_remits">
  <a href="#" class="dropbtn_remits"><img src="Assets/moneyrem.png" height="24" width="24"/>&nbsp;&nbsp;Manage Remittances</a>
  	<div class="dropdown-content_remits">
      <a href="createremitform.php">Create Remittance</a>
      <a href="updatemoneyremitcode.php">Update Remittance Informations</a>
      <a href="archivecodetablemonrem.php">Archive/Unarchive Remittances</a>
    </div>
  </li>
  <li class="dropdown_packages">
  <a href="#" class="dropbtn_packages"><img src="Assets/package.png" height="24" width="24"/>&nbsp;&nbsp;Manage Packages</a>
  <div class="dropdown-content_packages">
      <a href="createpackageform.php">Create Package Delivery</a>
      <a href="updatepackagecode.php">Update Package Informations</a>
      <a href="archivecodetablepackage.php">Archive/Unarchive Packages</a>
    </div>
  </li>
  <li><a href="viewallratesadmin.php"><img src="Assets/rates.png" height="24" width="24"/>&nbsp;&nbsp;View Rates</a></li>
  <li class="dropdown_pdfs">
  <a href="#" class="dropbtn_pdfs"><img src="Assets/reports.png" height="24" width="24"/>&nbsp;&nbsp;View Reports</a>
  <div class="dropdown-content_pdfs">
      <a href="generatepdfremits.php" target="_blank">Pending Remittances</a>
      <a href="generatepdfpkg.php" target="_blank">Pending Packages</a>
      <a href="generatepdfdelivered.php" target="_blank">Delivered Packages</a>
      <a href="generatepdfreceivedremits.php" target="_blank">Received Remittances</a>
    </div>
  </li>
  <li><a href="incomeform.php"><img src="Assets/income.png" height="24" width="24"/>&nbsp;&nbsp;View Income</a></li>
  <li><a href="logoutsessioncode.php"><img src="Assets/logout.png" height="24" width="24"/>&nbsp;&nbsp;Logout</a></li>
</ul>
</div>
</body>
</html>