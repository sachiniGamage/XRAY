<?php
     //start session
     session_start();
     include 'config/config.php';
       $query = "SELECT * FROM doctor";

     $result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>adminView_doc Details</title>
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
                         <li><a href="adminpanel.php" class="smoothScroll">Admin</a></li>
                         <li><a href="patientRegister.php" class="smoothScroll">Patient</a></li>
                         <li><a href="#news" class="smoothScroll">News</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact Us</a></li>
 
			

               <br>

               <div class="form-v10-content">
                              <form class="form-detail" action="" method="post" >
                                   <div class="form-left">
                                        <h2>General Infomation</h2>
                                        <div class="form-row">


           

     <body>
	     <link rel = "stylesheet" type="text/css" href="../css/tablecss.css">
          <style>

               #button {
                    background-color: #4CAF50; /* Green */
                    border: none;
                    color: white;
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
               }

               #customers {
                    font-family: Arial, Helvetica, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
               }

               #customers td, #customers th {
                    border: 1px solid #ddd;
                    padding: 8px;
               }

               #customers tr:nth-child(even){background-color: #f2f2f2;}

               #customers tr:hover {background-color: #ddd;}

               #customers th {
                    padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: left;
                    background-color: #0559b3;
                    color: white;
               }
          </style>
          <a href="admindocInvoice.php" id="button" class="button">Print PDF</a>

          <br><br>
          <table id="customers">
               <tr>
               </tr>
               <t>
                    <th>ID</th>
                    <th>First Name </th>
                    <th>Last Name</th>
                    <th>Post</th>
                    <th>Phone</th>
                    <th>Email</th>

               </t>
          <?php


          while($rows=mysqli_fetch_assoc($result))
          {
          ?>
               <tr>
                    <td><?php echo $rows['doc_id']?></td>
                    <td><?php echo $rows['doc_fname']?></td>
                    <td><?php echo $rows['doc_lname']?></td>
                    <td><?php echo $rows['doc_post']?></td>
                    <td><?php echo $rows['doc_phone']?></td>
                    <td><?php echo $rows['doc_email']?></td>
               </tr>
          <?php

          }
          ?>
	     </table>

					</div>
				</div>
			</form>
		</div>
	</div>

</body>

</html>

