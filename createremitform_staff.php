<html>
<head>
<title> Create Remittance </title>
<style>
body{
	background-color: white;
	background-repeat: no-repeat;
    background-attachment: fixed;
}
#panel{
	position: absolute;
	background:#429bf4;
	width: 530px;
	height: 740px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 200px 50px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
#panel1{
	position: absolute;
	background:lightgray;
	width: 680px;
	height: 380px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 200px 580px 0;
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
	top:220px;
	left:610px;
}
table{
	border-collapse: collapse;
	background-color: lightgray;
	font-weight: bold;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){
	background-color: white;
}

th {
    background-color: lightgray;
    color: white;
}
.logo{
	position: absolute;
	top: -40px;
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
.btnCancel{
	position: absolute;
	top: 894px;
	left: 460px;
}
.cancel{
	background-color: darkgray;
    border: none;
	border-color: darkgray;
    color: white;
    padding: 15px 30px;
	border-radius: 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
	cursor: pointer;
}
.cancel:hover{
	background-color: white;
	color: black;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.create{
	background-color: darkgray;
    border: none;
	border-color: darkgray;
    color: white;
    padding: 15px 30px;
	border-radius: 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
	cursor: pointer;
}
.create:hover{
	background-color: white;
	color: black;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.reset{
	background-color: darkgray;
    border: none;
	border-color: darkgray;
    color: white;
    padding: 15px 30px;
	border-radius: 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
	cursor: pointer;
}
.reset:hover{
	background-color: white;
	color: black;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
input[type=text] {
    width: 25%;
    padding: 12px 10px;
    margin: 2px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    height: 30px;
    outline: none;
}
input[type=text]:focus {
    border: 3px solid #555;
}
input[type=password] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    height: 30px;
    outline: none;
}
input[type=password]:focus {
    border: 3px solid #555;
}
.panel3{
	position: absolute;
    top: 10px;
    left: 0px;
    background: #edeff1;
    width: 1358px;
    height: 850px;
    margin: 130px -10px 0;
    color: #fff;
    padding: 20px;
    box-sizing: border-box;
}
.viewinc{
	position: absolute;
	top: 3%;
	left: 15%;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	font-weight: 300;
    color: #429bf4;
    font-size: 30px;
    line-height: 30px;
}
</style>
</head>
<?php 
	$trackid = uniqid();
?>
<body>
<div id="header">
</div>
<div class="panel3">
</div>
<div id="panel">
</div>
<div id="panel1">
</div>
<div id="panel2">
</div>
<div class = "fields">
<form name = "form" method = "post" action = "createremitreceipt_staff.php">
<tr>
<td><font face="Helvetica" color="white">Consignor:</font><br>
<td><input type = "text" name = "txtConsignor" id = "txtConsignor"><p>
<p><font face="Helvetica" color="white">Consignee Address:</font><br>
<input type = "text" name = "txtConsignorHouse" id = "txtConsignorHouse" placeholder=" House" class="house">
<input type = "text" name = "txtConsignorStreet" id = "txtConsignorStreet" placeholder=" Street" class="street">
<input type = "text" name = "txtConsignorBarangay" id = "txtConsignorBarangay" placeholder=" Barangay" class="barangay"><br>
<input type = "text" name = "txtConsignorCity" id = "txtConsignorCity" placeholder=" City" class="city">
<input type = "text" name = "txtConsignorProvince" id = "txtConsignorProvince" placeholder=" Province" class="province"><p>
<p><font face="Helvetica" color="white">Consignor Contact Number:</font><br> 
<td><input type = "text" name = "txtConsignorNo" id = "txtConsignorNo"><p>
<p><font face="Helvetica" color="white">Consignee:</font><br>
<td><input type = "text" name = "txtConsignee" id = "txtConsignee"><p>
<p><font face="Helvetica" color="white">Consignee Address:</font><br>
<input type = "text" name = "txtConsigneeHouse" id = "txtConsigneeHouse" placeholder=" House" class="house">
<input type = "text" name = "txtConsigneeStreet" id = "txtConsigneeStreet" placeholder=" Street" class="street">
<input type = "text" name = "txtConsigneeBarangay" id = "txtConsigneeBarangay" placeholder=" Barangay" class="barangay"><br>
<input type = "text" name = "txtConsigneeCity" id = "txtConsigneeCity" placeholder=" City" class="city">
<input type = "text" name = "txtConsigneeProvince" id = "txtConsigneeProvince" placeholder=" Province" class="province"><p>
<p><font face="Helvetica" color="white">Consignee Email:</font><br>
<td><input type = "text" name = "txtConsigneeEmail" id = "txtConsigneeEmail"><p>
<p><font face="Helvetica" color="white">Consignee Contact Number:</font><br>
<td><input type = "text" name = "txtConsigneeNo" id = "txtConsigneeNo"><p>
<p><font face="Helvetica" color="white">Amount:</font><br>
<td><input type = "text" name = "txtAmount" id = "txtAmount"><p>
<p><font face="Helvetica" color="white">Branch:</font><br>
<td><select type = "choice" name = "txtBranch" id = "txtBranch"><p>
<option> NCR </option>
<option> N. LUZON </option>
<option> S. LUZON </option>
<option> VISAYAS </option>
<option> MINDANAO </option></select><p>
<input type = "submit" value = "Submit Transaction" class="create">
<input type = "reset" value = "Clear All Fields" class="reset">
</form>
</div>
<input type="hidden" name="trackid" value="<?php echo "$trackid" ?>">
<div class = "table1">
	<table>
	<tr>
	<th> Principal Amount </th>
	<th> Money Remittance Fee </th>
	<th> Principal Amount </th>
	<th> Money Remittance Fee </th></tr>
	
	<tr><td align = "center"> 100 </td>
	<td align = "center"> Php 6.00 </td>
	<td align = "center"> 801 - 900 </td>
	<td rowspan = '2' align = "center"> Php 50.00 </td></tr>
	<tr><td align = "center"> 101 - 200 </td>
	<td align = "center"> Php 15.00 </td>
	<td align = "center"> 901 - 1,000 </td></tr>
	<tr><td align = "center"> 201 - 300 </td>
	<td align = "center"> Php 20.00 </td>
	<td align = "center"> 1,001 - 1,500 </td>
	<td align = "center"> Php 75.00 </td></tr>
	<tr><td align = "center"> 301 - 400 </td>
	<td align = "center"> Php 25.00 </td>
	<td align = "center"> 1,501 - 2,000 </td>
	<td align = "center"> Php 100.00 </td></tr>
	<tr><td align = "center"> 401 - 500 </td>
	<td align = "center"> Php 30.00 </td>
	<td align = "center"> 2,001 - 2,500 </td>
	<td align = "center"> Php 100.00 </td></tr>
	<tr><td align = "center"> 501 - 600 </td>
	<td align = "center"> Php 35.00 </td>
	<td align = "center"> 2,501 - 3,000 </td>
	<td align = "center"> Php 150.00 </td></tr>
	<tr><td align = "center"> 601 - 700 </td>
	<td align = "center"> Php 40.00 </td>
	<td align = "center"> 3,001 - 4,000 </td>
	<td align = "center"> Php 180.00 </td></tr>
	<tr><td align = "center"> 701 - 800 </td>
	<td align = "center"> Php 45.00 </td>
	<td align = "center"> 4,001 - 5,000 </td>
	<td align = "center"> Php 220.00 </td></tr>
	</table>
</div>
<div class="logo">
<a href="loginstaffcode.php">
<img src="Assets/indexlogo.png" width="180" height="180"/>
</a>
</div>
<div class="btnCancel">
<form method="POST" action="loginstaffcode.php">
<input type= "submit" value="Back" class="cancel">
</form>
</div>
<div class="viewinc">
	<strong><h1 style="font-size:25pt;">Create Money Remittance</h1></strong>
</div>
</body>
</html>