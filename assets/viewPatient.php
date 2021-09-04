<?php
$myInput=$_POST["myInput"]; 
// require('DBConnection.php');
require('../config/db.php');

     if(isset($_POST['myInput'])){
        
        $query ="SELECT `pat_id`,`pat_fname`,`pat_lname`,`pat_age`,`pat_gender`,`pat_address`,`pat_phone` FROM `patient` WHERE pat_id = '".$myInput."'";
        echo($sql);
        $result = mysqli_query($con,$query);
        
        if(mysqli_num_rows($result) > 0){
            
            while($row = mysqli_fetch_array($result)){
                $pat_id = $row['pat_id'];
				$pat_id = mysqli_real_escape_string($con, $pat_id);
                $pat_fname = $row['pat_fname'];
				$pat_fname = mysqli_real_escape_string($con, $pat_fname);
				$pat_lname = $row['pat_lname'];
				$pat_lname = mysqli_real_escape_string($con, $pat_lname);
                $pat_age = $row['pat_age'];
				$pat_age = mysqli_real_escape_string($con, $pat_age);
                $pat_gender = $row['pat_gender'];
				$pat_gender = mysqli_real_escape_string($con, $pat_gender);
				$pat_address = $row['pat_address'];
				$pat_address = mysqli_real_escape_string($con, $pat_address);
                $pat_phone = $row['pat_phone'];
				$pat_phone = mysqli_real_escape_string($con, $pat_phone);
                $output .= '<div> <h5>Patient Id :  '.$pat_id.' </h5> <div> <h5>Patient First Name :  '.$pat_fname.' </h5> <div> <h5>Patient Last Name :  '.$pat_lname.' </h5> </h5> <div> <h5>Patient age :  '.$pat_age.' </h5> </div> 
				<div> <h5>Patient Gender :  '.$pat_gender.' </h5> </div> <div> <h5>Patient Address :  '.$pat_address.' </h5> </div>
				<div> <h5>Patient Phone :  '.$pat_phone.' </h5> </div>';		
			}
			
			
        }else{
            $output = 'There was no search result';
        }
    }
?>