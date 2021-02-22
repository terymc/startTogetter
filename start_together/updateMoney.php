<?php

	$connect = mysqli_connect("localhost", "root", "", "start_together_db");

	$money = $_POST["amount"];
	$proj_id = $_POST["proj_id"];

	$query = "SELECT proj_money FROM projects WHERE proj_id = '$proj_id'";

	$result = mysqli_query($connect, $query);

	while ($row = mysqli_fetch_array($result)) {
		$money = $money + $row["proj_money"];
	}

	$query = "UPDATE projects SET proj_money = '$money' WHERE proj_id = '$proj_id'";

	mysqli_query($connect, $query);
	echo $money;

	$connect -> close();
?>