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

     <link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css">
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
                         <li><a href="../" class="smoothScroll">Home</a></li>
                         <li><a href="./#about" class="smoothScroll">About Us</a></li>
                         <li><a href="#google-map" class="smoothScroll">Contact Us</a></li>
                         <li><a href="assets/logoutPHP.php">Logout</a></li>
                    </ul>
               </div>
          </div>

     </section>
     <!-- MAKE AN APPOINTMENT -->
     <?php
     $uid = $_SESSION["user"];
     // $uid = 1;
     $sqlIns = "SELECT * FROM `appointment` WHERE `app_patid`='$uid'";
     

     // $sqlIns = "SELECT `app_id`, `app_patfname`, `app_patlname`, `app_date`, `app_time`, `app_type`, `app_phone`, `app_details` FROM `appointment` WHERE `app_patid`='".$uid."'";

     $result = mysqli_query($con, $sqlIns);
     // echo "abc";
     // $num_rows2 = mysqli_num_rows($result);
     // echo $num_rows2;
     // var_dump($result);
      ?>
     <script>
          var obj = [];
     </script>
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div style="display:flex; flex-direction:column; justify-content:center">
                    <select id="app_select" class="form-select" aria-label="Default select example"
                         onchange="select_trigged()">
                         <option selected>Select appoinment</option>
                         <?php
                         $current_ind = -1;
               $num_rows = mysqli_num_rows($result);

               if ($num_rows > 0) {
                   while ($data = mysqli_fetch_array($result)) {
                       $current_ind += 1;
                       //$current_app_id = $data["app_id"];
                       $current_app_patfname = $data["app_patfname"];
                       $current_app_type = $data["app_type"]; ?>
                       <?php echo "num rows > 0" ?>

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

                    <div class="">
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" method="post" action="assets/updatePHP.php">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h3>Update the appoinment details</h3>
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
                                        <input id="app_date" type="date" name="app_date" value="" class="form-control"
                                             required>
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="time">Select Time</label>
                                        <input id="app_time" type="time" name="app_time" value="" class="form-control"
                                    required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Select x-ray Type</label>
                                        <select id="app_type" class="form-control" name="app_type" required>
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
                                        <input type="hidden" name="app_id" id="app_id">
                                        <button type="submit" class="form-control" id="cf-submit" name="submit"
                                             value="update">Update Info</button>
                                        <button type="submit" style="color:#D35B61" class="form-control" id="cf-submit"
                                             name="submit" value="delete">Delete Appointment</button>

                                             <br>
                                             <br>

                                             <li class="appointment-btn" align='middle' > <a href = "report.php" name = "view">PRINT APPOINTMENT RECIEPT</a></li>

                                   </div>
                              </div>
                         </form>
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
                    obj[index][7]);
          }

          function fill_fields(app_id, app_patfname, app_patlname, app_date, app_time, app_type, app_phone,
               app_details) {
               document.getElementById("app_id").value = app_id;
               document.getElementById("app_patfname").value = app_patfname;
               document.getElementById("app_patlname").value = app_patlname;
               document.getElementById("app_date").value = app_date;
               document.getElementById("app_time").value = app_time;
               document.getElementById("app_type").selected = app_type;
               document.getElementById("app_phone").value = app_phone;
               document.getElementById("app_details").value = app_details;
          }
     </script>

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