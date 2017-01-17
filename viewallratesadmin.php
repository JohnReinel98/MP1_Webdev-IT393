<html>
<head>
<title> View All Remittance Rates </title>
<style>
body{
	background-image:url("Assets/wallpaper1.png");
	background-repeat: no-repeat;
    background-attachment: fixed;
}
#header{
	position: absolute;
	background:rgba(128,128,128,0.5);
	width: 1340px;
	height: 180px;
	border-radius: 0 0 15px 15px;
	float: left;
	margin: -5px -5px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
#panel1{
	position: absolute;
	background:rgba(128,128,128,1.0);
	width: 1320px;
	height: 685px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 215px 10px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.logo{
	position: absolute;
	top: -45px;
	left: 10px;
}
.table1{
	position: absolute;
	top:290px;
	left:40px;
}
.table2{
	position: absolute;
	top:650px;
	left:40px;
}
table{
	border-collapse: collapse;
	background-color: gray;
	font-weight: bold;
    width: 205%;
}
th, td {
    text-align: left;
    padding: 7px;
}

tr:nth-child(even){
	background-color: white;
}

th {
    background-color: gray;
    color: white;
}
.btnBack{
	position: absolute;
	top: 845px;
	left: 1225px;
}
.back{
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
.back:hover{
	background-color: white;
	color: black;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.remitrates{
	position: absolute;
	top: 210px;
	left: 50px;
	font-size: 25px;
	font-family: Verdana;
	font-weight: bold;
	color:white;
}
.packagerates{
	position: absolute;
	top: 570px;
	left: 50px;
	font-size: 25px;
	font-family: Verdana;
	font-weight: bold;
	color:white;
}
</style>
<body>
<div id="header">
</div>
<div class="logo">
<a href="index.php">
<img src="Assets/indexlogo.png"/>
</a>
</div>
<div id="panel1">
</div>
<div id="panel2">
</div>
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
<div class = "table2">
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
<div class="btnBack">
<form method="POST" action="loginadmincode.php">
<input type= "submit" value="Back" class="back">
</form>
</div>
<p class="remitrates"> Remittance Rates </p>
<p class="packagerates"> Package Rates </p>
</body>
</html>	