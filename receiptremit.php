<?php
session_start();
require('recptpdf.php');
include ("connect.php");
class PDF extends FPDF
{
function Header()
{
date_default_timezone_set("Asia/Manila");
//Logo
$this->Image('Assets/pdflogo.jpg',5,0,50,50);
//Arial bold 15
$this->SetFont('Arial','B',15);
//Move to the right
$this->Cell(80);
//Title
$this->Cell(-20,15,'Converge Logistics',0,0,'C');
$this->Cell(25,30,'Money Remmitance Receipt',0,0,'C');
//Line break
$this->Ln(20);
}
//Page footer
function Footer()
{
//Position at 1.5 cm from bottom
$this->SetY(-15);
//Arial italic 8
$this->SetFont('Arial','I',8);
//Page number
$this->Cell(0,10,'Money Remmitance Receipt',0,0,'C');
}
function LoadData()
{
$remID=$_SESSION['recptsession'];
$result=mysql_query("select * from tblmoney_remit where TrackNo='$remID'");
while($row=mysql_fetch_row($result))
{
$data[] = $row;
}
return $data;
}
//Colored table
function FancyTable($header,$data)
{

$remID=$_SESSION['recptsession'];
$result = mysql_query("select * from tblmoney_remit where TrackNo='$remID'");
if($rows = mysql_fetch_array($result)){
$id = $rows['ID'];
$DateR = $rows['DateDelivered'];
$consignor = $rows['Consignor'];
$consignorNo = $rows['ConsignorNo'];
$consignee = $rows['Consignee'];
$consigneeEmail = $rows['ConsigneeEmail'];
$consigneeNo = $rows['ConsigneeNo'];
$amount = $rows['Amount'];
$fee = $rows['Fee'];
$branch = $rows['Branch'];
$status = $rows['Status'];
}
//Colors, line width and bold font
$this->SetFillColor(66,155,244);
$this->SetTextColor(255);
//$this->SetDrawColor(128,0,0);
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
//$this->Cell($w[0],6,"",'LR',0,'C',$fill);
$this->Ln();
$this->Cell($w[0],6," Date:".date("M/d/Y"),0,0,'C');
$this->Ln();
$this->Cell($w[0],6," Time:".date("h:i"),0,0,'C');
$this->Ln();
$this->Cell($w[0],6,"Consignor : ".$consignor);
$this->Ln();
$this->Cell($w[0],6,"Consignor's Contact Number: ".$consignorNo);
$this->Ln();
$this->Cell($w[0],6,"Consignee's Name: ".$consignee);
$this->Ln();
$this->Cell($w[0],6,"Consignee's Email: ".$consigneeEmail);
$this->Ln();
$this->Cell($w[0],6,"Consignee's Contact Number: ".$consigneeNo);
$this->Ln();
$this->Cell($w[0],6,"Amount: ".$amount);
$this->Ln();
$this->Cell($w[0],6,"Fee: ".$fee);
$this->Ln();
$this->Cell($w[0],6,"Branch: ".$branch);
$this->Ln();
$fill=!$fill;
}
//$this->Cell(array_sum($w),0,'','T');
}
}
$pdf=new PDF();
//Column titles
$header=array(' RECEIPT');
//Data loading
$data=$pdf->LoadData();
$pdf->SetFont('Courier','',12);
$pdf->AddPage();
$pdf->FancyTable($header,$data);
$pdf->Output();
$_SESSION['recptsession']=null;
?>