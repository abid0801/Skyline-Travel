<?php

	session_start();
	include('connect.php');

	$f_id=$_POST['f_id'];
	$f_date=$_POST['f_date'];
	$f_class=$_POST['f_class'];
	$f_seat=$_POST['f_seat'];
	$f_email=$_SESSION['email'];

	$sql="SELECT flight_id, d_date FROM flights WHERE flight_id='$f_id' AND d_date='$f_date';";
	$result = $conn-> query($sql);
	if($result-> num_rows>0){
		if($f_class=="Economy"){
			$sql="SELECT e_seat_num FROM boarding_passes WHERE flight_id='$f_id' AND d_date='$f_date' AND e_seat_num='$f_seat';";
			$result = $conn-> query($sql);
			if($result-> num_rows>0){
				echo "This seat is already booked!";
				exit();
			}
			else{
				$sql="INSERT INTO tickets(flight_id, d_date, type, email) VALUES ('$f_id', '$f_date', '$f_class', '$f_email');";
			}
		}
		if($f_class=="Business"){
			$sql="SELECT b_seat_num FROM boarding_passes WHERE flight_id='$f_id' AND d_date='$f_date' AND b_seat_num='$f_seat';";
			$result = $conn-> query($sql);
			if($result-> num_rows>0){
				echo "This seat is already booked!";
				exit();
			}
			else{
				$sql="INSERT INTO tickets(flight_id, d_date, type, email) VALUES ('$f_id', '$f_date', '$f_class', '$f_email');";
			}
		}

	}

	if($conn->query($sql)==TRUE){
		echo "Ticket Booked Successfully!<br>";
		if($f_class=="Business"){
			$sql="UPDATE flights SET b_seats=b_seats-1 WHERE flight_id='$f_id';";
			$sql="INSERT INTO boarding_passes(flight_id, d_date, email, b_seat_num) VALUES ('$f_id', '$f_date', '$f_email', '$f_seat');";
			if($conn->query($sql)==TRUE)
				echo "Successfully inserted!";
		}
		if($f_class=="Economy"){
			$sql="UPDATE flights SET e_seats=e_seats-1 WHERE flight_id='$f_id';";
			$sql="INSERT INTO boarding_passes(flight_id, d_date, email, e_seat_num) VALUES ('$f_id', '$f_date', '$f_email', '$f_seat');";
			if($conn->query($sql)==TRUE)
				echo "Successfully inserted!";
		}
	}
	else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	

	$conn->close();

?>