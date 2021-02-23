<?php

	$connect = mysqli_connect("localhost", "root", "", "start_together_db");

	$firstname = $_POST["u_firstname"];
	$lastname = $_POST["u_lastname"];
	$birthday = $_POST["u_birthday"];
	$email = $_POST["u_email"];
	$username = $_POST["u_username"];
	$password = $_POST["u_password"];
	$role = $_POST["u_role"];

	$query = "INSERT INTO user(u_firstname, u_lastname, u_birthday, u_email, u_username, u_password, u_role)
			  VALUES('".$firstname."', '".$lastname."', '".$birthday."', '".$email."', '".$username."', '".$password."', '".$role."')";

	mysqli_query($connect, $query);

	$connect -> close();
?>