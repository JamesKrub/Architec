<?php
// @Library https://github.com/samayo/bulletproof
try {
  include_once("../conf/connectdb.php.inc");
  require_once  "bulletproof/bulletproof.php";
  $image = new Bulletproof\Image($_FILES);
  $image->setDimension(5000, 5000);
  $image->setSize(1024, 1048576);
  $image->setLocation('../../../pic/news/'.$_POST['id'].'');

  if($image["photo"]){
      $upload = $image->upload();
      mysqli_query($link,"INSERT INTO `news_pic` (`np_id`, `np_file`, `nw_id`) VALUES (NULL, '".$image->getName().'.'.$image->getMime()."', '".$_POST['id']."')");
      header('location: ../editnews.php?newsid='.$_POST['id'].'');
  }
} catch(Exception $e) {
  header('location: /');
}
