<?php
    require('../../config/config.php');

$fname=$_POST["fname"];
$lname=$_POST["lname"]; 
$age=$_POST["age"];
$gender=$_POST["gender"];
$address=$_POST["address"]; 
$phone=$_POST["phone"];
$email=$_POST["email"];

    // When form submitted, insert values into the database.
    if (isset($_POST['submitt'])) {
        // removes backslashes
        $fname = mysqli_real_escape_string($con, $fname);
        $lname = mysqli_real_escape_string($con, $lname);
        $age    = mysqli_real_escape_string($con, $age);
        $gender = mysqli_real_escape_string($con, $gender);
        //escapes special characters in a string
        $address = mysqli_real_escape_string($con, $address);
        //escapes special characters in a string
        $phone = mysqli_real_escape_string($con, $phone);
        $email = mysqli_real_escape_string($con, $email);
        
        $query = "INSERT INTO `patient`( `pat_fname`, `pat_lname`, `pat_age`, `pat_gender`, `pat_address`, `pat_phone`,`pat_information`,`pat_email`,`user_id`) VALUES ('".$fname."','".$lname."','".$age."','".$gender."','".$address."','".$phone."','information','".$email."','0')" ;
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "Registered successfully";
            header("Location:../../Doctor/registerPatient.php");
        } else {
            echo "Registration failed";
            header("Location:../../Doctor/registerPatient.php");
        }
    }
?>