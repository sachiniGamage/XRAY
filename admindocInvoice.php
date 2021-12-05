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
		$this->SetFont('Arial','B',16);
		$this->Cell(12);
		$this->Cell(100,10,'Doctors List',0,1);
		$this->Ln(5);
		$this->SetFont('Arial','',12);
		$this->SetFillColor(100,100,255);
		$this->SetDrawColor(50,50,100);
		$this->Cell(10,5,'ID',1,0,'',true);
		$this->Cell(45,5,'First Name',1,0,'',true);
		$this->Cell(35,5,'Last Name',1,0,'',true);
		$this->Cell(25,5,'Post',1,0,'',true);
		$this->Cell(30,5,'Phone',1,0,'',true);
		$this->Cell(50,5,'Email',1,1,'',true);
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

$query=mysqli_query($con,"select * from doctor");
while($data=mysqli_fetch_array($query)){

	$pdf->Cell(10,5,$data['doc_id'],1,0);
	$pdf->Cell(45,5,$data['doc_fname'],1,0);
	$pdf->Cell(35,5,$data['doc_lname'],1,0);
	$pdf->Cell(25,5,$data['doc_post'],1,0);
	$pdf->Cell(30,5,$data['doc_phone'],1,0);
	$pdf->Cell(50,5,$data['doc_email'],1,1);

}

$pdf->Output();
