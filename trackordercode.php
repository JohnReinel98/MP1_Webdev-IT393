<?php
$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
?>
<html>
<head>
<title> Track Order </title>
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
#panel1{
	position: absolute;
	background:rgba(128,128,128,1.0);
	width: 910px;
	height: 150px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 220px 250px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.table1{
	position: absolute;
	top:250px;
	left:280px;
}
table{
	border-collapse: collapse;
	background-color: gray;
	font-weight: bold;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 9px;
}

tr:nth-child(even){
	background-color: white;
}

th {
    background-color: gray;
    color: white;
}
.backmain{
	position: absolute;
	background-color: white;
    color: #429bf4;
    border: 2px solid #429bf4;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    top: 420px;
	left: 1050px;
}
a:hover{
	background-color: darkgray;
	color:white;
}
</style>
</head>
<body>
<div id="header">
</div>
<div id="panel1">
</div>
<div class="logo">
<a href="index.php">
<img src="Assets/indexlogo.png"/>
</a>
</div>
<div class = "table1">
	<table>
	<tr>
	<th> Track No </th>
	<th> Consignor </th>
	<th> Consignor No </th>
	<th> Consignee </th>
	<th> Consignee No </th>
	<th> Total Amount </th>
	<th> Branch </th>
	<th> Remit Status </th>
	
	<?php
	$tracksearch = $_POST['txtTrackOrder'];
	$sql = mysql_query("select * from tblmoney_remit where TrackNo = '$tracksearch'",$conn);
	while($rows=mysql_fetch_array($sql)){
			$track = $rows['TrackNo'];
			$consignor = $rows['Consignor'];
			$consignorno = $rows['ConsignorNo'];
			$consigneeno = $rows['ConsigneeNo'];
			$consignee = $rows['Consignee'];
			$totalamount = $rows['TotalAmount'];
			$branch = $rows['Branch'];
			$remitstatus = $rows['RemitStatus'];
	
	
	echo "<tr><td align = 'center'> $track </td>";
	echo "<td align = 'center'> $consignor </td>";
	echo "<td align = 'center'> $consignorno </td>";
	echo "<td align = 'center'> $consigneeno </td>";
	echo "<td align = 'center'> $consignee </td>";
	echo "<td align = 'center'> $totalamount </td>";
	echo "<td align = 'center'> $branch </td>";
	echo "<td align = 'center'> $remitstatus </td></tr>";
	
	}
	?>
</table>
</div>
<a href="index.php" class= "backmain"> Back to Main </a>
</body>
</html>