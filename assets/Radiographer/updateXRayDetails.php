<?php
require('../../config/config.php');
// $myInput=$_POST["myInput"];
$xrayID=$_POST["xrayID"];
$patID=$_POST["patID"]; 
$Radiographers=$_POST["Radiographers"]; 
$doctor=$_POST["doctor"];
$Region=$_POST["Region"]; 
$subRegion=$_POST["subRegion"]; 
$views=$_POST["views"]; 
$tday=$_POST["tday"]; 




if (isset($_POST['updt'])) {
	$patID = mysqli_real_escape_string($con, $patID);
	$doctor    = mysqli_real_escape_string($con, $doctor);
	$Radiographers = mysqli_real_escape_string($con, $Radiographers);
    $Region = mysqli_real_escape_string($con, $Region);
	$subRegion    = mysqli_real_escape_string($con, $subRegion);
	$views = mysqli_real_escape_string($con, $views);
    $tday = mysqli_real_escape_string($con, $tday);
	
	$query = "UPDATE `xray` SET `xray_patid`='".$patID."',
    `xray_docid`='".$doctor."',`xray_radid`='".$Radiographers."',
    `xray_Region`='".$Region."',`xray_subRegion`='".$subRegion."',
    `views`='".$views."',`date`='".$tday."' 
    WHERE `xray_id`='".$xrayID."' " ;
    echo($query);
     mysqli_query($con, $query);
    
	echo "Updated successfully";
    header("Location:../../radiographer/updateXRayDetails.php");
	
}
?>