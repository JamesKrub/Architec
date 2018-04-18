<?php
try {
  include_once("../../conf/connectdb.php.inc");
  mysqli_query($link,"DELETE FROM `botanic_".$_GET['type']."_object` WHERE `botanic_".$_GET['type']."_object`.`obj_refcode` = '".$_GET['refcode']."'");
  mysqli_query($link,"DELETE FROM `botanic_".$_GET['type']."_upload` WHERE `botanic_".$_GET['type']."_upload`.`obj_refcode` = '".$_GET['refcode']."'");
  mysqli_query($link,"DELETE FROM `botanic_".$_GET['type']."_pic` WHERE `botanic_".$_GET['type']."_pic`.`obj_id` = '".$_GET['id']."'");
  header("location: ../../show-".$_GET['type'].".php");
} catch(Exception $e) {
  echo $e->getMessage();
}
