<html>
<head>
<title> Login </title>
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
	margin: -500px -6px 0;
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
	background:rgba(128,128,128,0.5);
	width: 300px;
	height: 300px;
	border-radius: 15px 0 15px 0;
	float: center;
	margin: 200px 550px 0;
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
	background-color: #429bf4;
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
	background-color: darkgray;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.btnBack{
	position: absolute;
	top: 385px;
	left: 740px;
}
.back{
	background-color: #429bf4;
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
	background-color: darkgray;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.timecheck{
	position: absolute;
	top: -200px;
	left: 0px;
}
</style>
</head>
<body>
<div id="panel">
</div>
<div id="header">
</div>
<div class="timecheck">
</div>
<div class = "login">
	<form method = "POST" action = "loginsessioncode.php">
	<tr>
	<td><font face="Verdana" color="white" class="usertxt">Username:</font><br>
	<td><input type = "text" class="username" name = "txtUsername" id = "txtUsername" placeholder="  Username here..." autocomplete="off" />
	<p><font face="Verdana" color="white" class="pwtxt">Password:</font><br></td>
	<input type = "password" class="passw" name = "txtPassword" id = "txtPassword" placeholder="  Password here..."></td><br><br/>
	<tr><input type = "submit" value = "Log In" class="sub">
	</tr>
	</form>
</div>
<div class="btnBack">
<form method="POST" action="index.php">
<input type= "submit" value="Back" class="back">
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