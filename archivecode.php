<?php
	$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
?>
<html>
<head>
<title> Archived Records </title>
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
.table1{
	position: absolute;
	top:240px;
	left:14px;
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
</style>
</head>
<body>
<div id="header">
</div>
<div id="panel">
</div>
<div class="logo">
<a href="index.php">
<img src="Assets/indexlogo.png"/>
</a>
</div>
<div class = "table1">
	<table>
	<tr>
	<th> ID </th>
	<th> Last Name </th>
	<th> First Name </th>
	<th> Middle Initial </th>
	<th> Contact No </th>
	<th> Address </th>
	<th> Email </th>
	<th> Username </th>
	<th> Password </th>
	<th> Status </th>
	<th> Block Status </th></tr>

	<?php
	$sql = mysql_query("select * from tblstaff where Status = 'Inactive'");
	while( $rows=mysql_fetch_array($sql)){
			$id = $rows['ID'];
			$lname = $rows['Lname'];
			$name = $rows['Fname'];
			$mname = $rows['MI'];
			$contact = $rows['ContactNo'];
			$address = $rows['Address'];
			$email = $rows['Email'];
			$username = $rows['Username'];
			$passw = $rows['Password'];
			$status = $rows['Status'];
			$blockstatus = $rows['BlockStatus'];
	
	
	echo "<tr><td align = 'center'> $id </td>";
	echo "<td align = 'center'> $lname </td>";
	echo "<td align = 'center'> $name </td>";
	echo "<td align = 'center'> $mname </td>";
	echo "<td align = 'center'> $contact </td>";
	echo "<td align = 'center'> $address </td>";
	echo "<td align = 'center'> $email </td>";
	echo "<td align = 'center'> $username </td>";
	echo "<td align = 'center'> $passw </td>";
	echo "<td align = 'center'> $status </td>";
	echo "<td align = 'center'> $blockstatus </td></tr>";
	}
	?>
</table>
</div>
</body>
</html>