<html>
<head>
<title> Add Employee/Staff </title>
<style>
body{
	background-image:url("Assets/wallpaper1.png");
	background-repeat: no-repeat;
    background-attachment: fixed;
}
#header{
	position: absolute;
	background:rgba(128,128,128,0.5);
	width: 1340px;
	height: 180px;
	border-radius: 0 0 15px 15px;
	float: center;
	margin: -5px -5px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.login{
	position: absolute;
	top:250px;
	left:600px;
}
#panel{
	position: absolute;
	background:#429bf4;
	width: 450px;
	height: 500px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 180px 60px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
#panel1{
	position: absolute;
	background:rgba(128,128,128,0.9);
	width: 820px;
	height: 500px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 180px 510px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.mnyrem{
	position:absolute;
	top:60px;
	left:530px;
	color:white;
	height:40px;
	width:190px;
	background-color:#0099cc;
}
.pckg{
	position:absolute;
	top:60px;
	left:750px;
	color:white;
	height:40px;
	width:190px;
	background-color:#0099cc;
}
.logo{
	position: absolute;
	top: -45px;
	left: 10px;
}
.username{
	font-family: Verdana;
	height: 30px;
	border:2px solid #456879;
	border-radius:10px;
	box-shadow:2px 2px 2px #999999;
	border-color: darkgray;
	width: 230px;
}
.passw{
	font-family: Verdana;
	height: 30px;
	border:2px solid #456879;
	border-radius:10px;
	box-shadow:2px 2px 2px #999999;
	border-color: darkgray;
	width: 230px;
}
.usertxt{
	position: absolute;
	top: -10px;
	left: 65px;
}
.pwtxt{
	position: absolute;
	top: 60px;
	left: 65px;
}
.sub{
	position: absolute;
	top: 435px;
	left: -200px;
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
.sub:hover{
	background-color: white;
	color: black;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.btnCancel{
	position: absolute;
	top: 620px;
	left: 410px;
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
.fields{
	position:absolute;
	top:200px;
	left:100px;
}
.fields2{
	position: absolute;
	top: 185px;
	left: 300px;
}
input[type=text] {
    width: 90%;
    padding: 12px 15px;
    margin: 3.5px 0;
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
    width: 90%;
    padding: 12px 20px;
    margin: 8px 0;
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
.gif{
	position: absolute;
	top: 220px;
	left: 530px;
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
<form name = "form" method = "post" action = "addstaffcode.php">
<div class = "fields">
<tr>
<td><font face="Helvetica" color="white">Last Name:</font><br>
<td><input type = "text" name = "txtLname" id = "txtLname" autocomplete="off"><p>
<p><font face="Helvetica" color="white">First Name:</font><br> 
<td><input type = "text" name = "txtFname" id = "txtFname" autocomplete="off">
<p><font face="Helvetica" color="white">Middle Initial:</font><br> 
<td><input type = "text" name = "txtMI" id = "txtMI" autocomplete="off"><p>
<p><font face="Helvetica" color="white">Contact No.:</font><br>
<td><input type = "text" name = "txtContact" id = "txtContact" autocomplete="off"><p>
<p><font face="Helvetica" color="white">Address:</font><br> 
<td><input type = "text" name = "txtAddress" id = "txtAddress" autocomplete="off">
<p><font face="Helvetica" color="white">Email:</font><br>
<td><input type = "text" name = "txtEmail" id = "txtEmail" autocomplete="off"><p>
</div>
<div class="fields2">
<p><font face="Helvetica" color="white">Username:</font><br>
<td><input type = "text" name = "txtUsername" id = "txtUsername" autocomplete="off"><p>
<p><font face="Helvetica" color="white">Password:</font><br>
<td><input type = "password" name = "txtPassword" id = "txtPassword" autocomplete="off"><p>
<td><input type = "submit" value= "Submit" class= "sub">
</div>
</form>
<div class="btnCancel">
<form method="POST" action="loginadmincode.php">
<input type= "submit" value="Back" class="cancel">
</form>
</div>
<div>
<div class="logo">
<a href="loginadmincode.php">
<img src="Assets/indexlogo.png"/>
</a>
</div>
<div class="gif">
<img src="Assets/index.gif"/>
</div>
</body>
</html>