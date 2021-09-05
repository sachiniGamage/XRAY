<?php
    include("dashboard2.php");
?>


<link rel = "stylesheet" type="text/css" href="../css/tablecss.css">
<div class="main">
	
  
<div class="col-md-9">
		<form method="post" action="viewPatient.php"align="center">
		<!-- <input type="text" class="textbox" placeholder="Patient ID"> -->
			<input type="text" class="textbox" id="myInput" name="myInput" placeholder="Search for Patient..">
			<br>
			<table id="customers">
				<tr>
					<th>Patient ID </th>
					<th> Patient First Name </th>
					<th> Patient Last Name </th>
					<th> Age </th>
					<th> Gender </th>
					<th> Address </th>
					<th> Phone </th>
					<th> Email </th>
				</tr>

				<?php
            require('../config/config.php');
			$myInput=$_POST["myInput"]; 
				 if(isset($_POST['myInput'])){
					
					$query ="SELECT `pat_id`,`pat_fname`,`pat_lname`,`pat_age`,`pat_gender`,`pat_address`,`pat_phone`,`pat_email` FROM `patient` WHERE pat_id = '".$myInput."' OR `pat_email` = '".$myInput."'";
					
					$result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0){

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>'. $row['pat_id'] .'</td>';
                    echo '<td>'. $row['pat_fname'] .'</td>';
                    echo '<td>'. $row['pat_lname'] .'</td>';
					echo '<td>'. $row['pat_age'] .'</td>';
                    echo '<td>'. $row['pat_gender'] .'</td>';
					echo '<td>'. $row['pat_address'] .'</td>';
                    echo '<td>'. $row['pat_phone'] .'</td>';
					echo '<td>'. $row['pat_email'] .'</td>';
                    echo '</tr>';
                }
            }
		}
        ?>
    </table>
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

		
		</div>

		</div>
</div>