<?php

	$connect = mysqli_connect("localhost", "root", "", "start_together_db");

	$id = $_GET["u_id"];

	$query = "DELETE FROM user where u_id = '".$id."'";

	mysqli_query($connect, $query);

	$conn -> close();
?>