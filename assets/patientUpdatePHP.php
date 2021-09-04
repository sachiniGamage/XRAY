<?php
    
    //start session
    session_start();

    //DB connection
    require '../config/config.php';

    //check the form data submission
    echo $_POST['submit'];
    if (isset($_POST['submit'])) {
        $pat_id = mysqli_real_escape_string($con, $_POST['pat_id']);
        $pat_fname = mysqli_real_escape_string($con, $_POST['pat_fname']);
        $pat_lname = mysqli_real_escape_string($con, $_POST['pat_lname']); 
        $pat_age = mysqli_real_escape_string($con, $_POST['pat_age']);
        $pat_gender = mysqli_real_escape_string($con, $_POST['pat_gender']);
        $pat_address = mysqli_real_escape_string($con, $_POST['pat_address']);
        $pat_phone = mysqli_real_escape_string($con, $_POST['pat_phone']);
        $pat_infomation = mysqli_real_escape_string($con, $_POST['pat_infomation']);
        $pat_email= mysqli_real_escape_string($con, $_POST['pat_email']);
      
        if ($_POST['submit'] == "update") {
            //convert date
        
            //Insert data
            if ($_SESSION["user"] != null) {
                $sqlIns = "UPDATE patient SET `pat_fname`='$pat_fname',`pat_lname`='$pat_lname',`pat_age`='$pat_age',`pat_gender`='$pat_gender',`pat_address`='$pat_address',`pat_phone`='$pat_phone',`pat_information`='$pat_infomation', `pat_email`='$pat_email' WHERE `pat_id`='$pat_id'";
                echo $sqlIns;
                $result = mysqli_query($con, $sqlIns);
                // execute insert query
                if ($result) {
                    header("Location:../viewPatienttt.php?update=success");
                } else {
                    header("Location:../viewPatienttt.php?update=failss");
                }
            } else {
                header("Location:../viewPatienttt.php?Error=No_Access");
            }
        } elseif ($_POST['submit'] == "delete") {
            $sqlIns = "DELETE FROM patient WHERE user_id='$pat_id'";
            echo $sqlIns;
            $result = mysqli_query($con, $sqlIns);
            // execute insert query
            if ($result) {
                header("Location:../viewPatienttt.php?update=success");
            } else {
                header("Location:../viewPatienttt.php?update=fails");
            }
        } else {
            header("Location:../viewPatienttt.php?Error=No_Access");
        }
    } else {
         header("Location:../viewPatienttt.php?update=fail");
     }
?>