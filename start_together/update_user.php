<?php

	$connect = mysqli_connect("localhost", "root", "", "start_together_db");

	$id = $_POST["u_id"];
	$firstname = $_POST["u_firstname"];
	$lastname = $_POST["u_lastname"];
	$birthday = $_POST["u_birthday"];
	$email = $_POST["u_email"];
	$username = $_POST["u_username"];
	$password = $_POST["u_password"];
	$role = $_POST["u_role"];

	$query = "UPDATE user SET u_id = '".$id."', u_firstname = '".$firstname."', u_lastname = '".$lastname."', 
				u_birthday = '".$birthday."', u_email = '".$email."', u_username = '".$username."', 
				u_password = '".$password."', u_role = '".$role."' WHERE u_id = '".$id."'";

	mysqli_query($connect, $query);

	$conn -> close();
?>