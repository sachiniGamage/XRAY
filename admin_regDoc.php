<?php
     //start session
     session_start();
     include 'config/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin DOC Register</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="css/animate.css">
     <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
     <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    
     
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
     <link rel="stylesheet" type="text/css" href="css/tooplate-style.css">


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
                          <li><a href="adminpanel.php" class="smoothScroll">Admin</a></li>
                         <li><a href="patientRegister.php" class="smoothScroll">Patient</a></li>
                         <li><a href="#news" class="smoothScroll">News</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact Us</a></li>




	<div class="page-content">


		<div class="form-v10-content">
		<form class="well form-horizontal" action="assets/admin/admindoc_regPHP.php" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h3><b>Doctor Register Details</b></h3></center></legend><br>

<!-- Text input-->


<div class="form-group">
<label class="col-md-4 control-label">First Name</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="doc_fname" placeholder="First Name" class="form-control"  type="text" required>
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Last Name</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="doc_lname" placeholder="Last Name" class="form-control"  type="text" required>
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" >Doctor Post</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="doc_post" placeholder="Post" class="form-control"  type="text" required>
</div>
</div>
</div>

<!-- Text input-->
   
<div class="form-group">
<label class="col-md-4 control-label">Contact No.</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<input name="doc_phone" placeholder="(+94)" class="form-control" type="tel" required>
</div>
</div>
</div>


<!-- Text input-->
   <div class="form-group">
<label class="col-md-4 control-label">E-Mail</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input name="doc_email" placeholder="E-Mail Address" class="form-control"  type="email" required>
</div>
</div>
</div>



<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4"><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name = "submit" class="btn btn-warning" style="background: #2D3179; color:white;" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
</div>
</div>

</fieldset>
</form>
		</div>
	</div>
	
</body>
</html>