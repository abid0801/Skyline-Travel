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
          <li class="nav-item active">
            <a class="nav-link" href="flights.php">Scheduled Flights <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="book.php">Book a Flight</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="passengerlist.php">Passenger List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
        
      </div>
    </nav>

    <table>
      <th>Flight</th>
      <th>From</th>
      <th>Departure</th>
      <th>To</th>
      <th>Arrival</th>
      <th>Economy Seats Available</th>
      <th>Economy Price</th>
      <th>Business Class Seats Available</th>
      <th>Business Price</th>
      <th>Flight Distance</th>
      <th>Aircraft</th>
      <th>Pilots</th>
      <?php
        $conn = mysqli_connect("localhost", "root", "", "skylinedb");
        if($conn-> connect_error){
          die("Connection failed:". $conn-> connect_error);
        }

        $sql = "SELECT flight_id, source_id, CONCAT(d_date, ' ', d_time) AS departure, dest_id, CONCAT(a_date, ' ', a_time) AS arrival, e_seats, e_price, b_seats, b_price, distance, model,pilot first_name FROM flights AS f, aeroplanes AS a,pilots as p WHERE f.aeroplane_reg=a.reg_number, p.flight_id=f.flight_id;";
        $result = $conn-> query($sql);

        if($result-> num_rows > 0){
          while($row = $result-> fetch_assoc()){
            echo "<tr>
            <td>". $row["flight_id"] ."</td>
            <td>". $row["source_id"] ."</td>
            <td>". $row["departure"] ."</td>
            <td>". $row["dest_id"] ."</td>
            <td>". $row["arrival"] ."</td>
            <td>". $row["e_seats"] ."</td>
            <td>". $row["e_price"] ."</td>
            <td>". $row["b_seats"] ."</td>
            <td>". $row["b_price"] ."</td>
            <td>". $row["distance"] ."</td>
            <td>". $row["model"] ."</td>
            <td>". $row["first_name"] ."</td>
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