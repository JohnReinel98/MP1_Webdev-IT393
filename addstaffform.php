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
	width: 1360px;
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
	height: 435px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 200px 455px 0;
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
	top: 350px;
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
	top: 565px;
	left: 610px;
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
	top:230px;
	left:500px;
}
.fields2{
	position: absolute;
	top: 215px;
	left: 700px;
}
</style>
</head>
<body>
<div id="header">
</div>
<div id="panel">
</div>
<form name = "form" method = "post" action = "addstaffcode.php">
<div class = "fields">
<tr>
<td><font face="Helvetica" color="white">Last Name:</font><br>
<td><input type = "text" name = "txtLname" id = "txtLname"><p>
<p><font face="Helvetica" color="white">First Name:</font><br> 
<td><input type = "text" name = "txtFname" id = "txtFname">
<p><font face="Helvetica" color="white">Middle Initial:</font><br> 
<td><input type = "text" name = "txtMI" id = "txtMI"><p>
<p><font face="Helvetica" color="white">Contact No.:</font><br>
<td><input type = "text" name = "txtContact" id = "txtContact"><p>
<p><font face="Helvetica" color="white">Address:</font><br> 
<td><input type = "text" name = "txtAddress" id = "txtAddress">
<p><font face="Helvetica" color="white">Email:</font><br>
<td><input type = "text" name = "txtEmail" id = "txtEmail"><p>
</div>
<div class="fields2">
<p><font face="Helvetica" color="white">Username:</font><br>
<td><input type = "text" name = "txtUsername" id = "txtUsername"><p>
<p><font face="Helvetica" color="white">Password:</font><br>
<td><input type = "text" name = "txtPassword" id = "txtPassword"><p>
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
<a href="index.php">
<img src="Assets/indexlogo.png"/>
</a>
</div>
</body>
</html>