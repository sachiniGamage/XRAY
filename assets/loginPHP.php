<?php
    
    //start session
    session_start();

    //DB connection
    require '../config/config.php';

    //check the form data submission
    if (isset($_POST['login'])) {
        $login_email = mysqli_real_escape_string($con, $_POST['login_email']);
        $login_password = mysqli_real_escape_string($con, $_POST['login_password']);

        $sqlIns = "SELECT * FROM users WHERE email='$login_email' AND password='$login_password'";

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
