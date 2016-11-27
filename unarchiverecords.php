<?php 
$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
	$id = $_GET['id'];

	$result = mysql_query("Update tblstaff set Status = 'Active' where ID = '$id'");
	header('Location: updateuserform.php');
?>