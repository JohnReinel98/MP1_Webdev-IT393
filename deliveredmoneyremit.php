<?php 
$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
	$id = $_GET['id'];
	$numbers = $_GET['consignorno'];
	$consignee = $_GET['consignee'];
	
	$result = mysql_query("Update tblmoney_remit set RemitStatus = 'Delivered' , Status = 'Inactive' where ID = '$id'");
	$username = 'convergelogistics2017a@gmail.com'; 
		$hash = 'Convergelogistics_10';

		$from = "Converge Logistics";
		$message = "$consignee has received and picked up your money remittance. \nThank you for using Converge Logistics Center money remittance.";

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
	header('Location: updatemoneyremitcode.php');
?>