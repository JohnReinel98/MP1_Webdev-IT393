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
<title> Archived Staff Records </title>
<style>
body{
	/*background-image:url("Assets/wallpaper1.png");*/
	background-color: white;
	background-repeat: no-repeat;
    background-attachment: fixed;
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
.logo{
	position: absolute;
	top: -40px;
	left: 10px;
}
#panel{
    position: absolute;
    background: #edeff1;
    width: 1350px;
    height: 530px;
    float: center;
    margin: 135px -10px 0;
    color: #fff;
    padding: 20px;
    box-sizing: border-box;
}
.table1{
	position: absolute;
	top:220px;
	left: 1px;
	height: 360px; 
	width: 1348px;
	overflow-y: scroll;
}
table{
	border-collapse: collapse;
	background-color: lightgray;
	font-weight: bold;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 5px;
}

tr:nth-child(even){
	background-color: white;
}

th {
    background-color: gray;
    color: white;
}
.btnCancel{
	position: absolute;
	top: 600px;
	left: 1240px;
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
.viewinc{
	position: absolute;
	top: 23%;
	left: 4%;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	font-weight: 300;
    color: #429bf4;
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
<div id="panel2">
</div>
<div class="logo">
<a href="loginadmincode.php">
<img src="Assets/indexlogo.png" width="180" height="180" />
</a>
</div>
<div class = "table1">
	<table>
	<tr>
	<th> ID </th>
	<th> Last Name </th>
	<th> First Name </th>
	<th> Middle Initial </th>
	<th> Contact No </th>
	<th> Address </th>
	<th> Email </th>
	<th> Username </th>
	<th> Status </th>
	<th> Archive/Unarchive </th>
	<th> Block Status </th></tr>

	<?php
	$sql = mysql_query("select * from tblstaff where Status = 'Inactive'");
	while( $rows=mysql_fetch_array($sql)){
			$id = $rows['ID'];
			$lname = $rows['Lname'];
			$name = $rows['Fname'];
			$mname = $rows['MI'];
			$contact = $rows['ContactNo'];
			$address = $rows['Address'];
			$email = $rows['Email'];
			$username = $rows['Username'];
			$status = $rows['Status'];
			$blockstatus = $rows['BlockStatus'];
	
	
	echo "<tr><td align = 'center'> $id </td>";
	echo "<td align = 'center'> $lname </td>";
	echo "<td align = 'center'> $name </td>";
	echo "<td align = 'center'> $mname </td>";
	echo "<td align = 'center'> $contact </td>";
	echo "<td align = 'center'> $address </td>";
	echo "<td align = 'center'> $email </td>";
	echo "<td align = 'center'> $username </td>";
	echo "<td align = 'center'> $status </td>";
	echo "<td align = 'center'> <a href= 'unarchiverecords.php?id=$id'> Unarchive </a> </td>";
	echo "<td align = 'center'> $blockstatus </td></tr>";
	}
	?>
</table>
</div>
<div class="btnCancel">
<form method="POST" action="loginadmincode.php">
<input type= "submit" value="Back" class="cancel">
</form>
</div>
<div class="viewinc">
	<strong><h1 style="font-size:25pt;">Archived Staff Records</h1></strong>
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