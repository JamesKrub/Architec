<?php
/*
function select muti type by day
*/
error_reporting(E_ALL ^ E_NOTICE);

$new = $_REQUEST['new'];
$folder1_id = $_REQUEST['folder1_id'];
$folder1_name = $_REQUEST['folder1_name'];
$folder1_parent = $_REQUEST['folder1_parent'];




require('connect.php');

$parentssub = $_REQUEST['parant'];
$test = $_REQUEST['table'];


switch($_POST['type']) {
	//กรณีเพิ่มวัตถุจาก การเลือก ดรอปดาว
	case 'addobj':
	header("Location: addobj-1page.php?parents=$parentssub");
	break;
	//กรณี เพิ่มแฟ้มย้อย
	case 'insert':
	header("Location: h_function_addsub.php");
	break;
	//กรณีเพิ่มวัตถุ
	case 'add':

	echo "<div id='alert-message' class='alert alert-success alert-dismissable'>
		<i class='fa fa-check'></i>
		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
		เพิ่มประเภทวัตถุจัดแสดงเสร็จสิ้น </div>";

	// $sql = "select * from hierarchical_category where folder1_id = '$parentssub' ";
	// $query111=mysqli_query($link,$sql1111) or die("Can't Query");

	$sql = "INSERT INTO hierarchical_category (`folder1_id` ,`folder1_name`,`folder1_parent` )VALUES (NULL, '$folder1_name','$parentssub');";
	$query = mysqli_query($link,$sql);
	//เอาไอดี ล่าสุดส่งไปหน้า เพิ่มวัตถุ เพื่อ เพิ่มเป็น แฟ้มแรก
	$parentssub = mysqli_insert_id($link);

	// header("Location: h_function_addsub.php");

		header("Location: addobj-1page.php?parents=$parentssub");

	break;
	default:

}




?>
