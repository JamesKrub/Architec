
 <?php
// $host= "localhost";
// $username="root";
// $password="";
// $dbname="culture_thailue";
//
// $connect= mysql_connect($host, $username, $password) or die("Can't Connect");
//
// $db=mysql_select_db($dbname) or die("Can't select DB");
//
// mysql_query("Set names utf8");
// mysql_query("SET character_set_results='utf8'") ;
 ?>

<?php
$link = mysqli_connect("localhost", "root", "", "culture_thailue");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

 //mysqli_query("Set names utf8");
 //mysqli_query("SET character_set_results='utf8'") ;
 mysqli_close($link);
?>