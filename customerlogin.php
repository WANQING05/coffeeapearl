<?php
include( 'login_u.php' );

if ( isset( $_SESSION[ 'login_user2' ] ) ) {
  header( "location: foodlist.php" );
}
?>

<!DOCTYPE html>
<html>
<head>
<title> Guest Login | Coffee & Pearl </title>
<link rel="icon" href="images/LogoImage.jpg" type="image/jpg">
</head>

<link rel="stylesheet" type = "text/css" href ="css/managerlogin.css">
<link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<body>
<button onclick="topFunction()" id="myBtn" title="Go to top"> <span class="glyphicon">^</span> </button>
<script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
<nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php">Coffee & Pearl</a> </div>
    <div class="collapse navbar-collapse " id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="customersignup.php"> Sign Up </a></li>
        <li class="active"><a href="customerlogin.php"> Login </a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <div class="jumbotron">
    <h1>Hi Guest,<br>
      Welcome to <span class="edit"> Coffee & Pearl </span></h1>
    <br>
    <p>Kindly LOGIN to continue.</p>
  </div>
</div>
<div class="container" style="margin-top: 4%; margin-bottom: 2%;">
  <div class="col-md-5 col-md-offset-4">
    <label style="margin-left: 5px;color: red;"><span> <?php echo $error;  ?> </span></label>
    <div class="panel panel-primary">
      <div class="panel-heading"> Login </div>
      <div class="panel-body">
        <form action="" method="POST">
          <div class="row">
            <div class="form-group col-xs-12">
              <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
              <div class="input-group">
                <input class="form-control" id="username" type="text" name="username" placeholder="Username" required="" autofocus="">
                <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
                </span> </span> </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12">
              <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
              <div class="input-group">
                <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
                <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
                </span> </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-4">
              <button class="btn btn-primary" name="submit" type="submit" value=" Login ">Submit</button>
            </div>
          </div>
          <label style="margin-left: 5px;">or</label>
          <br>
          <label style="margin-left: 5px;"><a href="customersignup.php">Create a new account.</a></label>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>