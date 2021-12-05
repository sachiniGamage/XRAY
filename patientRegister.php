<?php
     //start session
     session_start();
     include 'config/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Patient Register</title>
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
			<form class="form-detail" action="assets/patientRegisterPHP.php" method="post" >
				<div class="form-left">
					<h2>General Infomation</h2>
					<div class="form-row">
					
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="pat_fname" id="pat_fname" class="input-text" placeholder="First Name" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="pat_lname" id="pat_lname" class="input-text" placeholder="Last Name" required>
						</div>
					</div>
				
					<div class="form-row">
						<input type="text" name="pat_age" class="input-text" id="pat_age" placeholder="Age" required>
					</div>
					<div class="form-row">
						<input type="text" name="pat_gender" class="input-text" id="pat_gender" placeholder="Gender" required>
					</div>
	

					<div class="form-row">
						<input type="text" name="pat_address" class="input-text" id="pat_address" placeholder="Address" required>
					</div>

					<div class="form-row">
						<input type="text" name="pat_phone" class="input-text" id="pat_phone" placeholder="Phone Number" required>
					</div>
					
					<div class="form-row">
						<input type="text" name="pat_infomation" class="input-text" id="pat_infomation" placeholder="Additional Information" required>
					</div>
					<div class="form-row">
						<input type="text" name="pat_email" id="pat_email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Your Email">
					</div>

				 	<button type="submit" class="form-control"   id="cf-submit" name="submit" 
           					 value="submit" style="background: #2D3179; color:white;font-size:16;">REGISTER HERE</button>

		
		<br><br>
			
			<li class="appointment-btn" align='middle' ><a href="viewPatienttt.php" name="view"> VIEW PATIENT DETAILS</a></li>	
			<br>		
				</div>
				
				
				</div>
			</form>
		</div>
	</div>
</body>
</html>