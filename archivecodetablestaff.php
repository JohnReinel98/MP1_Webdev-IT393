<?php
	$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
?>
<html>
<head>
<title> Archived Staff Records </title>
<style>
body{
	/*background-image:url("Assets/wallpaper1.png");*/
	background-color: white;
	background-repeat: no-repeat;
    background-attachment: fixed;
}
/*#header{
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
}*/
.logo{
	position: absolute;
	top: -40px;
	left: 10px;
}
#panel{
    position: absolute;
    background: #edeff1;
    width: 1364px;
    height: 470px;
    float: center;
    margin: 135px -10px 0;
    color: #fff;
    padding: 20px;
    box-sizing: border-box;
}
.table1{
	position: absolute;
	top:155px;
	left: 10px;
	height: 360px; 
	width: 1345px;
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
	top: 550px;
	left: 1260px;
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
<div id="panel1">
</div>
<div id="panel2">
</div>
<div class="logo">
<a href="loginadmincode.php">
<img src="Assets/indexlogo.png" width="180" height="180" />
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
	<th> Status </th>
	<th> Archive/Unarchive </th>
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
	echo "<td align = 'center'> $status </td>";
	echo "<td align = 'center'> <a href= 'unarchiverecords.php?id=$id'> Unarchive </a> </td>";
	echo "<td align = 'center'> $blockstatus </td></tr>";
	}
	?>
</table>
</div>
<div class="btnCancel">
<form method="POST" action="loginadmincode.php">
<input type= "submit" value="Back" class="cancel">
</form>
</div>
</body>
</html>