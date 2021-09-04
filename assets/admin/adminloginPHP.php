
<?php
session_start();

    require '../../config/config.php';


  if(isset($_POST['loginAdmin'])) {
    // username and password sent from form 
    
    $myusername = mysqli_real_escape_string($con,$_POST['admin_email']);
    $mypassword = mysqli_real_escape_string($con,$_POST['admin_pass']); 

    if($myusername !="" ||  $mypassword !="" || $mypassword<=8){
    
    $sql = "SELECT `admin_email`, `admin_pass` FROM `adminlogin` WHERE admin_email='".$myusername."' AND `admin_pass`='".$mypassword."'";
    $result = mysqli_query($con,$sql);
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
  
    if($count == 1) {
       
       header("location: ../../adminpanel.php");

    }else {
       $error = "Your Login Name or Password is invalid";
       header("location: ../../adminlogin.php");
    }
  }
  else {
    $error = "Your Login Name or Password is invalid";
    header("location: ../../adminlogin.php");
    
 }
}

