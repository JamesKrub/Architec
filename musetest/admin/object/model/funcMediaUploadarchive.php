<?php
include('upload/class.upload.php');
include("../connect.php");
//ini_set('date.timezone', 'Asia/Bangkok');
//
//$today2=Date('Y-m-d H:i:s');
//
//if(isset($_POST['hospcode_post'])){
//    $hospcode_post=$_POST['hospcode_post'];
//
//}
//        if(isset($_POST['person_cid'])){ $person_cid=$_POST['person_cid']; }

switch($_POST['type']) {


    case 'archive':
    $table = 'archive_upload';
    $table1 = 'archive_upload_check';
    $redir = 'edit';
  break;
  default:
    header('location: /');
}
if($_POST['type'] == 'news') {
  $dirSave =  '../../../pic/'.$folder.'/'.$_POST['objectid'];
  $redirect = "location: ../".$redir.".php?newsid=".$_POST['id']."";
//  $dirSave =  '../../../pic/'.$folder.'/'.$_POST['id'];
//  $redirect = "location: ../".$redir.".php?newsid=".$_POST['id']."";
} else {
  $dirSave =  '../../../pic/'.$folder.'/'.$_POST['refcode'];
  $redirect = "location: ../".$redir.".php?objectid=".$_POST['objectid']."&refcode=".$_POST['refcode']."";
}

$allowed = array('mp3', 'mp4', 'pdf', 'jpg', 'JPG', 'png', 'PNG');
$ext = pathinfo($_FILES['uploadedfile']['name'], PATHINFO_EXTENSION);
if(in_array($ext, $allowed) ) {
  $handle = new Upload($_FILES['uploadedfile']);
  if($handle->uploaded) {
      $handle->Process($dirSave);
      if($handle->processed) {
        $cmd = "
          INSERT
          INTO
          `".$table."`(
            `bpu_id`,
            `bpu_file`,
            `bpu_upload_time`,
            `obj_id`
          )
          VALUES(
          NULL,
          '".$handle->file_dst_name."',
          CURRENT_TIMESTAMP,
          '".$_POST['objectid']."'
          )
        ";
        // var_dump($handle);
        $status = mysqli_query($link,$cmd);
        // var_dump($status);
        $cmd2 = "INSERT INTO `archive_upload_check` (
        `bpu_id`, `obj_id`, `bpu_count_dowload`, `open_check`)
         VALUES (NULL, '".$_POST['objectid']."', '0', '0') ";
        $status1 = mysqli_query($link,$cmd2);
        header($redirect);
      } else {
        echo "table = $table and $table1";
        echo "Upload failed";
      }
      $handle->clean();
  } else {
      echo $handle->error;
  }
} else {
  echo "Extension not support";
}
