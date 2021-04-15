<?php
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">

    <title>Home | SkyLine</title>
  </head>

  <body style="background-color: #b2b2b2;">

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#" style="color:skyblue;">SkyLine Travels</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
      </div>
    </nav>

    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/s1.jpg" class="d-block w-100 h-100" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h1 style="color: black; font-size: 50px;">A JOURNY</h1>
              <h2 style="color: skyblue;">WORTH CHERISHING</h2>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/s2.jpg" class="d-block w-100 h-100" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h1 style="color: black; font-size: 50px;">WORLD CLASS SERVICES</h1>
              <h2 style="color: skyblue;">TO COMPLEMENT YOUR LIFESTYLE</h2>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/s3.jpg" class="d-block w-100 h-100" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <h1 style="color: black; font-size: 50px;">YOUR NEXT VACATION</h1>
              <h2 style="color: skyblue;">JUST A CLICK AWAY</h2>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

      
    <div class="row" id="loginform">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Sign up</h5>
            <p class="card-text">Already an user? Please login.</p>
            <form class="signup-form" action="signup_inc.php" method="post">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputFirstname">First Name</label>
                  <input type="text" class="form-control" name="first_name" placeholder="First name">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputLastname">Last Name</label>
                  <input type="text" class="form-control" name="last_name" placeholder="Last name">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Password</label>
                  <input name="pwd" type="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
            
                <div class="form-group col-md-6">
                  <label for="inputPassportNo">Passport Number</label>
                  <input name="passport_number" type="text" class="form-control"  id="inputPassportNo" placeholder="Passport Number" requred>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputExpireydate">Passport Expiration Date</label>
                  <input type="date" class="form-control" name="expiration_date" id="inputExpireydate">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputCountry">Country</label>
                  <input type="text" class="form-control" name="country_id" id="inputCountry" placeholder="Country">
                </div>
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Login</h5>
            <p class="card-text">And start exploring.</p>
            <form class="login-form" action="login_inc.php" method="post">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="pwd" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form> 
          </div>
        </div>
      </div>
    </div>




    <footer>
      <div class="wrapper">
        <div>
          <h5 style="margin-left: 40px; text-decoration: underline; font-size: 20px">Corporate Headquarters</h5>
          <p style="margin-left: 40px; color: #b2b2b2;">
            North South University<br>
            Block-B, Bashundhara<br>
            Dhaka, Bangladesh.
          </p>
        </div>
        <div class="footer-bottom">
          <ul>
            <li><a style="color: skyblue;">© Copyright SkyLine Travels 2018-2019. All Rights Reserved.</a></li>
            <li><a href="#" id="mycontact" style="margin-right: 40px;">Contact us</a></li>
            <li><a href="partners.php" id="mycontact" style="margin-right: 40px;">Our Partenrs</a></li>
          </ul>
        </div>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>