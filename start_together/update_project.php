<?php

	require_once dirname(__FILE__).'/omise-php/lib/Omise.php';

	define('OMISE_API_VERSION', '2015-11-17');
	define('OMISE_PUBLIC_KEY', 'pkey_test_5mxfwdyztyqm17dzf9q');
	define('OMISE_SECRET_KEY', 'skey_test_5mxfwdz04lzuy07xcta');


	$connect = mysqli_connect("localhost", "root", "", "start_together_db");

	$proj_id = $_POST['proj_id'];
	$u_id = $_POST['u_id'];
	$u_firstname = $_POST['u_firstname'];
	$u_lastname = $_POST['u_lastname'];
	$u_email = $_POST['u_email'];
	$title = mysqli_real_escape_string($connect, $_POST['proj_title']);
	$desc = mysqli_real_escape_string($connect, $_POST['proj_desc']);
	$goal = $_POST['proj_goal'];
	$account = $_POST['proj_account'];
	$type = $_POST['proj_type'];

	$projectAcc = "SELECT proj_account FROM projects WHERE proj_id = '$proj_id'";


	$resultAcc = mysqli_query($connect, $projectAcc);

	while ($row = mysqli_fetch_array($resultAcc)) {
		$currentAcc	 =	$row["proj_account"];			
	}
	if($account != $currentAcc ){
		$desrecipient = OmiseRecipient::retrieve($_POST['proj_repacc']);
		$desrecipient -> destroy();
	

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

		$query = "UPDATE projects 
				  SET proj_title = '".$title."', proj_goal = '".$goal."', proj_desc = '".$desc."', proj_type = '".$type."', 
				  	  proj_repacc = '".$_recipient["data"]["".$countrep.""]["id"]."' WHERE proj_id = '".$proj_id."'";
		$result = mysqli_query($connect, $query);

	
	}else{
		$query = "UPDATE projects 
				  SET proj_title = '".$title."', proj_goal = '".$goal."', proj_desc = '".$desc."', proj_type = '".$type."', 
				  	  proj_repacc = '".$_POST['proj_repacc']."' WHERE proj_id = '".$proj_id."'";

	$result = mysqli_query($connect, $query);
	}
	

	print_r($proj_id);

	

?>
