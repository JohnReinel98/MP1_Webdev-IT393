<?php
	$conn = @mysql_connect("localhost","root", "");
	if(!$conn)
		die ("Cannot connect");
	mysql_select_db("dbmplogistics");
	
	$select = mysql_query("select * from tblpackage_delivery");
	while($rows = mysql_fetch_array($select)){
		
		$trackid = $rows['TrackNo'];
		$consignorno = $rows['ConsignorNo'];
		$consigneeno = $rows['ConsigneeNo'];
		$consigneeemail = $rows['ConsigneeEmail'];
		$notifyToday = $rows['NotifyToday'];
		$notifyTmr = $rows['NotifyTmr'];
		$dateDisp = $rows['DateDelivered'];
		$dateDel = $rows['DateReceived'];
		$status = $rows['DeliveryStatus'];
		
		//echo time()."<br>";
		//echo strtotime($dateDel)."<br>";
		//echo strtotime($dateDel. "-1 day")."<br>";
		
		if($status == "Pending"){
			if($notifyToday != "true"){
				if(strtotime($dateDel) <= time()){	
					$update = mysql_query("update tblpackage_delivery set NotifyToday = 'true' where TrackNo = $trackid");
					
					$username = 'convergelogistics2017a@gmail.com'; 
					$hash = 'Convergelogistics_10';

					$from = "Converge Logistics";
					$message = "You have expected door-to-door delivery today. In case you are not around, please leave an autorization letter and a valid ID. \nThank you for using Converge Logistics Center.";

					$sender = urlencode($from); 
					$message = rawurlencode($message);

					$numbers = $consigneeno;

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

					//echo $response;

					curl_close($ch);
		
				}
			}
			if($notifyTmr != "true"){
				if(time() >= strtotime($dateDel . "-1 day")){
					$update = mysql_query("update tblpackage_delivery set NotifyTmr = 'true' where TrackNo = $trackid");
					
					$username = 'convergelogistics2017a@gmail.com'; 
					$hash = 'Convergelogistics_10';

					$from = "Converge Logistics";
					$message = "Your package $trackid has been dispatched. Please check your email for expected delivery date.";

					$sender = urlencode($from); 
					$message = rawurlencode($message);

					$numbers = $consigneeno;

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

					//echo $response;

					curl_close($ch);
		
					require("PHPMailer\class.phpmailer.php");
					$mailer = new PHPMailer();
					$mailer->IsSMTP();
					$mailer->Host = 'ssl://smtp.gmail.com:465';
					$mailer->SMTPAuth = TRUE;
					$mailer->Username = 'convergelogistics2016@gmail.com';
					$mailer->Password = 'cyanomix10';
					$mailer->From = 'convergelogistics2016@gmail';
					$mailer->FromName = 'Converge Logistics Center';
					$mailer->Body = "Good day! Here are the details of the package $trackid.

Date Dispatched: '$dateDisp'
Status: '$status'
Expected Delivery Date: '$dateDel'";
					$mailer->Subject = 'Package Delivery';
					$mailer->AddAddress("$consigneeemail");
					if(!$mailer->Send())
					{
						echo "Message was not sent<br/ >";
						echo "Mailer Error: " . $mailer->ErrorInfo;
					}
					else
					{
						echo "Message has been sent";
					}
				}
			}
		}

	}
	
?>
