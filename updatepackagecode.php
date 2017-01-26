<?php
$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
?>
<html>
<head>
<title> Update Package Information </title>
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
#panel2{
    position: absolute;
    background: #429bf4;
    width: 1330px;
    height: 530px;
    border-radius: 15px 15px 15px 15px;
    float: center;
    margin: 190px 6px 0;
    color: #fff;
    padding: 20px;
    box-sizing: border-box;
}
#panel1{
	position: absolute;
	background:rgba(128,128,128,1.0);
	width: 1300px;
	height: 500px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 200px 20px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.fields{
	position:absolute;
	top:230px;
	left:40px;
}
.table1{
	position: absolute;
	top:210px;
	left:35px;
	width: 1280px;
	height: 400px;
	overflow-y: scroll;
}
table{
	border-collapse: collapse;
	background-color: gray;
	font-weight: bold;
    width:100%;
}
th, td {
    text-align: left;
    padding: 2px;
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
.btnCancel{
	position: absolute;
	top: 645px;
	left: 1230px;
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
</style>
</head>
<body>
<div id="header">
</div>
<div id="panel">
</div>
<div id="panel2">
</div>
<div id="panel1">
</div>
<div class = "table1">
	<table>
	<tr>
	<th> Date Dispatched </th>
	<th> Expected Delivey Date </th>
	<th> Track No </th>
	<th> Consignor </th>
	<th> Consignor No </th>
	<th> Consignee </th>
	<th> Consignee No </th>
	<th> Size </th>
	<th> Amount </th>
	<th> Insurance </th>
	<th> Branch </th>
	<th> Status </th>
	<th> Archive </th>
	<th> Delivey Status </th>
	<th> Delivered </th></tr>
	
	<?php
	$sql = mysql_query("select * from tblpackage_delivery where Status = 'Active'");
	while( $rows=mysql_fetch_array($sql)){
			$id = $rows['ID'];
			$trackid = $rows['TrackNo'];
			$consignor = $rows['Consignor'];
			$consignorno = $rows['ConsignorNo'];			
			$consignee = $rows['Consignee'];
			$consigneeno = $rows['ConsigneeNo'];
			$size = $rows['Size'];
			$amount = $rows['Amount'];
			$insurance = $rows['Insurance'];
			$datedis = $rows['DateDelivered'];
			$dateexp = $rows['DateReceived'];
			$status = $rows['Status'];
			$deliverystatus = $rows['DeliveryStatus'];
			$branch = $rows['Branch'];

	echo "<tr><td align = 'center'> $datedis </td>";
	echo "<td align = 'center'> $dateexp </td>";
	echo "<td align = 'center'> $trackid </td>";
	echo "<td align = 'center'> $consignor </td>";
	echo "<td align = 'center'> $consignorno</td>";
	echo "<td align = 'center'> $consignee </td>";
	echo "<td align = 'center'> $consigneeno </td>";
	echo "<td align = 'center'> $size </td>";
	echo "<td align = 'center'> $amount </td>";
	echo "<td align = 'center'> $insurance </td>";
	echo "<td align = 'center'> $branch </td>";
	echo "<td align = 'center'> $status </td>";
	echo "<td align = 'center'> <a href= 'archivepackage.php?id=$id'> Archive </a> </td>";
	echo "<td align = 'center'> $deliverystatus </td>";
	echo "<td align = 'center'> <a href= 'deliveredpackage.php?id=$id&trackid=$trackid&consignorno=$consignorno&consignee=$consignee'> Delivered </a> </td></tr>";
	
	}
	?>
</table>
</div>
<div class="logo">
<a href="loginadmincode.php">
<img src="Assets/indexlogo.png"/>
</a>
</div>
<div class="btnCancel">
<form method="POST" action="loginadmincode.php">
<input type= "submit" value="Back" class="cancel">
</form>
</div>
</body>
</html>