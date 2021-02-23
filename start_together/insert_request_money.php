<?php

	$connect = mysqli_connect("localhost", "root", "", "start_together_db");

	$u_id = $_POST["u_id"];
	$proj_id = $_POST["proj_id"];
	$proj_repacc = $_POST["proj_repacc"];
	$proj_money = $_POST["proj_money"];

	$query = "INSERT INTO request_money(u_id, proj_id, proj_repacc, proj_money, rm_status)
			  VALUES('".$u_id."', '".$proj_id."', '".$proj_repacc."', '".$proj_money."', 'รอการโอนจ่าย')";

	mysqli_query($connect, $query);

	$query = "UPDATE projects SET proj_status = 'non-active' WHERE proj_id = '$proj_id'";

	mysqli_query($connect, $query);

	$connect -> close();
?>