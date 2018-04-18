<?php //include "connect.php" ; ?>
<?
//$menu2_1=$menu2_2=$menu1_1=$menu1_2=$menu1_3=$menu1_4="";
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
   $menu5="class=active";
}
?>
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>Digital Archive | จดหมายเหตุดิจิตัล</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="Margo - Responsive HTML5 Template">
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
  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>

  <!-- Container -->
  <div id="container">

    <!-- Start Header -->
    <div class="hidden-header"></div>
    <header class="clearfix">

      <!-- Start Top Bar -->
      <?php include "topbar.php" ; ?>
      <!-- End Top Bar -->

      <!-- Start Header ( Logo & Naviagtion ) -->
      <div class="navbar navbar-default navbar-top">
          <?php include "menu.php" ; ?>


              <!-- Mobile Menu Start -->

        <ul class="wpb-mobile-menu">
          <li>
            <a class="active" href="index.php">หน้าแรก</a>

          </li>
          <li>
                <a href="#">ประวัติความเป็นมา</a>
                <ul class="dropdown">
                  <li><a href="background_muse.php">ประวัติพิพิธภัณฑ์</a></li>
                   <li><a href="background_archive">ประวัติจดหมายเหตุ</a></li>
                </ul>
         </li>
          <li>
            <a href="museshowcatall.php">วัตถุจัดแสดง</a>

          </li>
          <li>
            <a href="musenews.php">ข่าวประชาสัมพันธ์</a>

          </li>
          <li>
            <a href="info.php">ข้อมูลสำหรับผู้เยี่ยมชม</a>

          </li>
          <li>
            <a href="contact.php">ติดต่อเรา</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header ( Logo & Naviagtion ) -->

    </header>
    <!-- End Header -->


    <!-- Start Page Banner -->
    <div class="page-banner" style="padding:40px 0; background: url(images/coming-soon-bg.png) center #f9f9f9;">
      <div class="container">
        <div class="row">

          <div class="col-md-12">
            <ul class="breadcrumbs">
              <li><a href="../test/index.php">หน้าแรก</a></li>
              <li>ข้อมูลสำหรับผู้เยี่ยมชม</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="page-content">


          <div class="row">

            <div class="col-md-12">
          <?php
                                    $sql = "select * from muse_bg where bg_id = '1' ";
									$query=mysqli_query($sql) or die("Can't Query");
									$num_rows=mysqli_num_rows($query);
									for ($i=0; $i<$num_rows; $i++) {
										$result=mysqli_fetch_array($query);
                                        //$bg_number = $result['bg_number'];

									}
									?>
              <!-- Classic Heading -->
              <h4 class="classic-title"><span>เวลาทำการ</span></h4>

              <!-- Some Text -->


     <ul class="icons-list">
              <li><i class="fa fa-globe">  </i>
                 <?php

                echo "$result[bg_entry]";

				?>
               </li>

            </ul>
            </div>



          </div>


          <!-- Divider -->
          <div class="hr1" style="margin-bottom:50px;"></div>

          <!-- Classic Heading -->
<!--          <h4 class="classic-title"><span>Our Creative Team</span></h4>-->

          <!-- Start Team Members -->
          <div class="row">

            <!-- Start Memebr 1 -->

            <!-- End Memebr 1 -->

            <!-- Start Memebr 2 -->

            <!-- End Memebr 2 -->

            <!-- Start Memebr 3 -->

            <!-- End Memebr 3 -->

            <!-- Start Memebr 4 -->

            <!-- End Memebr 4 -->

          </div>
          <!-- End Team Members -->

          <!-- Divider -->
          <div class="hr1" style="margin-bottom:50px;"></div>

          <!-- Start Clients Carousel -->
          <div class="our-clients">

          </div>
          <!-- End Clients Carousel -->


        </div>
      </div>
    </div>
    <!-- End content -->

  <?php include "footer.php" ; ?>
    <!-- Start Footer -->

    <!-- End Footer -->

  </div>
  <!-- End Container -->

  <!-- Go To Top Link -->
   <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- Style Switcher -->

  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>
