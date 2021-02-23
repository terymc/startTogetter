<?php
header('Content-Type: application/json');

function get_data() {
	$connect = mysqli_connect("localhost", "root", "", "start_together_db");
	
	$query = "SELECT * FROM donate_history";

	$result = mysqli_query($connect, $query);

	$donate_history = array();

	while ($row = mysqli_fetch_array($result)) {
		$donate_history[] = array(
			'dh_id'			=>	$row["dh_id"],
			'u_id'			=>	$row["u_id"],
			'u_firstname'	=>	$row["u_firstname"],
			'u_lastname'	=>	$row["u_lastname"],
			'proj_id'		=>	$row["proj_id"],
			'proj_title'	=>	$row["proj_title"],
			'dh_money'		=>	$row["dh_money"],
			'dh_datetime'	=>	$row["dh_datetime"],
		);
	}

	return json_encode($donate_history, JSON_UNESCAPED_UNICODE);

	$conn -> close();
}

echo get_data();

?>

