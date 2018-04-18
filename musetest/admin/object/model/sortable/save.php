<?php
if(isset($_POST)) {
  var_dump($_POST);
  include("../../connect.php");
  $array_items = $_POST['item'];
  $order = 0;
  foreach ( $array_items as $item) {
    $perform = mysqli_query($link,"UPDATE ".$_POST['table']." SET listorder = '$order' WHERE pic_id = '$item' ");

    $order++;
      // echo " order $order <br>";
      // echo " item $item <br>";
  }
}
