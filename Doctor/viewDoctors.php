<?php
    include("dashboard.php");
?>




<!-- <link rel = "stylesheet" type="text/css" href="../css/contct.css"> -->
<link rel = "stylesheet" type="text/css" href="../css/tablecss.css">
<div class="main">
  
<div class="col-md-9">
        <form method="post" action="viewDoctors.php" align = "center">
			<label>Doctor Id/Email address: </label>
			<input type="text" id="myInput" name="myInput" placeholder="Search for Doctor..">
			<br>
			<table id="customers">
		<tr>
			<th>Doctor ID </th>
			<th> Doctor First Name </th>
			<th> Doctor Last Name </th>
			<th> Doctor Post </th>
			<th> phone </th>
			<th> email </th>
		</tr>
        <?php
            require('../config/db.php');
			$myInput=$_POST["myInput"]; 
				 if(isset($_POST['myInput'])){
					
					$query ="SELECT `doc_id`,`doc_fname`,`doc_lname`,`doc_post`,`doc_phone`,`doc_email` FROM `doctor` WHERE  doc_id = '".$myInput."' OR `doc_email`='".$myInput."' ";
					
					$result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0){

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>'. $row['doc_id'] .'</td>';
                    echo '<td>'. $row['doc_fname'] .'</td>';
                    echo '<td>'. $row['doc_lname'] .'</td>';
					echo '<td>'. $row['doc_post'] .'</td>';
                    echo '<td>'. $row['doc_phone'] .'</td>';
					echo '<td>'. $row['doc_email'] .'</td>';
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
        </div > 