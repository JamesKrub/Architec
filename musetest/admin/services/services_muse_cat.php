<?php
/*
 * services_muse_cat.php
 * Web Service for get Museum Category Data
 * @author Navamin Boonmee
 * @Last Update 2017-10-11
*/
require('../object/connect.php');

	header ('Content-type: text/html; charset=utf-8');
	
	//get data
	mysqli_query($link, "SET NAMES utf8");
	$sql = "SELECT cat1_id,cat1_name FROM muse_category ORDER BY cat1_id;";
	$query = mysqli_query($link,$sql);
	if (!$query) {
		printf("Error: %s\n", $link->error);
		exit();
	}
	$resultArray = array();
	while($result = mysqli_fetch_array($query,MYSQLI_ASSOC))
	{
		array_push($resultArray,$result);
	}
	mysqli_close($link);

	echo json_encode($resultArray);

?>
