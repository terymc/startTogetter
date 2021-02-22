<?php

	require_once dirname(__FILE__).'/omise-php/lib/Omise.php';

	define('OMISE_API_VERSION', '2015-11-17');
	define('OMISE_PUBLIC_KEY', 'pkey_test_5mxfwdyztyqm17dzf9q');
	define('OMISE_SECRET_KEY', 'skey_test_5mxfwdz04lzuy07xcta');


	$connect = mysqli_connect("localhost", "root", "", "start_together_db");

	$u_id = $_POST['u_id'];
	$u_firstname = $_POST['u_firstname'];
	$u_lastname = $_POST['u_lastname'];
	$u_email = $_POST['u_email'];
	$title = mysqli_real_escape_string($connect, $_POST['proj_title']);
	$desc = mysqli_real_escape_string($connect, $_POST['proj_desc']);
	$goal = $_POST['proj_goal'];
	$account = $_POST['proj_account'];
	$type = $_POST['proj_type'];



	$recipient = OmiseRecipient::create(array(
	  	'name' 			=> $u_firstname . ' ' . $u_lastname,
	  	'description' 	=> 'บัญชีรับเงินโปรเจค',
	  	'email' 		=> $u_email,
	  	'type'			=> 'individual',
	  	'tax_id' 		=> '',
	  	'bank_account'  => array(
	  	'brand' 		=> 'test',
	    'number' 	    => $account,
	    'name' 			=> 'Tester Account'
	  	)
	));

	$_recipient = OmiseRecipient::retrieve();
	$countrep = count($_recipient['data'])-1;

	if(!empty($title)|| !empty($content)){
		$sql = "INSERT INTO projects(u_id, proj_desc, proj_goal, proj_money, proj_title, proj_bracker, proj_account, proj_type, proj_repacc)
			    VALUES('".$u_id."', '".$desc."', '".$goal."', 'null', '".$title."', 'null', '".$account."', '".$type."', '".$_recipient["data"]["".$countrep.""]["id"]."')";

		$query = mysqli_query($connect, $sql);
	}

	$query = "SELECT proj_id FROM projects";

	$result = mysqli_query($connect, $query);

	while ($row = mysqli_fetch_array($result)) {
		$currentRow	 =	$row["proj_id"];			
	}

	print_r($currentRow);

?>
