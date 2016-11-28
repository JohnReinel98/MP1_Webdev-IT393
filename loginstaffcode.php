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
<title> Employee Panel </title>
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

.btnCr8Pack{
	position: absolute;
	top: 60px;
	left: 645px;
	border: none;
	background: transparent;
	font-size: 25px;
	color: white;
	font-family:Verdana, Geneva, sans-serif;
	cursor:pointer;
}
.btnCr8Pack:hover{
	color: darkgray;
}
.btnCr8Remit{
	position: absolute;
	top: 60px;
	left: 905px;
	border: none;
	background: transparent;
	font-size: 25px;
	color: white;
	font-family:Verdana, Geneva, sans-serif;
	cursor:pointer;
}
.btnCr8Remit:hover{
	color: darkgray;
}
.logo{
	position: absolute;
	top: -45px;
	left: 10px;
}
.welcome{
	position: absolute;
	top: 140px;
	left: 1030px;
	font-size: 14px;
	font-family: Verdana;
	font-weight: bold;
	color: white;
}
.btnLogout{
	position: absolute;
	top: 60px;
	left: 1200px;
	border: none;
	background: transparent;
	font-size: 25px;
	color: white;
	font-family:Verdana, Geneva, sans-serif;
	cursor:pointer;
}
.btnLogout:hover{
	color: darkgray;
}
#panel{
	position: absolute;
	background:#429bf4;
	opacity: 0.8;
	width: 180px;
	height: 80px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 30px 1150px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
#panel1{
	position: absolute;
	background:#429bf4;
	opacity: 0.8;
	width: 240px;
	height: 80px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 30px 890px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
#panel2{
	position: absolute;
	background:#429bf4;
	opacity: 0.8;
	width: 240px;
	height: 80px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 30px 630px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.table1{
	position: absolute;
	top:240px;
	left:25px;
}
table{
	border-collapse: collapse;
	background-color: gray;
	font-weight: bold;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 9px;
}

tr:nth-child(even){
	background-color: white;
}

th {
    background-color: gray;
    color: white;
}
.m{
	position: absolute;
	top: 20px;
	left: 200px;
}
.welcome{
	position: absolute;
	top: 130px;
	left: 1100px;
}
.hrf{
	position: absolute;
	top: 155px;
	left: 500px;
}
a{
	color: white;
}
a:hover{
	color: darkgray;
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
<div id="panel2">
</div>
<div class="logo">
<a href="index.php">
<img src="Assets/indexlogo.png"/>
</a>
</div>
<form method="POST" action="logoutsessioncode.php">
	<input type="submit" value="Logout" class="btnLogout">
</form>
<form method="POST" action="createremitform.php">
	<input type="submit" value="Send Remittance" class="btnCr8Remit">
</form>
<form method="POST" action="createpackageform.php">
	<input type="submit" value="Package Delivery" class="btnCr8Pack">
</form>
<div class="hrf">
<a href="updatemoneyremitcode.php" style="text-decoration:none;"> Update Money Remit </a> |
<a href="updatepackagecode.php" style="text-decoration:none;"> Update Package </a> |
<a href="archivecodetablemonrem.php" style="text-decoration:none;"> Archived Money Remit </a> |
<a href="archivecodetablepackage.php" style="text-decoration:none;"> Archived Package </a> |
</div>

</body>
</html>