<?php


echo " TEST SERVER "; 
 //echo "Database Connected.";


?>

<?php
//$link = mysqli_connect("emuseum_db", "root", "heavygeese24", "culture_thailue");
//
//if (!$link) {
//    echo "Error: Unable to connect to MySQL." . PHP_EOL;
//    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
//    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
//    exit;
//}
//
//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
//
//mysqli_close($link);
?>
<?php
// connect.php
$db_config=array(
    "host"=>"emuseum_db",  // กำหนด host
    "user"=>"root", // กำหนดชื่อ user
    "pass"=>"heavygeese24",   // กำหนดรหัสผ่าน
    "dbname"=>"culture_thailue",  // กำหนดชื่อฐานข้อมูล
    "charset"=>"utf8"  // กำหนด charset
);
$mysqli = @new mysqli($db_config["host"], $db_config["user"], $db_config["pass"], $db_config["dbname"]);
if(mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
    exit;
}
if(!$mysqli->set_charset($db_config["charset"])) { // เปลี่ยน charset เป้น utf8 พร้อมตรวจสอบการเปลี่ยน
   printf("Error loading character set utf8: %sn", $mysqli->error);  // ถ้าเปลี่ยนไม่ได้
}else{
    printf("Current character set: %sn", $mysqli->character_set_name()); // ถ้าเปลี่ยนได้
}
//echo $mysqli->character_set_name();  // แสดง charset เอา comment ออก
//echo 'Success... ' . $mysqli->host_info . "n";
$mysqli->close();
?>
 <?php

//echo "Database Connected.";
// $host= "emuseum_db";
// $username="root";
// $password="heavygeese24";
// $dbname="culture_thailue";
// $connect= mysql_connect( $host, $username, $password) or die("Can't Connect");
// $db=mysql_select_db($dbname) or die("Can't select DB");
// mysql_query("Set names utf8");
// mysql_query("SET character_set_results='utf8'") ;
//
// //echo "Database Connected. culture_thailue";
//
// $sql = "select * from `muse_bg` where `muse_bg`.`bg_id` = '1' ";
//									$query=mysql_query($sql) or die("Can't Query");
//									$num_rows=mysql_num_rows($query);
//									for ($i=0; $i<$num_rows; $i++) {
//										$result=mysql_fetch_array($query);
//                                        $bg_desc = $result['bg_desc'];
//                                        $bg_name = $result['bg_name'];      
//												//echo "<p>$result[bg_desc]</p>";
//											 echo "$result[bg_name]";	
//                                    }
//                echo "$result[bg_name]";
//


 ?>