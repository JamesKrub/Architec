<?php
//ฝฝ @Library https://github.com/samayo/bulletproof
try {
  include("../connect.php");
  require_once  "bulletproof/bulletproof.php";
  $image = new Bulletproof\Image($_FILES);
  $image->setDimension(5000, 5000);
  $image->setSize(1024, 1048576);
  $image->setLocation('../../../pic/news/'.$_POST['id'].'');
  if($image["photo"]){
      $upload = $image->upload();
      mysqli_query("INSERT INTO `news_pic` ( `np_file`, `np_cover`, `nw_id`) VALUES ( '".$image->getName().'.'.$image->getMime()."','0', '".$_POST['id']."')");
      header('location: ../editnews.php?newsid='.$_POST['id'].'');
  }
} catch(Exception $e) {
  header('location: /');
}
?>


