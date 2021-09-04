<?php
    
    //start session
    session_start();

    //DB connection
    require '../../config/config.php';

    //check the form data submission
    if (isset($_POST['submit'])) {
        $pat_fname = mysqli_real_escape_string($con, $_POST['pat_fname']);
        $pat_lname = mysqli_real_escape_string($con, $_POST['pat_lname']);
        $pat_gender = mysqli_real_escape_string($con, $_POST['pat_gender']);
        $pat_age = mysqli_real_escape_string($con, $_POST['pat_age']);
        $pat_address = mysqli_real_escape_string($con, $_POST['pat_address']);
        $pat_phone = mysqli_real_escape_string($con, $_POST['pat_phone']);
        $pat_infomation = mysqli_real_escape_string($con, $_POST['pat_infomation']);
        $pat_email= mysqli_real_escape_string($con, $_POST['pat_email']);
      
            
        //convert date
     

        //Insert data
        if ($_SESSION["user"] != null) {
            $uid = $_SESSION["user"];
            
// `patient`(`pat_id`, `pat_fname`, `pat_lname`, `pat_age`, `pat_gender`, `pat_address`, `pat_phone`, `pat_infomation`, `pat_email`, `user_id`)
        $sqlIns = "INSERT INTO `patient`( `pat_fname`, `pat_lname`, `pat_age`, `pat_gender`, `pat_address`, `pat_phone`,`pat_information`,`pat_email`,`user_id`) VALUES ('$pat_fname','$pat_lname','$pat_age','$pat_gender','$pat_address','$pat_phone','$pat_infomation','$pat_email','$uid')";
        // $sqlIns = "INSERT INTO patient (pat_fname,pat_lname,pat_age,pat_gender,pat_address,pat_phone,pat_infomation,pat_email,user_id) VALUES ('$pat_fname','$pat_lname','$pat_age','$pat_gender','$pat_address','$pat_phone','$pat_infomation','$pat_email','$uid')";

        var_dump($sqlIns);
        $result = mysqli_query($con, $sqlIns);

        //execute insert query
        if ($result) {
            header("Location:../../admin_regPatient.php?update=success");
        } else {
            header("Location:../../admin_regPatient.php?update=fail");
        }
    } else {
        header("Location:../../admin_regPatient.php?Error=No_Access");
    }
  } else {
        header("Location:../../admin_regPatient.php?update=failss");
    }