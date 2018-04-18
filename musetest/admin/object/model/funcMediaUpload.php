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
    $table = 'muse_upload';
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
        header($redirect);
      } else {
        echo "table = $table";
        echo "Upload failed";
      }
      $handle->clean();
  } else {
      echo $handle->error;
  }
} else {
  echo "Extension not support";
}
