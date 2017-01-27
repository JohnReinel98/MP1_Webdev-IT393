<html>
<head>
<title> User Blocked </title>
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
.logo{
	position: absolute;
	top: -45px;
	left: 10px;
}
#panel{
    position: absolute;
    background: #429bf4;
    width: 780px;
    height: 470px;
    border-radius: 15px 15px 15px 15px;
    float: center;
    margin: 190px 240px 0;
    color: #fff;
    padding: 20px;
    box-sizing: border-box;
}
#panel1{
    position: absolute;
    background: rgba(128,128,128,1.0);
    width: 750px;
    height: 445px;
    border-radius: 15px 15px 15px 15px;
    float: center;
    margin: 202px 255px 0;
    color: #fff;
    padding: 20px;
    box-sizing: border-box;
}
.btnCancel{
    position: absolute;
    top: 500px;
    left: 830px;
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
.p1{
    position: absolute;
    top: 270px;
    left: 320px;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: 300;
    color: white;
    font-size: 30px;
    line-height: 30px;
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
<div class="logo">
<a href="loginadmincode.php">
<img src="Assets/indexlogo.png"/>
</a>
</div>
<div class="btnCancel">
<form method ="POST" action="index.php">
<input type="submit" value ="Back" class="cancel">
</form>
</div>
<div class="p1">
<p> User is blocked! Please Contact Administrator.<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+639354675163 </p>
</div>
</body>
</html>