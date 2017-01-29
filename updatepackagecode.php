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
	background-color: white;
	background-repeat: no-repeat;
    background-attachment: fixed;
}
#panel2{
	position: absolute;
    top: 10px;
    left: 0px;
    background: #edeff1;
    width: 1358px;
    height: 510px;
    margin: 130px -10px 0;
    color: #fff;
    padding: 20px;
    box-sizing: border-box;
}
.fields{
	position:absolute;
	top:230px;
	left:40px;
}
.table1{
	position: absolute;
	top:150px;
	left:0px;
	width: 1347px;
	height: 400px;
	overflow-y: scroll;
}
table{
	border-collapse: collapse;
	background-color: lightgray;
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
	top: -40px;
	left: 10px;
}
.btnCancel{
	position: absolute;
	top: 580px;
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
<img src="Assets/indexlogo.png" width="180" height="180" />
</a>
</div>
<div class="btnCancel">
<form method="POST" action="loginadmincode.php">
<input type= "submit" value="Back" class="cancel">
</form>
</div>
<div class="viewinc">
	<strong><h1 style="font-size:25pt;">Package Delivery Transactions</h1></strong>
</div>
</body>
</html>