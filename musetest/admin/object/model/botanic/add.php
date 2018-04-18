<?php

	//กำหนดค่าการเชื่อมต่อ DB
	$host = "emuseum_db";
	$username = "root";
	$dbname = "culture_thailue";
	//$password2 = "";	
	$password2 = "heavygeese24"; 
	
	date_default_timezone_set('Asia/Bangkok');	

	$link = mysqli_connect($host,$username,$password2,$dbname);

		if (!$link) {
		    echo "Error: Unable to connect to MySQL." . PHP_EOL;
		    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
		    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
		    exit;
		}

	mysqli_query($link, "SET NAMES utf8");
	mysqli_commit($link);

?>

<?php
if(!isset($_POST)) {
  header('location: /');
}
//include("../../connect.php");

$_POST['access'] = '1';


//echo "refcode = ".$_POST['refcode']."<br>";
//echo "code = ".$_POST['code']."<br>";
//echo "title = ".$_POST['title']."<br>";
//echo "creator = ".$_POST['creator']."<br>";
//echo "identity = ".$_POST['identity']."<br>";
//echo "desc = ".$_POST['desc']."<br>";
//echo "area = ".$_POST['area']."<br>";
//echo "comment = ".$_POST['comment']."<br>";
//echo "cate = ".$_POST['cate']."<br>";
//echo "access = ".$_POST['access']."<br>";
//echo "cate_2 = ".$_POST['cate_2']."<br>";
//echo "cate_3 = ".$_POST['cate_3']."<br>";
//echo "type = ".$_POST['type']."<br>";


if(!isset($_POST['cate_2'])) {
  $_POST['cate_2'] = 0;
}
if(!isset($_POST['cate_3'])) {
  $_POST['cate_3'] = 0;
}

$cmd = "INSERT INTO `botanic_".$_POST['type']."_object`(

    `obj_refcode`,
    `obj_title`,
    `obj_creator`,
    `obj_identity`,
    `obj_desc`,
    `obj_area`,
    `obj_date`,
    `obj_comment`,
    `obj_cate`,
    `obj_access`,
    `obj_cate2`,
    `obj_cate3`
    )
  VALUES (
    
    '".$_POST['code']."',
    '".$_POST['title']."',
    '".$_POST['creator']."',
    '".$_POST['identity']."',
    '".$_POST['desc']."',
    '".$_POST['area']."',
    '".$_POST['datecreate']."',
    '".$_POST['comment']."',
    '".$_POST['cate']."',
    '".$_POST['access']."',
    '".$_POST['cate_2']."',
    '".$_POST['cate_3']."'
  )
";

mysqli_query($link,$cmd);

// $sql = "SELECT obj_id , obj_refcode FROM 'botanic_".$_POST['type']."_object' WHERE obj_refcode = '".$_POST['code']."'";
//$sql = "SELECT * FROM 'botanic_".$_POST['type']."_object' WHERE obj_refcode = '".$_POST['code']."' ORDER BY obj_id DESC Limit 0,1 ";
//echo "type = ".$_POST['type']."<br>";

//$sql = "SELECT * FROM `botanic_idea_object` ORDER BY obj_id DESC Limit 0,1 ";
//$query = mysqli_query($link,$sql);

//while($fetch = mysqli_num_rows($query)) {
//$obj_id = $row['obj_id'];
// 


  $sql1 = "select * FROM `botanic_".$_POST['type']."_object` order by obj_id DESC  Limit 0,1";
  $query1=mysqli_query($link,$sql1) or die("Can't Query6");
   $num_rows=mysqli_num_rows($query1);
   	     for ($i=0; $i<$num_rows; $i++) {
         $result=mysqli_fetch_array($query1);
             $objectid=$result['obj_id'];
             $objectrefcode=$result['obj_refcode'];
		 }
		//echo "<br/><a href='edit.php?objectid=$objectid'>กลับหน้าแสดงผล</a>";
//echo "<a class='btn btn-primary' href='../../edit-".$_POST['type'].".php?objectid=$objectid&refcode='".$_POST['code']."'> กลับหน้าแสดงผล</a>";

header("location: ../../edit-".$_POST['type'].".php?objectid=$objectid&refcode=$objectrefcode");
//$redirect = "location: ../".$redir.".php?objectid=".$_POST['objectid']."&refcode=".$_POST['refcode']."";
?>
