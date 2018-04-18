<?php include 'connect.php'; ?>


<?php
$usn = $_POST['usn'];
$passw = $_POST['passw'];
$email = $_POST['email'];
// echo $usn;
// $data = date_format("Y/m/d H:i:s");
$ip_assdress = $_SERVER['HTTP_X_FORWARDED_FOR'];
// echo $ip_assdress;
// $dateadd = date("Y-m-d") ." ".date("h:i:s");
// $dateadd = date("Y-m-d H:i:s");

// echo date("h:i:s");
$permission = "user";

$mem_pic = "blank.jpg";

// $url = $_POST['url'];

// echo "<img src='$mem_pic'></img>";

// echo $mem_pic;
$insert_user = "INSERT INTO `tz_members` (`usr`, `pass`, `email`, `regIP`, `dt`, `permission`, `mem_pic`, `mem_picshow`)
VALUES ('$usn', '$passw', '$email', '$ip_assdress', now(), '$permission', '$mem_pic', '') ";

$query = mysqli_query($link,$insert_user);

if ($query) {
header("Location: user.php");
}else {
header('location : user.php');
}

 ?>
