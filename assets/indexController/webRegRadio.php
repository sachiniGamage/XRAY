<?php
include("DocIndex.php");
?>
<div class="main">
<?php


    // require('DBConnection.php');
    require('../../config/db.php');

    $email=$_POST["email"];
    $psw=$_POST["psw"]; 
    $Cpsw=$_POST["Cpsw"]; 

    // When form submitted, insert values into the database.
    if (isset($_POST['register_radiographer'])) {
        $email = mysqli_real_escape_string($con, $email);
        $psw = mysqli_real_escape_string($con, $psw);
        $Cpsw = mysqli_real_escape_string($con, $Cpsw);
        if($psw == $Cpsw ){
        
        $query = "INSERT INTO `radiographerRegister`(`email`, `password`) VALUES ('".$email."','".$psw."')" ;
        $result   = mysqli_query($con, $query);
        mysqli_query($con, $query);
        if($result){
    
            echo "Registered successfully";
            header("Location:../../login.php");
        }
    } else {
        echo "<div class='form'>
              <h3>Incorrect password.</h3><br/>
              
              </div>";
              header("Location:../../login.php");
    }
}
     
    
?>
</div>