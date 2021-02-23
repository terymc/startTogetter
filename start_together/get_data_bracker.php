<?php
header('Content-Type: application/json');

function get_data() {

	$proj_id = $_GET['proj_id'];
	$connect = mysqli_connect("localhost", "root", "", "start_together_db");
	
	$query = "SELECT COUNT(`u_id`),`u_firstname`,`u_lastname`,SUM(`dh_money`) FROM `donate_history` WHERE proj_id='$proj_id' GROUP BY `u_id`";
	$result = mysqli_query($connect, $query);

	$brackerList = array();

	while ($row = mysqli_fetch_array($result)) {
		$brackerList[] = array(
			
			'u_firstname'		=>	$row["u_firstname"],
			'u_lastname'		=>	$row["u_lastname"],			
			'SUMdh'		=>	number_format($row["SUM(`dh_money`)"],2,'.',''),
		);
	}

	return json_encode($brackerList, JSON_UNESCAPED_UNICODE);

	$conn -> close();
}

echo get_data();

?>

