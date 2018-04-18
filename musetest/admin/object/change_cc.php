<?php
if(isset($_POST)) {
  require('connect.php');
  // var_dump($_POST['feature']);
  mysqli_query($link,"UPDATE `creativecommons` SET `cc_open` = '0'");
  foreach($_POST['cc'] as $row) {
    mysqli_query($link,"UPDATE `creativecommons` SET `cc_open` = '1' WHERE `creativecommons`.`cc_id` = ".$row."");
  }
  header('location: setting.php');
} else {
  header('location: index.php');
}
