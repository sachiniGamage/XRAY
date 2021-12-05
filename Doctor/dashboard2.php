<!DOCTYPE html>
<html lang="en">
<head>

    <title>XrayUnit</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel = "stylesheet" type="text/css" href="../css/dashboard2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
          <br><br><br><br><br>
          <li><a href="../assets/logout.php">Logout</a></li>
        </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well">
      <div class="topnav">
          <a class="active" href="#home">Home</a>
          <a href="#contact">Contact</a>
          <div class="search-container">
          <form action="/action_page.php">
               <input type="text" placeholder="Search.." name="search">
               <button type="submit">Search</button>
          </form>
     </div>
     </div>
    </div>

</body>