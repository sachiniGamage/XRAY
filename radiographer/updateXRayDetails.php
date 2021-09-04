<?php 
include('../config/config.php');
include('dashboard2.php');
?>
<link rel = "stylesheet" type="text/css" href="../css/radiographer/viewXRayDetailscss.css">

<form action="../assets/Radiographer/updateXRayDetails.php" method="POST">
  <divstyle="background-color:#bbb;">
    <h2>Update Details</h2>
    <div >
    
    
    XRay ID: <input class="w3-input w3-border" type="text" placeholder="Xray ID" name="xrayID" required>
    <br>
    <br>
    Patient ID: <input class="w3-input w3-border" type="text" placeholder="Patient ID" name="patID" required>
    <br>
    <br>
    Radiographer: 
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

<br>
<br>
 Doctor:
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



    <br>
    <br>

    <!-- Doctor:  -->
    <!-- <select name="doctor" id="doctor" >
        <option value=1>Dr. M Silva</option>
        <option value=2>Dr.S.perera</option>
        <option value=3>Dr.Thamara Dissanayaka</option>
        <option value=4>Dr.kumari.De silva</option>
        <option value=5>Dr.Munasinghe</option>
        </select></p> -->

    <div class="grid-container">
    <p><select name="Region" id="Region">
        <option value="Head">Head</option>
        <option value="Chest">Chest</option>
        <option value="Abdomen">Abdomen</option>
        <option value="Spine">Spine</option>
        <option value="Pelvis">Pelvis</option>
        <option value="U/Limb">U/Limb</option>
        <option value="L/Limb">L/Limb</option>
    </select>

    <select name="subRegion" id="subRegion">
        <option value="-">----head----</option>
        <option value="Skull">Skull</option>
        <option value="Sinus">Sinus</option>
        <option value="Mandible">Mandible</option>
        <option value="TM Joint">TM Joint</option>
        <option value="orbital">orbital</option>
        <option value="Nasal Bone">Nasal Bone</option>
        <option value="-">----Chest----</option>
        <option value="Chest">Chest</option>
        <option value="Shoulder">Shoulder</option>
        <option value="Clavival">Clavival</option>
        <option value="-">----Abdomen----</option>
        <option value="Abdomen">Abdomen</option>
        <option value="KUB">KUB</option>
        <option value="-">----Spine----</option>
        <option value="C/Spine">C/Spine</option>
        <option value="T/Spine">T/Spine</option>
        <option value="T/L Spine">T/L Spine</option>
        <option value="L/S Spine">L/S Spine</option>
        <option value="Coccyx">Coccyx</option>
        <option value="-">----Pelvis----</option>
        <option value="Pelvis">Pelvis</option>
        <option value="Hip_Joint">Hip Joint</option>
        <option value="SI_Joint">SI Joint</option>
        <option value="-">----U/Limb----</option>
        <option value="Humerus">Humerus</option>
        <option value="E/Joint">E/Joint</option>
        <option value="Forearm">Forearm</option>
        <option value="Wrist">Wrist</option>
        <option value="Hand">Hand</option>
        <option value="Finger">Finger</option>
        <option value="-">----L/Limb----</option>
        <option value="Femur">Femur</option>
        <option value="Knee Joint">Knee Joint</option>
        <option value="Leg">Leg</option>
        <option value="Foot">Foot</option>
        <option value="Toe">Toe</option>
    </select>

    <select name="views" id="views">
        <option value="AP">AP</option>
        <option value="PA">PA</option>
        <option value="LAT">LAT</option>
        <option value="Oblique">Oblique</option>
        <option value="Erect">Erect</option>
        <option value="Supine">Supine</option>
        <option value="R/Towne's">R/Towne's</option>
    </select>

    <input type="date" id="tday" name="tday">
 
    </div>
    </div>

    <div class="form-group">
    <label class="col-md-4 control-label"></label>
    <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" value="Update" name="updt" id="updt" style="background: #2D3179; color:white;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
    </div>
    </div>
    <form>