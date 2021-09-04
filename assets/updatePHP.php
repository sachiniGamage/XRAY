<?php
    
    //start session
    session_start();

    //DB connection
    require '../config/config.php';

    //check the form data submission
    echo $_POST['submit'];
    $user = $_SESSION["user"];
    if (isset($_POST['submit'])) {
        $app_id = mysqli_real_escape_string($con, $_POST['app_id']);
        $app_patfname = mysqli_real_escape_string($con, $_POST['app_patfname']);
        $app_patlname = mysqli_real_escape_string($con, $_POST['app_patlname']);
        $app_date= mysqli_real_escape_string($con, $_POST['app_date']);
        $app_time = mysqli_real_escape_string($con, $_POST['app_time']);
        $app_type = mysqli_real_escape_string($con, $_POST['app_type']);
        $app_phone = mysqli_real_escape_string($con, $_POST['app_phone']);
        $app_details = mysqli_real_escape_string($con, $_POST['app_details']);
        if ($_POST['submit'] == "update") {
            //convert date
            $app_date = date("Y-m-d", strtotime($app_date));
            //Insert data
            if ($_SESSION["user"] != null) {
                
                $sqlIns = "UPDATE `appointment` SET `app_patfname`='$app_patfname',`app_patlname`='$app_patlname',`app_date`='$app_date',`app_time`='$app_time',`app_type`='$app_type',`app_phone`='$app_phone',`app_details`='$app_details' WHERE `app_id`='$app_id'";
                echo $sqlIns;
                $result = mysqli_query($con, $sqlIns);
                // execute insert query
                if ($result) {
                    header("Location:../appointment_view.php?update=success");
                } else {
                    header("Location:../appointmen_view.php?update=fail");
                }
            } else {
                header("Location:../appointment_view.php?Error=No_Access");
            }
        } elseif ($_POST['submit'] == "delete") {
            $sqlIns = "DELETE FROM appointment WHERE app_id='$app_id'";
            echo $sqlIns;
            $result = mysqli_query($con, $sqlIns);
            // execute insert query
            if ($result) {
                header("Location:../appointment_view.php?update=success");
            } else {
                header("Location:../appointmen_view.php?update=fail");
            }
        } else {
            header("Location:../appointment_view.php?Error=No_Access");
        }
    } else {
         header("Location:../appointment_view.php?update=fail");
     }
