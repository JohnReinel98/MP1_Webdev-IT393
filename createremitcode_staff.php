<html>
<head>
<style>
body{
	background-image:url("Assets/wallpaper1.png");
	background-repeat: no-repeat;
    background-attachment: fixed;
}
#header{
	position: absolute;
	background:rgba(128,128,128,0.5);
	width: 1360px;
	height: 180px;
	border-radius: 0 0 15px 15px;
	float: left;
	margin: -5px -5px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.logo{
	position: absolute;
	top: -45px;
	left: 10px;
}
.button {
	background-color: white;
    color: black;
    border: 2px solid #4CAF50;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left: 20px;
}
a:hover{
	background-color: green;
	color: white;
}
</style>
</head>
<body>
<div id="header">
</div>
<div class="logo">
<a href="loginstaffcode.php">
<img src="Assets/indexlogo.png"/>
</a>
</div>
</body>
</html>
<?php
session_start();
$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
	$trackid = $_POST['txtTrack'];
	$consignor = $_POST['txtConsignor'];
	$house = $_POST['txtConsignorHouse'];
	$street = $_POST['txtConsignorStreet'];
	$barangay = $_POST['txtConsignorBarangay'];
	$city = $_POST['txtConsignorCity'];
	$province = $_POST['txtConsignorProvince'];
	$consignorno = $_POST['txtConsignorNo'];
	$consignee = $_POST['txtConsignee'];
	$chouse = $_POST['txtConsigneeHouse'];
	$cstreet = $_POST['txtConsigneeStreet'];
	$cbarangay = $_POST['txtConsigneeBarangay'];
	$ccity = $_POST['txtConsigneeCity'];
	$cprovince = $_POST['txtConsigneeProvince'];
	$consigneeemail = $_POST['txtConsigneeEmail'];
	$consigneeno = $_POST['txtConsigneeNo'];
	$amount = $_POST['txtAmount'];
	$fee = $_POST['txtFee'];
	$totalamount = $_POST['txtTotalAmount'];
	$branch = $_POST['txtBranch'];
	$date = getdate();
	$dateremitted = "$date[year]-$date[mon]-$date[mday]";
	$day = "$date[mday]";
	$addday = $day +2;
	$datereceived = "$date[year]-$date[mon]-$addday";
	$remitstatus = $_POST['txtStatus'];
	if($branch = "NCR"){
		$expected="+1 days";
		
	}else{
		$expected="+3 days";
	}
	
	$expected1 = date("Y-m-d", strtotime($expected));
	$result = mysql_query("insert into tblmoney_remit(TrackNo,Consignor,ConsignorNo,
							ConsignorHouseNo,ConsignorStreet,ConsignorBarangay,ConsignorCity,ConsignorProvince,
							ConsigneeNo,Consignee,ConsigneeHouseNo,ConsigneeStreet,ConsigneeBarangay,ConsigneeCity,ConsigneeProvince,
							ConsigneeEmail,Amount,Fee,TotalAmount,DateRemitted,DateDelivered,Branch,Status,RemitStatus)
							values('$trackid','$consignor','$consignorno','$house','$street','$barangay','$city','$province','$consigneeno',
							'$consignee','$chouse','$cstreet','$cbarangay','$ccity','$cprovince','$consigneeemail',
							'$amount','$fee','$totalamount','$dateremitted','$expected1','$branch','Active','$remitstatus')");
	if($result){
		$username = 'convergelogistics2017a@gmail.com'; 
		$hash = 'Convergelogistics_10';

		$from = "Converge Logistics";
		$message = "You have money remittance ready to be picked up. Check your email for more details about the tracking no. and the pick-up branch. \nDo not reply, This is a computer-generated message.";
		$aftermessage = "You have an expected door-to-door delivery today. In case you are not around, please leave an authorization letter and a valid ID. Thank you for using Converge Logistics.";

		$sender = urlencode($from); 
		$message = rawurlencode($message);

		$numbers = $_POST['txtConsigneeNo'];

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

		echo $response;

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
		$mailer->Body = "Good day! Here are the details of the money remittance.

Tracking No: '$trackid'
Amount: '$amount'
Pick-up Branch: '$branch'
Consignor Information: '$consignor'";
		$mailer->Subject = 'Money Remittance';
		$mailer->AddAddress("$consigneeemail");
		if(!$mailer->Send())
		{
			echo "Message was not sent<br/ >";
			echo "Mailer Error: " . $mailer->ErrorInfo;
		}
		else
		{
			
        	$_SESSION['POST'] = $_POST;
        	$_SESSION['date'] = $expected1;
			echo "Message has been sent";
			header('Location: successmoneyremit_staff.php');
		}
	}
	else{
		echo mysql_error();
	}
?>