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
	$consignoremail = $_POST['txtConsignorEmail'];
	$consignee = $_POST['txtConsignee'];
	$chouse = $_POST['txtConsigneeHouse'];
	$cstreet = $_POST['txtConsigneeStreet'];
	$cbarangay = $_POST['txtConsigneeBarangay'];
	$ccity = $_POST['txtConsigneeCity'];
	$cprovince = $_POST['txtConsigneeProvince'];
	$consigneeemail = $_POST['txtConsigneeEmail'];
	$consigneeno = $_POST['txtConsigneeNo'];
	$kilo = $_POST['txtSize'];
	$pay = $_POST['txtPayment'];
	$declaredval = $_POST['txtDeclaredValue'];
	$dispatched = $_POST['txtDispatched'];
	$expected = $_POST['txtExpected'];
	$branch = $_POST['txtBranch'];
	$delvstatus = 'Pending';
	$status = 'Active';
	$notiftod = 'false';
	$notiftmr = 'false';
	$insurance = $_POST['txtInsurance'];
	if($branch = "NCR"){
		$expected2="+1 days";
		
	}else{
		$expected2="+3 days";
	}
	
	$expected1 = date("Y-m-d", strtotime($expected2));
	$result = mysql_query("insert into tblpackage_delivery(TrackNo,Consignor,ConsignorNo,
							ConsignorHouseNo,ConsignorStreet,ConsignorBarangay,ConsignorCity,ConsignorProvince,ConsignorEmail,
							Consignee,ConsigneeNo,ConsigneeHouseNo,ConsigneeStreet,ConsigneeBarangay,ConsigneeCity,ConsigneeProvince,
							ConsigneeEmail,Size,Amount,DeclaredValue,Insurance,DateDelivered,DateReceived,NotifyToday,NotifyTmr,Status,DeliveryStatus,Branch)
							values('$trackid','$consignor','$consignorno','$house','$street','$barangay','$city','$province',
							'$consignoremail','$consignee','$consigneeno','$chouse','$cstreet','$cbarangay','$ccity','$cprovince','$consigneeemail',
							'$kilo','$pay','$declaredval','$insurance','$dispatched','$expected1','$notiftod','$notiftmr','$status','$delvstatus','$branch')");
	if($result){
		header('Location: successpackagedel_staff.php');
		$_SESSION['POST'] = $_POST;
        $_SESSION['date'] = $expected;
	}
	else{
		echo mysql_error();
		echo "Failed to add";
		echo "</br><a href='index.php' class='button' style='font-size:9pt;'>Main Menu</a>";
	}
?>