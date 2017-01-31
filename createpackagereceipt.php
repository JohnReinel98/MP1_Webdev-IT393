<?php
	$trackid =rand(12345678,999999999);
	$consignor = $_POST['txtConsignor'];
	$house = $_POST['txtConsignorHouse'];
	$street = $_POST['txtConsignorStreet'];
	$barangay = $_POST['txtConsignorBarangay'];
	$city = $_POST['txtConsignorCity'];
	$province = $_POST['txtConsignorProvince'];
	$consignoremail = $_POST['txtConsignorEmail'];
	$consignorno = $_POST['txtConsignorNo'];
	$chouse = $_POST['txtConsigneeHouse'];
	$cstreet = $_POST['txtConsigneeStreet'];
	$cbarangay = $_POST['txtConsigneeBarangay'];
	$ccity = $_POST['txtConsigneeCity'];
	$cprovince = $_POST['txtConsigneeProvince'];
	$consignee = $_POST['txtConsignee'];
	$consigneemail = $_POST['txtConsigneeEmail'];
	$consigneeno = $_POST['txtConsigneeNo'];
	$kilo = $_POST['txtKilo'];
	$branch = $_POST['txtBranch'];
	$declaredval = $_POST['txtDeclaredValue'];
	$date=getdate();
	$today = "$date[year]-$date[mon]-$date[mday]";
	$day = "$date[mday]";
