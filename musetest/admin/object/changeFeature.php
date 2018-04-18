<?php
if(isset($_POST)) {
  require('connect.php');
  // var_dump($_POST['feature']);
  mysqli_query($link,"UPDATE `feature` SET `fet_enable` = '0'");
  foreach($_POST['feature'] as $row) {
    mysqli_query($link,"UPDATE `feature` SET `fet_enable` = '1' WHERE `feature`.`fet_id` = ".$row."");
  }
  header('location: setting.php');
} else {
  header('location: index.php');
}
