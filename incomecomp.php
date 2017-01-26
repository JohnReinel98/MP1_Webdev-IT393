<?php
session_start();
$con = @mysql_connect("localhost","root","")or die("Cannot Connect");
mysql_select_db("dbmplogistics",$con);
$mon=$_POST['month'];
$day=$_POST['day'];
$yea=$_POST['year'];
$mon2=$_POST['month2'];
$day2=$_POST['day2'];
$yea2=$_POST['year2'];
$sta=$_SESSION['start']=$yea."-".$mon."-".$day;
$end=$_SESSION['ending']=$yea2."-".$mon2."-".$day2;
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