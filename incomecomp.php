<?php
session_start();
$con = @mysql_connect("localhost","root","")or die("Cannot Connect");
mysql_select_db("dbmplogistics",$con);
$start1=$_POST['start'];
$ending1=$_POST['ending'];
$newstart = date('Y/m/d',strtotime($start1));
$newend = date('Y/m/d',strtotime($ending1));


$sta=$_SESSION['start']=$newstart;
$end=$_SESSION['ending']=$newend;

$inco=0;
$sql=mysql_query("select * from tblmoney_remit where DateRemitted between '$sta' and '$end'");
		if($sql){
			while($sql2=mysql_fetch_array($sql))
		{
			
			$inc2=$sql2['Fee'];
		
			 $inco=$inco+$inc2;
		
		}
		}
 $sql3=mysql_query("select * from tblpackage_delivery where DateDelivered between '$sta' and '$end'");	
		if($sql3){
			while($sql4=mysql_fetch_array($sql3))
			{
			
				$inc3=$sql4['Amount'];
			 $inco=$inco+$inc3;
			
			}
			
			 $_SESSION['total']=$inco;
		header('Location: generateincomecode.php');
		}
?>