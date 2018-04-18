<?php
include "connect.php";
$refcode = $_REQUEST['refcode'];
$objectid = $_REQUEST['objectid'];
$setpic = $_REQUEST['setpic'];
$picid = $_REQUEST['picid'];

// echo "$refcode";
// echo "<br>";
// echo "$objectid";
// echo "<br>";
// echo "$setpic";
// echo "<br>";
// echo "$picid";
// echo "<br>";
if($setpic == 1)
		{
// ปรับค่าให้ obj_cover อื่นๆให้มีค่าเป็น 0 เพื่อที่จะให้เหลือค่า 1 ค่าเดียว
 $sql0 = "UPDATE muse_pic SET `obj_cover`='0' WHERE `muse_pic`.`obj_refcode` ='$refcode' AND `muse_pic`.`pic_id` !='$picid'";
 $query0=mysqli_query($link,$sql0) or die("Can't Query-0");

 $sql = "UPDATE muse_pic SET `obj_cover`='1' WHERE `muse_pic`.`obj_refcode` ='$refcode' AND  `muse_pic`.`pic_id` ='$picid'";
 $query=mysqli_query($link,$sql) or die("Can't Query-1");

 // $sql2 = "UPDATE muse_pic SET `obj_cover`='1' WHERE `muse_pic`.`pic_id` ='$picid'";
 // $query=mysqli_query($link,$sql) or die("Can't Query-1");

  // $sql1234 = "UPDATE muse_pic SET `pic_open`='0' WHERE `muse_pic`.`pic_id` ='$picid'";
  // $query1234=mysqli_query($link,$sql1234) or die("Can't Query-1");
  //
  //
  // $sql1234 = "UPDATE muse_pic SET `pic_open`='1' WHERE `muse_pic`.`pic_id` ='$picid'";
  // $query1234=mysqli_query($link,$sql1234) or die("Can't Query-1");

  header( "location: editmuse.php?picid=$picid&setpic=1&objectid=$objectid&refcode=$refcode" );

		}
    else {
      $sql = "UPDATE muse_pic SET `obj_cover`='0' WHERE `muse_pic`.`pic_id` ='$picid'";
      $query=mysqli_query($link,$sql) or die("Can't Query-1");

        header( "location: editmuse.php?picid=$picid&setpic=0&objectid=$objectid&refcode=$refcode" );
}


 ?>
