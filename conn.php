<?php 
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "pa";
	


	$conn = mysqli_connect($server, $user, $pass, $db);
	if (!$conn) {
		echo "Connection Failed";
	}

 ?>