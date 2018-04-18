<?php
/*
 * upload_pic_news.php
 * Web Service for upload Picture News and Data
 * @author Navamin Boonmee
 * @Last Update 2017-10-11
*/
require('../object/connect.php');

  //set data
  $table = 'news_upload';
  $redir = 'editnews';
  $folder = 'news_upload';

  $id = $_POST["id"];
  $img = $_POST["img"];

  //set directory
  $dirSave =  '../../pic/'.$folder.'/'.$id;

  //check dircetory
  if (!file_exists($dirSave)) {
    mkdir($dirSave,0777,true);
  }

  //set filename
  $file_name = "M-".time().".jpg";

  //set file upload target
  $target_dir = $dirSave ."/".$file_name;

  //insert file data
  $sql = "INSERT INTO `".$table."`(`bpu_id`,`bpu_file`,`bpu_upload_time`,`obj_id`) VALUES(NULL,'$file_name',CURRENT_TIMESTAMP,'$id')";

  //put file to server
  if(file_put_contents($target_dir, base64_decode($img))){
    echo "file : ok";

    if(mysqli_query($link,$sql)){
      echo "sql : ok";
    }
    
  }


?>
