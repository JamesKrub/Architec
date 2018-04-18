<?php
error_reporting(0);
session_name('tzLogin');
session_set_cookie_params(2*7*24*60*60);
session_start();
include_once("conf/connectdb.php.inc");
$idtest =$_SESSION['id'];
$usrtest=$_SESSION['usr'];

?>

<?php $_GET['id']; ?>
