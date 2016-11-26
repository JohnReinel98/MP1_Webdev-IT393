<html>
<head>
<title> Create Package Delivery </title>
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
	width: 450px;
	height: 610px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 200px 60px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
#panel1{
	position: absolute;
	background:rgba(128,128,128,1.0);
	width: 710px;
	height: 300px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 200px 550px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.fields{
	position:absolute;
	top:230px;
	left:100px;
}
.table1{
	position: absolute;
	top:240px;
	left:580px;
}
table{
	border-collapse: collapse;
	background-color: gray;
	font-weight: bold;
    width: 220%;
}
th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){
	background-color: white;
}

th {
    background-color: gray;
    color: white;
}
.logo{
	position: absolute;
	top: -45px;
	left: 10px;
}
.fields2{
	position:absolute;
	top:567px;
	left:300px;
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
</style>
</head>
<body>
<?php
	$trackid = uniqid();
?>
<div id="header">
</div>
<div id="panel">
</div>
<div id="panel1">
</div>
<div class = "fields">
<form name = "form" method = "post" action = "createpackagereceipt.php">
<tr>
<td><font face="Helvetica" color="white">Consignor:</font><br>
<td><input type = "text" name = "txtConsignor" id = "txtConsignor"><p>
<p><font face="Helvetica" color="white">Consignor Address:</font><br> 
<td><input type = "text" name = "txtConsignorHouse" id = "txtConsignorHouse" class="house">
<input type = "text" name = "txtConsignorStreet" id = "txtConsignorStreet" class="street">
<input type = "text" name = "txtConsignorBarangay" id = "txtConsignorBarangay" class="barangay">
<input type = "text" name = "txtConsignorCity" id = "txtConsignorCity" class="city">
<input type = "text" name = "txtConsignorProvince" id = "txtConsignorProvince" class="province"><p>
<p><font face="Helvetica" color="white">Consignor Email:</font><br> 
<td><input type = "text" name = "txtConsignorEmail" id = "txtConsignorEmail"><p>
<p><font face="Helvetica" color="white">Consignor Contact No.:</font><br> 
<td><input type = "text" name = "txtConsignorNo" id = "txtConsignorNo"><p>
<p><font face="Helvetica" color="white">Consignee:</font><br>
<td><input type = "text" name = "txtConsignee" id = "txtConsignee"><p>
<p><font face="Helvetica" color="white">Consignee Address:</font><br> 
<td><input type = "text" name = "txtConsigneeHouse" id = "txtConsigneeHouse" class="house">
<input type = "text" name = "txtConsigneeStreet" id = "txtConsignorStreet" class="street">
<input type = "text" name = "txtConsigneeBarangay" id = "txtConsigneeBarangay" class="barangay">
<input type = "text" name = "txtConsigneeCity" id = "txtConsigneeCity" class="city">
<input type = "text" name = "txtConsigneeProvince" id = "txtConsigneeProvince" class="province"><p>
<p><font face="Helvetica" color="white">Consignee Email:</font><br>
<td><input type = "text" name = "txtConsigneeEmail" id = "txtConsigneeEmail"><p>
<p><font face="Helvetica" color="white">Consignee Contact No.:</font><br>
<td><input type = "text" name = "txtConsigneeNo" id = "txtConsigneeNo"><p>
<p><font face="Helvetica" color="white">Branch:</font><br>
<td><select type = "choice" name = "txtBranch" id = "txtBranch"><p>
<option> NCR </option>
<option> N. LUZON </option>
<option> S. LUZON </option>
<option> VISAYAS </option>
<option> MINDANAO </option></select><p>
<p><font face="Helvetica" color="white">Size:</font><br>
<td><select type = "choice" name = "txtSize" id = "txtSize"><p>
<option> KB Small </option>
<option> KB Medium </option>
<option> KB Large </option>
<option> KB Extra Large </option></select><p>
<input type = "submit" value = "Submit Transaction">
<input type = "reset" value = "Reset"></tr>
</form>
</div>
<div class = "table1">
	<table>
	<tr>
	<th> Product </th>
	<th> KBs </th>
	<th> KBm </th>
	<th> KBl </th>
	<th> KBxl </th></tr>
	
	<tr><td align = "center"> Origin: NCR </td>
	<tr><td align = "center"> NCR </td>
	<td align = "center"> 200 </td>
	<td align = "center"> 325 </td>
	<td align = "center"> 600 </td>
	<td align = "center"> 1235 </td></tr>
	<tr><td align = "center"> N.LUZON </td>
	<td align = "center"> 255 </td>
	<td align = "center"> 400 </td>
	<td align = "center"> 800 </td>
	<td align = "center"> 1425 </td></tr>
	<tr><td align = "center"> S.LUZON </td>
	<td align = "center"> 255 </td>
	<td align = "center"> 400 </td>
	<td align = "center"> 800 </td>
	<td align = "center"> 1425 </td></tr>
	<tr><td align = "center"> VISAYAS </td>
	<td align = "center"> 265 </td>
	<td align = "center"> 435 </td>
	<td align = "center"> 870 </td>
	<td align = "center"> 1558 </td></tr>
	<tr><td align = "center"> MINDANAO </td>
	<td align = "center"> 265 </td>
	<td align = "center"> 435 </td>
	<td align = "center"> 870 </td>
	<td align = "center"> 1558 </td></tr>
	</table>
</div>
<div class="logo">
<img src="Assets/indexlogo.png"/>
</div>
</body>
</html>