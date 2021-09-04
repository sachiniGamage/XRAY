<?php
    
    //start session
    session_start();

    //DB connection
    require '../../config/config.php';

    //check the form data submission
    if (isset($_POST['submit'])) {
        $rad_fname = mysqli_real_escape_string($con, $_POST['rad_fname']);
        $rad_lname = mysqli_real_escape_string($con, $_POST['rad_lname']);
        
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        
        $email= mysqli_real_escape_string($con, $_POST['email']);
      
            
        //convert date
     

        //Insert data
       

        $sqlIns = "INSERT INTO Radiographer (rad_fname,rad_lname,phone,email) VALUES ('$rad_fname','$rad_lname','$phone','email')";

        $result = mysqli_query($con, $sqlIns);

        //execute insert query
        if ($result) {
            header("Location:../../admin_regRad.php?update=success");
        } else {
            header("Location:../../admin_regRad.php?update=fail");
        }
    } 
    else {
        header("Location:../../admin_regRad.php?Error=No_Access");
    }
    ?>