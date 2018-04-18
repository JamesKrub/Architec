<?php
if(isset($_GET['theme'])) {
  include('connect.php');
  mysqli_query($link,"UPDATE `theme` SET `thm_enable` = '0' WHERE `theme`.`thm_enable` = 1");
  mysqli_query($link,"UPDATE `theme` SET `thm_enable` = '1' WHERE `theme`.`thm_id` = ".$_GET['theme']);
  header('location: setting.php');
} else {
  header('location: index.php');
}
