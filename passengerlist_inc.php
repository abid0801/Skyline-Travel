<!doctype html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">

    <title>Flights | SkyLine</title>
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

	<?php
		include('connect.php');
		$p_id=$_POST['p_id'];
		$p_date=$_POST['p_date'];
	?>
	<h1 style="margin-top: 3%;">Flight: <?php echo $p_id?><br>Date: <?php echo $p_date?></h1>
    <table>
      <th>Name</th>
      <?php
        $sql = "SELECT DISTINCT CONCAT(first_name, ' ', last_name) AS name FROM flights AS f, tickets AS t, users AS u WHERE f.flight_id='$p_id' AND f.d_date='$p_date' AND f.flight_id=t.flight_id AND t.email=u.email;";
        $result = $conn-> query($sql);

        if($result-> num_rows > 0){
          while($row = $result-> fetch_assoc()){
            echo "<tr>
            <td>". $row["name"] ."</td>
            </tr>";
          }
          echo "</table>";
        }
        else {
          echo "0 result";
        }
        $conn-> close();

      ?>
    </table>

    



      
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







<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	

</body>
</html>


?>