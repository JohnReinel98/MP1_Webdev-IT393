<?php
	$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die ("Cannot connect");
	mysql_select_db("dbmplogistics");
?>

<html>
<head>
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
	left:40px;
}
table{
	border-collapse: collapse;
	background-color: gray;
	font-weight: bold;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){
	background-color: white;
}

th {
    background-color: gray;
    color: white;
}
.btnDel{
	color: white;
}
</style>
</head>
<body>
<div id="header">
</div>
<div class="logo">
<a href="index.php">
<img src="Assets/indexlogo.png"/>
</a>
</div>
</body>