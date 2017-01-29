<?php
	$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
?>
<html>
<head>
<title> Archived Money Remit Records </title>
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
#panel{
    position: absolute;
    background: #edeff1;
    width: 1350px;
    height: 530px;
    float: center;
    margin: 135px -10px 0;
    color: #fff;
    padding: 20px;
    box-sizing: border-box;
}
.table1{
	position: absolute;
	top:150px;
	left:5px;
	height: 360px; 
	width: 1342px;
	overflow-y: scroll;
}
table{
	border-collapse: collapse;
	background-color: lightgray;
	font-weight: bold;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 5px;
}

tr:nth-child(even){
	background-color: white;
}

th {
    background-color: gray;
    color: white;
}
.btnCancel{
	position: absolute;
	top: 600px;
	left: 1220px;
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
<div class="logo">
<a href="loginstaffcode.php">
<img src="Assets/indexlogo.png" width="180" height="180"/>
</a>
</div>
<div class = "table1">
	<table>
	<tr>
	<th> Date Remitted </th>
	<th> Date Delivered </th>
	<th> Track No </th>
	<th> Consignor </th>
	<th> Consignor No </th>
	<th> Consignee </th>
	<th> Consignee No </th>
	<th> Branch	</th>
	<th> Amount </th>
	<th> Fee </th>
	<th> Total Amount </th>
	<th> Status </th>
	<th> Unarchive </th>
	<th> Remit Status </th></tr>

	<?php
	$sql = mysql_query("select * from tblmoney_remit where Status = 'Inactive'");
	while( $rows=mysql_fetch_array($sql)){
			$id = $rows['ID'];
			$trackid = $rows['TrackNo'];
			$consignor = $rows['Consignor'];
			$consignorno = $rows['ConsignorNo'];
			$consigneeno = $rows['ConsigneeNo'];
			$consignee = $rows['Consignee'];
			$amount = $rows['Amount'];
			$fee = $rows['Fee'];
			$total = $rows['TotalAmount'];
			$daterem = $rows['DateRemitted'];
			$datedev = $rows['DateDelivered'];
			$branch = $rows['Branch'];
			$status = $rows['Status'];
			$remstatus = $rows['RemitStatus'];
	echo "<tr><td align = 'center'> $daterem </td>";
	echo "<td align = 'center'> $datedev </td>";
	echo "<td align = 'center'> $trackid </td>";
	echo "<td align = 'center'> $consignor </td>";
	echo "<td align = 'center'> $consignorno </td>";
	echo "<td align = 'center'> $consignee </td>";
	echo "<td align = 'center'> $consigneeno </td>";
	echo "<td align = 'center'> $branch </td>";
	echo "<td align = 'center'> $amount </td>";
	echo "<td align = 'center'> $fee </td>";
	echo "<td align = 'center'> $total </td>";
	
	
	echo "<td align = 'center'> $status </td>";
	echo "<td align = 'center'> <a href= 'unarchivemoneyremit_staff.php?id=$id'> Unarchive </a> </td>";
	echo "<td align = 'center'> $remstatus </td></tr>";
	}
	?>

</table>
</div>
<div class="btnCancel">
<form method="POST" action="loginstaffcode.php">
<input type= "submit" value="Back" class="cancel">
</form>
</div>
<div class="viewinc">
	<strong><h1 style="font-size:25pt;">Archived Money Remittances</h1></strong>
</div>
</body>
</html>