<!doctype html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">

    <title>Passenger List | SkyLine</title>
  </head>

<body style="background-color: #b2b2b2;">

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="flights.php" style="color:skyblue;">SkyLine Travels</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="flights.php">Scheduled Flights</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="book.php">Book a Flight</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="passengerlist.php">Passenger List <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php">Logout</a>
          </li>
        </ul>
        
      </div>
    </nav>

    <form action="passengerlist_inc.php" method="post" 
    style="margin-top: 5%;
    background-color: white;
    margin-left: 1%;
    margin-right: 1%;
    padding: 1% 1% 1% 1%;
    width: 50%;">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Flight ID</label>
          <input type="text" name="p_id" class="form-control"  placeholder="Flight ID">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Date</label>
          <input type="date" name="p_date" class="form-control" >
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Confirm</button>
    </form>

    



      
    <footer style="margin-top: 520px;">
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