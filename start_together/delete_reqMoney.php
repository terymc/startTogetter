<?php

	$connect = mysqli_connect("localhost", "root", "", "start_together_db");

	$id = $_GET["rm_id"];

	$query = "DELETE FROM request_money where rm_id = '".$id."'";

	mysqli_query($connect, $query);

	$conn -> close();
?>