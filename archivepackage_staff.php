<?php 
$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
	$id = $_GET['id'];

	$result = mysql_query("Update tblpackage_delivery set Status = 'Inactive' where ID = '$id'");
	header('Location: updatepackagecode_staff.php');
?>