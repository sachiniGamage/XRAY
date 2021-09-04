<?php
include("dashboard2.php");
?>




<!-- <link rel = "stylesheet" type="text/css" href="../css/contct.css"> -->
<link rel = "stylesheet" type="text/css" href="../css/tablecss.css">
<div class="main">
  
<div class="col-md-9">
        <form method="post" action="viewRadiographer.php" align = "center">
			<label>Radiographer Id/Email address: </label>
			<input type="text" id="myInput" name="myInput" placeholder="Search for Radiographer..">

			<br>
<br>
<table id="customers">
  <tr>
  	<th>Radiographer ID </th>
	<th> Radiographer First Name </th>
	<th> Radiographer Last Name </th>
	<th> phone Number </th>
	<th> email </th>
  </tr>
        <?php
            require('../config/db.php');
			$myInput=$_POST["myInput"]; 
				 if(isset($_POST['myInput'])){
					
					$query ="SELECT `rad_id`, `rad_fname`, `rad_lname`, `phone`, `email` FROM `Radiographer` WHERE  rad_id = '".$myInput."' OR `email`='".$myInput."' ";
					
					$result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0){

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>'. $row['rad_id'] .'</td>';
                    echo '<td>'. $row['rad_fname'] .'</td>';
                    echo '<td>'. $row['rad_lname'] .'</td>';
					echo '<td>'. $row['phone'] .'</td>';
                    echo '<td>'. $row['email'] .'</td>';
                    echo '</tr>';
                }
            }
		}
        ?>
    </table>
<br>

			<br>
			<div align="center" >
				<td><table width="366" border="0" align="center">
					<tr align="center">
					<td width="167" align="center">
						<input type="submit" value="Check"  />
					</td>
					
					</tr>
				</table>
				</td>
			</div >    
    	</form>
		</form>
        </div > 