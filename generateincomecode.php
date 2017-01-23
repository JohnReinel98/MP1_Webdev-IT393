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
$sql = mysql_query("select SUM(M.Fee), SUM(P.Amount) from tblmoney_remit M inner join tblpackage_delivery P ");

while($row=mysql_fetch_row($sql))
{
$data[] = $row;
}
return $data;
}

function FancyTable($header,$data)
{
$sql = mysql_query("select SUM(M.Fee), SUM(P.Amount) from tblmoney_remit M inner join tblpackage_delivery P ");
	if($row = mysql_fetch_array($sql)){
		$sum1 = $row['SUM(M.Fee)'];
		$sum2 = $row['SUM(P.Amount)'];
}

$this->SetFillColor(66,155,244);
$this->SetTextColor(255);
$this->SetLineWidth(.3);
$this->SetFont('','B');
$this->SetY(50);
$this->SetX(20);

//Header
$w=array(120);
for($i=0;$i<count($header);$i++)
$this->Cell($w[$i],7,$header[$i],1,0,'C',true);
$this->Ln();
//Color and font restoration
$this->SetFillColor(224,235,255);
$this->SetTextColor(0);
$this->SetFont('');
//Data
$fill=false;
foreach($data as $row)
{
$this->Ln();
$this->Cell($w[0],6,"Daily Income : ".round((($sum1 + $sum2)/52)/5,2));
$this->Ln();
$this->Cell($w[0],6,"Weekly Income : ".round(($sum1 + $sum2)/52,2));
$this->Ln();
$this->Cell($w[0],6,"Monthly Income : ".round(($sum1 + $sum2)/12,2));
$this->Ln();
$this->Cell($w[0],6,"Quarterly Income : ".round(($sum1 + $sum2)/4,2));
$this->Ln();
$this->Cell($w[0],6,"Annualy Income : ".round($sum1 + $sum2,2));
$this->Ln();
$fill=!$fill;
}
}
}
$pdf=new PDF();
//Column titles
$header=array(' INCOME');
//Data loading
$data=$pdf->LoadData();
$pdf->SetFont('Arial','',12);
$pdf->AddPage();
$pdf->FancyTable($header,$data);
$pdf->Output();
$_SESSION['recptsession']=null;
?>