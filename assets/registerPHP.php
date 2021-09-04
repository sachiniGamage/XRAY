<?php
    
    //start session
    session_start();

    //DB connection
    require '../config/config.php';

    //check the form data submission
    if (isset($_POST['registration'])) {
        $cus_fname = mysqli_real_escape_string($con, $_POST['cus_fname']);
        $cus_lname = mysqli_real_escape_string($con, $_POST['cus_lname']);
        $cus_bday = mysqli_real_escape_string($con, $_POST['cus_bday']);
        $cus_address = mysqli_real_escape_string($con, $_POST['cus_address']);
        $cus_gender = mysqli_real_escape_string($con, $_POST['cus_gender']);
        $cus_email = mysqli_real_escape_string($con, $_POST['cus_email']);
        $cus_username = mysqli_real_escape_string($con, $_POST['cus_username']);
        $cus_password = mysqli_real_escape_string($con, $_POST['cus_password']);
        $cus_conpassword = mysqli_real_escape_string($con, $_POST['cus_conpassword']);
            
        //convert date
        $cus_bday = date("Y-m-d", strtotime($cus_bday));

        //Insert data
        $sqlIns = "INSERT INTO customer (cus_fname,cus_lname,cus_bday,cus_address,cus_gender,cus_email,cus_username,cus_password,cus_conpassword) VALUES ('$cus_fname,$cus_lname,$cus_bday,$cus_address,$cus_gender,$cus_email,$cus_username,$cus_password,$cus_conpassword);";

        $result = mysqli_query($con, $sqlIns);

        //execute insert query
        if ($result) {
            header("Location:../register.php?update=success");
        } else {
            header("Location:../register.php?update=fail");
        }
    } else {
        header("Location:../register.php?Error=No_Access");
    }
