<?php

	//กำหนดค่าการเชื่อมต่อ DB
	$host = "localhost";
	$username = "root";
	$dbname = "muse_test";
	$password2 = "";
	// $password2 = "heavygeese24";

	date_default_timezone_set('Asia/Bangkok');

	$link = mysqli_connect($host,$username,$password2,$dbname);

		if (!$link) {
		    echo "Error: Unable to connect to MySQL." . PHP_EOL;
		    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
		    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
		    exit;
		}

	mysqli_query($link, "SET NAMES utf8");
	mysqli_commit($link);

?>
