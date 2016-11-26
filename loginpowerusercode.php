<?php
	$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
	
	$username = $_POST['txtUsername'];
	$password = $_POST['txtPassword'];
	$result = mysql_query("select * from tblstaff where Username = '$username' AND Position= 'Admin'", $conn);

		while($rows=mysql_fetch_array($result)){
				$id = $rows['ID'];
				$lname = $rows['Lname'];
				$name = $rows['Fname'];
				$mname = $rows['MI'];
				$user = $rows['Username'];
				$passw = $rows['Password'];
				$status = $rows['Status'];
				$tries = $rows['Tries'];
				
			if($user==$username){
			
				if($passw == $password){
							header('Location: loginadmincode.php');
				}
			}
		}
?>