<?php

	$connect = mysqli_connect("localhost", "root", "", "olh_project");

	$id = $_GET["proj_id"];

	$query = "DELETE FROM projects where proj_id = '".$id."'";

	mysqli_query($connect, $query);

	$conn -> close();
?>