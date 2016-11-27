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
	$size = $_POST['txtSize'];
	$branch = $_POST['txtBranch'];
	
	$kilo = $_POST['txtkilo'];
	$size = $_POST['txtsize'];
	$branch = $_POST['txtBranch'];


if($branch == "NCR" and $size == "Small"){
	$value = "200";
	$value = $value * $kilo;
}
else if($branch == "NCR" and $size == "Medium"){
	$value = "200";
	$value = $value * $kilo;
}
else if($branch == "NCR" and $size == "Large"){
	$value = "600";
	$value = $value * $kilo;
}
else if($branch == "NCR" and $size == "ExtraLarge"){
	$value = "1235";
	$value = $value * $kilo;
}
else if($branch == "N.Luzon" and $size == "Small"){
	$value = "255";
	$value = $value * $kilo;
}
else if($branch == "N.Luzon" and $size == "Medium"){
	$value = "400";
	$value = $value * $kilo;
}
else if($branch == "S.Luzon" and $size == "Large"){
	$value = "800";
	$value = $value * $kilo;
}
else if($branch == "N.Luzon" and $size == "ExtraLarge"){
	$value = "1425";
	$value = $value * $kilo;
}
else if($branch == "S.Luzon" and $size == "Small"){
	$value = "255";
	$value = $value * $kilo;
}
else if($branch == "S.Luzon" and $size == "Medium"){
	$value = "400";
	$value = $value * $kilo;
}
else if($branch == "S.Luzon" and $size == "Large"){
	$value = "800";
	$value = $value * $kilo;
}
else if($branch == "S.Luzon" and $size == "ExtraLarge"){
	$value = "1425";
	$value = $value * $kilo;
}
else if($branch == "Visayas" and $size == "Small"){
	$value = "265";
	$value = $value * $kilo;
}
else if($branch == "Visayas" and $size == "Medium"){
	$value = "435";
	$value = $value * $kilo;
}
else if($branch == "Visayas" and $size == "Large"){
	$value = "870";
	$value = $value * $kilo;
}
else if($branch == "Visayas" and $size == "ExtraLarge"){
	$value = "1558";
	$value = $value * $kilo;
}
else if($branch == "Mindanao" and $size == "Small"){
	$value = "265";
	$value = $value * $kilo;
}
else if($branch == "Mindanao" and $size == "Medium"){
	$value = "435";
	$value = $value * $kilo;
}
else if($branch == "Mindanao" and $size == "Large"){
	$value = "870";
	$value = $value * $kilo;
}
else if($branch == "Mindanao" and $size == "ExtraLarge"){
	$value = "1558";
	$value = $value * $kilo;
}else{
	echo "enter amount";
}

$insurance = $value / 500 * 50;

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
<form name = "form" method = "post" action = "createpackagecode.php">
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
<p><font face="Helvetica" color="white">Amount:</font><br>
<td><input type = "text" value="<?php echo "$amount"?>" name = "txtAmount" id = "txtAmount" readonly><p>
<p><font face="Helvetica" color="white">Size:</font><br>
<td><input type = "text" value="<?php echo "$fee"?>" name = "txtFee" id = "txtFee" readonly><p>
<p><font face="Helvetica" color="white">Branch:</font><br>
<td><input type = "text" value="<?php echo "$branch"?>" name = "txtBranch" id = "txtBranch" readonly><p>
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