<?php
$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
	session_start();

	$track = $_SESSION['POST']['txtTrack'];
	$expected = $_SESSION['date'];
	$_SESSION['recptsession'] = $track;
	unset($_SESSION['POST']);
	$result = mysql_query("select * from tblmoney_remit");
	while($rows = mysql_fetch_array($result)){
		$id = $rows['ID'];
		$trackno = $rows['TrackNo'];
	}
?>
<html>
<head>
<title> Success! </title>
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
	position:absolute;
	background:#429bf4;
	width: 500px;
	height: 390px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 190px 455px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.button {
	background-color: white;
    color: black;
    border: 2px solid #4CAF50;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left: 20px;
}
.p1{
	position: absolute;
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	color: white;
	font-size: 35px;
    top: 250px;
	left: 530px;
}
.trackno1{
	position: absolute;
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	color: white;
	font-size: 20px;
    top: 360px;
	left: 540px;
}
.trackno2{
	position: absolute;
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	color: white;
	font-size: 20px;
    top: 360px;
	left: 690px;
}
.deldate1{
	position: absolute;
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	color: white;
	font-size: 20px;
    top: 410px;
	left: 540px;
}
.deldate2{
	position: absolute;
	font-family: "Trebuchet MS", Helvetica, sans-serif;
	color: white;
	font-size: 20px;
    top: 410px;
	left: 765px;
}
.btnBack{
	position: absolute;
	top: 509px;
	left: 770px;
}
.back{
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
.back:hover{
	background-color: white;
	color: black;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.btnPrint{
	position: absolute;
	top: 510px;
	left: 485px;
}
.recpt{
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
.recpt:hover{
	background-color: white;
	color: black;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
#panel2{
	position: absolute;
    top: 10px;
    left: 0px;
    background: #edeff1;
    width: 1358px;
    height: 520px;
    margin: 130px -10px 0;
    color: #fff;
    padding: 20px;
    box-sizing: border-box;
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
<div class="logo">
<a href="loginadmincode.php">
<img src="Assets/indexlogo.png" width="180" height="180" />
</a>
</div>
<div id="panel1">
</div>
<div class="p1">
<p> Transaction Successful! </p>
</div>
<div class="trackno1">
<p> Your Track No. : </p>
</div>
<div class="trackno2">
<p> <?php echo"$track"?> </p>
</div>
<div class="deldate1">
<p> Expected Delivery Date: </p>
</div>
<div class="deldate2">
<p> <?php echo"$expected"?> </p>
</div>
<div class= "btnBack">
<form method="POST" action="loginadmincode.php">
<input type= "submit" value="Back to Admin Panel" class="back">
</form>
</div>
<div class= "btnPrint">
<form method="POST" action="receiptremit.php" target="_blank">
<input type= "submit" value="Print Receipt" class="recpt">
</form>
</div>
<div class="viewinc">
	<strong><h1 style="font-size:25pt;">Transaction Status</h1></strong>
</div>
</body>
</html>