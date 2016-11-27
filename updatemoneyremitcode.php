<?php
$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
?>
<html>
<head>
<title> Update Money Remit Information </title>
<style>
body{
	background-image:url("Assets/wallpaper1.png");
	background-repeat: no-repeat;
    background-attachment: fixed;
}
#header{
	position: absolute;
	background:rgba(128,128,128,0.5);
	width: 1590px;
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
	width: 230px;
	height: 610px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 200px 10px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
#panel1{
	position: absolute;
	background:rgba(128,128,128,1.0);
	width: 1350px;
	height: 520px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 200px 240px 0;
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
	top:240px;
	left:260px;
}
table{
	border-collapse: collapse;
	background-color: gray;
	font-weight: bold;
    width:100%;
}
th, td {
    text-align: left;
    padding: 4px;
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
</style>
</head>
<body>
<div id="header">
</div>
<div id="panel">
</div>
<div id="panel1">
</div>
<div class = "table1">
	<table>
	<tr>
	<th> ID </th>
	<th> Track No </th>
	<th> Consignor </th>
	<th> Consignor No </th>
	<th> Consignee </th>
	<th> Consignee Email </th>
	<th> Consignee No </th>
	<th> Amount </th>
	<th> Fee </th>
	<th> Total </th>
	<th> Date Remitted </th>
	<th> Date Delivered </th>
	<th> Branch </th>
	<th> Status </th>
	<th> Archive </th>
	<th> Remit Status </th></tr>

	<?php
	$sql = mysql_query("select * from tblmoney_remit where Status = 'Active'");
	while( $rows=mysql_fetch_array($sql)){
			$id = $rows['ID'];
			$trackid = $rows['TrackNo'];
			$consignor = $rows['Consignor'];
			$consignorno = $rows['ConsignorNo'];
			$consigneeno = $rows['ConsigneeNo'];	
			$consignee = $rows['Consignee'];
			$consigneeemail = $rows['ConsigneeEmail'];
			$amount = $rows['Amount'];
			$fee = $rows['Fee'];
			$total = $rows['TotalAmount'];
			$daterem = $rows['DateRemitted'];
			$datedel = $rows['DateDelivered'];
			$branch = $rows['Branch'];
			$status = $rows['Status'];
			$remitstatus = $rows['RemitStatus'];
	
	
	echo "<tr><td align = 'center'> $id </td>";
	echo "<td align = 'center'> $trackid </td>";
	echo "<td align = 'center'> $consignor </td>";
	echo "<td align = 'center'> $consignorno</td>";
	echo "<td align = 'center'> $consignee </td>";
	echo "<td align = 'center'> $consigneeemail </td>";
	echo "<td align = 'center'> $consigneeno </td>";
	echo "<td align = 'center'> $amount </td>";
	echo "<td align = 'center'> $fee </td>";
	echo "<td align = 'center'> $total </td>";
	echo "<td align = 'center'> $daterem </td>";
	echo "<td align = 'center'> $datedel </td>";
	echo "<td align = 'center'> $branch </td>";
	echo "<td align = 'center'> $status </td>";
	echo "<td align = 'center'> <a href= 'archiverecords.php?id=$id'> Archive </a> </td>";	
	echo "<td align = 'center'> $remitstatus </td>";
	
	}
	?>
</table>
</div>
<div class="logo">
<a href="index.php">
<img src="Assets/indexlogo.png"/>
</a>
</div>
</body>
</html>