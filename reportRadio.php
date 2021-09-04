<?php
require('fpdf183/fpdf.php');
$db = new PDO('mysql:host=sql6.freemysqlhosting.net:3306;dbname=sql6434602','sql6434602','RLvMQHHwhZ');
$db2 = new PDO('mysql:host=sql6.freemysqlhosting.net:3306;dbname=sql6434602','sql6434602','RLvMQHHwhZ');
class myPDF extends FPDF{
    
    function header(){
        $this -> Image('img/logo.jpeg',1,1,-400);
        $this -> SetFont('Arial','B',14);
        $this -> Cell(276,5,'Radiographer Report',0,0,'C');
        $this -> Ln();
        $this -> SetFont('Times','',12);
        $this -> Cell(276,10,'X-Ray Unit , District General Hospital, Avissawella.',0,0,'C');
        $this -> Ln();
        $this -> Ln();
        
    }
    function  footer(){
        $this -> SetY(-15);
        $this -> SetFont('Arial','',8);
        $this -> Cell(0,10,'Page '.$this -> PageNo.'/{nb}',0,0,'C');
    }
    function headerTable(){
        $this -> SetFont('Times','B',12);
        $this -> setFillColor(105,105,108);
        $this -> Cell(20,10,'X-Ray ID',1,0,'','C');
        $this -> Cell(20,10,'Patient ID',1,0,'','C');
        $this -> Cell(40,10,'Raadiographer',1,0,'','C');
        $this -> Cell(30,10,'Region',1,0,'','C');
        $this -> Cell(40,10,'Sub Region',1,0,'','C');
        $this -> Cell(36,10,'Views',1,0,'','C');
        $this -> Cell(36,10,'Date',1,0,'','C');
        $this -> Ln();
    }
    function viewTable($db){
        $this -> SetFont('Times','',12);
        $patID=$_POST["patID"];
        $stmt = $db -> query("SELECT `xray_id`,`xray_patid`, `xray_radid`, `xray_Region`, `xray_subRegion`, `views`, `date` FROM `xray` WHERE `xray_patid`='".$patID."'");
        while($data = $stmt->fetch(PDO :: FETCH_OBJ)){
            $this -> Cell(20,10,$data -> xray_id,1,0,'C');
            $this -> Cell(20,10,$data -> xray_patid,1,0,'C');
            $this -> Cell(40,10,$data -> xray_radid,1,0,'C');
            $this -> Cell(30,10,$data -> xray_Region,1,0,'C');
            $this -> Cell(40,10,$data -> xray_subRegion,1,0,'C');
            $this -> Cell(36,10,$data -> views,1,0,'C');
            $this -> Cell(36,10,$data -> date,1,0,'C');
            $this -> Ln();
        }
    }
    function headerTable2(){
        $this -> SetFont('Times','B',12);
        $this -> setFillColor(105,105,108);
        $this -> Cell(40,10,'First Name',1,0,'','C');
        $this -> Cell(40,10,'Last Name',1,0,'','C');
        $this -> Cell(30,10,'Age',1,0,'','C');
        $this -> Cell(30,10,'Gender',1,0,'','C');
        $this -> Cell(30,10,'Phone',1,0,'','C');
        $this -> Ln();
    }
    function viewTable2($db2){
        $this -> SetFont('Times','',12);
        $patID=$_POST["patID"];
        // $patID=5;
        $stmt2 = $db2 -> query("SELECT `pat_fname`, `pat_lname`, `pat_age`, `pat_gender`, `pat_phone` FROM `patient` WHERE `pat_id`='".$patID."'");
        while($data2 = $stmt2->fetch(PDO :: FETCH_OBJ)){
            $this -> Cell(40,10,$data2 -> pat_fname,0,0,'C');
            $this -> Cell(40,10,$data2 -> pat_lname,0,0,'C');
            $this -> Cell(30,10,$data2 -> pat_age,0,0,'C');
            $this -> Cell(30,10,$data2 -> pat_gender,0,0,'C');
            $this -> Cell(30,10,$data2 -> pat_phone,0,0,'C');
            $this->Ln();
        }
    }
}

$pdf = new myPDF();
$pdf -> AliasNbPages();
$pdf -> AddPage('L',A4,0);
$pdf->Ln();
$pdf->Ln();
$pdf -> SetFont('Times','',12);
$pdf ->headerTable2();
$pdf ->viewTable2($db);
$pdf->Ln();
$pdf->Ln();
$pdf ->headerTable();
$pdf ->viewTable($db);
$pdf->Ln();


$pdf -> Output('myfile.pdf','I');
?>