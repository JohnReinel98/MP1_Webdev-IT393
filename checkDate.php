<link rel="stylesheet" href="jquery/growl/jquery-ui-1.8.16.custom.css" type="text/css" />
<link rel="stylesheet" href="jquery/growl/checkDate.css" type="text/css" />

<script src="jquery/growl/jquery-1.3.2.min.js" type="text/javascript" ></script>
<script type="text/javascript" src="jquery/growl/jquery-ui-1.7.3.custom.min.js"></script>
<script type="text/javascript" src="jquery/growl/checkDate.js"></script>
<?php
	$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot connect");
	mysql_select_db("dbmplogistics");
	
	// include_once 'checkDate.php';
	$result = mysql_query("select * from tblpackage_delivery");
	while($rows = mysql_fetch_array($result)){
		$ID = $rows['ID'];
		$datedis = $rows['DateDelivered'];
		$datedel = $rows['DateReceived'];
		$status = $rows['DeliveryStatus'];
		$TrackNo = $rows['TrackNo'];
		$consigneeno = $rows['ConsigneeNo'];
		$consigneeEmail = $rows['ConsigneeEmail'];
		$notifiedtom = $rows['NotifyTmr'];
		$notifiedtod = $rows['NotifyToday'];
		
		$check = strtotime($datedel . "-1 days");
		$check2 = strtotime($datedel);
		//echo "<p>$check $check2";
		if($status=="Pending"){
			if($notifiedtod =="false"){
			if(strtotime($datedel) <= time()){
				//echo " $ID should be deliver ";
				
				// require_once("PHPMailer\class.phpmailer.php");
				// $mailer = new PHPMailer();
				// $mailer->IsSMTP();
				// $mailer->Host = 'ssl://smtp.gmail.com:465';
				// $mailer->SMTPAuth = TRUE;
				// $mailer->Username = 'estzwei@gmail.com';  
				// $mailer->Password = '09166060891';  
				// $mailer->From = 'skyrafer@gmail.com';  
				// $mailer->FromName = 'skyrafer@gmail.com'; 
				
				// $mailer->Body = 'Good day! Here are the details of the package '."\r\n". 'Tracking No: '.$TrackNo."\r\n".
								// 'Date Dispatched: '.$datedis."\r\n".
								// 'Status: '.$status."\r\n".
								// 'Expected Date of Delivery: '.$datedel;
								
				// $mailer->Subject = 'Skyrafer Notification';
				// $mailer->AddAddress($consigneeEmail);
				
				// if(!$mailer->Send())
				// {
				   // echo "Message not sent<br/ >";
				   // echo "Mailer Error: " . $mailer->ErrorInfo;
				// }
				// else{
					$sql2="UPDATE tblpackage_delivery set NotifyToday = 'true' where ID = $ID";
					$result2=mysql_query($sql2);
				// }
				// $username = 'tracerdiabolic@gmail.com';
				// $hash = 'Tracer01';

				// $from = 'Skyrafers';
				// $message = 'Your '. $TrackNo . ' has been dispatched. Please check your email for expected delivery and the delivery date.';
				// $sender = urlencode($from); 
				// $message = rawurlencode($message);

				
				// $data=array('username'=> $username, 'hash'=> $hash, 'numbers' => $consigneeno, "sender"=>$sender,"message"=>$message);

				// $ch = curl_init('http://api.txtlocal.com/send/'); 
				// curl_setopt($ch, CURLOPT_POST, true);
				// curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
				// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				// $response = curl_exec($ch); 

				// if($response) 
			// echo "Message Sent!"."<br>";
		// else 
			// echo "Failed to send...";

		// echo $response; 


				// curl_close($ch);
				?>
					<div id="receiving"></div>
				<?php
			}
			}
			if($notifiedtom =="false"){
				if(time() >= strtotime($datedel . "-1 day")){
				//echo " $ID should be deliver tommorow ";
				// require_once("PHPMailer\class.phpmailer.php");
				// $mailer = new PHPMailer();
				// $mailer->IsSMTP();
				// $mailer->Host = 'ssl://smtp.gmail.com:465';
				// $mailer->SMTPAuth = TRUE;
				// $mailer->Username = 'estzwei@gmail.com';  
				// $mailer->Password = '09166060891';  
				// $mailer->From = 'skyrafer@gmail.com';  
				// $mailer->FromName = 'skyrafer@gmail.com'; 
				
				// $mailer->Body = 'Good day! Here are the details of the package '."\r\n". 'Tracking No: '.$TrackNo."\r\n".
								// 'Date Dispatched: '.$datedis."\r\n".
								// 'Status: '.$status."\r\n".
								// 'Expected Date of Delivery: '.$datedel;
								
				// $mailer->Subject = 'Skyrafer Notification';
				// $mailer->AddAddress($consigneeEmail);
				// if(!$mailer->Send())
				// {
				   // echo "Message not sent<br/ >";
				   // echo "Mailer Error: " . $mailer->ErrorInfo;
				// }
				// else{
					$sql2="UPDATE tblpackage_delivery set NotifyTmr = 'true' where ID = $ID";
					$result2=mysql_query($sql2);
				// }
				// $username = 'tracerdiabolic@gmail.com';
				// $hash = 'Tracer01';

				// $from = 'Skyrafers';
				// $message = 'You have an expected door to door delivery today. In case you are not around please leave an authorize letter and a valid ID. Thank you for using Skyrafer service.';
				// $sender = urlencode($from); 
				// $message = rawurlencode($message);

				
				// $data=array('username'=> $username, 'hash'=> $hash, 'numbers' => $consigneeno, "sender"=>$sender,"message"=>$message);

				// $ch = curl_init('http://api.txtlocal.com/send/'); 
				// curl_setopt($ch, CURLOPT_POST, true);
				// curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
				// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				// $response = curl_exec($ch); 

				// if($response) 
			//echo "Message Sent!"."<br>";
		//else 
			//echo "Failed to send...";

		//echo $response; 

					

				// curl_close($ch);
				?>
					<div id="sending"></div>
				<?php
			}
			}
		}
	}

		

?> 