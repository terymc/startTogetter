<?php
header('Content-Type: application/json');

function get_data() {
	$connect = mysqli_connect("localhost", "root", "", "start_together_db");
	
	$query = "SELECT * FROM request_money";

	$result = mysqli_query($connect, $query);

	$user_data = array();

	while ($row = mysqli_fetch_array($result)) {
		$user_data[] = array(
			'rm_id'			=>	$row["rm_id"],
			'u_id'			=>	$row["u_id"],
			'proj_id'		=>	$row["proj_id"],
			'proj_repacc'	=>	$row["proj_repacc"],
			'proj_money'	=>	$row["proj_money"],
			'rm_status'		=>	$row["rm_status"],
		);
	}

	return json_encode($user_data, JSON_UNESCAPED_UNICODE);

	$conn -> close();
}

echo get_data();

?>

