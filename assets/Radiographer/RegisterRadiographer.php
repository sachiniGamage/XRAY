<?php
    // require('DBConnection.php');
    require('../../config/db.php');

    $rad_fname  = $_POST["rad_fname"];
    $rad_lname =$_POST["rad_lname"];
    $rad_email =$_POST["rad_email"];
    $phone =$_POST["phone"];


    // When form submitted, insert values into the database.
    if (isset($_POST['regstr'])) {
        $rad_fname = mysqli_real_escape_string($con, $rad_fname);
        $rad_lname = mysqli_real_escape_string($con, $rad_lname);
        $rad_email    = mysqli_real_escape_string($con, $rad_email);
        $phone = mysqli_real_escape_string($con, $phone);
        
        $query = "INSERT INTO `Radiographer`(`rad_fname`, `rad_lname`, `phone`,`email`) 
        VALUES ('".$rad_fname."','".$rad_lname."','".$phone."','".$rad_email."')" ;

        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "Registered successfully";
            header("Location:../../radiographer/registerRadio.php");

        } else {
            echo "Registration failed";
            header("Location:../../radiographer/registerRadio.php");
        }
    } 
?>