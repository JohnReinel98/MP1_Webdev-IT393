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
	width: 1350px;
	height: 180px;
	border-radius: 0 0 15px 15px;
	float: center;
	margin: -10px -10px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.login{
	position: absolute;
	top:260px;
	left:1020px;
}
#panel{
	position: absolute;
	background: rgba(128,128,128,0.9);
	opacity: 0.7;
	width: 385px;
	height: 300px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 180px 955px 0;
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
	padding: 10px 8px 10px 44px;
    width: 300px;
    height: 42px;
    border: 1px solid #393f46;
    background: #22252a;
    color: #fff;
    font-size: 14px;
    outline: none;
}
.passw{
	padding: 10px 8px 10px 44px;
    width: 300px;
    height: 42px;
    border: 1px solid #393f46;
    background: #22252a;
    color: #fff;
    font-size: 14px;
    outline: none;
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
	width: 300px;
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
.timecheck{
	position: absolute;
	top: -200px;
	left: 0px;
}
.usernamelogo{
	position: absolute;
	top: 265px;
	left: 1025px;
}
.passlogo{
	position: absolute;
	top: 343px;
	left: 1030px;
}
.p1{
	position: absolute;
	top: 200px;
	left: 990px;
	color: white;
	font-size: 20px;
	line-height: 20px;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
#panel1{
	position: absolute;
	background: #429bf4;
	opacity: 0.7;
	width: 960px;
	height: 300px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 183px -5px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
#panel2{
	position: absolute;
	background:rgba(128,128,128,0.9);
	width: 1362px;
	height: 113px;
	float: left;
	margin: 525px -8px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.p5{
	position: absolute;
	top: 550px;
	left: 550px;
	color: white;
	font-size: 14px;
	line-height: 20px;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;	
}
.p6{
	position: absolute;
	top: 560px;
	left: 45px;
	color: white;
	font-size: 14px;
	line-height: 20px;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;	
}
.p7{
	position: absolute;
	top: 530px;
	left: 45px;
	color: white;
	font-size: 14px;
	line-height: 20px;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;	
}
.p8{
	position: absolute;
	top: 590px;
	left: 45px;
	color: white;
	font-size: 14px;
	line-height: 20px;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;	
}
.p9{
	position: absolute;
	top: 535px;
	left: 1020px;
	color: white;
	font-size: 20px;
	line-height: 20px;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;	
}
.line{
	position: absolute;
	top: 550px;
	left: 470px;
	height: 80px;
  	border-left: thin solid #616464;
}
.line1{
	position: absolute;
	top: 550px;
	left: 990px;
	height: 80px;
  	border-left: thin solid #616464;
}
.logo2{
	position: absolute;
	top: 510px;
	left: 830px;
}
.img4{
	position: absolute;
	top: 540px;
	left: 14px;
}
.img5{
	position: absolute;
	top: 570px;
	left: 14px;
}
.img6{
	position: absolute;
	top: 605px;
	left: 14px;
}
.img7{
	position: absolute;
	top: 580px;
	left: 1000px;
}
.img8{
	position: absolute;
	top: 585px;
	left: 1060px;
}
.safeandsecure{
	position: absolute;
	top: 200px;
	left: 450px;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	font-weight: 300;
    color: darkgray;
    font-size: 26px;
    line-height: 30px;
}
.yourmon{
	position: absolute;
	top: 245px;
	left: 460px;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	font-weight: 300;
    color: darkgray;
    font-size: 20px;
    line-height: 30px;
}
.p2{
	position: absolute;
	top: 300px;
	left: 350px;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	font-weight: 100;
    color: white;
    font-size: 16px;
    line-height: 30px;
}
.seculock{
	position: absolute;
	top: 230px;
	left: 110px;
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
	<td><input type = "text" class="username" name = "txtUsername" id = "txtUsername" placeholder="Username" autocomplete="off" />
	<td><p><br></td>
	<input type = "password" class="passw" name = "txtPassword" id = "txtPassword" placeholder="Password"></td><br><br/>
	<tr><input type = "submit" value = "Login" class="sub"></tr>
	</form>
</div>
<div>
<div class="logo">
<a href="index.php">
<img src="Assets/1indexlogo.png"/>
</a>
</div>
<div class="usernamelogo">
<img src="Assets/username.png" height="32" width="32" />
</div>
<div class="passlogo">
<img src="Assets/password.png" height="28" width="28" />
</div>
<div class="p1">
<p> Login </p>
</div>
<div id="panel1">
</div>
<div id="panel2">
</div>
<div class="p5">
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Converge Logistics™ <br>Money Remittance and Package Delivery<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;All Rights Reserved 2016 </p>
</div>
<div class="p6">
<p> Contact No.: <span style="color:#5DADE2;">+639354675163</span> </p>
</div>
<div class="p7">
<p> Email Address: <span style="color:#5DADE2;">convergelogistics2016@gmail.com</span> </p>
</div>
<div class="p8">
<p> Developer Address: Caniogan, City of Malolos, Bulacan </p>
</div>
<div class="p9">
<p> Follow Us: </p>
</div>
<div class="img4">
<img src="Assets/email.png" height="24" width="24" />
</div>
<div class="img5">
<img src="Assets/contact.png" height="24" width="24" />
</div>
<div class="img6">
<img src="Assets/address.png" height="24" width="24" />
</div>
<div class="img7">
<a href="https://www.facebook.com/johnreinel98" target="_blank">
<img src="Assets/fb.png" height="56" width="56" /></a>
</div>
<div class="img8">
<a href="https://twitter.com/Unt1tledDotA" target="_blank">
<img src="Assets/twitter.png" height="42" width="42" /></a>
</div>
<div class="logo2">
<img src="Assets/indexlogo2.png" height="130" width="130"/>
</div>

<div class="line">
&nbsp;
</div>
<div class="line1">
&nbsp;
</div>
<div class="safeandsecure">
<p> SAFE AND SECURE </p>
</div>
<div class="yourmon">
<p> Your money's safe with us </p>
</div>
<div class="p2">
<p> Our industry-leading technology protects your money and guarantees it<br> arrives safely every time. We’re licensed by government regulators around<br> the world, so you can be sure we meet the highest possible standards. </p>
</div>
<div class="seculock">
<img src="Assets/seclock.png" height="200" width="200" />
</div>
</body>
</html>