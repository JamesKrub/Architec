
<?php

	//กำหนดค่าการเชื่อมต่อ DB
//	$host = "emuseum_db";
//	$username = "root";
//	$dbname = "muse01";
//	//$password2 = "";
//	$password2 = "heavygeese24";
//
//	date_default_timezone_set('Asia/Bangkok');
//
//	$link = mysqli_connect($host,$username,$password2,$dbname);
//
//		if (!$link) {
//		    echo "Error: Unable to connect to MySQL." . PHP_EOL;
//		    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
//		    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
//		    exit;
//		}
//
//	mysqli_query($link, "SET NAMES utf8");
//	mysqli_commit($link);



?>
<?php
include_once("../connect.php");
echo "table = ".$_POST['table'];
echo "<br>type = ".$_POST['type'];


try {
  if($_POST['table'] == 'archi') {
    switch($_POST['table']) {
      case 'archi':
        $table = 'architec_category_lv';
        $fileName = 'showarchcat';
      break;
    }
    switch($_POST['type']){
      case 'insert':

        mysqli_query ($link,"INSERT INTO `".$table.$_POST['level']."` (`archCate".$_POST['level']."_Id`, `archCate".$_POST['level']."_Name`, `archCate".($_POST['level'])."_Parent`) VALUES (NULL, '".$_POST['category']."', '".$_POST['parents']."')");
      break;
      case 'update':

        mysqli_query ($link,"UPDATE `".$table.$_POST['level']."` SET `archCate".$_POST['level']."_Name` = '".$_POST['category']."' WHERE `".$table.$_POST['level']."`.`archCate".$_POST['level']."_Id` = '".$_POST['id']."'");
      break;
      case 'delete':

        mysqli_query ($link,"DELETE FROM `".$table.$_POST['level']."` WHERE `".$table.$_POST['level']."`.`archCate".$_POST['level']."_Id` = ".$_POST['id']."");
      break;
      default:
        throw new Exception("Function not exists");
    }
    header('location: ../'.$fileName.'.php');
  }
  else if(isset($_POST)) {

    $fileName = NULL;
    switch($_POST['table']) {
      case 'archive':
        $fileName = 'showobjcat';
      break;
      case 'muse':
        $fileName = 'showmusecat';
      break;
      case 'botanic_plant':
        $fileName = 'botanic-plant-cat';
      break;
      case 'botanic_animal':
        $fileName = 'botanic-animal-cat';
      break;
      case 'botanic_bio':
        $fileName = 'botanic-bio-cat';
      break;
      case 'botanic_idea':
        $fileName = 'botanic-idea-cat';
      break;
      default:
        throw new Exception("File not match");
    }
    switch($_POST['type']) {

      case 'insert':

        mysqli_query ($link,"INSERT INTO `".$_POST['table']."_category_lv".$_POST['level']."` (`ac".$_POST['level']."_id`, `ac".$_POST['level']."_name`, `ac".($_POST['level'] - 1)."_id`) VALUES (NULL, '".$_POST['category']."', '".$_POST['parents']."')");
      break;
      case 'update':

        mysqli_query ($link,"UPDATE `".$_POST['table']."_category_lv".$_POST['level']."` SET `ac".$_POST['level']."_name` = '".$_POST['category']."' WHERE `".$_POST['table']."_category_lv".$_POST['level']."`.`ac".$_POST['level']."_id` = '".$_POST['id']."'");
      break;
      case 'delete':

        mysqli_query ($link,"DELETE FROM `".$_POST['table']."_category_lv".$_POST['level']."` WHERE `".$_POST['table']."_category_lv".$_POST['level']."`.`ac".$_POST['level']."_id` = ".$_POST['id']."");
      break;
      default:
        throw new Exception("Function not exists");
    }
    header('location: ../'.$fileName.'.php');
  } else {
    throw new Exception("HTTP request variable");
  }
} catch(Exception $e) {
  header('location: /');
}
