<?php
	$reg = 0;
	$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
	session_start();
	if(!$_SESSION){
	echo "<p class = 'err'>Need to Login!!</p> <a href='index.php'><b>Back</b></a>";
	}
	else{
	$username = $_SESSION['user'];
	$password = $_SESSION['password'];

	$result = mysql_query("select * from tblstaff where Username = '$username'", $conn);

		while($rows=mysql_fetch_array($result)){
				$id = $rows['ID'];
				$lname = $rows['Lname'];
				$name = $rows['Fname'];
				$mname = $rows['MI'];
				$user = $rows['Username'];
				$passw = $rows['Password'];
				$position = $rows['Position'];
				$status = $rows['Status'];
				$tries = $rows['Tries'];
				$blockstatus = $rows['BlockStatus'];
				$sql2="Update tblstaff set Tries = 0 where ID = '$id'";
				$result2=mysql_query($sql2);
			
				if($user==$username && $passw == $password){
					if($blockstatus!=='Blocked'){
							if($position == 'Admin'){
							header('Location: loginadmincode.php');
							$sql2="Update tblstaff set Tries = '0' where ID = '$id'";
							$result2=mysql_query($sql2);
							}
							else if($position == 'Employee'){
								header('Location: loginstaffcode.php');
							}
					}
					else if($blockstatus == 'Blocked'){						
						echo "<p class = 'err'>User is blocked!!</p>";
					}
				}
				else{
					if ($tries<2){
						$tries+=1;
						$sql2="UPDATE tblstaff set Tries = '$tries' where ID ='$id'";
						$result2=mysql_query($sql2);
						header('Location: loginform.php');
						echo mysql_error();
					}
					else if($tries==2){
						$sql2="Update tblstaff set BlockStatus = 'Blocked' where ID ='$id'";
						$result2=mysql_query($sql2);
						header('Location: index.php');
					}
				}
				$reg = 1;		
		}
		if(!$reg){
			header('Location: loginform.php');
		}
	}
?>

<html>
<head>
<title> Login Check </title>
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
.err{
	position: absolute;
	top: 300px;
	left: 550px;
	color: darkgray;
	font-family: Verdana;
	font-weight: bold;
}
.blocked{
	position: absolute;
	top: 300px;
	left: 550px;
	color: darkgray;
	font-family: Verdana;
	font-weight: bold;
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
</body>
</html>	