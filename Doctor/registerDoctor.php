<?php
include("dashboard.php");
?>
<div class="container">

<script type="text/javascript">
  function validateFName()
    {
    var name = document.getElementById("doc_fname").value;
    if((name == "")||(name == null))
    {
      alert("Please enter your name");
      return false;
    }
    return true;
    }

    function validateLName()
    {
    var name = document.getElementById("doc_lname").value;
    if((name == "")||(name == null))
    {
      alert("Please enter your name");
      return false;
    }
    return true;
    }
    
  function validateEmail()
    {
      var email = document.getElementById("doc_email").value;
      var at = email.indexOf("@");
      var dt = email.lastIndexOf(".");
      var len = email.length;
  
    if((at < 2)||(dt-at < 2)||(len-dt < 2))
    {
      alert("Please enter a valid email address");
      return false;
    }
      return true;
    }
    
  function validateContact()
  {
    var cno = document.getElementById("doc_phone").value;
    if((isNaN(cno))||(cno.length != 10))
  {
    alert("Please enter a valid contact number");
    return false;
  }
    return true;
  }
    
    function Validate()
    console.log("Validate triggered.");
    {
      if(validateFName()&& validateLName()&& validateEmail() && validateContact())
    {
      alert("Registration is completed");
    }
    else
    {
      event.preventDefault();
    }
    return false;
  }
</script>

<form class="well form-horizontal" action="../assets/Doctor/registerDoctor.php" onSubmit="return Validate()" method="post"  id="contact_form">
  <fieldset>

  <!-- Form Name -->
  <legend><center><h2><b>Doctor-Register</b></h2></center></legend><br>

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
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" name="submit" class="btn btn-warning" style="background: #2D3179; color:white;" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
      </div>
    </div>

  </fieldset>
  </form>
  </div>
</div> 