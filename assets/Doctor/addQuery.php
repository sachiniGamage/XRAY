<?php
require('../../config/config.php');
// $myInput=$_POST["myInput"];
$PID=$_POST["PID"];
$query=$_POST["query"]; 
$History=$_POST["History"]; 



if (isset($_POST['sbmit'])) {
	// removes backslashes
	// $myInput = stripslashes($_REQUEST['myInput']);
	echo($myInput);
	// $PID = stripslashes($_REQUEST['PID']);
    // $myInput = mysqli_real_escape_string($con, $myInput);
    // echo($myInput);
	$PID = mysqli_real_escape_string($con, $PID);
    echo($PID);
	$query    = mysqli_real_escape_string($con, $query);
    echo($query);
	$History = mysqli_real_escape_string($con, $History);
    echo($History);
	
	
	$query = "INSERT INTO `query`(`pat_id`, `query`, `history`) VALUES (".$PID.",'".$query."','".$History."')" ;
    echo($query);
     mysqli_query($con, $query);
    
	echo "Registered successfully";
    header("Location:../../Doctor/viewPatient.php");
	
}
?>

<?php
require('../../config/config.php');
// $myInput=$_POST["myInput"];
$PID=$_POST["PID"];
$QID=$_POST["QID"];
$query=$_POST["query"]; 
$History=$_POST["History"]; 



if (isset($_POST['updt'])) {
	// removes backslashes
	// $myInput = stripslashes($_REQUEST['myInput']);
	echo($myInput);
	// $PID = stripslashes($_REQUEST['PID']);
    // $myInput = mysqli_real_escape_string($con, $myInput);
    // echo($myInput);
	$PID = mysqli_real_escape_string($con, $PID);
    echo($PID);
	$query    = mysqli_real_escape_string($con, $query);
    echo($query);
	$History = mysqli_real_escape_string($con, $History);
    echo($History);
	
	
	$query = "UPDATE `query` SET `pat_id`='".$PID."', `query`='".$query."',`history`='".$History."' WHERE `query_id` = ".$QID." " ;
    echo($query);
     mysqli_query($con, $query);
    
	echo "Registered successfully";
    header("Location:../../Doctor/viewPatient.php");
	
}
?>