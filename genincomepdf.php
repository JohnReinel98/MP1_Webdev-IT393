<?php
require('recptpdf.php');
session_start();
$con = @mysql_connect("localhost","root","")or die("Cannot Connect");
mysql_select_db("dbmplogistics",$con);

	class PDF extends FPDF
	{
		function Header()
     {
 		
		$this->SetFont('Arial','B',15);

		$this->Cell(80);
	
		$this->Cell(180,10,'Zero Express',0,0,'C');
	
		$this->Ln(20);
	}


	function Footer()
	{		
     	$this->SetY(-15);	
		$this->SetFont('Arial','I',8);
		$this->Cell(0,10,'Zero Express',0,0,'C');
	}
	
	
function LoadData()
		{
				$end=$_SESSION['ending'];
$sta=$_SESSION['start'];

	$result=mysql_query("select TrackNo,date_format(DateRemitted,'%M %d, %Y'),Fee from tblmoney_remit where DateRemitted between '$sta' and '$end'");
			while($row=mysql_fetch_row($result)) 
			{ 
				$data[] = $row;
			}
			$result2=mysql_query("select TrackNo,date_format(DateDelivered,'%M %d, %Y'),Amount from tblpackage_delivery where DateDelivered between '$sta' and '$end'");	
			while($row2=mysql_fetch_row($result2)) 
			{ 
				$data[] = $row2;
			}
			return $data;
			
			
		}



			function ShowTable($header,$data)
		{
			$total=$_SESSION['total'];
			$this->SetFont('Arial','B',15);
			$this->Cell(300,10,'Income',1,1,'C');
			$this->SetFont('times','',20);
				foreach($header as $col)
			
				$this->Cell(100,7,$col,1);
			$this->Ln();
		
			foreach($data as $row)
			{
				foreach($row as $col)
					$this->Cell(100,6,$col,1);
				$this->Ln();
			}
			$this->Cell(300,10,'Total Income: P'.$total.'.00',1,1,'C');
		}
	}
	

$pdf=new PDF();
$header=array('Transaction No','Date','Income');
$data=$pdf->LoadData();

$pdf->AddPage();
$pdf->ShowTable($header,$data);
$pdf->Output();
?>