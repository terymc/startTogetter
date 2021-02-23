<?php

	$connect = mysqli_connect("localhost", "root", "", "start_together_db");
	require_once dirname(__FILE__).'/omise-php/lib/Omise.php';

	define('OMISE_API_VERSION', '2015-11-17');
	define('OMISE_PUBLIC_KEY', 'pkey_test_5mxfwdyztyqm17dzf9q');
	define('OMISE_SECRET_KEY', 'skey_test_5mxfwdz04lzuy07xcta');

	$proj_id = $_POST['proj_id'];

	$rep_acc = $_POST['repAcc'];

	$proj_name = '';

	$query = "SELECT proj_title FROM projects WHERE proj_id = '$proj_id'";

		$result = mysqli_query($connect, $query);

		while ($row = mysqli_fetch_array($result)) {
			$proj_name = $row["proj_title"];
		}


	$transfer = OmiseTransfer::create(array(
	    'amount'    	=> $_POST['btnMoney']*100,
	    'fail_fast' 	=> true,
	    'recipient' 	=> $rep_acc,
	    'metadata'  	=> array(        
	    'projectName'   => $proj_name
	    )
	));

	$query = "UPDATE request_money SET rm_status = 'โอนจ่ายเรียบร้อยแล้ว' WHERE proj_repacc = '$rep_acc'";

	mysqli_query($connect, $query);

?>