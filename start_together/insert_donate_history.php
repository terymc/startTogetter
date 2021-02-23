<?php

	$connect = mysqli_connect("localhost", "root", "", "start_together_db");

	$u_id = $_POST['u_id'];
	$u_firstname = $_POST['u_firstname'];
	$u_lastname = $_POST['u_lastname'];
	$proj_id = $_POST['proj_id'];
	$proj_title = '';
	$dh_money = $_POST['dh_money'];
	$dh_datetime = $_POST['dh_datetime'];

	$query = "SELECT * FROM projects WHERE proj_id = '".$proj_id."'";

	$result = mysqli_query($connect, $query);

	while ($row = mysqli_fetch_array($result)) {
		$proj_title = $row["proj_title"];
	}


	$query = "INSERT INTO donate_history(u_id, u_firstname, u_lastname, proj_id, proj_title, dh_money, dh_datetime)
			  VALUES('".$u_id."', '".$u_firstname."', '".$u_lastname."', '".$proj_id."', '".$proj_title."', '".$dh_money."', '".$dh_datetime."')";

	mysqli_query($connect, $query);

	$connect -> close();
?>