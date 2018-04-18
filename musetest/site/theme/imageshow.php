<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	//กำหนดค่าการเชื่อมต่อ DB
	$host = "emuseum_db";
	$username = "root";
	$dbname = "culture_thailue";
	//$password2 = "";	
	$password = "heavygeese24"; 
	
	date_default_timezone_set('Asia/Bangkok');	

	//$link = mysqli_connect($host,$username,$password2,$dbname);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dynamic Carousel Silder</title>
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css"
href="bootstrap/css/bootstrap.min.css"/>
<!-- fontawesome css -->
<link rel="stylesheet" type="text/css"
href="https://fortawesome.github.io/Font-Awesome/assets/fontawesome/css/font-awesome.css"/>

<!-- custom style css -->
<link rel="stylesheet" type="text/css" href="css/app.css"/>
</head>
<body>
 <div class="container">
 <div class="row">
 <div id="mycarousel" class="carousel slide" dataride="carousel">

 <ol class="carousel-indicators">
 <?php
 $a = 0;
 $query = "select * from images";
 $sql = mysqli_query($con,$query);
 while($row = mysqli_fetch_array($sql))
 {
 ?>
 <li data-target="#mycarousel" data-slide-to="<?php echo
$a++; ?>"></li>
 <?php } ?>
 </ol>

 <div class="carousel-inner" role="listbox">
 <?php
 $queryy = "select * from muse_pic limit 0,4";
 $sqll = mysqli_query($con,$queryy);
 while($img = mysqli_fetch_array($sqll))
 {
 ?>
 <div class="item">
 <img src="img/<?php echo $img['thumb_name']; ?>" class="imgresponsive"
alt="<?php echo $img['thumb_name']; ?>"/>
 </div>
 <?php } ?>

 </div><!--/carousel-inner-->

 <a href="#mycarousel" class="left carousel-control" dataslide="prev"
role="button">
 <i class="fa fa-angle-left prevSlide"></i>
 </a>
 <a href="#mycarousel" class="right carousel-control" dataslide="next"
role="button">
 <i class="fa fa-angle-right nextSlide"></i>
 </a> 
 </div><!--carousel slide-->
 </div><!-- /row-->
 </div>
</body>
</html>
<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script type="text/javascript"
src="bootstrap/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(e) {
 $('.carousel-indicators li:nth-child(1)').addClass('active');
 $('.item:nth-child(1)').addClass('active');

});
</script> 