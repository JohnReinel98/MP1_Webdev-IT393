<?php
session_start();
require('recptpdf.php');
include ("connect.php");
class PDF extends FPDF
{
function Header()
{
$this->Image('Assets/pdflogo.jpg',5,0,50,50);
$this->SetFont('Arial','B',15);
$this->Cell(80);
$this->Cell(-20,15,'Converge Logistics',0,0,'C');
$this->Cell(25,30,'Income Computation',0,0,'C');

$this->Ln(20);
}

function Footer()
{
$this->SetY(-15);
$this->SetFont('Arial','I',8);
$this->Cell(0,10,'Converge Logistics ',0,0,'C');
}
function LoadData()
{
$end=$_SESSION['ending'];
$sta=$_SESSION['start'];

$result=mysql_query("select DateRemitted,TrackNo,Fee from tblmoney_remit where DateRemitted between '$sta' and '$end'");
	while($row=mysql_fetch_row($result)) { 
		$data[] = $row;
	}
	$result2=mysql_query("select DateDelivered,TrackNo,Amount from tblpackage_delivery where DateDelivered between '$sta' and '$end'");	
		while($row2=mysql_fetch_row($result2)) { 
			$data[] = $row2;
		}
		return $data;
}

function FancyTable($header,$data)
{

$total=$_SESSION['total'];
$this->SetFillColor(66,155,244);
$this->SetTextColor(255);
$this->SetLineWidth(.3);
$this->SetFont('','B');
$this->SetY(50);
$this->SetX(18);

//Header
$w=array(40,40,40);
for($i=0;$i<count($header);$i++)
$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
$this->Ln();
//Color and font restoration
$this->SetFillColor(224,235,255);
$this->SetTextColor(0);
$this->SetFont('');
//Data
$fill=false;
foreach($header as $col)
		
			foreach($data as $row)
			{
				foreach($row as $col)
					$this->Cell(40,6,$col,1);
				$this->Ln();
			}
			$this->Cell(120,10,'Total Income: P'.$total.'.00',1,1,'C');
}
}
$pdf=new PDF();
//Column titles
$header=array('Date','Tracking No.','Income');
//Data loading
$data=$pdf->LoadData();
$pdf->SetFont('Arial','',12);
$pdf->AddPage();
$pdf->FancyTable($header,$data);
$pdf->Output();
$_SESSION['recptsession']=null;
?>