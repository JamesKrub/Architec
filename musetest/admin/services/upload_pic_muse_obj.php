<?php
/*
 * upload_pic_muse_obj.php
 * Web Service for upload Picture Museum Object and Data
 * @author Navamin Boonmee
 * @Last Update 2017-10-11
*/
require('../object/connect.php');

  //set data
  $table = 'muse_pic';
  $folder1 = 'bigmuse';
  $folder2 = 'thumbmuse';
  $folder3 = 'thumbmuse2';

  $refcode = $_POST["refcode"];
  $img = $_POST["img"];

  //set directory
  $dirSave1 =  '../../pic/'.$folder1.'/'.$refcode;
  $dirSave2 =  '../../pic/'.$folder2.'/'.$refcode;
  $dirSave3 =  '../../pic/'.$folder3.'/'.$refcode;

  //check directory
  if (!file_exists($dirSave1)) {
    mkdir($dirSave1,0777,true);
  }
  if (!file_exists($dirSave2)) {
    mkdir($dirSave2,0777,true);
  }
  if (!file_exists($dirSave3)) {
    mkdir($dirSave3,0777,true);
  }

  //set filename
  $file_name = "M-".time().".jpg";
  $thumbname = "Thumb_" . date("Y-m-d") . "_" . date("h-m-s")."_". $file_name;
  $thumbname2 = "Thumb2_". date("Y-m-d") . "_" . date("h-m-s")."_". $file_name;

  //set file upload target
  $target_dir1 = $dirSave1 ."/".$file_name;
  $target_dir2 = $dirSave2 ."/".$file_name;
  $target_dir3 = $dirSave3 ."/".$file_name;

  //insert file data
  $sql = "INSERT INTO `muse_pic` (`pic_name`, `thumb_name`, `thumb_name2`, `obj_id`, `obj_refcode`, `obj_cover`, `pic_detail`, `listorder`, `pic_open`) VALUES ('$file_name', '$thumbname', '$thumbname2', '0', '$refcode', '0', '', '0', '0');";

  //put file to server
  if(file_put_contents($target_dir1, base64_decode($img))){
    echo "file bigmuse : ok";
    
    if(file_put_contents($target_dir2, base64_decode($img))){
      echo "file thumbmuse : ok";

      if(file_put_contents($target_dir3, base64_decode($img))){
        echo "file thumbmuse2 : ok";

        if(mysqli_query($link,$sql)){
          echo "sql : ok";
        }
      }
    }
  }


?>
