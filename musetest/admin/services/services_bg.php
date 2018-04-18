<?php
/*
 * services_bg.php
 * Web Service for get Museum Data
 * @author Navamin Boonmee
 * @Last Update 2017-10-11
*/
require('../object/connect.php');

	//get data
	$sql = "SELECT bg_name,bg_desc,bg_entry,bg_tel,bg_email,bg_website FROM muse_bg;";
	$query = mysqli_query($link,$sql) or die("Can't Query");	
	$result=mysqli_fetch_array($query);

	echo json_encode($result);

?>