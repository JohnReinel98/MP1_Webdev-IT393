<?php
$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
?>
<html>
<head>
<title> Update Staff Information </title>
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
#panel{
	position: absolute;
	background:#429bf4;
	width: 215px;
	height: 800px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 160px 10px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
#panel1{
	position: absolute;
	background: lightgray;
	width: 1100px;
	height: 630px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 160px 225px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.fields{
	position:absolute;
	top:190px;
	left:40px;
}
.table1{
	position: absolute;
	top:185px;
	left:240px;
	height: 550px; 
	width: 1080px;
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
    padding: 3px;
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
	top: 740px;
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
.upd{
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
.upd:hover{
	background-color: white;
	color: black;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.clr{
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
.clr:hover{
	background-color: white;
	color: black;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
input[type=text] {
    width: 80%;
    padding: 12px 10px;
    margin: 1px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    height: 30px;
    outline: none;
}
input[type=text]:focus {
    border: 3px solid #555;
}
input[type=password] {
    width: 80%;
    padding: 12px 10px;
    margin: 1px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    height: 30px;
    outline: none;
}
input[type=password]:focus {
    border: 3px solid #555;
}
#panel2{
	position: absolute;
	top: 10px;
	left: 0px;
	background: #edeff1;
	width: 1358px;
	height: 850px;
	margin: 130px -10px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
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
<div id="panel2">
</div>
<div id="panel">
</div>
<div id="panel1">
</div>

<div class = "fields">
<form name = "form" method = "post" action = "updateusercode.php">
<tr>
<td><font face="Helvetica" color="white">ID:</font><br>
<td><input type = "text" name = "txtID" id = "txtID"><p>
<td><font face="Helvetica" color="white">Last Name:</font><br>
<td><input type = "text" name = "txtLname" id = "txtLname"><p>
<p><font face="Helvetica" color="white">First Name:</font><br> 
<td><input type = "text" name = "txtFname" id = "txtFname"><p>
<p><font face="Helvetica" color="white">Middle Initial:</font><br>
<td><input type = "text" name = "txtMname" id = "txtMname"><p>
<p><font face="Helvetica" color="white">Contact No.:</font><br>
<td><input type = "text" name = "txtContactNo" id = "txtContactNo"><p>
<p><font face="Helvetica" color="white">Address:</font><br>
<td><input type = "text" name = "txtAddress" id = "txtAddress"><p>
<p><font face="Helvetica" color="white">Email:</font><br>
<td><input type = "text" name = "txtEmail" id = "txtEmail"><p>
<p><font face="Helvetica" color="white">Username:</font><br>
<td><input type = "text" name = "txtUsername" id = "txtUsername"><p>
<p><font face="Helvetica" color="white">Password:</font><br>
<td><input type = "password" name = "txtPassword" id = "txtPassword"><p>
<p><font face="Helvetica" color="white">Status:</font><br>
<td><input type = "text" name = "txtStatus" id = "txtStatus"><p>
<input type = "submit" value = "Update Staff" class="upd"><p></p>
<input type = "reset" value = "Clear All Fields" class="clr">
</form>
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
	<th> Archive </th>
	<th> Block Status </th>
	<th> Unblock </th></tr>

	<?php
	$sql = mysql_query("select * from tblstaff where Status = 'Active'");
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
	echo "<td align = 'center'> <a href= 'archiverecords.php?id=$id'> Archive </a> </td>";
	echo "<td align = 'center'> $blockstatus </td>";
	echo "<td align = 'center'> <a href= 'unblockstaff.php?id=$id'> Unblock </a> </td></tr>";
	
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
	<strong><h1 style="font-size:25pt;">Update User Information</h1></strong>
</div>
</body>
</html>