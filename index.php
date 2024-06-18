<?php
session_start();
?>
<html>
<head>
<title> Home | Coffee & Pearl </title>
<link rel="icon" href="images/LogoImage.jpg" type="image/jpg">
</head>

<link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
<link rel="stylesheet" type = "text/css" href ="css/index.css">

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
        <li class="active" ><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
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
<div class="wide">
  <div class="col-xs-5 line">
    <hr>
  </div>
  <div class="col-xs-2 logo"><img src="images/LogoImage.jpg"></div>
  <div class="col-xs-5 line">
    <hr>
  </div>
  <div class="tagline">Good Drink is Good Mood</div>
</div>
<br>
<div class="orderblock">
  <h2>Feeling Thirsty?</h2>
  <center>
    <a class="btn btn-success btn-lg" href="customerlogin.php" role="button" > Order Now </a>
  </center>
</div>
</body>
</html>