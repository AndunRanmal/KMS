<?php
	$server_name = "localhost";
	$user_name = "root";
	$password = "";
	$db_name = "sanmira";
	$conn = new mysqli($server_name, $user_name, $password, $db_name);
	if($conn->connect_errno > 0){
		die('Unable to connect to database [' . $conn->connect_error . ']');
	}
?>
