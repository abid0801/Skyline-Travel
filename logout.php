<?php

	include('connect.php');
	session_destroy();
	header("location: home.php");
?>