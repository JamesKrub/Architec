<?php

	//กำหนดค่าการเชื่อมต่อ DB
//	$host = "emuseum_db";
//	$username = "root";
//	$dbname = "culture_thailue";
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

include("../connect.php");

?>


<?php
if(isset($_GET['id']) && isset($_GET['level']) && isset($_GET['table'])) {
// include_once("conf/connectdb.php.inc");
  if( isset($_GET['archi']) ){
    $atb = "archCate";
    switch($_GET['table']) {
      case 'archi':
        $table = "architec_category_";
    }
    switch($_GET['level']) {
      case 2:
        $atb .= 2;
      break;
      case 3:
        $atb .= 3;
      break;
      default:
        header('location: /');
    }
    $atb .= "_Parent";
    $table .= "lv".$_GET['level'];
    $idget = $_GET['id'];
    $cmd = "SELECT * FROM $table WHERE $atb = '$idget' ";
    $query = mysqli_query($link,$cmd);
    $data = array();
    $i = 0;
    while($row = mysqli_fetch_array($query)){
      $data[$i]['id'] = $row["archCate".$_GET['level']."_Id"];
      $data[$i]['name'] = $row["archCate".$_GET['level']."_Name"];
      $data[$i]['parent'] = $row["archCate".($_GET['level'])."_Parent"];
      $i++;
    }
    echo json_encode($data);
  }
  else {
    switch($_GET['table']) {
      case 'arc':
        $table = "archive_category_";
      break;
      case 'mus':
        $table = "muse_category_";
      break;
      case 'plant':
        $table = "botanic_plant_category_";
      break;
      case 'idea':
        $table = "botanic_idea_category_";
      break;
      case 'animal':
        $table = "botanic_animal_category_";
      break;
      case 'bio':
        $table = "botanic_bio_category_";
      break;
    }
    $atb = "ac";
    switch($_GET['level']) {
      case 2:
        $atb .= 1;
      break;
      case 3:
        $atb .= 2;
      break;
      default:
        header('location: /');
    }

    $atb .= "_id";
    $table .= "lv".$_GET['level'];
    $idget = $_GET['id'];
    $cmd = "SELECT * FROM $table WHERE $atb = '$idget' ";
    $query = mysqli_query($link,$cmd);
    $data = array();
    $i = 0;
    //check connect
      // if (!mysqli_query($link,$cmd))
      //   {
      //    echo("<br>ผิดอยู่" . mysqli_error($link) . "<br>");
      // }
      //disp
    while($row = mysqli_fetch_array($query))
    {
      $data[$i]['id'] = $row["ac".$_GET['level']."_id"];
      $data[$i]['name'] = $row["ac".$_GET['level']."_name"];
      $data[$i]['parent'] = $row["ac".($_GET['level'] - 1)."_id"];
      $i++;
    }
    echo json_encode($data);
  }
}
else {
  header('location: /');
}
