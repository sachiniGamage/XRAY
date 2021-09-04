<?php
     //start session
     session_start();
     include 'config/config.php';
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
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
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
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         <li><a href="adminlogin.php" class="smoothScroll">Admin</a></li>
                         <li><a href="#team" class="smoothScroll">Doctors</a></li>
                         <li><a href="patientRegister.php" class="smoothScroll">Patient</a></li>
                         <li><a href="#news" class="smoothScroll">News</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact Us</a></li>
                         <?php if ($_SESSION["user"] == null) {
    ?>
                         <li><a href="#google-map" class="smoothScroll">Login</a></li>

                         <?php
} else { ?>
                         <li><a href="./assets/logoutPHP.php">Logout</a></li>
                         <a class="btn btn-dark"
                              style="position: fixed; bottom:0; right:0; width: 300px; z-index:2; background: #2D3179; color: white;"
                              href="./appointment_view.php">View
                              appointments</a>
                         <?php } ?>

                         <li class="appointment-btn"><a href="#appointment">Make an appointment</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>We are giving the Best Service To You</h3>
                                        <h1>Radiology Unit</h1>
                                        <a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our
                                             Doctors</a>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Your Health is First</h3>
                                        <h1>Radiology Unit</h1>
                                        <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More
                                             About Us</a>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Your health benifits</h3>
                                        <h1>Radiology Unit</h1>
                                        <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Read
                                             Stories</a>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to Our <i
                                        class="fa-r-square"></i>Radiology Center</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>Avissawella District Base Hospital-Avissawella is one of the most important health
                                        and government department in area.The hospital Radiology department was started
                                        since 1996 and the department Head of Mr.D.Silva is currently in charge of the
                                        departement.We giving you the best service from our department.</p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="images/author-image.jpg" class="img-responsive" alt="">
                                   <figcaption>
                                        <h3>Dr. M Silva</h3>
                                        <p>Radiographer-Dep Head</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">
                    <form method="post" action="login.php">
                         <div class="col-md-6 col-sm-6">
                              <div class="about-info">
                                   <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Doctors are here</h2>
                                   <span><button style="background: #2D3179; color:white;">Login / Register</button></span>
                              </div>
                         </div>
                    </form>
                    

                    <div class="clearfix"></div>
                    

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="images/team-image1.jpg" class="img-responsive" alt="">

                              <div class="team-info">
                                   <h3>Mrs.T.Ekanayaka</h3>
                                   <p>Cardiology(MBBS)-avissawella hospital</p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> 010-020-0120</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">ekanayake2453@gmail.com</a></p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                        <li><a href="#" class="fa fa-envelope-o"></a></li>
                                   </ul>
                              </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img src="images/team-image2.jpg" class="img-responsive" alt="">

                              <div class="team-info">
                                   <h3>Dr.S.perera</h3>
                                   <p>ENT Surgon</p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> 0754321234</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">tharushiawiss45@gmail.com</a>
                                        </p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-facebook-square"></a></li>
                                        <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        <li><a href="#" class="fa fa-flickr"></a></li>
                                   </ul>
                              </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="images/team-image3.jpg" class="img-responsive" alt="">

                              <div class="team-info">
                                   <h3>Dr.Thamara Dissanayaka</h3>
                                   <p>Nuero Surgon</p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> 0765437898</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">nueroAwiss@gmail.com</a></p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-envelope-o"></a></li>
                                   </ul>
                              </div>

                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- NEWS -->
     <section id="news" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Latest News</h2>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <a href="news-detail.html">
                                   <img src="images/news-image1.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>March 08, 2021</span>
                                   <h3><a href="news-detail.html">About Amazing Technology</a></h3>
                                   <p>Our hospital radiology unit havethe new xray machine for scans and now our
                                        hospital services are good for the patients...</p>
                                   <div class="author">
                                        <img src="images/author-image.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>mr.T.ekanayaka</h5>
                                             <p>Dep-head Radiology</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <a href="news-detail.php">
                                   <img src="images/news-image2.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>February 20, 2021</span>
                                   <h3><a href="news-detail.html">Introducing a new xray machiene process</a></h3>
                                   <p>WE are gurennte the best service for the patient who with us.</p>
                                   <div class="author">
                                        <img src="images/author-image.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Dr.kumari.De silva</h5>
                                             <p>General Director</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                              <a href="news-detail.php">
                                   <img src="images/news-image3.jpg" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>January 27, 2021</span>
                                   <h3><a href="news-detail.html">Review Annual Medical Research</a></h3>
                                   <p>we are conducting annuale medical programmes for helping to patients who with our
                                        awissawella hospital</p>
                                   <div class="author">
                                        <img src="images/author-image.jpg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Dr.Munasinghe</h5>
                                             <p>Radiographer</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- MAKE AN APPOINTMENT -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/appointment-image.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" method="post" action="assets/appointmentPHP.php">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Make an appointment</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">First Name</label>
                                        <input type="text" class="form-control" id="app_patfname" name="app_patfname"
                                             placeholder="Full Name" required>
                                   </div>
                              </div>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Last Name</label>
                                        <input type="text" class="form-control" id="app_patlname" name="app_patlname"
                                             placeholder="Full Name" required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="date">Select Date</label>
                                        <input type="date" name="app_date" value="" class="form-control" required>
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="time">Select Time</label>
                                        <input type="time" name="app_time" value="" class="form-control" required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Select x-ray Type</label>
                                        <select class="form-control" name="app_type" required>
                                             <option>left Arm</option>
                                             <option>face</option>
                                             <option>full body</option>
                                             <option>right Arm</option>
                                             <option>right leg</option>
                                             <option>left leg</option>
                                        </select>
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <label for="telephone">Phone Number</label>
                                        <input type="tel" class="form-control" id="app_phone" name="app_phone"
                                             placeholder="Phone" required>
                                        <label for="Message">Additional details</label>
                                        <textarea class="form-control" rows="5" id="app_details" name="app_details"
                                             placeholder="Message" required></textarea>
                                        <button type="submit" class="form-control" id="cf-submit" name="submit"
                                             value="submit">Submit Button</button>
                                   </div>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>


     <!-- GOOGLE MAP -->
     <section id="google-map" style="margin-top:2rem; padding-top:2rem">
          <div class="container">
               <div class="row">
                    <div class="col-md-6 col-sm-6">
                         <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
                         <iframe
                              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.4419063966516!2d80.20519271472074!3d6.9570846949738065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3a99845eec381%3A0xb3166156d960b852!2sBase%20Hospital%20Avissawella!5e0!3m2!1sen!2slk!4v1628302010028!5m2!1sen!2slk"
                              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                    <div class="col-md-1 col-sm-1"></div>

                    <div class="col-md-5 col-sm-5 form_section">
                         <h4 style="margin-bottom:3rem;">Login</h4>
                         <div style="padding:20px; background: #F2F1F0; border-radius:2rem">
                              <form id="login-form" role="form" method="post" action="assets/loginPHP.php">
                                   <div class="mb-3" style="margin-bottom:20px">
                                        <label for="login_email" class="form-label"
                                             style="margin-bottom:10px; margin-top:">Email address</label>
                                        <input type="email" class="form-control" id="login_email"
                                             aria-describedby="emailHelp" name="login_email" required>
                                   </div>
                                   <div class="mb-3" style="margin-bottom:20px">
                                        <label for="login_password" class="form-label"
                                             style="margin-bottom:10px">Password</label>
                                        <input type="password" class="form-control" id="login_password"
                                             name="login_password" required>
                                   </div>
                                   <button name="login" value="login" type="submit" class="btn"
                                        style="background: #2D3179; color:white;">Submit</button>
                              </form>
                         </div>
                         <div class="no_account" style="margin-top: 1rem;">
                              <button id="reg_btn" onclick="register_btn_clicked()" style="height: 20px;">No account,
                                   click here to register</button>
                         </div>
                    </div>
               </div>
          </div>
     </section>


     <?php if ($_SESSION["user"] != null) {
        ?>
     <div>

     </div>

     <?php
    } ?>




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