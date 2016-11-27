<?php
	$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die ("Cannot connect");
	mysql_select_db("dbmplogistics");
?>

<html>
<head>
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
.table1{
	position: absolute;
	top:240px;
	left:40px;
}
table{
	border-collapse: collapse;
	background-color: gray;
	font-weight: bold;
    width: 100%;
}
th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){
	background-color: white;
}

th {
    background-color: gray;
    color: white;
}
.btnDel{
	color: white;
}
</style>
</head>
<body>
<div id="header">
</div>
<div class="logo">
<a href="index.php">
<img src="Assets/indexlogo.png"/>
</a>
</div>

<?php
	$result=mysql_query("select * from tblmoney_remit");
	while($rows = mysql_fetch_array($result)){
		$trackid=$rows['TrackNo'];
		$consignor = $rows['Consignor'];
		$consignorno = $rows['ConsignorNo'];
		$consignee = $rows['Consignee'];
		$consigneeEmail = $rows ['ConsigneeEmail'];
		$consigneeno = $rows ['ConsigneeNo'];
		$amount = $rows ['Amount'];
		$total = $rows['TotalAmount'];
		$fee = $rows['Fee'];
		$branch = $rows ['Branch'];
		
?>
<div class="table1">
<table>
<tr>
<th></th>
<th>TrackNo</th>
<th>Consignor</th>
<th>Consignor Number</th>
<th>Consignee</th>
<th>ConsigneeEmail</th>
<th>Consigneecontact</th>
<th>Amount</th>
<th>Branch</th>
<th>TotalAmount</th>
<th>Fee</th>
</tr>
<tr>
<td align = "center">
<form method = "POST" action="deleteremit.php">
	<input  type="checkbox" name="che[]" value="<?php echo "$trackid" ?>">
</td>
<td><?php echo "$trackid" ?></td>
<td><?php echo "$consignor" ?></td>
<td><?php echo "$consignorno" ?></td>
<td><?php echo "$consignee" ?></td>
<td><?php echo "$consigneeEmail" ?></td>
<td><?php echo "$consigneeno" ?></font></td>
<td><?php echo "$amount" ?></font></td>
<td><?php echo "$total" ?></font></td>
<td><?php echo "$fee" ?></font></td>
<td><?php echo "$branch" ?></font></td>
<td align="center"><a href="updateremitform.php">Update</a></td>
</tr>
<?php
	}
?>
<tr>
<td colspan="12">&nbsp;&nbsp;&nbsp;&nbsp;
<div id="btnDel">
<input type="submit" value="Delete Selected" class="btndelete"></td>
</div>
</tr>
</form>
</table>
</div>
</body>
</html>
