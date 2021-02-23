<?php

	$connect = mysqli_connect("localhost", "root", "", "start_together_db");

	
	$proj_id = $_POST['proj_id'];

	$query = "SELECT COUNT(`u_id`),`u_firstname`,`u_lastname` FROM `donate_history` WHERE proj_id='$proj_id' GROUP BY `u_id`";


	$result = mysqli_query($connect, $query);

	$rowCount = mysqli_num_rows($result);


	echo $rowCount;

	$connect -> close();
?>