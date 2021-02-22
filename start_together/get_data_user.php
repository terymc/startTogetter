<?php
header('Content-Type: application/json');

function get_data() {
	$connect = mysqli_connect("localhost", "root", "", "start_together_db");
	$query = "SELECT * FROM user";
	$result = mysqli_query($connect, $query);

	$user_data = array();

	while ($row = mysqli_fetch_array($result)) {
		$user_data[] = array(
			'u_id'			=>	$row["u_id"],
			'u_firstname'	=>	$row["u_firstname"],
			'u_lastname'	=>	$row["u_lastname"],
			'u_birthday'	=>	$row["u_birthday"],
			'u_email'		=>	$row["u_email"],
			'u_username'	=>	$row["u_username"],
			'u_password'	=>	$row["u_password"],
			'u_role'		=>	$row["u_role"],
		);
	}

	return json_encode($user_data, JSON_UNESCAPED_UNICODE);

	$conn -> close();
}

echo get_data();

?>

