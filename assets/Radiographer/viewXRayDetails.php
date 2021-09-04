<?php
require('../../config/db.php');
$patID=$_POST["patID"];
$tday=$_POST["tday"]; 

if (isset($_POST['srch'])) {

    $query ="SELECT `xray_id`, `xray_patid`, `xray_docid`, `xray_radid`, `xray_Region`, `xray_subRegion`, `views`, `date` FROM `xray` WHERE `xray_patid`='".$patID."' AND `date`='".$tday."'";
    echo($sql);
    $result = mysqli_query($con,$query);
    
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
            $xray_id = $row['xray_id'];
            $xray_id = mysqli_real_escape_string($con, $xray_id);
            $xray_patid = $row['xray_patid'];
            $xray_patid = mysqli_real_escape_string($con, $xray_patid);
            $xray_docid = $row['xray_docid'];
            $xray_docid = mysqli_real_escape_string($con, $xray_docid);
            $xray_Region = $row['xray_Region'];
            $xray_Region = mysqli_real_escape_string($con, $xray_Region);
            $xray_subRegion = $row['xray_subRegion'];
            $xray_subRegion = mysqli_real_escape_string($con, $xray_subRegion);
            $views = $row['views'];
            $views = mysqli_real_escape_string($con, $views);
            $date = $row['date'];
            $date = mysqli_real_escape_string($con, $date);

            $output .= '<div> <h5>XRAY Id :  '.$xray_id.' </h5></div>
             <div> <h5>Patient ID :  '.$xray_patid.' </h5> </div>
            <div> <h5>Doctor ID :  '.$xray_docid.' </h5> </div>
            <div> <h5>Region :  '.$xray_Region.' </h5> </div> 
            <div><h5>SubRegion :  '.$xray_subRegion.' </h5> </div>
            <div><h5>Views :  '.$views.' </h5> </div>	
            <div><h5>Date :  '.$date.' </h5> </div>		'	;

            header("Location:../../radiographer/viewRadiographer.php");
        }
        
        
    }else{
        $output = 'There was no search result';
        header("Location:../../radiographer/viewRadiographer.php");
    }
}
?>