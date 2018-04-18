<?php
/*
 * add_news.php
 * Web Service for add News Data
 * @author Navamin Boonmee
 * @Last Update 2017-10-11
*/
require('../object/connect.php');

if($_SERVER[REQUEST_METHOD]=="POST"){

	$news_title = $_POST["news_title"];
	$news_detail = $_POST["news_detail"];
	$news_publish = $_POST["news_publish"];

	//insert data
	$sql = "INSERT INTO archive_news (news_title,news_detail,news_date,news_publish,news_ref_link) VALUES ('$news_title','$news_detail',CURDATE(),'$news_publish','');";
	mysqli_query($link,$sql);

	//return id
	$sql_re = "SELECT news_id FROM archive_news ORDER BY news_id DESC LIMIT 1;";
	$query = mysqli_query($link,$sql_re) or die("Can't Query");
	$result=mysqli_fetch_array($query);
	echo json_encode($result);

}

?>