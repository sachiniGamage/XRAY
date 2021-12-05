<?php
    include("dashboard.php");
?>
<link rel = "stylesheet" type="text/css" href="../css/tablecss.css">
<div class="main">
  
    <div class="col-md-9">
            <form method="post" action="viewAppointment.php" align = "center">
                <label>date: </label>
                    <input type="date" id="myInput" name="myInput" >
                    <table id="customers">
                        <tr>
                            <th>Appointment ID </th>
                            <th> Patient First Name </th>
                            <th> Patient Last Name </th>
                            <th> Appointment date </th>
                            <th> Appointment time </th>
                            <th> Appointment Type </th>
                            <th> Patient Phone </th>
                            <th> Appointment Details </th>
                            <th> Patient ID </th>
                        </tr>
                        <?php
                            require('../config/config.php');
                            $myInput=$_POST["myInput"]; 
                                if(isset($_POST['myInput'])){
                                    
                                    $query ="SELECT `app_id`, `app_patfname`, `app_patlname`, `app_date`, `app_time`, `app_type`, `app_phone`, `app_details`, `app_patid` FROM `appointment` WHERE  app_date = '".$myInput."'";
                                    
                                    $result = mysqli_query($con,$query);
                                    if(mysqli_num_rows($result) > 0){

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<tr>';
                                                echo '<td>'. $row['app_id'] .'</td>';
                                                echo '<td>'. $row['app_patfname'] .'</td>';
                                                echo '<td>'. $row['app_patlname'] .'</td>';
                                                echo '<td>'. $row['app_date'] .'</td>';
                                                echo '<td>'. $row['app_time'] .'</td>';
                                                echo '<td>'. $row['app_type'] .'</td>';
                                                echo '<td>'. $row['app_phone'] .'</td>';
                                                echo '<td>'. $row['app_details'] .'</td>';
                                                echo '<td>'. $row['app_patid'] .'</td>';
                                                echo '</tr>';
                                            }
                                    }
                                }
                        ?>
                    </table>
                    <span class="validity"></span>
                
                        <td width="167" align="center">
                            <input type="submit" value="Check"  />
                        </td>
        </form>
    </div >  
</div > 