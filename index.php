<html>
<head>
<title> Converge Logistics - Home </title>
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
	float: left;
	margin: -5px -5px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.btnLogin{
	position: absolute;
	top: 60px;
	left: 1200px;
	border: none;
	background: transparent;
	font-size: 25px;
	color: white;
	font-family:Verdana, Geneva, sans-serif;
	cursor:pointer;
}
.btnLogin:hover{
	color: darkgray;
	text-shadow: 2px 2px 5px #6E6E6E;
}
.btnCr8Remit{
	position: absolute;
	top: 60px;
	left: 960px;
	border: none;
	background: transparent;
	font-size: 25px;
	color: white;
	font-family:Verdana, Geneva, sans-serif;
	cursor:pointer;
}
.btnCr8Remit:hover{
	color:darkgray;
	text-shadow: 5px 5px 5px #6E6E6E;
}
.btnTrack{
	position: absolute;
	top: 60px;
	left: 800px;
	border: none;
	background: transparent;
	font-size: 25px;
	color: white;
	font-family:Verdana, Geneva, sans-serif;
	cursor:pointer;
}
.btnTrack:hover{
	color:darkgray;
}
#panel{
	position: absolute;
	background:#429bf4;
	opacity: 0.8;
	width: 200px;
	height: 80px;
	border-radius: 15px 15px 15px 15px;
	box-shadow:4px 4px 2px #999999;
	float: center;
	margin: 30px 930px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
#panel1{
	position: absolute;
	background:#429bf4;
	opacity: 0.8;
	width: 170px;
	height: 80px;
	border-radius: 15px 15px 15px 15px;
	box-shadow:4px 4px 2px #999999;
	float: center;
	margin: 30px 1150px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
#panel2{
	position: absolute;
	background:#429bf4;
	opacity: 0.8;
	width: 350px;
	height: 80px;
	border-radius: 15px 15px 15px 15px;
	box-shadow:4px 4px 2px #999999;
	float: center;
	margin: 30px 560px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
#panel3{
	position: absolute;
	background:#429bf4;
	opacity: 0.8;
	width: 900px;
	height: 490px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 190px 20px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
#panel4{
	position:absolute;
	background:rgba(128,128,128,1.0);
	width: 840px;
	height: 470px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 202px 50px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
#panel5{
	position:absolute;
	background:#429bf4;
	opacity: 0.8;
	width: 390px;
	height: 480px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 190px 945px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
#panel6{
	position:absolute;
	background:rgba(128,128,128,1.0);
	width: 360px;
	height: 430px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 218px 960px 0;
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
.gif1{
	position: absolute;
	top: 220px;
	left: 80px;
}
.logo{
	position: absolute;
	top: -45px;
	left: 10px;
}
.p1{
	position: absolute;
	top: 225px;
	left: 1020px;
	color: white;
	font-size: 22px;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
.p2{
	position: absolute;
	top: 290px;
	left: 1080px;
	color: white;
	font-size: 12px;
	line-height: 20px;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
.p3{
	position: absolute;
	top: 410px;
	left: 1080px;
	color: white;
	font-size: 12px;
	line-height: 20px;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
.p4{
	position: absolute;
	top: 530px;
	left: 1080px;
	color: white;
	font-size: 12px;
	line-height: 20px;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
.img1{
	position: absolute;
	top: 290px;
	left: 990px;
}
.img2{
	position: absolute;
	top: 420px;
	left: 990px;
}
.img3{
	position: absolute;
	top: 540px;
	left: 990px;
}
.track{
	position: absolute;
	top: 55px;
	left: 580px;
}
.inp{
	font-family: Verdana;
	height: 30px;
	border:2px solid #456879;
	border-radius:10px;
	box-shadow:2px 2px 2px #999999;
	border-color: darkgray;
	width: 230px;
}
.sub{
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
	background-color: darkgray;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.poweruser{
	position: absolute;
	top: 5px;
	left: 5px;
}
.btnPower{
	background: none;
	border: none;
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
<div id="panel3">
</div>
<div id="panel4">
</div>
<div id="panel5">
</div>
<div id="panel6">
</div>
<form method="POST" action="loginform.php">
	<input type="submit" value="Login" class="btnLogin">
</form>
<form method="POST" action="viewallrates.php">
	<input type="submit" value="View Rates" class="btnCr8Remit">
</form>
<div class="track">
<form method="POST" action="trackordercode.php">
<input class="inp" type="text" id="txtTrackOrder" name="txtTrackOrder" placeholder=" Input tracking no.">
<input class="sub" type="submit" value="Track"/>
</form>
</div>
<div class="poweruser">
<form method="POST" action="loginpoweruser.php">
<input type="submit" value="" class="btnPower">
</div>
<div class="gif1">
<img src="Assets/index.gif" />
</div>
<div class="logo">
<img src="Assets/indexlogo.png"/>
</div>
<div class="p1">
<p> How to Send Money Online </p>
</div>
<div class="p2">
<p> SELECT COUNTRY AND AMOUNT </p>
<p> Choose from 5 destinations. Our exchange<br> rates are guaranteed so you know how much<br> your recipient will get. </p>
</div>
<div class="p3">
<p> ENTER RECIPIENT AND PAYOUT INFO </p>
<p> Tell us about your recipient and how you<br> want them to receive the money –<br> cash pickup and more. </p>
</div>
<div class="p4">
<p> FUND YOUR MONEY TRANSFER </p>
<p> Enter your desired amount. Review and send your transaction. </p>
</div>
<div class="img1">
<img src="Assets/send-money.png"/>
</div>
<div class="img2">
<img src="Assets/delivery-method.png"/>
</div>
<div class="img3">
<img src="Assets/transaction-summary.png"/>
</div>
</body>
</html>