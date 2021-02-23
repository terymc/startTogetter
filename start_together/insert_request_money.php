<?php

	$connect = mysqli_connect("localhost", "root", "", "start_together_db");

	$u_id = $_POST["u_id"];
	$proj_id = $_POST["proj_id"];
	$proj_repacc = $_POST["proj_repacc"];
	$proj_money = $_POST["proj_money"];

	$query = "INSERT INTO request_money(u_id, proj_id, proj_repacc, proj_money)
			  VALUES('".$u_id."', '".$proj_id."', '".$proj_repacc."', '".$proj_money."')";

	mysqli_query($connect, $query);

	$connect -> close();
?>