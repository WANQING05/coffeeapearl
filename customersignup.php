<html>
<head>
<title> Guest Signup | Coffee & Pearl </title>
<link rel="icon" href="images/LogoImage.jpg" type="image/jpg">
</head>

<link rel="stylesheet" type = "text/css" href ="css/managersignup.css">
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
        <li  ><a href="index.php">Home</a></li>
        <li><a href="aboutus.php">About</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="customersignup.php"> Sign Up </a></li>
        <li><a href="customerlogin.php"> Login </a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <div class="jumbotron">
    <h1>Hi Guest, <br>
      Welcome to <span class="edit"> Coffee & Pearl </span></h1>
    <br>
    <p>Get started by creating your account</p>
  </div>
</div>
<div class="container" style="margin-top: 4%; margin-bottom: 2%;">
  <div class="col-md-5 col-md-offset-4">
    <div class="panel panel-primary">
      <div class="panel-heading"> Create Account </div>
      <div class="panel-body">
        <form role="form" action="customer_registered_success.php" method="POST">
          <div class="row">
            <div class="form-group col-xs-12">
              <label for="fullname"><span class="text-danger" style="margin-right: 5px;">*</span> Full Name: </label>
              <div class="input-group">
                <input class="form-control" id="fullname" type="text" name="fullname" placeholder="Your Full Name" required="" autofocus="">
                <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
                </span> </span> </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12">
              <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
              <div class="input-group">
                <input class="form-control" id="username" type="text" name="username" placeholder="Your Username" required="">
                <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
                </span> </span> </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12">
              <label for="email"><span class="text-danger" style="margin-right: 5px;">*</span> Email: </label>
              <div class="input-group">
                <input class="form-control" id="email" type="email" name="email" placeholder="Email" required="">
                <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></label>
                </span> </span> </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12">
              <label for="contact"><span class="text-danger" style="margin-right: 5px;">*</span> Contact: </label>
              <div class="input-group">
                <input class="form-control" id="contact" type="text" name="contact" placeholder="Contact" required="">
                <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></label>
                </span> </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12">
              <label for="address"><span class="text-danger" style="margin-right: 5px;">*</span> Address: </label>
              <div class="input-group">
                <input class="form-control" id="address" type="text" name="address" placeholder="Address" required="">
                <span class="input-group-btn">
                <label class="btn btn-primary"><span class="glyphicon glyphicon-home" aria-hidden="true"></label>
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
              <button class="btn btn-primary" type="submit">Submit</button>
            </div>
          </div>
          <label style="margin-left: 5px;">or</label>
          <br>
          <label style="margin-left: 5px;"><a href="customerlogin.php">Have an account? Login.</a></label>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>