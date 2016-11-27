<?php
	$trackid =rand(12345678,999999999);
	$consignor = $_POST['txtConsignor'];
	$house = $_POST['txtConsignorHouse'];
	$street = $_POST['txtConsignorStreet'];
	$barangay = $_POST['txtConsignorBarangay'];
	$city = $_POST['txtConsignorCity'];
	$province = $_POST['txtConsignorProvince'];
	$consignoremail = $_POST['txtConsignorEmail'];
	$consignorno = $_POST['txtConsignorNo'];
	$chouse = $_POST['txtConsigneeHouse'];
	$cstreet = $_POST['txtConsigneeStreet'];
	$cbarangay = $_POST['txtConsigneeBarangay'];
	$ccity = $_POST['txtConsigneeCity'];
	$cprovince = $_POST['txtConsigneeProvince'];
	$consignee = $_POST['txtConsignee'];
	$consigneemail = $_POST['txtConsigneeEmail'];
	$consigneeno = $_POST['txtConsigneeNo'];
	$kilo = $_POST['txtKilo'];
	$branch = $_POST['txtBranch'];
	$date=getdate();
	$today = "$date[year]-$date[mon]-$date[mday]";
	$day = "$date[mday]";
switch($kilo){
		case "KB Small":
			if($branch == "NCR"){
				$amount=200;
				$add = $day+1;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "N. LUZON"){
				$amount=255;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "S. LUZON"){
				$amount=255;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "VISAYAS"){
				$amount=265;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "MINDANAO"){
				$amount=265;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			break;
		case "KB Medium":
			if($branch == "NCR"){
				$amount=325;
				$add = $day+1;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "N. LUZON"){
				$amount=400;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "S. LUZON"){
				$amount=400;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "VISAYAS"){
				$amount=435;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "MINDANAO"){
				$amount=435;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			break;
		case "KB Large":
			if($branch == "NCR"){
				$amount=600;
				$add = $day+1;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "N. LUZON"){
				$amount=800;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "S. LUZON"){
				$amount=800;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "VISAYAS"){
				$amount=870;$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "MINDANAO"){
				$amount=870;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			break;
		case "KB Extra Large":
			if($branch == "NCR"){
				$amount=1235;
				$add = $day+1;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "N. LUZON"){
				$amount=1425;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "S. LUZON"){
				$amount=1425;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "VISAYAS"){
				$amount=1558;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "MINDANAO"){
				$amount=1558;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			break;
	}
	$insurance = $amount /500*50;
	

?>



<html>
<head>
<title> Package Receipt </title>
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
	width: 780px;
	height: 540px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 190px 270px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.fields{
	position:absolute;
	top:210px;
	left:320px;
}
.fields2{
	position: absolute;
	top: -10px;
	left: 480px;
}
.logo{
	position: absolute;
	top: -45px;
	left: 10px;
}
.house{
	width: 60px;
}
.street{
	width: 70px;
}
.barangay{
	width: 80px;
}
.city{
	width: 80px;
}
.province{
	width: 90px;
}
.chouse{
	width: 60px;
}
.cstreet{
	width: 70px;
}
.cbarangay{
	width: 80px;
}
.ccity{
	width: 80px;
}
.cprovince{
	width: 90px;
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
<form name = "form" method = "POST" action = "createpackagecode.php">
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
<p><font face="Helvetica" color="white">Consignor Email:</font><br> 
<td><input type = "text" value="<?php echo "$consignoremail"?>" name = "txtConsignorEmail" id = "txtConsignorEmail" readonly><p>
<p><font face="Helvetica" color="white">Consignor Contact No.:</font><br> 
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
<p><font face="Helvetica" color="white">Consignee Contact No.:</font><br>
<td><input type = "text" value="<?php echo "$consigneeno"?>" name = "txtConsigneeNo" id = "txtConsigneeNo" readonly><p>
<div class="fields2">
<p><font face="Helvetica" color="white">Size:</font><br>
<td><input type = "text" value="<?php echo "$kilo"?>" name = "txtSize" id = "txtSize" readonly><p>
<p><font face="Helvetica" color="white">Payment:</font><br>
<td><input type = "text" value="<?php echo "$amount"?>" name = "txtPayment" id = "txtPayment" readonly><p>
<p><font face="Helvetica" color="white">Insurance:</font><br>
<td><input type = "text" value="<?php echo "$insurance"?>" name = "txtInsurance" id = "txtInsurance" readonly><p>
<p><font face="Helvetica" color="white">Date Dispatched:</font><br>
<td><input type = "text" value="<?php echo "$today"?>" name = "txtDispatched" id = "txtDispatched" readonly><p>
<p><font face="Helvetica" color="white">Expected Delivery Date:</font><br>
<td><input type = "text" value="<?php echo "$delivered"?>" name = "txtExpected" id = "txtExpected" readonly><p>
<p><font face="Helvetica" color="white">Branch:</font><br>
<td><input type = "text" value="<?php echo "$branch"?>" name = "txtBranch" id = "txtBranch" readonly><p>
</div>
<input type = "submit" value = "Submit Transaction">
</form>
</div>
<div class="logo">
<a href="index.php">
<img src="Assets/indexlogo.png"/>
</a>
</div>
</body>
</html>