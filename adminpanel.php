<?php
     //start session
     session_start();
     include './config/config.php';
     
?>
<!DOCTYPE html>
<html lang="en">

<head>

     <title>Radiology Department</title>
     <!--

Avissaweela base hospital radiology department
-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel = "stylesheet" type="text/css" href="css/registerForm.css">
     <link rel = "stylesheet" type="text/css" href="css/viewXRayDetailscss.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel = "stylesheet" type="text/css" href="../css/radiographer/dashboard2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-style.css">

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>

     <!-- HEADER -->
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


     <!-- MENU -->
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
                         <li><a href="./" class="smoothScroll">Home</a></li>
                         <li><a href="./#about" class="smoothScroll">About Us</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact Us</a></li>
                         <li><a href="./assets/logoutPHP.php">Logout</a></li>
                    </ul>
               </div>
          </div>
     </section>

<br>

     <div class="container-fluid">
     <div class="row content">
     <div class="col-sm-3 sidenav hidden-xs">
          <ul class="nav nav-pills nav-stacked">
          <li class="active"><a href="#">Dashboard</a></li>
          <li><a href="admin_regDoc.php">Add Doctor</a></li>
          <li><a href="admin_regPatient.php">Add Patient</a></li>
          <li><a href="admin_regRad.php">Add Radiographer</a></li>
          <li><a href="admin_viewDoctor.php">View Doctor</a></li>
          <li><a href="admin_viewPatient.php">View Patient</a></li>
          <li><a href="admin_viewRad.php">View Radiographer</a></li>
          <li><a href="admin_viewappoint.php">View Appointments</a></li>
          
          <br><br><br><br><br>
          <li><a href="assets/logoutPHP.php">Logout</a></li>
          </ul><br>

     </div>
     <br>
    <body>
       <img src="img/logo.jpeg" alt="logo">
    </body>
   
   
     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>

</html>

