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
	width: 430px;
	height: 150px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 220px 450px 0;
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
.backmain:hover{
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
<a href="index.php" class= "backmain"> Back to Main </a>
</body>
</html>