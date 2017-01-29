<?php
	$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
	session_start();
?>
<html>
<head>
<title> View Income </title>
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
    width: 860px;
    height: 470px;
    border-radius: 15px 15px 15px 15px;
    float: center;
    margin: 190px 220px 0;
    color: #fff;
    padding: 20px;
    box-sizing: border-box;
}
#panel1{
    position: absolute;
    background: rgba(128,128,128,1.0);
    width: 830px;
    height: 445px;
    border-radius: 15px 15px 15px 15px;
    float: center;
    margin: 202px 235px 0;
    color: #fff;
    padding: 20px;
    box-sizing: border-box;
}
select{
    width: 10%;
    padding: 10px 10px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
}
.opt1{
	position: absolute;
	top: -200px;
	left: 100px;
	width: 70%;
}
.opt2{
	position: absolute;
	top: -200px;
	left: 220px;
	width: 70%;
}
.opt3{
	position: absolute;
	top: -100px;
	left: 100px;
	width: 70%;
}
.opt4{
	position: absolute;
	top: -100px;
	left: 220px;
	width: 70%;
}
.opt5{
	position: absolute;
	top: -100px;
	left: 340px;
	width: 70%;
}
.opt25{
	position: absolute;
	top: -200px;
	left: 340px;
	width: 70%;
}
.btnSub{
	position: absolute; 
	top: 500px;
	left: 550px;
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
	background-color: white;
	color: black;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.btnCancel{
	position: absolute;
	top: 500px;
	left: 720px;
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
	left: 515px;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	font-weight: 300;
    color: white;
    font-size: 30px;
    line-height: 30px;
}
.p2{
	position: absolute;
	top: 370px;
	left: 525px;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	font-weight: 300;
    color: white;
    font-size: 30px;
    line-height: 30px;
}
.incomebig{
	position: absolute;
	top: 290px;
	left: 280px;
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
<div class="btnSub">
<form method ="POST" action="incomecomp.php">
<input type="submit" value ="Compute Income" class="sub">

    <select name="month" class="opt1">
	<option value="">Months</option><option value="1">January</option><option value="2">February</option>
	<option value="3">March</option><option value="4">April</option><option value="5">May</option>
    <option value="6">June</option><option value="7">July</option><option value="8">August</option>
	<option value="9">September</option><option value="10">October</option>	<option value="11">November</option>
	<option value="12">December</option>
	</select>
	<select name="day" class="opt2">
	<option value="">Days</option><option value="1">1</option><option value="2">2</option>
	<option value="3">3</option><option value="4">4</option><option value="5">5</option>
    <option value="6">6</option><option value="7">7</option><option value="8">8</option>
	<option value="9">9</option><option value="10">10</option>	<option value="11">11</option>
	<option value="12">12</option><option value="13">13</option><option value="14">14</option>
	<option value="15">15</option><option value="16">16</option><option value="17">17</option>
	<option value="18">18</option><option value="19">19</option><option value="20">20</option>
	<option value="21">21</option><option value="22">22</option><option value="23">23</option>
	<option value="24">24</option><option value="25">25</option><option value="26">26</option>
	<option value="27">27</option><option value="28">28</option><option value="29">29</option>
	<option value="30">30</option><option value="31">31</option>
	</select>
	<select name="year" class="opt25">
	<option value="">Years</option><option value="2016">2016</option><option value="2017">2017</option>
	<option value="2018">2018</option></select>

	<select name="month2" class="opt3"> 
	<option value="">Months</option><option value="1">January</option><option value="2">February</option>
	<option value="3">March</option><option value="4">April</option><option value="5">May</option>
    <option value="6">June</option><option value="7">July</option><option value="8">August</option>
	<option value="9">September</option><option value="10">October</option>	<option value="11">November</option>
	<option value="12">December</option>
	</select>
	<select name="day2" class="opt4">
	<option value="">Days</option><option value="1">1</option><option value="2">2</option>
	<option value="3">3</option><option value="4">4</option><option value="5">5</option>
    <option value="6">6</option><option value="7">7</option><option value="8">8</option>
	<option value="9">9</option><option value="10">10</option>	<option value="11">11</option>
	<option value="12">12</option><option value="13">13</option><option value="14">14</option>
	<option value="15">15</option><option value="16">16</option><option value="17">17</option>
	<option value="18">18</option><option value="19">19</option><option value="20">20</option>
	<option value="21">21</option><option value="22">22</option><option value="23">23</option>
	<option value="24">24</option><option value="25">25</option><option value="26">26</option>
	<option value="27">27</option><option value="28">28</option><option value="29">29</option>
	<option value="30">30</option><option value="31">31</option>
	</select>
	<select name="year2" class="opt5">
	<option value="">Years</option><option value="2016">2016</option><option value="2017">2017</option>
	<option value="2018">2018</option></select>
</form>
</div>
<div class="btnCancel">
<form method ="POST" action="loginadmincode.php">
<input type="submit" value ="Back" class="cancel">
</form>
</div>
<div class="p1">
<p> Starting </p>
</div>
<div class="p2">
<p> Ending </p>
</div>
<div class="incomebig">
<img src="Assets/incomebig.png" width="200" height="200"/>
</div>
</body>
</html>