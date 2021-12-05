<?php
    
    //start session
    session_start();

    //DB connection
    require '../config/config.php';

    //check the form data submission
    if (isset($_POST['submit'])) {
        $app_patfname = mysqli_real_escape_string($con, $_POST['app_patfname']);
        $app_patlname = mysqli_real_escape_string($con, $_POST['app_patlname']);
        $app_date= mysqli_real_escape_string($con, $_POST['app_date']);
        $app_time = mysqli_real_escape_string($con, $_POST['app_time']);
        $app_type = mysqli_real_escape_string($con, $_POST['app_type']);
        $app_phone = mysqli_real_escape_string($con, $_POST['app_phone']);
        $app_details = mysqli_real_escape_string($con, $_POST['app_details']);
            
            
        //convert date
        $app_date = date("Y-m-d", strtotime($app_date));

        //Insert data
        if ($_SESSION["user"] != null) {
            $uid = $_SESSION["user"];
            $sqlIns = "INSERT INTO `appointment`( `app_patfname`, `app_patlname`, `app_date`, `app_time`, `app_type`, `app_phone`, `app_details`, `app_patid`) 
            VALUES ('$app_patfname','$app_patlname','$app_date','$app_time','$app_type','$app_phone','$app_details', '$uid')";

            $result = mysqli_query($con, $sqlIns);
            // execute insert query
            if ($result) {
                header("Location:../index.php?update=success");
            } else {
                header("Location:../index.php?update=fail");
            }
        } else {
            header("Location:../index.php?Error=No_Access");
        }
    } else {
        header("Location:../index.php?update=fail");
    }
