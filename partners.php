<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">

    <title>Agents | SkyLine</title>
  </head>

    <body style="background-color: #b2b2b2;">

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php" style="color:skyblue;">SkyLine Travels</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>
        </ul>
        
      </div>
    </nav>

    <h1 style="letter-spacing: 3px; font-weight: 700; color: black; margin-top: 3%; text-align: center;">Our Official Partners</h1>

    <table>
    	<tr>
    		<th>Name</th>
    		<th>License number</th>
    		<th>Membership number</th>
    		<th>Country ID</th>
    	</tr>
    	<?php
    		include('connect.php');

    		$sql = "SELECT * FROM agents;";
    		$result = $conn-> query($sql);

    		if($result-> num_rows > 0){
    			while($row = $result-> fetch_assoc()){
    				echo "<tr>
            <td>". $row["agent_name"] ."</td>
            <td>". $row["l_number"] ."</td>
            <td>". $row["m_number"] ."</td>
            <td>". $row["country_id"] ."</td>
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



    <footer style="margin-top: 825px;">
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