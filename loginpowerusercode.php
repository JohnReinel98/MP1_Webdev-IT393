<?php
	$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
	
	$username = $_POST['txtUsername'];
	$password = $_POST['txtPassword'];
	$result = mysql_query("select * from tblstaff where Username = '$username'", $conn);

		while($rows=mysql_fetch_array($result)){
				$id = $rows['ID'];
				$lname = $rows['Lname'];
				$name = $rows['Fname'];
				$mname = $rows['MI'];
				$user = $rows['Username'];
				$passw = $rows['Password'];
				$status = $rows['Status'];
				$tries = $rows['Tries'];
				
			if($username=='admin123' && $password=='cyanomix10'){
					header('Location: updateuserform.php');
			}
			else{
				header('Location: loginpoweruser.php');
			}
		}
?>