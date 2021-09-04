<?php
require('../../config/db.php');

$subRegion1=$_POST["subRegion1"];
$views1=$_POST["views1"]; 
$patID=$_POST["patID"]; 
$doctor=$_POST["doctor"]; 
$Radiographers=$_POST["Radiographers"]; 
$Region1="head"; 
$tday=$_POST["tday"]; 

echo($subRegion1);

if (isset($_POST['sbmit1'])) {
    $patID = mysqli_real_escape_string($con, $patID);
	$doctor    = mysqli_real_escape_string($con, $doctor);
    $Radiographers = mysqli_real_escape_string($con, $Radiographers);
    $Region1    = mysqli_real_escape_string($con, $Region1);
    $subRegion1 = mysqli_real_escape_string($con, $subRegion1);
    $views1    = mysqli_real_escape_string($con, $views1);
    $tday = mysqli_real_escape_string($con, $tday);
	
	$query = "INSERT INTO `xray`(`xray_patid`, `xray_docid`, `xray_radid`, `xray_Region`, `xray_subRegion`, `views`, `date`) 
     VALUES (".$patID.",'".$doctor."','".$Radiographers."','".$Region1."','".$subRegion1."','".$views1."','".$tday."')" ;
    echo($query);
     mysqli_query($con, $query);
    
	echo "Registered successfully";
    header("Location:../../radiographer/viewXRayDetails.php");
	
}

?>

<?php
require('../../config/db.php');

$subRegion2=$_POST["subRegion2"];
$views2=$_POST["views2"]; 
$patID=$_POST["patID"]; 
$doctor=$_POST["doctor"]; 
$Radiographers=$_POST["Radiographers"]; 
$Region2="Chest"; 
$tday=$_POST["tday"]; 

echo($subRegion1);

if (isset($_POST['sbmit2'])) {
    $patID = mysqli_real_escape_string($con, $patID);
	$doctor    = mysqli_real_escape_string($con, $doctor);
    $Radiographers = mysqli_real_escape_string($con, $Radiographers);
    $Region1    = mysqli_real_escape_string($con, $Region2);
    $subRegion1 = mysqli_real_escape_string($con, $subRegion2);
    $views1    = mysqli_real_escape_string($con, $views2);
    $tday = mysqli_real_escape_string($con, $tday);
	
	$query = "INSERT INTO `xray`(`xray_patid`, `xray_docid`, `xray_radid`, `xray_Region`, `xray_subRegion`, `views`, `date`) 
     VALUES (".$patID.",'".$doctor."','".$Radiographers."','".$Region2."','".$subRegion2."','".$views2."','".$tday."')" ;
    echo($query);
     mysqli_query($con, $query);
    
	echo "Registered successfully";
    header("Location:../../radiographer/viewXRayDetails.php");
	
}

?>

<?php
require('../../config/db.php');

$subRegion3=$_POST["subRegion3"];
$views3=$_POST["views3"]; 
$patID=$_POST["patID"]; 
$doctor=$_POST["doctor"]; 
$Radiographers=$_POST["Radiographers"]; 
$Region3="Abdomen"; 
$tday=$_POST["tday"]; 

echo($subRegion1);

if (isset($_POST['sbmit3'])) {
    $patID = mysqli_real_escape_string($con, $patID);
	$doctor    = mysqli_real_escape_string($con, $doctor);
    $Radiographers = mysqli_real_escape_string($con, $Radiographers);
    $Region1    = mysqli_real_escape_string($con, $Region3);
    $subRegion1 = mysqli_real_escape_string($con, $subRegion3);
    $views1    = mysqli_real_escape_string($con, $views3);
    $tday = mysqli_real_escape_string($con, $tday);
	
	$query = "INSERT INTO `xray`(`xray_patid`, `xray_docid`, `xray_radid`, `xray_Region`, `xray_subRegion`, `views`, `date`) 
     VALUES (".$patID.",'".$doctor."','".$Radiographers."','".$Region3."','".$subRegion3."','".$views3."','".$tday."')" ;
    echo($query);
     mysqli_query($con, $query);
    
	echo "Registered successfully";
    header("Location:../../radiographer/viewXRayDetails.php");
	
}

?>

<?php
require('../../config/db.php');

$subRegion4=$_POST["subRegion4"];
$views4=$_POST["views4"]; 
$patID=$_POST["patID"]; 
$doctor=$_POST["doctor"]; 
$Radiographers=$_POST["Radiographers"]; 
$Region4="Spine"; 
$tday=$_POST["tday"]; 

echo($subRegion1);

