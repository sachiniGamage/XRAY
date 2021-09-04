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
                         <li><a href="login.php">Login</a></li>
                    </ul>
               </div>

          </div>

     </section>
     <!-- Register -->

    <div class="column">
                    <div class="col-md-5 col-sm-5 form_section">
                         <h4 style="margin-bottom:3rem;">Register-Doctor</h4>
                         <div style="padding:20px; background: #F2F1F0; border-radius:2rem">
                              <form id="login-form" role="form" method="post" action="assets/indexController/webRegDoc.php">
                                   <div class="mb-3" style="margin-bottom:20px">
                                        <label for="login_email" class="form-label"
                                             style="margin-bottom:10px; margin-top:">Email address</label>
                                        <input type="email" class="form-control" id="email"
                                             aria-describedby="emailHelp" name="email" required>
                                   </div>
                                   <div class="mb-3" style="margin-bottom:20px">
                                        <label for="psw" class="form-label"
                                             style="margin-bottom:10px">Password</label>
                                        <input type="password" class="form-control" id="psw"
                                             name="psw" required>
                                   </div>
                                   <div class="mb-3" style="margin-bottom:20px">
                                        <label for="Cpsw" class="form-label"
                                             style="margin-bottom:10px">Confirm Password</label>
                                        <input type="password" class="form-control" id="Cpsw"
                                             name="Cpsw" required>
                                   </div>
                                   <button name="register_doctor" value="register" type="submit" class="btn"
                                        style="background: #2D3179; color:white;">Register</button>
                              </form>
                         </div>
                         <div class="no_account" style="margin-top: 1rem;">
                              <button id="reg_btn" onclick="openDoctorForm()" style="height: 20px;">Already have account,
                                   click here to login</button>
                         </div>
                    </div>

     </div>
     <div class="column">
                    <div class="col-md-5 col-sm-5 form_section">
                         <h4 style="margin-bottom:3rem;">Register-Radiographer</h4>
                         <div style="padding:20px; background: #F2F1F0; border-radius:2rem">
                              <form id="login-form" role="form" method="post" action="assets/indexController/webRegRadio.php">
                                   <div class="mb-3" style="margin-bottom:20px">
                                        <label for="login_email" class="form-label"
                                             style="margin-bottom:10px; margin-top:">Email address</label>
                                        <input type="email" class="form-control" id="email"
                                             aria-describedby="emailHelp" name="email" required>
                                   </div>
                                   <div class="mb-3" style="margin-bottom:20px">
                                        <label for="psw" class="form-label"
                                             style="margin-bottom:10px">Password</label>
                                        <input type="password" class="form-control" id="psw"
                                             name="psw" required>
                                   </div>
                                   <div class="mb-3" style="margin-bottom:20px">
                                        <label for="Cpsw" class="form-label"
                                             style="margin-bottom:10px">Confirm Password</label>
                                        <input type="password" class="form-control" id="Cpsw"
                                             name="Cpsw" required>
                                   </div>
                                   <button name="register_radiographer" value="register" type="submit" class="btn"
                                        style="background: #2D3179; color:white;">Register</button>
                              </form>
                         </div>
                         <div class="no_account" style="margin-top: 1rem;">
                              <button id="reg_btn"  onclick="openRadiographerForm()" style="height: 20px;">Already have account,
                                   click here to login</button>
                         </div>
                    </div>

     </div>

     <script>
        function openDoctorForm() {
            document.getElementById("DoctorForm").style.display = "block";
        }
        function closeDoctorForm() {
            document.getElementById("DoctorForm").style.display = "none";
        }
    </script>

            <div class="column">
                <div class="form-popup" id="DoctorForm">
                    <div class="col-md-5 col-sm-5 form_section">
                         <h4 style="margin-bottom:3rem;">Login-Doctor</h4>
                         <div style="padding:20px; background: #F2F1F0; border-radius:2rem">
                              <form id="login-form" role="form" method="post" action="assets/indexController/docLogin.php">
                                   <div class="mb-3" style="margin-bottom:20px">
                                        <label for="login_email" class="form-label"
                                             style="margin-bottom:10px; margin-top:">Email address</label>
                                        <input type="email" class="form-control" id="email"
                                             aria-describedby="emailHelp" name="email" required>
                                   </div>
                                   <div class="mb-3" style="margin-bottom:20px">
                                        <label for="psw" class="form-label"
                                             style="margin-bottom:10px">Password</label>
                                        <input type="password" class="form-control" id="psw"
                                             name="psw" required>
                                   </div>
                                   <button name="login_doctor" value="login" type="submit" class="btn"
                                        style="background: #2D3179; color:white;">Login</button>
                              </form>
                         </div>
                    </div>
                 </div>
            </div>

            <script>
                function openDoctorForm() {
                    document.getElementById("DoctorForm").style.display = "block";
                }
                function closeDoctorForm() {
                    document.getElementById("DoctorForm").style.display = "none";
                }
            </script>

            <div class="column">
                <div class="form-popup" id="DoctorForm">
                    <div class="col-md-5 col-sm-5 form_section">
                         <h4 style="margin-bottom:3rem;">Login-Radiographer</h4>
                         <div style="padding:20px; background: #F2F1F0; border-radius:2rem">
                              <form id="login-form" role="form" method="post" action="assets/indexController/radioLogin.php">
                                   <div class="mb-3" style="margin-bottom:20px">
                                        <label for="login_email" class="form-label"
                                             style="margin-bottom:10px; margin-top:">Email address</label>
                                        <input type="email" class="form-control" id="email"
                                             aria-describedby="emailHelp" name="email" required>
                                   </div>
                                   <div class="mb-3" style="margin-bottom:20px">
                                        <label for="psw" class="form-label"
                                             style="margin-bottom:10px">Password</label>
                                        <input type="password" class="form-control" id="psw"
                                             name="psw" required>
                                   </div>
                                   <button name="login_radiographer" value="login" type="submit" class="btn"
                                        style="background: #2D3179; color:white;">Login</button>
                              </form>
                         </div>
                    </div>
                 </div>
            </div>


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
                              <p>You can contact our department using this hotline and making appointment can be done by
                                   phone and before 5.00 p.m.</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> 0764569878</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">Awissawella@gmail.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Latest News</h4>
                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#">
                                             <h5>Amazing Technology</h5>
                                        </a>
                                        <span>March 08, 2021</span>
                                   </div>
                              </div>

                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/news-image.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#">
                                             <h5>New Healing Process</h5>
                                        </a>
                                        <span>February 20, 2021</span>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                                   <p>Monday - Friday <span>08:00 AM - 05:00 PM</span></p>
                                   <p>Saturday <span>08:00 AM - 05:00 PM</span></p>
                                   <p>Sunday <span>Closed</span></p>
                              </div>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text">
                                   <p>Copyright &copy; 2021 Radiology Department Awissawella

                                        | Design: web application</p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link">
                                   <a href="#">Xray Tests</a>
                                   <a href="#">Department staff</a>
                                   <a href="#">Doctors</a>
                                   <a href="#">Management</a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn">
                                   <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i
                                             class="fa fa-angle-up"></i></a>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </footer>

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