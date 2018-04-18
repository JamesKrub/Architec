<?php
/*
 * add_muse_cat.php
 * Web Service for add Museum Category Data
 * @author Navamin Boonmee
 * @Last Update 2017-10-11
*/

require('../object/connect.php');

if($_SERVER[REQUEST_METHOD]=="POST"){
	
	$mcat_name = $_POST["mcat_name"];

	//insert data
	$sql = "INSERT INTO muse_category (cat1_name) VALUES ('$mcat_name');";
	mysqli_query($link,$sql);

	//return id 
	$sql_re = "SELECT cat1_id FROM muse_category ORDER BY cat1_id DESC LIMIT 1;";
	$query = mysqli_query($link,$sql_re) or die("Can't Query");
	$result=mysqli_fetch_array($query);

	echo json_encode($result);

}

?>