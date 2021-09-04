<?php 
include('../config/config.php');
include('dashbrd3.php');
?>


<!DOCTYPE html>
<html>


<head>
<link rel = "stylesheet" type="text/css" href="../css/tablecss.css">
<link rel = "stylesheet" type="text/css" href="../css/radiographer/viewXRayDetailscss.css">


</head>
<body>
<div class="main">
<form action="../assets/Radiographer/addXRayDetails.php" method="post">
<!-- <form action="viewXRayDetails.php" method="post"> -->
    <!--Get Patient details-->
<div class="grid-container">
<p><input class="w3-input w3-border" type="text" placeholder="Patient ID" name="patID" id="patID" required></p>


<!-- <select name="Radiographers" id="Radiographers">
  <option  value=1>Ms.Nilmi</option>
  <option value=2>Mr.Chanaka</option>
  <option value=3>Mr.Kumara</option>
  <option value=4>Ms.Gamage</option>
</select> -->

<?php
if ($result = $con -> query("SELECT `rad_id`,`rad_fname`,`rad_lname` FROM `Radiographer`")) 
  				{
            ?>
            <select name="Radiographers" id="Radiographers">
              <?php
              
				while($row = mysqli_fetch_array($result)) 
				{
					echo '<option value = "'. $row["rad_id"] .'">' . $row["rad_fname"] . " " . $row["rad_lname"] . '</option>';
				}
        ?>
			</select><?php
			  		
				}
?>

<?php
if ($result = $con -> query("SELECT `doc_id`,`doc_fname`,`doc_lname` FROM `doctor`")) 
  				{
            ?>
            <select name="doctor" id="doctor">
              <?php
				while($row = mysqli_fetch_array($result)) 
				{
					echo '<option value = "'. $row["doc_id"] .'">'  . $row["doc_fname"] . " " . $row["doc_lname"] . '</option>';
          var_dump($row);
        }
        ?>
			</select><?php
			  		
				}
?>

<!-- <select name="doctor" id="doctor" >
  <option value=1>Dr. M Silva</option>
  <option value=2>Dr.S.perera</option>
  <option value=3>Dr.Thamara Dissanayaka</option>
  <option value=4>Dr.kumari.De silva</option>
  <option value=5>Dr.Munasinghe</option>
</select> -->
  <input type="date" id="tday" name="tday">
</div>
<br>

<!------------->

<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Add XRay Items</h2>
<!-- Region 1 -->

<div class="grid-container">
<label name="head" id="head">Head</label>
<select name="subRegion1" id="subRegion1" >
  <option  value="Skull">Skull</option>
  <option value="Sinus">Sinus</option>
  <option value="Mandible">Mandible</option>
  <option value="TM Joint">TM Joint</option>
  <option value="orbital">orbital</option>
  <option value="Nasal Bone">Nasal Bone</option>
</select>
<select name="views1" id="views1">
  <option  value="AP">AP</option>
  <option value="PA">PA</option>
  <option value="LAT">LAT</option>
  <option value="Oblique">Oblique</option>
  <option value="R/Towne's">R/Towne's</option>
</select>
<button type="submit" class="btn btn-default" name="sbmit1" id="sbmit1">✔</button>
</div>

<br>

<!-- Region 2 -->

<div class="grid-container">
<label>Chest</label>
<select name="subRegion2" id="subRegion2">
  <option value="Chest">Chest</option>
  <option value="Shoulder">Shoulder</option>
  <option value="Clavival">Clavival</option>
</select>
<select name="views2" id="views2">
  <option value="AP">AP</option>
  <option value="PA">PA</option>
  <option value="LAT">LAT</option>
  <option value="Erect">Erect</option>
  <option value="Oblique">Oblique</option>
  <option value="Supine">Supine</option>
</select>
<button type="submit" class="btn btn-default" name="sbmit2" id="sbmit2">✔</button>
</div>

<br>
<!-- Region 3 -->

<div class="grid-container">
<label>Abdomen</label>
<select name="subRegion3" id="subRegion3">
  <option value="Abdomen">Abdomen</option>
  <option value="KUB">KUB</option>
</select>
<select name="views3" id="views3">
  <option value="AP">AP</option>
  <option value="PA">PA</option>
  <option value="LAT">LAT</option>
  <option value="Erect">Erect</option>
  <option value="Supine">Supine</option>
</select>
<button type="submit" class="btn btn-default" name="sbmit3" id="sbmit3">✔</button>
</div>

<br>
<!-- Region 4 -->

