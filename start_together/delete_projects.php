<?php

	$connect = mysqli_connect("localhost", "root", "", "start_together_db");

	$id = $_GET["proj_id"];

	$query = "DELETE FROM projects where proj_id = '".$id."'";

	mysqli_query($connect, $query);

	$conn -> close();
?>