<?php
    include("dashboard.php");
?>

<link rel = "stylesheet" type="text/css" href="../css/tablecss.css">
<div class="main">
  
<div class="col-md-9">
        <form method="post" action="viewHistory.php" align = "center">
			<label>Patient Id: </label>
			<input type="text" id="myInput" name="myInput" placeholder="Search patient..">
			<br>
			<table id="customers">
				<tr>
				<th>Query ID </th>
					<th>Patient ID </th>
					<th> Query </th>
					<th> History </th>
				</tr>
        	<?php
				require('../config/config.php');
				$myInput=$_POST["myInput"]; 
				if(isset($_POST['myInput'])){
						
						$query ="SELECT `query_id`,`pat_id`, `query`, `history` FROM `query` WHERE   pat_id = '".$myInput."'";
						
						$result = mysqli_query($con,$query);
				if(mysqli_num_rows($result) > 0){

					while ($row = mysqli_fetch_assoc($result)) {
						echo '<tr>';
						echo '<td>'. $row['query_id'] .'</td>';
						echo '<td>'. $row['pat_id'] .'</td>';
						echo '<td>'. $row['query'] .'</td>';
						echo '<td>'. $row['history'] .'</td>';
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
