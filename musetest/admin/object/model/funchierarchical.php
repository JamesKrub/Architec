
<?php

	//กำหนดค่าการเชื่อมต่อ DB
	$host = "emuseum_db";
	$username = "root";
	$dbname = "culture_thailue";
	//$password2 = "";
	$password2 = "heavygeese24";

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
<?php
echo "table = ".$_POST['table'];
echo "hc2_id = ".$_POST['hc2_id'];
echo "<br>type = ".$_POST['type'];


try {
  if(isset($_POST)) {

    $fileName = NULL;
    switch($_POST['table']) {
      case 'archive':
        $fileName = 'showobjcat';
      break;
			case 'hierarchical':
				$fileName = 'showobjhierar';
			break;
      case 'muse':
        $fileName = 'showmusecat';
      break;
      default:
        throw new Exception("File not match");
    }
    switch($_POST['type']) {

      case 'insert':

        mysqli_query ($link,"INSERT INTO `".$_POST['table']."_category_lv".$_POST['level']."` (`hc".$_POST['level']."_id`, `hc".$_POST['level']."_name`, `hc".($_POST['level'] - 1)."_id`) VALUES (NULL, '".$_POST['category']."', '".$_POST['parents']."')");
      break;
      case 'update':

        mysqli_query ($link,"UPDATE `".$_POST['table']."_category_lv".$_POST['level']."` SET `hc".$_POST['level']."_name` = '".$_POST['category']."' WHERE `".$_POST['table']."_category_lv".$_POST['level']."`.`hc".$_POST['level']."_id` = '".$_POST['id']."' ");
      break;
      case 'delete':

        mysqli_query ($link,"DELETE FROM `".$_POST['table']."_category_lv".$_POST['level']."` WHERE `".$_POST['table']."_category_lv".$_POST['level']."`.`hc".$_POST['level']."_id` = '".$_POST['id']."' ");
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
