<?php
require('fpdf183/fpdf.php');
include 'config/config.php';
$pdf = new FPDF();
$pdf->AddPage();
// make a dummy empty cell
$pdf->Cell(109,10,'',0,1);

//Invoice content
class PDF extends FPDF{

	function Header(){
		$this->SetFont('Arial','B',20);
		$this->Cell(12);
		$this->Cell(100,10,'Patient List',0,1);
		$this->Ln(5);
		$this->SetFont('Arial','',10);
		$this->SetFillColor(100,100,255);
		$this->SetDrawColor(50,50,100);
		$this->Cell(10,5,'ID',1,0,'',true);
		$this->Cell(30,5,'First Name',1,0,'',true);
		$this->Cell(20,5,'Last Name',1,0,'',true);
		$this->Cell(10,5,'Age',1,0,'',true);
		//$this->Cell(20,5,'Gender',1,0,'',true);
		$this->Cell(60,5,'Address',1,0,'',true);
		$this->Cell(25,5,'Phone',1,0,'',true);
		$this->Cell(60,5,'Email',1,1,'',true);

	}
	function Footer(){

		$this->SetY(-15);
		$this->SetFont('Arial','',0);
		$this->Cell(0,10,'Page'.$this->PageNo()."/{pages}",0,0,'C');

	}
}
$pdf = new PDF('p','mm','A4');
$pdf->AliasNbPages('{pages}');
$pdf->AddPage();
$pdf->SetFont('Arial','',9);
$pdf->SetDrawColor(50,50,100);
$query=mysqli_query($con,"select * from patientt");
while($data=mysqli_fetch_array($query)){

	$pdf->Cell(10,5,$data['pat_id'],1,0);
	$pdf->Cell(30,5,$data['pat_fname'],1,0);

	$pdf->Cell(20,5,$data['pat_lname'],1,0);
	$pdf->Cell(10,5,$data['pat_age'],1,0);
	//$pdf->Cell(20,5,$data['pat_gender'],1,0);
	$pdf->Cell(60,5,$data['pat_address'],1,0);
	$pdf->Cell(25,5,$data['pat_phone'],1,0);
	$pdf->Cell(60,5,$data['pat_email'],1,1);
}

$pdf->Output();