<!DOCTYPE html>
<html lang="en">
<head>

     <title>XrayUnit</title>

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
    <link rel = "stylesheet" type="text/css" href="../css/dashboard2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                    <a href="../index.php" class="navbar-brand"><i class="fa-r-square-square"></i>Radiology Center</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="viewPatient.php" class="smoothScroll">Home</a></li>
                         <li><a href="../#about" class="smoothScroll">About Us</a></li>
                         <li><a href="../#google-map" class="smoothScroll">Contact Us</a></li>
                         <!-- <li><a href="../assets/logoutPHP.php">Logout</a></li> -->
                    </ul>
               </div>

          </div>

     </section>

  <script type="text/javascript">
    function validateFName(){
      var name = document.getElementById("fname").value;
      if((name == "")||(name == null)){
        alert("Please enter your name");
        return false;
      }
      return true;
    }

    function validateLName() {
      var name = document.getElementById("lname").value;
      if((name == "")||(name == null))
      {
        alert("Please enter your name");
        return false;
      }
      return true;
    }
    
    function validateAddress(){
        var address = document.getElementById("address").value;
        if((address == "")||(address == null))
      {
        alert("Please enter your Address");
        return false;
      }
        return true;
    }    
    
    
  function validateContact(){
      var cno = document.getElementById("phone").value;
      if((isNaN(cno))||(cno.length != 10))
    {
      alert("Please enter a valid contact number");
      return false;
    }
      return true;
  }
    
    function validateForm(){
        if(validateFName()&& validateLName()&& validateAddress() && validateContact())
      {
        alert("Registration is completed");
        return true;
      }
      else
      {
        // event.preventDefault();
        alert("Registration is failed");
        return false;
      }
    }
</script>
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
                <li><a href="registerDoctor.php">Register Doctor</a></li>
                <li><a href="viewDoctors.php">View Doctor</a></li>
                <li><a href="viewPatient.php">View Patient</a></li>
                <li><a href="registerPatient.php">Add Patient</a></li>
                <li><a href="viewAppointment.php">View Appointments</a></li>
                <li><a href="viewHistory.php">View History</a></li>
                <br><br><br><br><br><br>
                <li><a href="../assets/logout.php">Logout</a></li>
            </ul><br>
        </div>
    <br>
    
    

 <form class="well form-horizontal" onSubmit="return validateForm()" action="../assets/Doctor/registerPatient.php"  method="post"  id="contact_form">
    <fieldset>

<!-- Form Name -->
    <legend><center><h2><b>Patient-Register</b></h2></center></legend><br>

<!-- Text input-->

    <div class="form-group">
      <label class="col-md-4 control-label">First Name</label>  
      <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input  name="fname" placeholder="First Name" class="form-control"  type="text" required>
        </div>
      </div>
    </div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >Last Name</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="lname" placeholder="Last Name" class="form-control"  type="text" required>
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" >Age</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="age" placeholder="Age" class="form-control"  type="number" required>
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" >Gender</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input type="radio" class="genderClass" name="gender" value="female">Female
<input type="radio" class="genderClass" name="gender" value="male">Male
</div>
</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label">Address</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input name="address" placeholder="Address" class="form-control"  type="text" required>
</div>
</div>
</div>

<!-- Text input-->
   
<div class="form-group">
<label class="col-md-4 control-label">Contact No.</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<input name="phone" placeholder="(+94)" class="form-control" type="tel" required>
</div>
</div>
</div>

<!-- Text input-->
   
<div class="form-group">
<label class="col-md-4 control-label">Email </label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<input name="email" placeholder="Email" class="form-control" type="email" required>
</div>
</div>
</div>


<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4"><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" name="submitt" id="submitt" style="background: #2D3179; color:white;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span ><style>button{background: #1176be;}</style></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
</div>
</div>

</fieldset>
</form>
</div>
</div> 
</body>
</html>