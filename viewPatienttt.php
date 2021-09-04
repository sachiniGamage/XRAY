<?php
     //start session
     session_start();
     include 'config/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PatientView Details</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

 	<link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
    
     
    <link rel="stylesheet" href="css/style.css"/>
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>
<body class="form-v10">
	<header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Welcome to Radiology Department</p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 0765342121</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 8:00 AM - 5:00 PM
                              (Mon-Fri)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a
                                   href="#">radiologyavissawella@gmail.com</a></span>
                    </div>

               </div>
          </div>
     </header>
	<section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.php" class="navbar-brand"><i class="fa-r-square-square"></i>Radiology Center</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="index.php" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         <li><a href="#team" class="smoothScroll">Doctors</a></li>
                         <li><a href="patientRegister.php" class="smoothScroll">Patient</a></li>
                         <li><a href="#news" class="smoothScroll">News</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact Us</a></li>
 
			




	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="assets/patientUpdatePHP.php" method="post" id="myform">
				<div class="form-right">
					<h2>View Patient Details</h2>

					<?php
     $uid = $_SESSION["user"];
     $sqlIns = "SELECT * FROM patient WHERE user_id='$uid'";

     $result = mysqli_query($con, $sqlIns);
      ?>
     <script>
          var obj = [];
     </script>
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div style="display:flex; flex-direction:column; justify-content:center">
                    <select id="app_select" class="form-select" aria-label="Default select example"
                         onchange="select_trigged()">
                         <option selected>Select patient</option>
                         <br>
                         <?php
                         $current_ind = -1;
               $num_rows = mysqli_num_rows($result);
               if ($num_rows > 0) {
                   while ($data = mysqli_fetch_array($result)) {
                       $current_ind += 1;
                       //$current_app_id = $data["app_id"];
                       $current_app_patfname = $data["pat_fname"];
                       $current_app_type = $data["pat_lname"]; ?>

                         <script>
                              obj.push( <?php echo json_encode($data) ?> );
                              console.log(obj);
                         </script>

                         <option value="<?php echo $current_ind ?>">
                              <?php echo "$current_app_patfname : $current_app_type" ?>
                         </option>
                         <?php
                   } ?>
                         <?php
               }
          ?>
</select>

					<div class="form-row">
						<input type="text" name="pat_fname" class="street" id="pat_fname" placeholder="Firstname" required>
					</div>
					<div class="form-row">
						<input type="text" name="pat_lname" class="additional" id="pat_lname" placeholder="LastName" required>
					</div>
					
			
					
						<div class="form-row ">
							<input type="text" name="pat_age" class="code" id="pat_age" placeholder="Age" required>
						</div>
						
						<div class="form-row">
							<input type="text" name="pat_gender" class="street" id="pat_gender" placeholder="Gender" required>
						</div>
				
					
						<div class="form-row">
							<input type="text" name="pat_address" class="phone" id="pat_address" placeholder="Address" required>
						</div>
					</div>
					<div class="form-row">
						<input type="text" name="pat_phone" id="pat_phone" class="input-text" placeholder="Phone Number">
					</div>
				
					<div class="form-row">
						<input type="text" name="pat_information" id="pat_information" class="input-text"  placeholder="additional information">
					</div>

					<div class="form-row">
						<input type="text" name="pat_email" id="pat_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Email">
					</div>

					<input type="hidden" name="pat_id" id="pat_id">
					<div class="form-row">
					<button type="submit" class="form-control" id="cf-submit" name="submit"
                                             value="update">Update Information</button>
					</div>
					<div class="form-row">
					<button type="submit" class="form-control" id="cf-submit" name="submit"
                                             value="delete">Delete Information</button>
					</div>
				</div>
			</div>
		</section>

				<script>
          function select_trigged() {
               const index = document.getElementById("app_select").value;
               console.log(obj[index][1]);
               fill_fields(obj[index][0], obj[index][1], obj[index][2], obj[index][3], obj[index][4], obj[index][5],
                    obj[index][6],
                    obj[index][7] ,obj[index][8], obj[index][9]);
          }

          function fill_fields(pat_id, pat_fname, pat_lname, pat_age, pat_gender, pat_address, pat_phone,pat_information,pat_email) {
               document.getElementById("pat_id").value = pat_id;
               document.getElementById("pat_fname").value = pat_fname;
               document.getElementById("pat_lname").value = pat_lname;
               document.getElementById("pat_age").value = pat_age;
               document.getElementById("pat_gender").value = pat_gender;
               document.getElementById("pat_address").value = pat_address;
               document.getElementById("pat_phone").value = pat_phone;
               document.getElementById("pat_information").value = pat_information;
               document.getElementById("pat_email").value = pat_email;
          }
     </script>
			</form>
		</div>
	</div>
</body>
</html>
