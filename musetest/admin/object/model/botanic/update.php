<?php
include_once("../../conf/connectdb.php.inc");
if(!isset($_POST)) {
  header('location: /');
}
if(!isset($_POST['cate_2'])) {
  $_POST['cate_2'] = 0;
}
if(!isset($_POST['cate_3'])) {
  $_POST['cate_3'] = 0;
}
echo $_POST['type'];


$cmd = "
UPDATE
  `botanic_".$_POST['type']."_object`
SET
  `obj_refcode`='".$_POST['code']."',
  `obj_title`='".$_POST['title']."',
  `obj_creator`='".$_POST['creator']."',
  `obj_identity`='".$_POST['identity']."',
  `obj_desc`='".$_POST['desc']."',
  `obj_area`='".$_POST['area']."',
  `obj_date`='".$_POST['datecreate']."',
  `obj_comment`='".$_POST['comment']."',
  `obj_cate`='".$_POST['cate']."',
  `obj_access`='".$_POST['access']."',
  `obj_cate2`='".$_POST['cate_2']."',
  `obj_cate3`='".$_POST['cate_3']."'
WHERE
  `obj_id`='".$_POST['id']."'
";
echo mysqli_query($link,$cmd);
$query = mysqli_query($link,"SELECT obj_id,obj_refcode FROM `botanic_".$_POST['type']."_object` WHERE obj_refcode = '".$_POST['code']."'");
while($fetch = mysqli_fetch_array($query)) {
  header("location: ../../edit-".$_POST['type'].".php?objectid=".$fetch['obj_id']."&refcode=".$fetch['obj_refcode']."");
}
