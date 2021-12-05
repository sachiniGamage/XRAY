<?php
require('../../config/config.php');
$myInput=$_POST["myInput"]; 
     if(isset($_POST['myInput'])){
        
        $query ="SELECT `rad_id`, `rad_fname`, `rad_lname`, `phone`, `email` FROM `Radiographer` WHERE  rad_id = '".$myInput."' OR `email`='".$myInput."' ";
        echo($sql);
        $result = mysqli_query($con,$query);
        
        if(mysqli_num_rows($result) > 0){
            
            while($row = mysqli_fetch_array($result)){
                $rad_id = $row['rad_id'];
				$rad_id = mysqli_real_escape_string($con, $rad_id);
                $rad_fname = $row['rad_fname'];
				$rad_fname = mysqli_real_escape_string($con, $rad_fname);
				$rad_lname = $row['rad_lname'];
				$rad_lname = mysqli_real_escape_string($con, $rad_lname);
                $phone = $row['phone'];
				$phone = mysqli_real_escape_string($con, $phone);
                $rad_email = $row['rad_email'];
				$rad_email = mysqli_real_escape_string($con, $rad_email);
                

                $output .= '<div> <h5>Radiographer Id :  '.$rad_id.' </h5></div>
                 <div> <h5>Radiographer First Name :  '.$rad_fname.' </h5> </div>
                <div> <h5>Radiographer Last Name :  '.$rad_lname.' </h5> </div>
				<div> <h5>Radiographer Phone :  '.$phone.' </h5> </div> 
                <div><h5>Radiographer Email Aadress :  '.$rad_email.' </h5> </div>	'	;

                header("Location:../../radiographer/viewRadiographer.php");
			}
			
			
        }else{
            $output = 'There was no search result';
            header("Location:../../radiographer/viewRadiographer.php");
        }
    }
?>