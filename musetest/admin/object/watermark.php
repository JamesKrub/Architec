<?php
// load the watermark and the photo
$watermark = imagecreatefrompng('pic/watermark/watermark.png');
$photo = imagecreatefromjpeg($_GET[photo]);
 
// center watermark on the photo
$wx = imagesx($photo) - imagesx($watermark);
$wy = imagesy($photo) - imagesy($watermark);
 
imagecopy($photo, $watermark, $wx, $wy, 0, 0, imagesx($watermark), imagesy($watermark));
imagejpeg($photo, NULL, 100);
?>