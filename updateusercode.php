<html>
<head>
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
.logo{
	position: absolute;
	top: -45px;
	left: 10px;
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
a:hover{
	background-color: green;
	color: white;
}
</style>
</head>
<body>
<div id="header">
</div>
<div class="logo">
<a href="loginadmincode.php">
<img src="Assets/indexlogo.png"/>
</a>
</div>
</body>
</html>
<?php
$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
	$id = $_POST['txtID'];
	$lname = $_POST['txtLname'];
	$name = $_POST['txtFname'];
	$mname = $_POST['txtMname'];
	$contact = $_POST['txtContactNo'];
	$address = $_POST['txtAddress'];
	$email = $_POST['txtEmail'];
	$username = $_POST['txtUsername'];
	$passw = md5($_POST['txtPassword']);
	$status = $_POST['txtStatus'];

	$result = mysql_query("update tblstaff set Lname = '$lname',FName = '$name',MI='$mname', ContactNo = '$contact'
	,Address = '$address', Email = '$email', Username = '$username', Password = '$passw', Status = '$status' where ID = '$id'");
	if($result){
		echo "Successfully Updated!";
		echo "</br><a href='index.php' style='font-size:9pt;'>Main Menu</a>";
		echo "</br><a href='viewall.php' class='button' style='font-size:9pt;'>View Records</a>";
		
	}
	else{
		echo mysql_error();
		echo "Failed to add";
		echo "</br><a href='index.php' class='button' style='font-size:9pt;'>Main Menu</a>";
	}
?>