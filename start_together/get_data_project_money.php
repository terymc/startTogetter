<?php
header('Content-Type: application/json');

function get_data() {
	$connect = mysqli_connect("localhost", "root", "", "start_together_db");
	$query = "SELECT proj_id, proj_money FROM projects";
					 

	$result = mysqli_query($connect, $query);

	$project_data = array();

	while ($row = mysqli_fetch_array($result)) {
		$project_data[] = array(
			'proj_id'		=>	$row["proj_id"],			
			'proj_money'	=>	$row["proj_money"],			
		);
	}

	return json_encode($project_data, JSON_UNESCAPED_UNICODE);

	$connect  -> close();
}

echo get_data();

?>

