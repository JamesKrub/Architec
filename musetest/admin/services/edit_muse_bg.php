<?php
/*
 * edit_muse_bg.php
 * Web Service for update Museum Data
 * @author Navamin Boonmee
 * @Last Update 2017-10-11
*/
require('../object/connect.php');

if($_SERVER[REQUEST_METHOD]=="POST"){

	$bg_id = $_POST["bg_id"];
	$bg_name = $_POST["bg_name"];
	$bg_desc = $_POST["bg_desc"];
	$bg_entry = $_POST["bg_entry"];
	$bg_tel = $_POST["bg_tel"];
	$bg_email = $_POST["bg_email"];
	$bg_website = $_POST["bg_website"];

	//update data
	$sql = "UPDATE muse_bg SET bg_name = '$bg_name',bg_desc = '$bg_desc',bg_entry = '$bg_entry',bg_tel = '$bg_tel',bg_email = '$bg_email',bg_website =' $bg_website' WHERE bg_id = 1 ;";
	mysqli_query($link,$sql);

}

?>