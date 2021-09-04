
<?php
  require('../../config/db.php');


  if(isset($_POST['login_doctor'])) {
    // username and password sent from form 
    
    $myusername = mysqli_real_escape_string($con,$_POST['email']);
    $mypassword = mysqli_real_escape_string($con,$_POST['psw']); 

    if($myusername !="" ||  $mypassword !="" || $mypassword<=8){
    
    $sql = "SELECT `email`, `password` FROM `DoctorRegister` WHERE email='".$myusername."' AND `password`='".$mypassword."'";
    $result = mysqli_query($con,$sql);
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
  
    if($count == 1) {
       
       header("location: ../../Doctor/viewPatient.php");

    }else {
       $error = "Your Login Name or Password is invalid";
       header("location: ../../index.php");
    }
  }
  else {
    $error = "Your Login Name or Password is invalid";
    header("location: ../../index.php");
    
 }
}


?>
