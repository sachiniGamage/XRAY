
<?php
  require('../../config/config.php');


  if(isset($_POST['login_radiographer'])) {
    // username and password sent from form 
    
    $myusername = mysqli_real_escape_string($con,$_POST['email']);
    $mypassword = mysqli_real_escape_string($con,$_POST['psw']); 
    
    $sql = "SELECT `email`, `password` FROM `radiographerRegister` WHERE email='".$myusername."' AND `password`='".$mypassword."'";
    $result = mysqli_query($con,$sql);
    
    $count = mysqli_num_rows($result);
    
    // If result matched $myusername and $mypassword, table row must be 1 row
  
    if($count == 1) {
       
       header("location: ../../radiographer/viewQuery.php");

    }
  
  else {
    $error = "Your Login Name or Password is invalid";
    header("location: ../../login.php");
    
 }
}


?>
