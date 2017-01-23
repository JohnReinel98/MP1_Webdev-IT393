<?php 
$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
	$id = $_GET['id'];
	$trackid = $_GET['trackid'];
	$numbers = $_GET['consignorno'];
	$consignee = $_GET['consignee'];

	$result = mysql_query("Update tblpackage_delivery set DeliveryStatus = 'Delivered', Status = 'Inactive' where ID = '$id'");
	$username = 'convergelogistics2017a@gmail.com'; 
		$hash = 'Convergelogistics_10';

		$from = "Converge Logistics";
		$message = "Your package $trackid has been received by $consignee. \nThank you for using Converge Logistics Center.";

		$sender = urlencode($from); 
		$message = rawurlencode($message);

		

		$data=array('username'=> $username, 'hash'=> $hash, 'numbers' => $numbers, "sender"=>$sender,"message"=>$message);

		$ch = curl_init('http://api.txtlocal.com/send/'); 
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);

		if($response)
			echo "Message Sent!"."<br>";
		else 
			echo "Failed to send...";


		curl_close($ch);
	header('Location: updatepackagecode.php');
?>