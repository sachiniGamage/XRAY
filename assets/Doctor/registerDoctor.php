<?php
    // require('DBConnection.php');
    require('../../config/config.php');

    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {
        // removes backslashes
        $doc_fname = stripslashes($_POST['doc_fname']);
        //escapes special characters in a string
        $doc_fname = mysqli_real_escape_string($con, $doc_fname);
        $doc_lname = stripslashes($_POST['doc_lname']);
        $doc_lname = mysqli_real_escape_string($con, $doc_lname);
        $doc_post    = stripslashes($_POST['doc_post']);
        $doc_post    = mysqli_real_escape_string($con, $doc_post);
        $doc_phone = stripslashes($_POST['doc_phone']);
        $doc_phone = mysqli_real_escape_string($con, $doc_phone);
        $doc_email = stripslashes($_POST['doc_email']);
        //escapes special characters in a string
        $doc_email = mysqli_real_escape_string($con, $doc_email);
        
        $query = "INSERT INTO `doctor`(`doc_fname`, `doc_lname`, `doc_post`, `doc_phone`, `doc_email`) 
        VALUES ('".$doc_fname."','".$doc_lname."','".$doc_post."','".$doc_phone."','".$doc_email."')" ;
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "Registered successfully";
            header("Location:../../Doctor/registerDoctor.php");

        } else {
            echo "Registration failed";
            header("Location:../../Doctor/registerDoctor.php");
        }
    } 
?>