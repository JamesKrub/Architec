<?php
include_once("../conf/connectdb.php.inc");
//include_once("../conf/connectdb.php.inc");
//$bupid = $_REQUEST['file'];
//$refcode = $_REQUEST['refcode'];

switch($_GET['type']) {
  case 'news':
    $table = 'news_upload';
    $redir = 'editnews';
    $folder = 'news_upload';
  break;
  case 'archive':
    $table = 'archive_upload';
    $redir = 'edit';
    $folder = 'archive_upload';
  break;
  case 'museum':
    $table = 'museum_upload';
    $redir = 'editmuse';
    $folder = 'museum_upload';
  break;
  case 'plant':
    $table = 'botanic_plant_upload';
    $redir = 'edit-plant';
    $folder = 'botanic_plant_upload';
  break;
  case 'animal':
    $table = 'botanic_animal_upload';
    $redir = 'edit-animal';
    $folder = 'botanic_animal_upload';
  break;
  case 'bio':
    $table = 'botanic_bio_upload';
    $redir = 'edit-bio';
    $folder = 'botanic_bio_upload';
  break;
  case 'idea':
    $table = 'botanic_idea_upload';
    $redir = 'edit-idea';
    $folder = 'botanic_idea_upload';
  break;
  default:
    header('location: /');
}
if($_GET['type'] == 'museum') {
  unlink("../../pic/".$folder."/".$_GET['objectid']."/".$_GET['file']);
} else {
  unlink("../../pic/".$folder."/".$_GET['refcode']."/".$_GET['file']);
}
//if($_GET['type'] == 'museum') {
//mysqli_query($link,"DELETE FROM `".$table."` WHERE `bpu_id`= ".$_GET['file']." and `obj_id`= ".$_GET['objectid']."");
//}
//{
//
//}
mysqli_query($link,"DELETE FROM `".$table."` WHERE `bpu_file`= '".$_GET['file']."'");
if($_GET['type'] == 'museum') {
  header("location: ../".$redir.".php?objectid=".$_GET['objectid']."");
} else {
  header("location: ../".$redir.".php?objectid=".$_GET['objectid']."&refcode=".$_GET['refcode']."");
}
