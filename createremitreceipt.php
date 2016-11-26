<?php
	$trackid =rand(12345678,99999999);
	$consignor = $_POST['txtConsignor'];
	$house = $_POST['txtConsignorHouse'];
	$street = $_POST['txtConsignorStreet'];
	$barangay = $_POST['txtConsignorBarangay'];
	$city = $_POST['txtConsignorCity'];
	$province = $_POST['txtConsignorProvince'];
	$consignorno = $_POST['txtConsignorNo'];
	$chouse = $_POST['txtConsigneeHouse'];
	$cstreet = $_POST['txtConsigneeStreet'];
	$cbarangay = $_POST['txtConsigneeBarangay'];
	$ccity = $_POST['txtConsigneeCity'];
	$cprovince = $_POST['txtConsigneeProvince'];
	$consignee = $_POST['txtConsignee'];
	$consigneemail = $_POST['txtConsigneeEmail'];
	$consigneeno = $_POST['txtConsigneeNo'];	
	$amount = $_POST['txtAmount'];
	$branch = $_POST['txtBranch'];
	$remitstatus = $_POST['txtStatus'];
	
	if($amount ==100)
		$fee = 6;
	else if($amount >=101 and $amount<=200)
		$fee = 15;
	else if($amount>=201 and $amount<=300)
		$fee = 20;
	else if($amount>=301 and $amount<=400)
		$fee = 25;
	else if($amount>=401 and $amount<=500)
		$fee = 30;
	else if($amount>=501 and $amount<=600)
		$fee = 35;
	else if($amount>=601 and $amount<=700)
		$fee = 40;
	else if($amount>=701 and $amount<=800)
		$fee = 45;
	else if($amount>=801 and $amount<=1000)
		$fee = 50;
	else if($amount>=1001 and $amount<=1500)
		$fee = 75;
	else if($amount>=1501 and $amount<=2000)
		$fee = 100;
	else if($amount>=2001 and $amount<=2500)
		$fee = 125;
	else if($amount>=2501 and $amount<=3000)
		$fee = 150;
	else if($amount>=3001 and $amount<=4000)
		$fee = 180;
	else if($amount>=4001 and $amount<=5000)
		$fee = 220;
	else
		echo "Enter amount higher than 100";
?>

<?php
	$totalamount = $fee + $amount;
?>

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
#panel{
	position: absolute;
	background:#429bf4;
	width: 300px;
	height: 500px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 190px 520px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.fields{
	position:absolute;
	top:210px;
	left:570px;
}
.logo{
	position: absolute;
	top: -45px;
	left: 10px;
}
</style>
</head>
<body>
<div id="header">
</div>
<div id="panel">
</div>
<div id="panel1">
</div>
<div class = "fields">
<form name = "form" method = "post" action = "createremitcode.php">
<tr>
<td><font face="Helvetica" color="white">Track No: </font><br>
<td><input type = "text" value="<?php echo "$trackid"?>" name="txtTrack" id="txtTrack" readonly><p>
<td><font face="Helvetica" color="white">Consignor:</font><br>
<td><input type = "text" value="<?php echo "$consignor"?>" name = "txtConsignor" id = "txtConsignor" readonly><p>
<p><font face="Helvetica" color="white">Consignor Address:</font><br> 
<td><input type = "text" value="<?php echo "$house" ?>" name = "txtConsignorHouse" id = "txtConsignorHouse" class="house">
<input type = "text" value="<?php echo "$street" ?>" name = "txtConsignorStreet" id = "txtConsignorStreet" class="street">
<input type = "text" value="<?php echo "$barangay" ?>" name = "txtConsignorBarangay" id = "txtConsignorBarangay" class="barangay">
<input type = "text" value="<?php echo "$city" ?>" name = "txtConsignorCity" id = "txtConsignorCity" class="city">
<input type = "text" value="<?php echo "$province" ?>" name = "txtConsignorProvince" id = "txtConsignorProvince" class="province"><p>
<p><font face="Helvetica" color="white">Consignor Contact Number:</font><br> 
<td><input type = "text" value="<?php echo "$consignorno"?>" name = "txtConsignorNo" id = "txtConsignorNo" readonly><p>
<p><font face="Helvetica" color="white">Consignee:</font><br>
<td><input type = "text" value="<?php echo "$consignee"?>" name = "txtConsignee" id = "txtConsignee" readonly><p>
<p><font face="Helvetica" color="white">Consignor Address:</font><br> 
<td><input type = "text" value="<?php echo "$chouse" ?>" name = "txtConsigneeHouse" id = "txtConsigneeHouse" class="chouse">
<input type = "text" value="<?php echo "$cstreet" ?>" name = "txtConsigneeStreet" id = "txtConsigneeStreet" class="cstreet">
<input type = "text" value="<?php echo "$cbarangay" ?>" name = "txtConsigneeBarangay" id = "txtConsigneeBarangay" class="cbarangay">
<input type = "text" value="<?php echo "$ccity" ?>" name = "txtConsigneeCity" id = "txtConsigneeCity" class="ccity">
<input type = "text" value="<?php echo "$cprovince" ?>" name = "txtConsigneeProvince" id = "txtConsigneeProvince" class="cprovince"><p>
<p><font face="Helvetica" color="white">Consignee Email:</font><br>
<td><input type = "text" value="<?php echo "$consigneemail"?>" name = "txtConsigneeEmail" id = "txtConsigneeEmail" readonly><p>
<p><font face="Helvetica" color="white">Consignee Contact Number:</font><br>
<td><input type = "text" value="<?php echo "$consigneeno"?>" name = "txtConsigneeNo" id = "txtConsigneeNo" readonly><p>
<p><font face="Helvetica" color="white">Amount:</font><br>
<td><input type = "text" value="<?php echo "$amount"?>" name = "txtAmount" id = "txtAmount" readonly><p>
<p><font face="Helvetica" color="white">Fee:</font><br>
<td><input type = "text" value="<?php echo "$fee"?>" name = "txtFee" id = "txtFee" readonly><p>
<p><font face="Helvetica" color="white">Total Amount:</font><br>
<td><input type = "text" value="<?php echo "$totalamount"?>" name = "txtTotalAmount" id = "txtTotalAmount" readonly><p>
<p><font face="Helvetica" color="white">Branch:</font><br>
<td><input type = "text" value="<?php echo "$branch"?>" name = "txtBranch" id = "txtBranch" readonly><p>
<p><font face="Helvetica" color="white">Status:</font><br>
<td><input type = "text" value="<?php echo "$remitstatus"?>" name = "txtStatus" id = "txtStatus" readonly><p>
<input type = "submit" value = "Submit Transaction">
</form>
</div>
<div class="logo">
<img src="Assets/indexlogo.png"/>
</div>
</body>
</html>