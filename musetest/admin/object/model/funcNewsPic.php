<?php
try {
  if(isset($_GET)) {
    include_once("connect.php");
      $newsid=$_REQUEST['news'];
     // $type=$_REQUEST['type'];
     echo "$newsid";
//echo "$type"; 
    switch($_GET['method']) {
      case 'delete':
//        $query = mysql_query("SELECT np_file FROM news_pic WHERE np_id = '".$_GET['id']."'");
//        $row = mysql_fetch_assoc($query);
        //mysql_query("DELETE FROM `news_pic` WHERE `news_pic`.`np_id` = '".$_GET['id']."'");
         $sql = "DELETE FROM `news_upload` WHERE `news_upload`.`bpu_id` = $newsid ";
         $query=mysql_query($sql) or die("Can't Query"); 
        //mysql_query("DELETE FROM `news_upload` WHERE `news_upload`.`bpu_id` = '".$_GET['newsid']."'");
        //unlink('../../pic/news_upload/'.$_GET['news'].'/'.$row['np_file']);
       // unlink('../../pic/news_upload/'.$row['bpu_file']);
      break;
      case 'cover':
        mysql_query("UPDATE `news_pic` SET `np_cover` = '0' WHERE `news_pic`.`nw_id` = '".$_GET['news']."'");
        mysql_query("UPDATE `news_pic` SET `np_cover` = '1' WHERE `news_pic`.`np_id` = '".$_GET['id']."'");
      break;
      default:
        throw new Exception('Erroe method');
    }
    header('location: ../editnews.php?newsid='.$_GET['news'].'');
  } else {
    throw new Exception('HTTP request variable');
  }
} catch(Exception $e) {
  header('location: /');
}
