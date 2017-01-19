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
$this->Cell(0,10,'Page '.$this->PageNo().' Income ',0,0,'C');
}
function LoadData()
{
$result = mysql_query("select avg(M.Fee) + avg(P.Amount),avg(M.Fee) + avg(P.Amount)*7,avg(M.Fee) + avg(P.Amount)*30,avg(M.Fee) + avg(P.Amount)*90,avg(M.Fee) + avg(P.Amount)*365 from tblmoney_remit M inner join tblpackage_delivery P 
			where M.RemitStatus='Pending' or M.RemitStatus='Delivered' and P.DeliveryStatus='Pending' or P.DeliveryStatus='Delivered'");

while($row=mysql_fetch_row($result))
{
$data[] = $row;
}
return $data;
}

function FancyTable($header,$data)
{
$result = mysql_query("select SUM(M.Fee) from tblmoney_remit M ");
	if($rows = mysql_fetch_array($result)){
		$SUM = $rows['SUM(M.Fee)'];				
}
$result = mysql_query("select SUM(P.Amount) from tblpackage_delivery P ");
	if($rows = mysql_fetch_array($result)){
		$DEC = $rows['SUM(P.Amount)'];		
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
$this->Cell($w[0],6,"Daily Income : ".round((($SUM + $DEC)/52)/5,2));
$this->Ln();
$this->Cell($w[0],6,"Weekly Income : ".round(($SUM + $DEC)/52,2));
$this->Ln();
$this->Cell($w[0],6,"Monthly Income : ".round(($SUM + $DEC)/12,2));
$this->Ln();
$this->Cell($w[0],6,"Quarterly Income : ".round(($SUM + $DEC)/4,2));
$this->Ln();
$this->Cell($w[0],6,"Annualy Income : ".round($SUM + $DEC,2));
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