<?php
header('Content-Type: application/json');

function get_data() {
	$connect = mysqli_connect("localhost", "root", "", "start_together_db");
	
	$query = "SELECT projects.proj_id, projects.u_id, user.u_firstname, user.u_lastname, projects.proj_title,
					 projects.proj_desc, projects.proj_goal, projects.proj_bracker, projects.proj_money, 
					 projects.proj_type, projects.proj_account, projects.proj_repacc, projects.proj_status 
					 FROM projects 
					 INNER JOIN user ON projects.u_id = user.u_id";

	$result = mysqli_query($connect, $query);

	$user_data = array();

	while ($row = mysqli_fetch_array($result)) {
		$user_data[] = array(
			'proj_id'			=>	$row["proj_id"],
			'u_id'				=>	$row["u_id"],
			'u_firstname'		=>	$row["u_firstname"],
			'u_lastname'		=>	$row["u_lastname"],
			'proj_title'		=>	$row["proj_title"],
			'proj_desc'			=>	$row["proj_desc"],
			'proj_goal'			=>	$row["proj_goal"],
			'proj_bracker'		=>	$row["proj_bracker"],
			'proj_money'		=>	$row["proj_money"],
			'proj_type'			=>	$row["proj_type"],
			'proj_account'		=>	$row["proj_account"],
			'proj_repacc'		=>	$row["proj_repacc"],
			'proj_status'		=>	$row["proj_status"],
		);
	}

	return json_encode($user_data, JSON_UNESCAPED_UNICODE);

	$conn -> close();
}

echo get_data();

?>

