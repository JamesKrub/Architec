<?php
if(isset($_POST)) {
  var_dump($_POST);
  include_once("../../connect.php");
  $array_items = $_POST['item'];
  $order = 0;
  foreach ( $array_items as $item) {
    $perform = mysqli_query("UPDATE ".$_POST['table']." SET listorder = '$order' WHERE pic_id = '$item' ");
    $order++;
  }
}
