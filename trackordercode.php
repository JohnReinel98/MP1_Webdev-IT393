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
	background-color: white;
	background-repeat: no-repeat;
    background-attachment: fixed;
}
.logo{
	position: absolute;
	top: -40px;
	left: 10px;
}
#panel1{
	position: absolute;
	background:lightgray;
	width: 1367px;
	height: 500px;
	float: center;
	margin: 140px -10px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.table1{
	position: absolute;
	top:250px;
	left:480px;
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
.btnBack{
	position: absolute;
	top: 400px;
	left: 500px;
}
.sub{
	background-color: #429bf4;
    border: none;
	border-color: darkgray;
    color: white;
    padding: 15px 30px;
	border-radius: 5px;
	width: 350px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
	cursor: pointer;
}
.sub:hover{
	background-color: darkgray;
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
<div id="panel1">
</div>
<div class="logo">
<a href="index.php">
<img src="Assets/indexlogo.png" width="180" height="180"/>
</a>
</div>
<div class = "table1">
	<table>
	<tr>
	<th> Date Dispatched </th>
	<th> Status </th>
	<th> Expected Delivery Date </th>
	
	<?php
	$tracksearch = $_POST['txtTrackOrder'];
	$sql = mysql_query("select * from tblpackage_delivery where TrackNo = '$tracksearch'",$conn);
	
	while($rows=mysql_fetch_array($sql)){
			$datedispatched = $rows['DateDelivered'];
			$status = $rows['DeliveryStatus'];
			$expected = $rows['DateReceived'];
	
	echo "<tr><td align = 'center'> $datedispatched </td>";
	echo "<td align = 'center'> $status </td>";
	echo "<td align = 'center'> $expected </td></tr>";

	}
	?>
</table>
</div>
<!--<a href="index.php" class= "backmain"> Back to Main </a>-->
<div class="btnBack">
<form method="POST" action="index.php">
<input type="submit" value="Back" class="sub" />
</div>
<div class="viewinc">
	<strong><h1 style="font-size:25pt;">Track Your Order</h1></strong>
</div>
</body>
</html>