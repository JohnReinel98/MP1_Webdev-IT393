<?php
$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
	$lname = $_POST['txtLname'];
	$fname = $_POST['txtFname'];
	$mi = $_POST['txtMI'];
	$contact = $_POST['txtContact'];
	$address = $_POST['txtAddress'];
	$email = $_POST['txtEmail'];
	$username = $_POST['txtUsername'];
	$password = md5($_POST['txtPassword']);
	$position = 'Employee';
	$status = 'Active';
	$tries =  '0';
	$blockstatus = 'Unblocked';

	$result = mysql_query("insert into tblstaff(Lname,Fname,MI,
							ContactNo,Address,Email,Username,Password,Position,Status,Tries,BlockStatus)
							values('$lname','$fname','$mi','$contact','$address','$email','$username',
							'$password','$position','$status','$tries','$blockstatus')");
							
	if($result){
		echo "Success";
	}
	else{
		echo mysql_error();
	}
?>
<html>
<head>
<style>
</style>
</head>
<body>
</body>
</html>