if (isset($_POST['sbmit4'])) {
    $patID = mysqli_real_escape_string($con, $patID);
	$doctor    = mysqli_real_escape_string($con, $doctor);
    $Radiographers = mysqli_real_escape_string($con, $Radiographers);
    $Region1    = mysqli_real_escape_string($con, $Region4);
    $subRegion1 = mysqli_real_escape_string($con, $subRegion4);
    $views1    = mysqli_real_escape_string($con, $views4);
    $tday = mysqli_real_escape_string($con, $tday);
	
	$query = "INSERT INTO `xray`(`xray_patid`, `xray_docid`, `xray_radid`, `xray_Region`, `xray_subRegion`, `views`, `date`) 
     VALUES (".$patID.",'".$doctor."','".$Radiographers."','".$Region4."','".$subRegion4."','".$views4."','".$tday."')" ;
    echo($query);
     mysqli_query($con, $query);
    
	echo "Registered successfully";
    header("Location:../../radiographer/viewXRayDetails.php");
	
}

?>

<?php
require('../../config/db.php');

$subRegion5=$_POST["subRegion5"];
$views5=$_POST["views5"]; 
$patID=$_POST["patID"]; 
$doctor=$_POST["doctor"]; 
$Radiographers=$_POST["Radiographers"]; 
$Region5="Pelvis"; 
$tday=$_POST["tday"]; 

echo($subRegion1);

if (isset($_POST['sbmit5'])) {
    $patID = mysqli_real_escape_string($con, $patID);
	$doctor    = mysqli_real_escape_string($con, $doctor);
    $Radiographers = mysqli_real_escape_string($con, $Radiographers);
    $Region1    = mysqli_real_escape_string($con, $Region5);
    $subRegion1 = mysqli_real_escape_string($con, $subRegion5);
    $views1    = mysqli_real_escape_string($con, $views5);
    $tday = mysqli_real_escape_string($con, $tday);
	
	$query = "INSERT INTO `xray`(`xray_patid`, `xray_docid`, `xray_radid`, `xray_Region`, `xray_subRegion`, `views`, `date`) 
     VALUES (".$patID.",'".$doctor."','".$Radiographers."','".$Region5."','".$subRegion5."','".$views5."','".$tday."')" ;
    echo($query);
     mysqli_query($con, $query);
    
	echo "Registered successfully";
    header("Location:../../radiographer/viewXRayDetails.php");
	
}

?>

<?php
require('../../config/db.php');

$subRegion6=$_POST["subRegion6"];
$views6=$_POST["views6"]; 
$patID=$_POST["patID"]; 
$doctor=$_POST["doctor"]; 
$Radiographers=$_POST["Radiographers"]; 
$Region6="U/Limb"; 
$tday=$_POST["tday"]; 

echo($subRegion1);

if (isset($_POST['sbmit6'])) {
    $patID = mysqli_real_escape_string($con, $patID);
	$doctor    = mysqli_real_escape_string($con, $doctor);
    $Radiographers = mysqli_real_escape_string($con, $Radiographers);
    $Region1    = mysqli_real_escape_string($con, $Region6);
    $subRegion1 = mysqli_real_escape_string($con, $subRegion6);
    $views1    = mysqli_real_escape_string($con, $views6);
    $tday = mysqli_real_escape_string($con, $tday);
	
	$query = "INSERT INTO `xray`(`xray_patid`, `xray_docid`, `xray_radid`, `xray_Region`, `xray_subRegion`, `views`, `date`) 
     VALUES (".$patID.",'".$doctor."','".$Radiographers."','".$Region6."','".$subRegion6."','".$views6."','".$tday."')" ;
    echo($query);
     mysqli_query($con, $query);
    
	echo "Registered successfully";
    header("Location:../../radiographer/viewXRayDetails.php");
	
}

?>

<?php
require('../../config/db.php');

$subRegion7=$_POST["subRegion7"];
$views7=$_POST["views7"]; 
$patID=$_POST["patID"]; 
$doctor=$_POST["doctor"]; 
$Radiographers=$_POST["Radiographers"]; 
$Region7="L/Limb"; 
$tday=$_POST["tday"]; 

echo($subRegion1);

if (isset($_POST['sbmit7'])) {
    $patID = mysqli_real_escape_string($con, $patID);
	$doctor    = mysqli_real_escape_string($con, $doctor);
    $Radiographers = mysqli_real_escape_string($con, $Radiographers);
    $Region1    = mysqli_real_escape_string($con, $Region7);
    $subRegion1 = mysqli_real_escape_string($con, $subRegion7);
    $views1    = mysqli_real_escape_string($con, $views7);
    $tday = mysqli_real_escape_string($con, $tday);
	
	$query = "INSERT INTO `xray`(`xray_patid`, `xray_docid`, `xray_radid`, `xray_Region`, `xray_subRegion`, `views`, `date`) 
     VALUES (".$patID.",'".$doctor."','".$Radiographers."','".$Region7."','".$subRegion7."','".$views7."','".$tday."')" ;
    echo($query);
     mysqli_query($con, $query);
    
	echo "Registered successfully";
    header("Location:../../radiographer/viewXRayDetails.php");
	
}

?>