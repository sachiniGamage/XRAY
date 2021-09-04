<?php
    
    //start session
    session_start();

    //DB connection
    require '../config/config.php';

    //check the form data submission
    if (isset($_POST['login'])) {
        $login_email = mysqli_real_escape_string($con, $_POST['login_email']);
        $login_password = mysqli_real_escape_string($con, $_POST['login_password']);
            

        //Insert data
        // $sqlIns = "INSERT INTO customer (cus_fname,cus_lname,cus_bday,cus_address,cus_gender,cus_email,cus_username,cus_password,cus_conpassword) VALUES ('$cus_fname,$cus_lname,$cus_bday,$cus_address,$cus_gender,$cus_email,$cus_username,$cus_password,$cus_conpassword);";

        //$result = mysqli_query($con, $sqlIns);

        // Here get the user password and then chck it with the input password if true then set the session login status as true and set the logged email as the user email


        //echo "this is login submit open";
        //echo "this is the email: $login_email and pass: $login_password \n";

        $sqlIns = "SELECT * FROM users WHERE email='$login_email' AND password='$login_password'";
        //echo $sqlIns;
        $result = mysqli_query($con, $sqlIns);
        $res = mysqli_fetch_array($result);

        if ($res) {
            $_SESSION["user"] = $res["id"];
            $user = $res["username"];
            header("Location:../index.php?login=success?user=$user");
        } else {
            header("Location:../index.php?login=fails");
        }
    } else {
        header("Location:../index.php?login=fails");
    }
