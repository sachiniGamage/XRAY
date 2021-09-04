<?php
require('fpdf183/fpdf.php');
require('config/db.php');
$db = new PDO('mysql:host=localhost:3306;dbname=xrayUnit','phpmyadmin','Root@123');

$patID=$_POST["patID"];

class myPDF extends FPDF{
    function header(){
        $this -> Image('img/logo.jpeg',10,6);
        $this -> SetFont('Arial','B',14);
        $this -> Cell(276,5,'Radiographer Report',0,0,'C');
        $this -> Ln();
        $this -> SetFont('Times','',12);
        $this -> Cell(276,10,'X-Ray Unit , District General Hospital, Avissawella.',0,0,'C');
        $this -> Ln();
    }
    function  footer(){
        $this -> SetY(-15);
        $this -> SetFont('Arial','',8);
        $this -> Cell(0,10,'Page '.$this -> PageNo.'/{nb}',0,0,'C');
    }
    function headerTable(){
        $this -> SetFont('Times','B',12);
        $this -> Cell(20,10,'ID',1,0,'C');
        $this -> Cell(40,10,'Raadiographer',1,0,'C');
        $this -> Cell(30,10,'Region',1,0,'C');
        $this -> Cell(40,10,'Sub Region',1,0,'C');
        $this -> Cell(36,10,'Views',1,0,'C');
        $this -> Cell(36,10,'Date',1,0,'C');
        $this -> Ln();
    }
    function viewTable($db){
        $this -> SetFont('Times','',12);
       
            // $query = "SELECT `xray_patid`, `xray_radid`, `xray_Region`, `xray_subRegion`, `views`, `date` FROM `xray` WHERE `xray_patid`='".$patID."'";
            $stmt = $db -> $query("SELECT `pat_fname`, `pat_lname`, `pat_age`, `pat_gender`, `pat_phone` FROM `patient` WHERE `pat_id`=5");
            
                while($data = $stmt->fetch(PDO :: FETCH_OBJ)){{
                    $this -> Cell(20,10,$data -> xray_patid,1,0,'C');
                    $this -> Cell(20,10,$data -> xray_radid,1,0,'C');
                    $this -> Cell(40,10,$data -> xray_Region,1,0,'C');
                    $this -> Cell(40,10,$data -> xray_subRegion,1,0,'C');
                    $this -> Cell(40,10,$data -> views,1,0,'C');
                    $this -> Cell(30,10,$data -> date,1,0,'C');
                    $this -> Ln();
                }
            }
    }
}

$pdf = new myPDF();
$pdf -> AliasNbPages();
$pdf -> AddPage('L',A4,0);
$pdf ->headerTable();
$pdf ->viewTable($db);
$pdf -> Output('myfile.pdf','D');
?>