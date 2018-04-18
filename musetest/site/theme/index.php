<?php
	require('connect.php');
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
error_reporting( error_reporting() & ~E_NOTICE );
$ac3_id = $_REQUEST['ac3_id'];
$menu=$menu1=$menu2=$menu3=$menu4=$menu5=$menu6=$menu7="";

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
   $menu1="class=active";
}
?>
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <?php
    $sqlquer = "SELECT bg_name FROM `muse_bg`";
    $querydata = mysqli_query($link , $sqlquer);
    $row = mysqli_fetch_array($querydata);
  ?>
  <title><?php echo $row['bg_name']; ?></title>

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
                <!-- Mobile Menu Start -->

        <ul class="wpb-mobile-menu">
            <?php include "menu_mobile.php"; ?>
        </ul>
        <!-- Mobile Menu End -->
    </header>

<div class="container">
    <div id="main-slide" class="carousel slide" data-ride="carousel">
    <!-- Start Portfolio Section -->
    <div class="section full-width-portfolio" style="border-top:0; border-bottom:0; background:#fff;">
     <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01">
        <h1>
            <?php
                $conn = new mysqli($host,$username,$password,$dbname);
                mysqli_query($conn, "SET NAMES utf8");
                mysqli_commit($conn);

                $sql2 = "select * from muse_bg where bg_id = '1' ";

                $query = $conn->query($sql2);
                $result2 = $query->fetch_assoc();
                if($result2)
                {
                    echo $result2["bg_name"]."<br>";
                }
                $conn->close();
            ?>
        </h1>
      </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
                    $conn = new mysqli($host,$username,$password,$dbname);
                    mysqli_query($conn, "SET NAMES utf8");
                    mysqli_commit($conn);

                    $sql = "select * from muse_bg where bg_id = '1' ";

                    $query = $conn->query($sql);
                    $result = $query->fetch_assoc();
                    if($result)
                    {
                        $objpic = $result['bg_pic'];
                        $objpic = "../../pic/big/$objpic";
                    }
                    echo '<img src="'.$objpic.'">';
                    $conn->close();
                ?>
                <?php
                    require 'connect.php';
                    $sql360 = "select * from muse_bg ";
                    $query360 = mysqli_query($link,$sql360) or die("Can't Query-360");
                    $num_rows360 = mysqli_num_rows($query360);
                    for ($a=0; $a<$num_rows360; $a++) {
                        $result360=mysqli_fetch_array($query360);
			 	        $pic_360 = $result360['bg_pano'];
				            if (isset($pic_360)) {
				                 echo "<div class='col-md-8 text-left'>
				                       </div>
                                       <div class='col-md-4 text-right'>
                                            <a href='../360/index_360.php' >
				  						        <img src='../360/picpano/test.png' height='60 px' width='60 px'>
				 							</a>

				                       </div> ";
			            }else {

			            }
			        }
		        ?>
            </div>
            <div class="col-md-6">
            <?php
                $conn = new mysqli($host,$username,$password,$dbname);
                mysqli_query($conn, "SET NAMES utf8");
                mysqli_commit($conn);

                $sql = "select * from muse_bg where bg_id = '1' ";

                $query = $conn->query($sql);
                $result = $query->fetch_assoc();
                if($result)
                {
                    echo "<p style=\"font-size: 20px;\">".$result["bg_desc"]."</p><br>";
                }
                $conn->close();
            ?>
            <a class="main-button" href="background_muse.php">อ่านต่อ <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <br><br>
    </div>
</div>
 </div>
 </div>
 <?php //include "footer.php" ; ?>
    <footer>
      <div class="container">

        <!-- .row -->

        <!-- Start Copyright -->
				<div class="copyright-section">
					<div class="row">
						<div class="col-md-12">
							<?php
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
