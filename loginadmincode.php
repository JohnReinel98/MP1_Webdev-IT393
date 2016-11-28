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
<title> Admin Panel </title>
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
	top: 20px;
	left: 790px;
	border: none;
	background: darkgray;
	font-size: 25px;
	color: white;
	font-family:Verdana, Geneva, sans-serif;
	cursor:pointer;
}
.btnCr8Pack:hover{
	color: black;
}
.btnCr8Remit{
	position: absolute;
	top: 20px;
	left: 1020px;
	border: none;
	background: darkgray;
	font-size: 25px;
	color: white;
	font-family:Verdana, Geneva, sans-serif;
	cursor:pointer;
}
.btnCr8Remit:hover{
	color: black;
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
.btnLogout{
	position: absolute;
	top: 20px;
	left: 1250px;
	border: none;
	background: darkgray;
	font-size: 25px;
	color: white;
	font-family:Verdana, Geneva, sans-serif;
	cursor:pointer;
}
.btnLogout:hover{
	color: black;
}
.btnCr8Staff{
	position: absolute;
	top: 20px;
	left: 650px;
	border: none;
	background: darkgray;
	font-size: 25px;
	color: white;
	font-family:Verdana, Geneva, sans-serif;
	cursor:pointer;
}
.btnCr8Staff:hover{
	color: black;
}
.btnUpd8Staff{
	position: absolute;
	top: 20px;
	left: 470px;
	border: none;
	background: darkgray;
	font-size: 25px;
	color: white;
	font-family:Verdana, Geneva, sans-serif;
	cursor:pointer;
}
.btnUpd8Staff:hover{
	color: black;
}
.btnArchStaff{
	position: absolute;
	top: 20px;
	left: 260px;
	border: none;
	background: darkgray;
	font-size: 25px;
	color: white;
	font-family:Verdana, Geneva, sans-serif;
	cursor:pointer;
}
.btnArchStaff:hover{
	color: black;
}
.btnArchMon{
	position: absolute;
	top: 70px;
	left: 260px;
	border: none;
	background: darkgray;
	font-size: 25px;
	color: white;
	font-family:Verdana, Geneva, sans-serif;
	cursor:pointer;
}
.btnArchMon:hover{
	color: black;
}
.btnArchPckg{
	position: absolute;
	top: 70px;
	left: 550px;
	border: none;
	background: darkgray;
	font-size: 25px;
	color: white;
	font-family:Verdana, Geneva, sans-serif;
	cursor:pointer;
}
.btnArchPckg:hover{
	color: black;
}
.tblArchMon{
	position: absolute;
	top: 70px;
	left: 770px;
	border: none;
	background: darkgray;
	font-size: 25px;
	color: white;
	font-family:Verdana, Geneva, sans-serif;
	cursor:pointer;
}
.tblArchMon:hover{
	color: black;
}
.tblArchPckg{
	position: absolute;
	top: 70px;
	left: 1080px;
	border: none;
	background: darkgray;
	font-size: 25px;
	color: white;
	font-family:Verdana, Geneva, sans-serif;
	cursor:pointer;
}
.tblArchPckg:hover{
	color: black;
}
.table1{
	position: absolute;
	top:240px;
	left:0px;
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
.tblArchMon{
	position: absolute;
	top: 70px;
	left: 770px;
	border: none;
	background: darkgray;
	font-size: 25px;
	color: white;
	font-family:Verdana, Geneva, sans-serif;
	cursor:pointer;
}
.tblArchMon:hover{
	color: black;
}
.tblArchPckg{
	position: absolute;
	top: 70px;
	left: 1080px;
	border: none;
	background: darkgray;
	font-size: 25px;
	color: white;
	font-family:Verdana, Geneva, sans-serif;
	cursor:pointer;
}
.tblArchPckg:hover{
	color: black;
}
.tblArchMon{
	position: absolute;
	top: 70px;
	left: 770px;
	border: none;
	background: darkgray;
	font-size: 25px;
	color: white;
	font-family:Verdana, Geneva, sans-serif;
	cursor:pointer;
}
.tblArchMon:hover{
	color: black;
}
.pdf1{
	position: absolute;
	top: 110px;
	left: 270px;
	border: none;
	background: darkgray;
	font-size: 25px;
	color: white;
	font-family:Verdana, Geneva, sans-serif;
	cursor:pointer;
}
.pdf1:hover{
	color: black;
}
.pdf2{
	position: absolute;
	top: 110px;
	left: 590px;
	border: darkgray;
	border-radius: 15px, 15px, 15px, 15px;
	background: darkgray;
	font-size: 25px;
	color: white;
	font-family:Verdana, Geneva, sans-serif;
	cursor:pointer;
}
.pdf2:hover{
	color: black;
}
.pdf3{
	position: absolute;
	top: 110px;
	left: 910px;
	border: none;
	background: darkgray;
	font-size: 25px;
	color: white;
	font-family:Verdana, Geneva, sans-serif;
	cursor:pointer;
}
.pdf3:hover{
	color: black;
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
<div id="panel3">
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
<form method="POST" action="addstaffform.php">
	<input type="submit" value="Add Staff" class="btnCr8Staff">
</form>
<form method="POST" action="updateuserform.php">
	<input type="submit" value="Update Staff" class="btnUpd8Staff">
</form>
<form method="POST" action="archivecodetablestaff.php">
	<input type="submit" value="Archived Staffs" class="btnArchStaff">
</form>
<form method="POST" action="updatemoneyremitcode.php">
	<input type="submit" value="Update Money Remits" class="btnArchMon">
</form>
<form method="POST" action="updatepackagecode.php">
	<input type="submit" value="Update Package" class="btnArchPckg">
</form>
<form method="POST" action="archivecodetablemonrem.php">
	<input type="submit" value="Archived Money Remits" class="tblArchMon">
</form>
<form method="POST" action="archivecodetablepackage.php">
	<input type="submit" value="Archived Packages" class="tblArchPckg">
</form>
<form method="POST" action="generatepdfremits.php">
	<input type="submit" value="PDF Money Remittances" class="pdf1">
</form>
<form method="POST" action="generatepdfdelivered.php">
	<input type="submit" value="PDF Delivered Packages" class="pdf2">
</form>
<form method="POST" action="generatepdfreceivedremits.php">
	<input type="submit" value="PDF Received Money Remittances" class="pdf3">
</form>
<div class = "table1">
	<table>
	<tr>
	<th> ID </th>
	<th> Last Name </th>
	<th> First Name </th>
	<th> Middle Initial </th>
	<th> Contact No </th>
	<th> Address </th>
	<th> Email </th>
	<th> Username </th>
	<th> Password </th>
	<th> Status </th>
	<th> Block Status </th></tr>

	<?php
	$sql = mysql_query("select * from tblstaff where Status = 'Active'");
	while( $rows=mysql_fetch_array($sql)){
			$id = $rows['ID'];
			$lname = $rows['Lname'];
			$name = $rows['Fname'];
			$mname = $rows['MI'];
			$contact = $rows['ContactNo'];
			$address = $rows['Address'];
			$email = $rows['Email'];
			$username = $rows['Username'];
			$passw = $rows['Password'];
			$status = $rows['Status'];
			$blockstatus = $rows['BlockStatus'];
	
	echo "<tr><td align = 'center'> $id </td>";
	echo "<td align = 'center'> $lname </td>";
	echo "<td align = 'center'> $name </td>";
	echo "<td align = 'center'> $mname </td>";
	echo "<td align = 'center'> $contact </td>";
	echo "<td align = 'center'> $address </td>";
	echo "<td align = 'center'> $email </td>";
	echo "<td align = 'center'> $username </td>";
	echo "<td align = 'center'> $passw </td>";
	echo "<td align = 'center'> $status </td>";
	echo "<td align = 'center'> $blockstatus </td></tr>";
	}
	?>
</table>
</div>
</body>
</html>	