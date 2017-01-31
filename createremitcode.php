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
<a href="loginadmincode.php">
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
		$_SESSION['POST'] = $_POST;
        $_SESSION['date'] = $expected1;
		header('Location: successmoneyremit.php');
	}
	else{
		echo mysql_error();
	}
?>