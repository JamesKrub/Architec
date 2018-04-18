<?php
include_once("../conf/connectdb.php.inc");
$bpu_id=$_REQUEST['file'];
$type=$_REQUEST['type'];

echo "$bpu_id";
echo "$type";

switch($_GET['type']) {
  case 'museum':
    $table = 'museum_upload';
    $redir = 'editmuse';
    $folder = 'museum_upload';
  break;
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
//if($_GET['type'] == 'museum') {
//  unlink("../../pic/".$folder."/".$_GET['refcode']."/".$_GET['file']);
//} else {
//  unlink("../../pic/".$folder."/".$_GET['objectid']."/".$_GET['file']);
//}
//mysqli_query($link,"DELETE FROM `".$table."` WHERE `bpu_file`= '".$_GET['file']."'");
//$sql = "DELETE FROM `museum_upload` WHERE `bpu_id`= '$bpu_id'";
//$sql = "DELETE FROM muse_vr WHERE vr_id = '$vrid' ";
//$sql = "DELETE FROM museum_upload WHERE bpu_id = '$bpu_id'";

$sql = "DELETE FROM `archive_upload` WHERE `archive_upload`.`bpu_id` = '$bpu_id' ";
$query=mysqli_query($link,$sql) or die("Can't Query");

if($_GET['type'] == 'archive') {
  header("location: ../".$redir.".php?objectid=".$_GET['objectid']."&refcode=".$_GET['refcode']."");

} else {
  header("location: ../".$redir.".php?newsid=".$_GET['objectid']."");
}
