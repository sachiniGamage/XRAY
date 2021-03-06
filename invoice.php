<?php
require('fpdf183/fpdf.php');
include 'config/config.php';
//Get Invoice data
$query = mysqli_query($con,"select * from appointment where app_id = '".$_GET['app_id']."'");
$invoice = mysqli_fetch_array($query);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
//set iamge in the page
$pdf->Image('images/logo.jpeg',130,30,80);

$pdf->Cell(130,6,'District General Hospital,Awissawella',0,0);
$pdf->Cell(59,6,'APPOINTMENT INVOICE',0,1);
$pdf->SetFont('Arial','',12);
$pdf->Cell(130,5,'Avissawella Road,',0,0);
$pdf->Cell(59,5,'',0,1);

$pdf->Cell(130,5,'Avissawella,Sri Lanka.',0,0);
$pdf->Cell(25,5,'Date',0,0);
$pdf->Cell(34,5,$invoice['app_date'],0,1);

$pdf->Cell(130,5,'0362 222 261',0,0);
$pdf->Cell(25,5,'Appointment',0,0);
$pdf->Cell(34,5, $invoice['app_id'],0,1);

$pdf->Cell(130,5,'Fax [+362 222 261]',0,0);
$pdf->Cell(25,5,'Patient ID',0,0);
$pdf->Cell(34,5,$invoice['app_patid'],0,1);
//make dummy empty vertical space

$pdf->cell(189,10,'',0,1);//end
$pdf->cell(189,10,'',0,1);

$pdf->Cell(100,5,'Appointment to  :  ',0,1);

//add summy cell at begining of each line 

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,$invoice['app_patfname'],0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,$invoice['app_patlname'],0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,$invoice['app_date'],0,1);

$pdf->Cell(10,5,'',0,0);
$pdf->Cell(90,5,$invoice['app_time'],0,1);

// make a dummy empty cell
$pdf->Cell(109,10,'',0,1);


//Invoice content
$pdf->SetFont('Arial','B',12);

$pdf->Cell(100,5,'Descrption',1,0);
$pdf->Cell(30,5,'Type',1,0);
$pdf->Cell(34,5,'Date',1,0);
$pdf->Cell(25,5,'Time',1,1);

$pdf->SetFont('Arial','',12);

//numbers are right aligned so we give R after new line

$pdf->Cell(100,5,$invoice['app_details'],1,0);
$pdf->Cell(30,5,$invoice['app_type'],1,0);
$pdf->Cell(34,5,$invoice['app_date'],1,0);
$pdf->Cell(25,5,$invoice['app_time'],1,1,'R');//end line

$pdf->Cell(100,5,'',0,0);
$pdf->Cell(50,5,'Channel Charges',1,0);
$pdf->Cell(10,5,'Rs.',1,0);
$pdf->Cell(30,5,'1,000.00',1,1,'R');

$pdf->Cell(100,5,'',0,0);
$pdf->Cell(50,5,'Dr Charges',1,0);
$pdf->Cell(10,5,'Rs',1,0);
$pdf->Cell(30,5,'3500.00',1,1,'R');

$pdf->Cell(100,5,'',0,0);
$pdf->Cell(50,5,'Hospital Charges',1,0);
$pdf->Cell(10,5,'Rs',1,0);
$pdf->Cell(30,5,'200.00',1,1,'R');

$pdf->Cell(100,5,'',0,0);
$pdf->Cell(50,5,'Total',1,0);
$pdf->Cell(10,5,'Rs',1,0);
$pdf->Cell(30,5,'4,700.00',1,1,'R');//end line

$pdf->Output();

?>

