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
.hidden{
	position:absolute;
	top:665px;
	left:-15px;
	background-color:green;
	height:4px;
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
</style>
</head>
<body>
<div id="panel">
</div>
<div id="header">
</div>
<div class = "login">
	<form method = "post" action = "loginsessioncode.php">
	<tr>
	<td><font face="Trebuchet MS">Email</font><br>
	<td><input type = "text" name = "txtUsername" id = "txtUsername" autocomplete="off" />
	<p><font face="Trebuchet MS">Password</font><br></td>
	<input type = "password" name = "txtPassword" id = "txtPassword"></td>
	<td><input type = "submit" value = "Log In">
	</tr>
	</form>
</div>
<div>
<div class="logo">
<img src="Assets/indexlogo.png"/>
</div>
</body>
</html>