<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	//กำหนดค่าการเชื่อมต่อ DB
	$host = "localhost";
	$username = "root";
	$dbname = "muse_test";
	$password2 = "";
	// $password = "heavygeese24";

	date_default_timezone_set('Asia/Bangkok');

	//$link = mysqli_connect($host,$username,$password2,$dbname);
?>

<?php
$menu=$menu1=$menu2=$menu3=$menu4=$menu5=$menu6=$menu7="";




error_reporting( error_reporting() & ~E_NOTICE );
$ac3_id = $_REQUEST['ac3_id'];
if(isset($_GET['menu'])){
$menu=$_GET['menu'];
switch ($menu) {
    case '1':
        $menu1="class=active";
        break;
    case '2':
        $menu2="class=active";
        break;
    case '3':
        $menu3="class=active";
        break;
    case '4':
        $menu4="class=active";
        break;
    case '5':
        $menu5="class=active";
        break;
    case '6':
        $menu6="class=active";
        break;
    case '7':
        $menu7="class=active";
        break;
    default:
        $menu7="class=active";
        break;
}
}else{
   $menu2="class=active";
}
?>
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
<?php include "connect.php" ; ?>    
  <?php
$sqlquer = "SELECT bg_name FROM `muse_bg`";
$querydata = mysqli_query($link , $sqlquer);
$row = mysqli_fetch_assoc($querydata);

	 ?>
  <title><?php echo $row[bg_name]; ?></title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="Digital Archive | จดหมายเหตุดิจิตัล">
  <meta name="author" content="">

<?php include "head.php" ; ?>
     <!-- Margo JS  -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/jquery.migrate.js"></script>
  <script type="text/javascript" src="js/modernizrr.js"></script>
  <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="js/jquery.appear.js"></script>
  <script type="text/javascript" src="js/count-to.js"></script>
  <script type="text/javascript" src="js/jquery.textillate.js"></script>
  <script type="text/javascript" src="js/jquery.lettering.js"></script>
  <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="js/jquery.parallax.js"></script>
  <script type="text/javascript" src="js/mediaelement-and-player.js"></script>
  <script type="text/javascript" src="js/jquery.slicknav.js"></script>

<style type="text/css">
    .img-top {
    display: inline-block;
    vertical-align: top;
    float: none;
}
</style>

<style type="text/css">
div.img-resize img {
	width: 150px;
	height: 150px;
}

div.img-resize {
	width: 64px;
	height: 64px;
	overflow: hidden;
	text-align: center;
}
</style>
</head>
<body>

  <!-- Full Body Container -->
  <div id="container">

    <!-- Start Header Section -->
    <div class="hidden-header"></div>
    <header class="clearfix">

      <!-- Start Top Bar -->
       <?php include "topbar.php" ; ?>
      <!-- .top-bar -->
      <!-- End Top Bar -->


      <!-- Start  Logo & Naviagtion  -->
      <div class="navbar navbar-default navbar-top">
        <?php include "menu.php" ; ?>

        </div>


				<ul class="wpb-mobile-menu">
				<?php include "menu_mobile.php"; ?>
				</ul>
</header>
    <!-- End Header -->


    <!-- Start Page Banner -->
     <div class="page-banner" style="padding:40px 0; background: url(images/tour-bg.png) center #f9f9f9;">
       <div class="container">
        <div class="row">

          <div class="col-md-12">
            <ul class="breadcrumbs">
              <li><a href="index.php">หน้าแรก</a></li>
              <li>ความเป็นมาพิพิธภัณฑ์</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->

  <br/>
 <br/>
<br/>
<div class="container">
<br/>
 <div class="row">
<div class="col-md-6">

 <h4 class="classic-title"><span>
    <?php
	$conn = new mysqli($host,$username,$password,$dbname);
    mysqli_query($conn, "SET NAMES utf8");
	mysqli_commit($conn);


	$sql2 = "select * from muse_bg where bg_id = '1' ";

	$query = $conn->query($sql2);
	//$query->num_rows;
	$result2 = $query->fetch_assoc();
	if($result2)
	{
		//echo $result["bg_desc"]."<br>";
		echo $result2["bg_name"];

	}
	$conn->close();

            ?>
         </span></h4>

<?php
    echo $result2["bg_desc"]."<br>";

?>
<br/>
<br/>
        </div>
<div class="col-md-6">
<br/>
<br/>
<div class='our-clients'>
<div class='clients-carousel custom-carousel touch-carousel' data-appeared-items='1'>
<?php
	$conn = new mysqli($host,$username,$password,$dbname);
    mysqli_query($conn, "SET NAMES utf8");
	mysqli_commit($conn);


	$sql = "SELECT * FROM `muse_object` ORDER BY `obj_id` DESC limit 0,1 ";

	$query = $conn->query($sql);
	//$query->num_rows;
	$result = $query->fetch_assoc();

        $a = $result["obj_refcode"];


        $sql3 = "select * from muse_pic where obj_refcode = '$a' limit 0,3";

    // mysqli_query($conn,$sql3, "SET NAMES utf8");
		$query3 = mysqli_query($conn,$sql3) or die("Can't Query");


 $i=1;
while($result3 = mysqli_fetch_array($query3))
{
//    $result3 = mysqli_fetch_array($query3);
        $pic = $result3['thumb_name'];
		//echo " $pic $a ";
        $objpics = $pic;
        $nrefcode = preg_replace('/[^a-z0-9\_\- ]/i', '', $a);
        //echo " $objpics ";
        //echo " $nrefcode ";
        $objpic = "../../pic/thumbmuse/$nrefcode/$objpics";
    echo " <div class='client-item item' align='center'>
            <img alt='' src='$objpic' />
            </div>";

 }
 $i++;
?>
<br/>
</div>
</div>
            </div>
          </div>
          <!-- End Clients Carousel -->
          </div>
</div>



<!--
 </div>
 </div>
-->
 <?php //include "footer.php" ; ?>
    <footer>
      <div class="container">
        <div class="row footer-widgets">

          <div class="col-md-12">

          </div>
          <!-- .col-md-3 -->
          <!-- End Contact Widget -->


        </div>
        <!-- .row -->

        <!-- Start Copyright -->
        <div class="copyright-section">
          <div class="row">
                 <div class="col-md-12">
							<?php
                            require 'connect.php';
							$query = mysqli_query($link,"SELECT * FROM `creativecommons` where cc_open = '1'");
							while($row = mysqli_fetch_array($query)) { ?>
								<div class="radio">
										<label>


							<img src="../../pic/cc/<?php echo $row['cc_pic_id']; ?>">&nbsp;&nbsp;&nbsp;<font color = "#FFFFFF"> พิพิธภัณฑ์อิเล็กทรอนิกส์	พัฒนาโดย ศูนย์เทคโนโลยีอิเล็กทรอนิกส์และคอมพิวเตอร์แห่งชาติ</font>
											<br>
											<br>

										</label>
								</div>

							<?php }
							?>
			</div>  

          </div>
        </div>
        <!-- End Copyright -->

      </div>
    </footer>
<div id="loader">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
</div>
 </body>
  <!-- Style Switcher -->


     <script type="text/javascript" src="js/script.js"></script>
</html>
