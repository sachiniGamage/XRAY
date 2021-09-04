<?php
session_start();

    //DB connection
    require '../../config/config.php';

   

    $admin_email=$_POST["admin_email"];
    $admin_pass=$_POST["admin_pass"]; 
    $admin_conpass=$_POST["admin_conpass"]; 

    // When form submitted, insert values into the database.
    if (isset($_POST['registerAdmin'])) {
        $admin_email = mysqli_real_escape_string($con, $admin_email);
        $admin_pass = mysqli_real_escape_string($con, $admin_pass);
        $admin_conpass = mysqli_real_escape_string($con, $admin_conpass);
        if($admin_pass == $admin_conpass){
        
        $query = "INSERT INTO adminlogin (admin_email, admin_pass) VALUES ('".$admin_email."','".$admin_pass."')" ;
        $result   = mysqli_query($con, $query);
        
        if($result){
    
              header("Location:../../adminlogin.php?update=success");
        } else {
            header("Location:../../adminlogin.php?update=fail");
        }
    } else {
        header("Location:../../adminlogin.php?Error=No_Access");
    }
  } else {
        header("Location:../../adminlogin.php?update=failss");
    } 
    
?>