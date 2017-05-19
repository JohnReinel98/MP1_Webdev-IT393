<link rel="stylesheet" href="jquery/growl/jquery-ui-1.8.16.custom.css" type="text/css" />
<link rel="stylesheet" href="jquery/growl/style.css" type="text/css" />

<script src="jquery/growl/jquery-1.3.2.min.js" type="text/javascript" ></script>
<script type="text/javascript" src="jquery/growl/jquery-ui-1.7.3.custom.min.js"></script>
<script type="text/javascript" src="jquery/growl/script.js"></script>
<?php
	$conn = @mysql_connect("localhost","root","");
	if(!$conn)
		die("Cannot connect");
	mysql_select_db("dbmplogistics");

	$res = mysql_query("select * from tblpackage_delivery");
	while($row = mysql_fetch_array($res)){
		$id = $row['ID'];
		$datedelv = $row['DateReceived'];
		$status = $row['Status'];
		$delvstatus = $row['DeliveryStatus'];
		$notiftmr = $row['NotifyTmr'];
		$notiftdy = $row['NotifyToday'];

		if($status=="Active" && $delvstatus=="Pending"){
			if($notiftdy =="false"){
				if(strtotime($datedelv) <= time()){
					$sql1="update tblpackage_delivery set NotifyToday = 'true' where ID = $id";
					$res1=mysql_query($sql1);
				?>
					<div id="growl2"></div>
				<?php
				}
			}
			if($notiftmr =="false"){
				if(time() >= strtotime($datedelv . "-1 day")){
				
					$sql1="update tblpackage_delivery set NotifyTmr = 'true' where ID = $id";
					$res1=mysql_query($sql1);
				?>
					<div id="growl"></div>
				<?php
				}
			}
		}
	}

?> 