<?php
session_start();
?>
<html>
<head>
<title> Contact | Coffee & Pearl </title>
<link rel="icon" href="images/LogoImage.jpg" type="image/jpg">
</head>

<link rel="stylesheet" type = "text/css" href ="css/contactus.css">
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
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About</a></li>
        <li class="active"><a href="contactus.php">Contact Us</a></li>
      </ul>
      <?php


      if ( isset( $_SESSION[ 'login_user2' ] ) ) {
        ?>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
        <li><a href="foodlist.php"> Drink Zone </a></li>
        <li><a href="cart.php"> Cart
          (
          <?php
          if ( isset( $_SESSION[ "cart" ] ) ) {
            $count = count( $_SESSION[ "cart" ] );
            echo "$count";
          } else
            echo "0";
          ?>
          ) </a></li>
        <li><a href="logout_u.php"> Log Out </a></li>
      </ul>
      <?php
      } else {

        ?>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="customersignup.php"> Sign Up </a></li>
        <li><a href="customerlogin.php"> Login </a></li>
      </ul>
      <?php
      }
      ?>
    </div>
  </div>
</nav>
<br>
<div class="heading"> <strong>Want to contact <span class="edit"> Coffee & Pearl </span>?</strong> <br>
  Here are a few ways to get in touch with us. </div>
<div class="col-xs-12 line">
  <hr>
</div>
<div class="container" >
  <div class="col-md-5" style="float: none; margin: 0 auto;">
    <div class="form-area">
      <form method="post" action="">
        <br style="clear: both">
        <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Contact Form </h3>
        <div class="form-group">
          <input type="text" class="form-control" id="name" name="name" placeholder="Name" required autofocus="">
        </div>
        <div class="form-group">
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
          <input type="Number" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
        </div>
        <div class="form-group">
          <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Message" maxlength="140" rows="7"></textarea>
          <span class="help-block">
          <p id="characterLeft" class="help-block">Max Character length : 140 </p>
          </span> </div>
        <input type="submit" name="submit" type="button" id="submit" name="submit" class="btn btn-primary pull-right"/>
      </form>
    </div>
	  <div class="form-area">
        <br style="clear: both">
        <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Scan Me </h3>
        <img src="images/qrcode.png" width="350">
    </div>
  </div>
</div>
<?php
if ( isset( $_POST[ 'submit' ] ) ) {
  require 'connection.php';
  $conn = Connect();

  $Name = $conn->real_escape_string( $_POST[ 'name' ] );
  $Email_Id = $conn->real_escape_string( $_POST[ 'email' ] );
  $Mobile_No = $conn->real_escape_string( $_POST[ 'mobile' ] );
  $Subject = $conn->real_escape_string( $_POST[ 'subject' ] );
  $Message = $conn->real_escape_string( $_POST[ 'message' ] );

  $query = "INSERT into contact(Name,Email,Mobile,Subject,Message) VALUES('$Name','$Email_Id','$Mobile_No','$Subject','$Message')";
  $success = $conn->query( $query );

  if ( !$success ) {
    die( "Couldnt enter data: " . $conn->error );
  }

  $conn->close();
}
?>
</body>
</html>