<?php
	$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
	session_start();
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
<title> View Income </title>
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

select{
    width: 10%;
    padding: 10px 10px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
}
.opt1{
	position: absolute;
	top: -200px;
	left: 80px;
	width: 70%;
}
.opt2{
	position: absolute;
	top: -200px;
	left: 200px;
	width: 70%;
}
.opt3{
	position: absolute;
	top: -100px;
	left: 80px;
	width: 70%;
}
.opt4{
	position: absolute;
	top: -100px;
	left: 200px;
	width: 70%;
}
.opt5{
	position: absolute;
	top: -100px;
	left: 320px;
	width: 70%;
}
.opt25{
	position: absolute;
	top: -200px;
	left: 320px;
	width: 70%;
}
.btnSub{
	position: absolute; 
	top: 500px;
	left: 880px;
}
.sub{
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
	top: 500px;
	left: 1050px;
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
.p1{
	position: absolute;
	top: 270px;
	left: 830px;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	font-weight: 300;
    color: white;
    font-size: 30px;
    line-height: 30px;
}
.p2{
	position: absolute;
	top: 370px;
	left: 840px;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	font-weight: 300;
    color: white;
    font-size: 30px;
    line-height: 30px;
}
.income{
	position: absolute;
	top: 240px;
	left: 60px;
}
#panel{
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
#panel2{
	position: absolute;
	background:#429bf4;
	width: 520px;
	height: 430px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 200px 800px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.viewinc{
	position: absolute;
	top: 24%;
	left: 5%;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	font-weight: 300;
    color: #429bf4;
    font-size: 30px;
    line-height: 30px;
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
</style>
</head>
<body>

<div id="panel">
</div>
<div id="panel1">
</div>
<div id="panel2">
</div>
<div class="income">
<img src="Assets/income.jpg" width="720" height="360" />
</div>
<div class="logo">
<a href="loginadmincode.php">
<img src="Assets/indexlogo.png" width="180" height="180" />
</a>
</div>
<div class="btnSub">
<form method ="POST" action="incomecomp.php">
<input type="submit" value ="Compute Income" class="sub">

    <select name="month" class="opt1">
	<option value="">Months</option><option value="1">January</option><option value="2">February</option>
	<option value="3">March</option><option value="4">April</option><option value="5">May</option>
    <option value="6">June</option><option value="7">July</option><option value="8">August</option>
	<option value="9">September</option><option value="10">October</option>	<option value="11">November</option>
	<option value="12">December</option>
	</select>
	<select name="day" class="opt2">
	<option value="">Days</option><option value="1">1</option><option value="2">2</option>
	<option value="3">3</option><option value="4">4</option><option value="5">5</option>
    <option value="6">6</option><option value="7">7</option><option value="8">8</option>
	<option value="9">9</option><option value="10">10</option>	<option value="11">11</option>
	<option value="12">12</option><option value="13">13</option><option value="14">14</option>
	<option value="15">15</option><option value="16">16</option><option value="17">17</option>
	<option value="18">18</option><option value="19">19</option><option value="20">20</option>
	<option value="21">21</option><option value="22">22</option><option value="23">23</option>
	<option value="24">24</option><option value="25">25</option><option value="26">26</option>
	<option value="27">27</option><option value="28">28</option><option value="29">29</option>
	<option value="30">30</option><option value="31">31</option>
	</select>
	<select name="year" class="opt25">
	<option value="">Years</option><option value="2016">2016</option><option value="2017">2017</option>
	<option value="2018">2018</option></select>

	<select name="month2" class="opt3"> 
	<option value="">Months</option><option value="1">January</option><option value="2">February</option>
	<option value="3">March</option><option value="4">April</option><option value="5">May</option>
    <option value="6">June</option><option value="7">July</option><option value="8">August</option>
	<option value="9">September</option><option value="10">October</option>	<option value="11">November</option>
	<option value="12">December</option>
	</select>
	<select name="day2" class="opt4">
	<option value="">Days</option><option value="1">1</option><option value="2">2</option>
	<option value="3">3</option><option value="4">4</option><option value="5">5</option>
    <option value="6">6</option><option value="7">7</option><option value="8">8</option>
	<option value="9">9</option><option value="10">10</option>	<option value="11">11</option>
	<option value="12">12</option><option value="13">13</option><option value="14">14</option>
	<option value="15">15</option><option value="16">16</option><option value="17">17</option>
	<option value="18">18</option><option value="19">19</option><option value="20">20</option>
	<option value="21">21</option><option value="22">22</option><option value="23">23</option>
	<option value="24">24</option><option value="25">25</option><option value="26">26</option>
	<option value="27">27</option><option value="28">28</option><option value="29">29</option>
	<option value="30">30</option><option value="31">31</option>
	</select>
	<select name="year2" class="opt5">
	<option value="">Years</option><option value="2016">2016</option><option value="2017">2017</option>
	<option value="2018">2018</option></select>
</form>
</div>

<div class="btnCancel">
<form method ="POST" action="loginadmincode.php">
<input type="submit" value ="Back" class="cancel">
</form>
</div>
<div class="p1">
<p> Starting </p>
</div>
<div class="p2">
<p> Ending </p>
</div>
<div class="viewinc">
	<strong><h1 style="font-size:25pt;">Calculate Income</h1></strong>
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