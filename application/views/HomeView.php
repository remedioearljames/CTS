<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cargo Tracking System</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- Bootstrap -->     
     <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
     <link rel="stylesheet" href="<?php echo base_url("assets/font-awesome/css/font-awesome.min.css"); ?>" />
     <link rel="stylesheet" href="<?php echo base_url("assets/css/mystyle.css"); ?>"/> 
</head>


<body>



<div class="wrapper">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand " href="HomeController">CTS<span class="label label-warning text-capitalize"></span></a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">About</a></li>
                <li><a href="#">Features</a></li>
                <li><button type="button" class="btn btn-success navbar-btn btn-circle">Sign in</button></li>
            </ul>
        </div>
      </div>
    </nav>
    <header class="header">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="content">
                  <div class="pull-middle">
        

    <!-- View List of Drivers -->             
<strong><center><h3>List of Drivers</h3></center></strong></br>
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Middle Name</th>
      <th>Last Name</th>
      <th>Address</th>
      <th>Contact Number</th>
      <th>License Number</th>
      <th>Username</th>
      <th>Password</th>
      <th>BirthDate</th>
    </tr>
  </thead>
  <tbody>
     <?php foreach ($records as $rec){ 
      echo"<tr>
       
      <th scope='row'>$rec->driver_ID</th>
      
      <td>$rec->driver_fname</td>
      <td>$rec->driver_mname</td>
      <td>$rec->driver_lname</td>
      <td>$rec->driver_address</td>
      <td>$rec->driver_contactNo</td>
      <td>$rec->driver_licenseNo</td>
      <td>$rec->driver_username</td>
      <td>$rec->driver_password</td>
      <td>$rec->driver_bdate</td>
    
           </tr>";

    }
      ?>
  </tbody>
</table>


<!-- Trigger/Open The Modal -->
<button id="myBtn" type="button" data-target=".bs-example-modal-lg" class="btn btn-primary">Add User</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">×</span>
    <div>
<form  action ="HomeController" class="form-horizontal" id="addDriver" name = "addDriver">
    <fieldset>
        <!-- Form Name -->
        <legend>Add Driver</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="fname">First Name</label>  
          <div class="col-md-4">
          <input id="fname" name="fname" type="text" placeholder="First Name" class="form-control input-md" required="">
          
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="mname">Middle Name</label>  
          <div class="col-md-4">
          <input id="mname" name="mname" type="text" placeholder="Middle Name" class="form-control input-md" required="">
          
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="lname">Last Name</label>  
          <div class="col-md-4">
          <input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control input-md" required="">
          
          </div>
        </div>
        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="licenseNumber">License Number</label>  
          <div class="col-md-4">
          <input id="licenseNumber" name="licenseNumber" type="text" placeholder="LicenseNumber" class="form-control input-md" required="">
          <span class="help-block">Email will be used for notication messages</span>  
          </div>
        </div>

            <!-- Username input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="username">Username</label>  
          <div class="col-md-4">
          <input id="username" name="username" type="text" placeholder="Username" class="form-control input-md" required="">
          </div>
        </div>


        <!-- Password input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="password">Password </label>
          <div class="col-md-4">
            <input id="password" name="password" type="password" placeholder="Password " class="form-control input-md" required="">
            <span class="help-block">Password </span>
          </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="rpassword">confirm</label>
          <div class="col-md-4">
            <input id="rpassword" name="rpassword" type="password" placeholder="Password" class="form-control input-md" required="">
            <span class="help-block">Retype pass word</span>
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="address1">Address</label>  
          <div class="col-md-4">
          <textarea id="address" name="address" type="text" placeholder="Address " class="form-control input-md" required=""></textarea>
          </div>
        </div>


        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="contactphone">Contact Phone</label>  
          <div class="col-md-4">
          <input id="contactphone" name="contactphone" type="text" placeholder="Phone Number" class="form-control input-md" required="">
    
          </div>
        </div>


        <!-- Date input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="bdate">Birth Date</label>  
          <div class="col-md-4">
          <input id="bdate" name="bdate" type="date"  placeholder="Birth Date" class="form-control input-md" required="">
    
          </div>
        </div>


        <!-- Button (Double) -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="save"></label>
          <div class="col-md-8">
            <button id="save" name="save"  class="btn btn-success" value="Save">Save</button>
            <button id="cancel" name="cancel" type="reset"class="btn btn-primary" value="Cancel">Reset</button>
          </div>
        </div>

        </fieldset>
        </form>

</div>

 </div>

</div>

                  </div>              
                </div>
            </div>
            
        </div>
    </header>

    <footer class="footer text-center">
        <div class="container">
            <small>© Copyright 2015. Cargo Tracking System</a></small>
        </div>
    </footer>

<!-- The scroll to top feature -->
    
<div class="scroll-top-wrapper ">
  <span class="scroll-top-inner">
    <i class="fa fa-2x fa-arrow-circle-up"></i>
  </span>
</div>
</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/BackToTopScroll.js"); ?>"></script>
</body>
</html>

