<?php 
$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
	$id = $_GET['id'];
	$numbers = $_GET['consignorno'];
	$consignee = $_GET['consignee'];

	$result = mysql_query("Update tblpackage_delivery set DeliveryStatus = 'Delivered', Status = 'Inactive' where ID = '$id'");
	
	header('Location: updatepackagecode.php');
?>