<div class="grid-container">
<label>Spine</label>
<select name="subRegion4" id="subRegion4">
  <option value="C/Spine">C/Spine</option>
  <option value="T/Spine">T/Spine</option>
  <option value="T/L Spine">T/L Spine</option>
  <option value="L/S Spine">L/S Spine</option>
  <option value="Coccyx">Coccyx</option>
</select>
<select name="views4" id="views4">
  <option value="AP">AP</option>
  <option value="PA">PA</option>
  <option value="LAT">LAT</option>
  <option value="Oblique">Oblique</option>
</select>
<button type="submit" class="btn btn-default" name="sbmit4" id="sbmit4">✔</button>
</div>

<br>
<!-- Region 5 -->

<div class="grid-container">
<label>Pelvis</label>
<select name="subRegion5" id="subRegion5">
  <option value="Pelvis">Pelvis</option>
  <option value="Hip_Joint">Hip Joint</option>
  <option value="SI_Joint">SI Joint</option>
</select>
<select name="views5" id="views5">
  <option value="AP">AP</option>
  <option value="PA">PA</option>
  <option value="LAT">LAT</option>
  <option value="Oblique">Oblique</option>
</select>
<button type="submit" class="btn btn-default" name="sbmit5" id="sbmit5">✔</button>
</div>

<br>
<!-- Region 6 -->  
      
<div class="grid-container">
<label>U/Limb</label>
<select name="subRegion6" id="subRegion6">
  <option value="Humerus">Humerus</option>
  <option value="E/Joint">E/Joint</option>
  <option value="Forearm">Forearm</option>
  <option value="Wrist">Wrist</option>
  <option value="Hand">Hand</option>
  <option value="Finger">Finger</option>
</select>
<select name="views6" id="views6">
  <option value="AP">AP</option>
  <option value="LAT">LAT</option>
  <option value="Oblique">Oblique</option>
</select>
<button type="submit" class="btn btn-default" name="sbmit6" id="sbmit6">✔</button>
</div>

<br>
<!-- Region 7 -->

<div class="grid-container">
<label>L/Limb</label>
<select name="subRegion7" id="subRegion7">
  <option value="Femur">Femur</option>
  <option value="Knee Joint">Knee Joint</option>
  <option value="Leg">Leg</option>
  <option value="Foot">Foot</option>
  <option value="Toe">Toe</option>
</select>
<select name="views7" id="views7">
  <option value="AP">AP</option>
  <option value="LAT">LAT</option>
  <option value="Oblique">Oblique</option>
</select>
<button type="submit" class="btn btn-default" name="sbmit7" id="sbmit7">✔</button>
</div>
   
</div>
</form>
<!-- <form action="../reportRadio.php" method="post">
    <p><input class="w3-input w3-border" type="text" placeholder="Patient ID" name="patID" id="patID" >

    <span> <input value = "report" type = "submit" name="genReport"></span></p>
  </form> -->

<form action="viewXRayDetails.php" method="post">
  <div class="column" style="background-color:#bbb;">
    <h2>View Details</h2>
    
    <div >
    <p><input class="w3-input w3-border" type="text" placeholder="Patient ID" name="patID" id="patID" >
    <!-- <span><input type="date" id="tday" name="tday"></span> -->
    <table id="customers">
    <tr>
  	<th>XRAY ID </th>
    <th> Pat ID </th>
    <th> Doc ID</th>
    <th> Rad ID </th>
    <th> Region </th>
    <th> Sub Region</th>
    <th> Views </th>
    <th> Date </th>
    </tr>
        <?php
            require('../config/config.php');
            $patID=$_POST["patID"];
				 if(isset($_POST['chck'])){
					
					$query ="SELECT `xray_id`, `xray_patid`, `xray_docid`, `xray_radid`, `xray_Region`, `xray_subRegion`, `views`, `date` FROM `xray` WHERE `xray_patid`='".$patID."'";
					
					$result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0){

                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>'. $row['xray_id'] .'</td>';
                    echo '<td>'. $row['xray_patid'] .'</td>';
                    echo '<td>'. $row['xray_docid'] .'</td>';
					          echo '<td>'. $row['xray_radid'] .'</td>';
                    echo '<td>'. $row['xray_Region'] .'</td>';
                    echo '<td>'. $row['xray_subRegion'] .'</td>';
					          echo '<td>'. $row['views'] .'</td>';
                    echo '<td>'. $row['date'] .'</td>';
                    echo '</tr>';
                }
            }
		}
        ?>
    </table>
    <p><input value= "search" type ="submit" name="chck">
    <span><input value = "report" type = "submit" formaction="../reportRadio.php"></span></p>

     


      </div>
    </div>
    <form>

    


</div>
</div>

  </div>

</body>
</html>
