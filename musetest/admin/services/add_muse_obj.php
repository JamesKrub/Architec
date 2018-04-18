<?php
/*
 * add_muse_obj.php
 * Web Service for add Museum Object Data
 * @author Navamin Boonmee
 * @Last Update 2017-10-11
*/

require('../object/connect.php');

if($_SERVER[REQUEST_METHOD]=="POST"){

	$obj_refcode = $_POST["obj_refcode"];
	$obj_title = $_POST["obj_title"];
	$obj_extent = $_POST["obj_extent"];
	$obj_physicals = $_POST["obj_physicals"];
	$obj_category = $_POST["obj_category"];
	$obj_keyword = $_POST["obj_keyword"];

	//insert data
	$sql = "INSERT INTO `muse_object` (`obj_refcode`, `obj_title`, `obj_titleeng`, `obj_datecreate`, `obj_level`, `obj_extent`, `obj_creator`, `obj_bio`, `obj_dateacc`, `obj_history`, `obj_acquis`, `obj_scope`, `obj_appraisal`, `obj_accruals`, `obj_arrangement`, `obj_legal`, `obj_condition`, `obj_copyright`, `obj_lang`, `obj_physicals`, `obj_physicalseng`, `obj_aids`, `obj_location`, `obj_existence`, `obj_related`, `obj_associated`, `obj_pubnote`, `obj_note`, `obj_date`, `obj_category`, `obj_access`, `user_id`, `obj_keyword`, `obj_approve`, `obj_relation`, `obj_display`, `obj_location_display`, `obj_existence_display`, `obj_creator_display`, `obj_bio_display`, `obj_dateacc_display`, `obj_history_display`, `obj_acquis_display`, `obj_downloadfile`, `obj_download`, `obj_countdownload`, `obj_cate2`, `obj_cate3`)
		VALUES ('$obj_refcode', '$obj_title', '-', CURDATE(), '', '$obj_extent', '', '', '', '', '', '', '', '', '', '', '', '', '', '$obj_physicals', '', '', '', '', '', '', '', '', CURDATE(), '$obj_category', '0', '0', '$obj_keyword', '0', '', '0', '0', '0', '0', '0', '0', '0', '0', '', '0', '0', '0', '0');";
	mysqli_query($link,$sql);

	//return id
	$sql_re = "SELECT obj_id FROM muse_object ORDER BY obj_id DESC LIMIT 1;";
	$query = mysqli_query($link,$sql_re) or die("Can't Query");
	$result=mysqli_fetch_array($query);
	echo json_encode($result);

}

?>