switch($kilo){
		case "KB Small":
			if($branch == "NCR"){
				$amount=200;
				$add = $day+1;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "N. LUZON"){
				$amount=255;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "S. LUZON"){
				$amount=255;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "VISAYAS"){
				$amount=265;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "MINDANAO"){
				$amount=265;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			break;
		case "KB Medium":
			if($branch == "NCR"){
				$amount=325;
				$add = $day+1;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "N. LUZON"){
				$amount=400;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "S. LUZON"){
				$amount=400;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "VISAYAS"){
				$amount=435;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "MINDANAO"){
				$amount=435;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			break;
		case "KB Large":
			if($branch == "NCR"){
				$amount=600;
				$add = $day+1;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "N. LUZON"){
				$amount=800;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "S. LUZON"){
				$amount=800;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "VISAYAS"){
				$amount=870;$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "MINDANAO"){
				$amount=870;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			break;
		case "KB Extra Large":
			if($branch == "NCR"){
				$amount=1235;
				$add = $day+1;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "N. LUZON"){
				$amount=1425;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "S. LUZON"){
				$amount=1425;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "VISAYAS"){
				$amount=1558;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			else if($branch == "MINDANAO"){
				$amount=1558;
				$add = $day+3;
				$delivered = "$date[year]-$date[mon]-$add";
			}
			break;
	}
	$insurance = $declaredval /500*50;
	
?>
<?php
	session_start();
	$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot to the database");
	mysql_select_db("dbmplogistics", $conn);
	
	$username = $_SESSION['user'];
	$password = $_SESSION['password'];
	
	$show = mysql_query("Select Lname,Fname from tblstaff where Username ='$username'");
	$rows = mysql_fetch_array($show);
	$lname1 = $rows['Lname'];
	$fname = $rows['Fname'];
	echo "<p class=welcome> Welcome: $fname $lname1 </p>";
	
?>


<html>
<head>
<title> Package Receipt </title>
<style>
body{
	background-color: white;
	background-repeat: no-repeat;
    background-attachment: fixed;
}
#panel3{
	position: absolute;
    top: 10px;
    left: 0px;
    background: #edeff1;
    width: 1358px;
    height: 760px;
    margin: 130px -10px 0;
    color: #fff;
    padding: 20px;
    box-sizing: border-box;
}
#panel{
	position: absolute;
	background:#429bf4;
	width: 780px;
	height: 680px;
	border-radius: 15px 15px 15px 15px;
	float: center;
	margin: 190px 270px 0;
	color: #fff;
	padding: 20px;
	box-sizing:border-box;
}
.fields{
	position:absolute;
	top:210px;
	left:320px;
}
.fields2{
	position: absolute;
	top: -10px;
	left: 480px;
	width: 700px;
}
.logo{
	position: absolute;
	top: -40px;
	left: 10px;
}
.house{
	width: 60px;
}
.street{
	width: 70px;
}
.barangay{
	width: 80px;
}
.city{
	width: 80px;
}
.province{
	width: 90px;
}
.chouse{
	width: 60px;
}
.cstreet{
	width: 70px;
}
.cbarangay{
	width: 80px;
}
.ccity{
	width: 80px;
}
.cprovince{
	width: 90px;
}
.create{
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
.create:hover{
	background-color: white;
	color: black;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
.btnCancel{
	position: absolute;
	top: 821px;
	left: 500px;
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
input[type=text] {
    width: 25%;
    padding: 12px 5px;
    margin: 2px 0;
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
.viewinc{
	position: absolute;
	top: 21%;
	left: 37%;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	font-weight: 300;
    color: #429bf4;
    font-size: 30px;
    line-height: 30px;
}
.menubar{
	position: absolute;
	top: 2px;
	left: 240px;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background:rgba(66,155,244,0.8);
}

li {
    float: left;
}

li a, .dropbtn_staff {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown_staff:hover .dropbtn_staff {
    background-color: rgba(128,128,128,0.9);
}

li.dropdown_staff {
    display: inline-block;
}

.dropdown-content_staff {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content_staff a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content_staff a:hover {background-color: rgba(128,128,128,0.5);}

.dropdown_staff:hover .dropdown-content_staff {
    display: block;
}
li a, .dropbtn_remits {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown_remits:hover .dropbtn_remits {
    background-color: rgba(128,128,128,0.9);
}

li.dropdown_remits {
    display: inline-block;
}

.dropdown-content_remits {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content_remits a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content_remits a:hover {background-color: rgba(128,128,128,0.5);}

.dropdown_remits:hover .dropdown-content_remits {
    display: block;
}
li a, .dropbtn_packages {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown_packages:hover .dropbtn_packages {
    background-color: rgba(128,128,128,0.9);
}

li.dropdown_packages {
    display: inline-block;
}

.dropdown-content_packages {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content_packages a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content_packages a:hover {background-color: rgba(128,128,128,0.5);}

.dropdown_packages:hover .dropdown-content_packages {
    display: block;
}
li a, .dropbtn_pdfs {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown_pdfs:hover .dropbtn_pdfs {
    background-color: rgba(128,128,128,0.9);
}

li.dropdown_pdfs {
    display: inline-block;
}

.dropdown-content_pdfs {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content_pdfs a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content_pdfs a:hover {background-color: rgba(128,128,128,0.5);}

.dropdown_pdfs:hover .dropdown-content_pdfs {
    display: block;
}
.welcome{
	position: absolute;
	top: 80px;
	left: 1100px;
	font-size: 14px;
	font-family: Verdana;
	font-weight: bold;
	color: #429bf4;
}
</style>
</head>
<body>
<div id="header">
</div>
<div id="panel3">
</div>
<div id="panel">
</div>
<div id="panel1">
</div>

<div class = "fields">
<form name = "form" method = "POST" action = "createpackagecode.php">
<tr>
<td><font face="Helvetica" color="white">Track No: </font><br>
<td><input type = "text" value="<?php echo "$trackid"?>" name="txtTrack" id="txtTrack" readonly><p>
<td><font face="Helvetica" color="white">Consignor:</font><br>
<td><input type = "text" value="<?php echo "$consignor"?>" name = "txtConsignor" id = "txtConsignor" readonly><p>
<p><font face="Helvetica" color="white">Consignor Address:</font><br> 
<td><input type = "text" value="<?php echo "$house" ?>" name = "txtConsignorHouse" id = "txtConsignorHouse" class="house" readonly>
<input type = "text" value="<?php echo "$street" ?>" name = "txtConsignorStreet" id = "txtConsignorStreet" class="street" readonly>
<input type = "text" value="<?php echo "$barangay" ?>" name = "txtConsignorBarangay" id = "txtConsignorBarangay" class="barangay" readonly><br>
<input type = "text" value="<?php echo "$city" ?>" name = "txtConsignorCity" id = "txtConsignorCity" class="city" readonly>
<input type = "text" value="<?php echo "$province" ?>" name = "txtConsignorProvince" id = "txtConsignorProvince" class="province" readonly><p>
<p><font face="Helvetica" color="white">Consignor Email:</font><br> 
<td><input type = "text" value="<?php echo "$consignoremail"?>" name = "txtConsignorEmail" id = "txtConsignorEmail" readonly><p>
<p><font face="Helvetica" color="white">Consignor Contact No.:</font><br> 
<td><input type = "text" value="<?php echo "$consignorno"?>" name = "txtConsignorNo" id = "txtConsignorNo" readonly><p>
<p><font face="Helvetica" color="white">Consignee:</font><br>
<td><input type = "text" value="<?php echo "$consignee"?>" name = "txtConsignee" id = "txtConsignee" readonly><p>
<p><font face="Helvetica" color="white">Consignor Address:</font><br> 
<td><input type = "text" value="<?php echo "$chouse" ?>" name = "txtConsigneeHouse" id = "txtConsigneeHouse" class="chouse" readonly>
<input type = "text" value="<?php echo "$cstreet" ?>" name = "txtConsigneeStreet" id = "txtConsigneeStreet" class="cstreet" readonly>
<input type = "text" value="<?php echo "$cbarangay" ?>" name = "txtConsigneeBarangay" id = "txtConsigneeBarangay" class="cbarangay" readonly><br>
<input type = "text" value="<?php echo "$ccity" ?>" name = "txtConsigneeCity" id = "txtConsigneeCity" class="ccity" readonly>
<input type = "text" value="<?php echo "$cprovince" ?>" name = "txtConsigneeProvince" id = "txtConsigneeProvince" class="cprovince" readonly><p>
<p><font face="Helvetica" color="white">Consignee Email:</font><br>
<td><input type = "text" value="<?php echo "$consigneemail"?>" name = "txtConsigneeEmail" id = "txtConsigneeEmail" readonly><p>

<div class="fields2">
<p><font face="Helvetica" color="white">Consignee Contact No.:</font><br>
<td><input type = "text" value="<?php echo "$consigneeno"?>" name = "txtConsigneeNo" id = "txtConsigneeNo" readonly><p>
<p><font face="Helvetica" color="white">Size:</font><br>
<td><input type = "text" value="<?php echo "$kilo"?>" name = "txtSize" id = "txtSize" readonly><p>
<p><font face="Helvetica" color="white">Payment:</font><br>
<td><input type = "text" value="<?php echo "$amount"?>" name = "txtPayment" id = "txtPayment" readonly><p>
<p><font face="Helvetica" color="white">Declared Value:</font><br>
<td><input type = "text" value="<?php echo "$declaredval"?>" name = "txtDeclaredValue" id = "txtDeclaredValue" readonly><p>
<p><font face="Helvetica" color="white">Date Dispatched:</font><br>
<td><input type = "text" value="<?php echo "$today"?>" name = "txtDispatched" id = "txtDispatched" readonly><p>
<p><font face="Helvetica" color="white">Expected Delivery Date:</font><br>
<td><input type = "text" value="<?php echo "$delivered"?>" name = "txtExpected" id = "txtExpected" readonly><p>
<p><font face="Helvetica" color="white">Branch:</font><br>
<td><input type = "text" value="<?php echo "$branch"?>" name = "txtBranch" id = "txtBranch" readonly><p>
<p><font face="Helvetica" color="white">Insurance:</font><br>
<td><input type = "text" value="<?php echo "$insurance"?>" name = "txtInsurance" id = "txtInsurance" readonly><p>
</div>
<input type = "submit" value = "Submit Transaction" class="create">
</form>
</div>
<div class="logo">
<a href="loginadmincode.php">
<img src="Assets/indexlogo.png" width="180" height="180" />
</a>
</div>
<div class="btnCancel">
<form method="POST" action="createpackageform.php">
<input type= "submit" value="Back" class="cancel">
</form>
</div>
<div class="viewinc">
	<strong><h1 style="font-size:25pt;">Confirm Package Delivery</h1></strong>
</div>
<div class="menubar">
<ul>
  <li class="dropdown_staff">
  <a href="#" class="dropbtn_staff"><img src="Assets/staff.png" height="24" width="24" />&nbsp;&nbsp;Manage Staffs</a>
    <div class="dropdown-content_staff">
      <a href="addstaffform.php">Add Staff</a>
      <a href="updateuserform.php">Update Staff Informations</a>
      <a href="archivecodetablestaff.php">Archive/Unarchive Staffs</a>
    </div>
  </li>
  <li class="dropdown_remits">
  <a href="#" class="dropbtn_remits"><img src="Assets/moneyrem.png" height="24" width="24"/>&nbsp;&nbsp;Manage Remittances</a>
    <div class="dropdown-content_remits">
      <a href="createremitform.php">Create Remittance</a>
      <a href="updatemoneyremitcode.php">Update Remittance Informations</a>
      <a href="archivecodetablemonrem.php">Archive/Unarchive Remittances</a>
    </div>
  </li>
  <li class="dropdown_packages">
  <a href="#" class="dropbtn_packages"><img src="Assets/package.png" height="24" width="24"/>&nbsp;&nbsp;Manage Packages</a>
  <div class="dropdown-content_packages">
      <a href="createpackageform.php">Create Package Delivery</a>
      <a href="updatepackagecode.php">Update Package Informations</a>
      <a href="archivecodetablepackage.php">Archive/Unarchive Packages</a>
    </div>
  </li>
  <li><a href="viewallratesadmin.php"><img src="Assets/rates.png" height="24" width="24"/>&nbsp;&nbsp;View Rates</a></li>
  <li class="dropdown_pdfs">
  <a href="#" class="dropbtn_pdfs"><img src="Assets/reports.png" height="24" width="24"/>&nbsp;&nbsp;View Reports</a>
  <div class="dropdown-content_pdfs">
      <a href="generatepdfremits.php" target="_blank">Pending Remittances</a>
      <a href="generatepdfpkg.php" target="_blank">Pending Packages</a>
      <a href="generatepdfdelivered.php" target="_blank">Delivered Packages</a>
      <a href="generatepdfreceivedremits.php" target="_blank">Received Remittances</a>
    </div>
  </li>
  <li><a href="incomeform.php"><img src="Assets/income.png" height="24" width="24"/>&nbsp;&nbsp;View Income</a></li>
  <li><a href="logoutsessioncode.php"><img src="Assets/logout.png" height="24" width="24"/>&nbsp;&nbsp;Logout</a></li>
</ul>
</div>
</body>
</html>