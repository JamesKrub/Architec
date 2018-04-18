<?php
if(isset($_POST)) {
  var_dump($_POST);
  include("../../connect.php");
  $array_items = $_POST['item'];
  $order = 0;
  foreach ( $array_items as $item) {
    echo $item;
    echo $order;
    $perform = mysqli_query($link,"UPDATE ".$_POST['table']." SET archListorder = '$order' WHERE archPic_Id = '$item' ");
    $order++;
  }
}
