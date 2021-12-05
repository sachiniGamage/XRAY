<?php

session_start();
require('../config/config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <title>XrayUnit</title>
     <meta charset="UTF-8">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <link rel = "stylesheet" type="text/css" href="../css/radiographer/dashboard2.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/animate.css">
     <link rel="stylesheet" href="../css/owl.carousel.css">
     <link rel = "stylesheet" type="text/css" href="../css/registerForm.css">
     <link rel = "stylesheet" type="text/css" href="../css/viewXRayDetailscss.css">
     <link rel="stylesheet" href="../css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" type="text/css" href="../css/tooplate-style.css">

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

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
                         <li><a href="viewQuery.php" class="smoothScroll">Home</a></li>
                         <li><a href="../#about" class="smoothScroll">About Us</a></li>
                         <li><a href="../#google-map" class="smoothScroll">Contact Us</a></li>
                    </ul>
               </div>

          </div>

     </section>


</head>
<body>

     <nav class="navbar navbar-inverse visible-xs">
     <div class="container-fluid">
     <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="../img/logo.jpeg">Logo</a>
     </div>
     </div>
     </nav>

     <div class="container-fluid">
          <div class="row content">
               <div class="col-sm-3 sidenav hidden-xs">
                    <img src="../img/logo.jpeg" alt="logo">
                         <ul class="nav nav-pills nav-stacked">
                              <li class="active"><a href="#">Dashboard</a></li>
                              <li><a href="registerRadio.php">Register Radiographer</a></li>
                              <li><a href="viewRadiographer.php">View Radiographer</a></li>
                              <li><a href="viewPatient.php">View Patient</a></li>
                              <li><a href="viewQuery.php">Patient Query</a></li>
                              <!-- <li><a href="registerPatient.php">xray item</a></li> -->
                              <li><a href="viewXRayDetails.php">XrayDetail</a></li>
                              <li><a href="updateXRayDetails.php">Update XrayDetail</a></li>
                              
                              <br><br><br><br><br>
                              <li><a href="../assets/logout.php">Logout</a></li>
                         </ul><br>
               </div>
          </div>
     </div>
     <br>
    
    <div class="col-sm-9">
          <div class="well">
               <div class="topnav">
                    <a class="active" href="viewQuery.php">Home</a>
                    <a href="../#google-map">Contact</a>
                    <div class="search-container">
                    <form action="/action_page.php">
                    </form>
               </div>
          </div>
    </div>

    
</body>