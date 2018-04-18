
<?php
$objectid = $_REQUEST['objectid'];
$refcode = $_REQUEST['refcode'];
$picid = $_REQUEST['picid'];
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
   $menu3="class=active";
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
<!--  <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>    -->
  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!-- Zoom
================================================== -->
<style>
	.smooth_zoom_preloader {
		background-image: url(../../pic/zoom_assets/preloader.gif);
	}
	.smooth_zoom_icons {
		background-image: url(../../pic/zoom_assets/icons.png);
	}
</style>

<style>
.watermark2 {
    position: absolute;
    left: 50%;
    top: 70%;
    width:10%;
    max-width:100%
    height:auto;
    display:block;
    opacity: 0.15;
    z-index: 888;
}
</style>
<!--
<script language="javascript">
document.onmousedown=disableclick;
status="Right Click Disabled";
Function disableclick(event)
{
  if(event.button==2)
   {
     alert(status);
     return false;
   }
}
</script>
-->
<!--<script src="../../pic/zoom_assets/jquery-1.7.1.min.js"></script>-->
<script src="../../pic/zoom_assets/jquery.smoothZoom.min.js"></script>
<script>
	jQuery(function($){
		$('#yourImageID').smoothZoom({
			width: 812,
			height: 584,

			/******************************************
			Enable Responsive settings below if needed.
			Max width and height values are optional.
			******************************************/
			responsive: true,
			responsive_maintain_ratio: true,
			max_WIDTH: '',
			max_HEIGHT: ''
		});
	});
</script>
</head>

<body>
<?php
include('connect.php');
//echo "ref = $refcode";
?>
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
            <a href="index.html">Home</a>
            <ul class="dropdown">
              <li><a href="index.html">Home Main Version</a>
              </li>
              <li><a href="index-01.html">Home Version 1</a>
              </li>
              <li><a href="index-02.html">Home Version 2</a>
              </li>
              <li><a href="index-03.html">Home Version 3</a>
              </li>
              <li><a href="index-04.html">Home Version 4</a>
              </li>
              <li><a href="index-05.html">Home Version 5</a>
              </li>
              <li><a href="index-06.html">Home Version 6</a>
              </li>
              <li><a href="index-07.html">Home Version 7</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="active" href="about.html">Pages</a>
            <ul class="dropdown">
              <li><a class="active" href="about.html">About</a>
              </li>
              <li><a href="services.html">Services</a>
              </li>
              <li><a href="right-sidebar.html">Right Sidebar</a>
              </li>
              <li><a href="left-sidebar.html">Left Sidebar</a>
              </li>
              <li><a href="404.html">404 Page</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Shortcodes</a>
            <ul class="dropdown">
              <li><a href="tabs.html">Tabs</a>
              </li>
              <li><a href="buttons.html">Buttons</a>
              </li>
              <li><a href="action-box.html">Action Box</a>
              </li>
              <li><a href="testimonials.html">Testimonials</a>
              </li>
              <li><a href="latest-posts.html">Latest Posts</a>
              </li>
              <li><a href="latest-projects.html">Latest Projects</a>
              </li>
              <li><a href="pricing.html">Pricing Tables</a>
              </li>
              <li><a href="accordion-toggles.html">Accordion & Toggles</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="portfolio-3.html">Portfolio</a>
            <ul class="dropdown">
              <li><a href="portfolio-2.html">2 Columns</a>
              </li>
              <li><a href="portfolio-3.html">3 Columns</a>
              </li>
              <li><a href="portfolio-4.html">4 Columns</a>
              </li>
              <li><a href="single-project.html">Single Project</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="blog.html">Blog</a>
            <ul class="dropdown">
              <li><a href="blog.html">Blog - right Sidebar</a>
              </li>
              <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a>
              </li>
              <li><a href="single-post.html">Blog Single Post</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="contact.html">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header ( Logo & Naviagtion ) -->

    </header>
    <!-- End Header -->


    <!-- Start Page Banner -->
     <div class="page-banner" style="padding:40px 0; background: url(images/tour-bg.png) center #f9f9f9;">
      <div class="container">
        <div class="row">

          <div class="col-md-12">
            <ul class="breadcrumbs">
              <li><a href="index.php">หน้าแรก</a></li>
              <!-- <li><a href="museshowcatall.php">วัตถุจัดแสดง</a></li> -->

                 <?php

                  $refcode = $_REQUEST['refcode'];
                  $ac2_id = $_REQUEST['ac2_id'];
                  $ac3_id = $_REQUEST['ac3_id'];
                  $ac1_id = $_REQUEST['ac1_id'];
                  $catid  = $_REQUEST['catid'];

         $refcode = $_REQUEST['refcode'];

         $sql5 = "select distinct `muse_object`.`obj_category` , `muse_category`.`cat1_id` , `muse_category`.`cat1_name` , `muse_object`.`obj_title` FROM `muse_object` , `muse_category` WHERE `muse_object`.`obj_category` = `muse_category`.`cat1_id` and `muse_object`.`obj_refcode` = '$refcode'  ";
         			$query5=mysqli_query($link,$sql5) or die("Can't Query");
         			$num_rows5=mysqli_num_rows($query5);
	     			for ($i=0; $i<$num_rows5; $i++) {
         				$result5=mysqli_fetch_array($query5);
         				$objc = $result5['obj_category'];
                        $objn = $result5['cat1_name'];
                        $obj_cate2 = $result5['obj_cate2'];
                        $objtitle = $result5['obj_title'];
                        $objid = $result5['obj_id'];
         				//$downloadfile = $result5['obj_downloadfile'];
         				}
                if($objc != "")
                {
                       $sql_check = "SELECT distinct `muse_category_lv2`.`ac1_id`,`muse_category_lv2`.`ac2_name`
                       FROM muse_category_lv2
                       where `muse_category_lv2`.`ac1_id` = '$objc'";
                       $query6=mysqli_query($link,$sql_check) or die("Can't Query");
                       $num_rows6=mysqli_num_rows($query6);

                       for ($eet=0; $eet < $num_rows6 ; $eet++) {
                           $result6=mysqli_fetch_array($query6);
                           $id = $result6['ac1_id'];
                           $name = $result6['ac2_name'];


                           $sql_check2 = "SELECT distinct  `muse_category_lv2`.`ac2_id` , `muse_category_lv2`.`ac2_name` FROM  `muse_category_lv2` WHERE `muse_category_lv2`.`ac2_id` = '$ac2_id '  ";

                           $query77=mysqli_query($link,$sql_check2) or die("Can't Query");
                           $num_rows55=mysqli_num_rows($query77);
                           for ($qi=0; $qi<$num_rows55; $qi++) {
                               $result525=mysqli_fetch_array($query77);
                               $objid = $result525['ac2_id'];
                                       $objname = $result525['ac2_name'];





                               }
                       }

                       $sqlcat4 = "SELECT distinct  `muse_object`.`obj_cate2`
                       FROM  `muse_object`
                         ";
                       $querycat3=mysqli_query($link,$sqlcat4) or die("Can't Query");
                       $num_rows_cat3=mysqli_num_rows($querycat3);

                                                       for ($cat3=0; $cat3<$num_rows_cat3; $cat3++) {
                                                       $cat3re = mysqli_fetch_array($querycat3);
                                                       $idobj2 = $cat3re['obj_cate2'];

                           }

                           if ($idobj2 != 0) {
                            //  echo "<li><a href='museshowcat.php?catid=$objc'>$objn</a></li>";
                            //  echo "<li>$objtitle</li>";
                           }else {


                             $sql_check_catid = "SELECT distinct  `muse_category`.`cat1_id`,`muse_category`.`cat1_name`
                             FROM muse_category

                             where `muse_category`.`cat1_id` = '$catid'";

                             $query99=mysqli_query($link,$sql_check_catid) or die("Can't Query");
                             $num_rows99=mysqli_num_rows($query99);

                             for ($eetddd=0; $eetddd < $num_rows99 ; $eetddd++) {
                                 $result99=mysqli_fetch_array($query99);
                                 $idcet = $result99['cat1_id'];
                                 $objname = $result99['cat1_name'];
                             }



                             $sql5 = "SELECT distinct  `muse_category_lv3`.`ac3_id` , `muse_category_lv3`.`ac3_name`
                             FROM  `muse_category_lv3`

                             WHERE `muse_category_lv3`.`ac3_id` = '$ac3_id '  ";
                                   $query5=mysqli_query($link,$sql5) or die("Can't Query");
                                   $num_rows5=mysqli_num_rows($query5);
                               for ($i=0; $i<$num_rows5; $i++) {
                                     $result5=mysqli_fetch_array($query5);
                                     $objc = $result5['ac3_id'];



                                            $objn = $result5['ac3_name'];


                                     }
                                     $sqlsub4 = "SELECT distinct `muse_category`.`cat1_id` , `muse_category`.`cat1_name`
                                     FROM muse_category
                                     WHERE `muse_category`.`cat1_id` = '$ac1_id ' ";
                                     $querysub3 = mysqli_query($link,$sqlsub4) or die("Can't Query");
                                     $num_rowssub3 = mysqli_num_rows($querysub3);
                                     for ($sub1=0; $sub1 < $num_rowssub3; $sub1++) {
                                       $sub3result = mysqli_fetch_array($querysub3);
                                       $sub3resultid = $sub3result['cat1_id'];
                                       $sub3resultname = $sub3result['cat1_name'];
                                     }

                                     $sqlcat4aaa = "SELECT distinct  `muse_object`.`obj_cate2`
                                     FROM  `muse_object`
                                       ";
                                     $querycat3=mysqli_query($link,$sqlcat4aaa) or die("Can't Query");
                                     $num_rows_cat3=mysqli_num_rows($querycat3);

                                                                     for ($cat3=0; $cat3<$num_rows_cat3; $cat3++) {
                                                                     $cat3re = mysqli_fetch_array($querycat3);
                                                                     $idobj2 = $cat3re['obj_cate2'];

                                         }


                                             // echo "5".$idobj2;





                                          //  echo "<li><a href='museshowcat.php?catid=$sub3resultid'> $sub3resultname</a></li>";
                                          //  echo "<li><a href='museshowcat.php?refcode=$refcode&ac3_id=$ac3_id&ac2_id=$ac2_id&ac1_id=$ac1_id&catid=$idcet'>$objname</a></li>";
                                          //  echo "<li><a href='museshowcat3.php?refcode=$refcode&ac3_id=$ac3_id&ac2_id=$ac2_id&ac1_id=$ac1_id&catid=$idcet'>$objn</a></li>";
                                          //  echo "<li><a href='museshowcat2.php?refcode=$refcode&ac3_id=$ac3_id&ac2_id=$ac2_id&ac1_id=$ac1_id&catid=$idcet'>$objtitle</a></li>";



                           }

      // museshowcat.php?catid=226
                       }

				    else
				    {
						//echo "<p><input type='button' value ='noดาวน์โหลด' class='btn btn-info btn-mini' ></p>";
				    }



 ?>
<!--                <li><a href="museshowcatall.php">วัตถุจัดแสดง</a></li>-->
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- End Page Banner -->


    <!-- Start Content -->
    <!-- Start Content -->

    <div id="content">

    <div class="containner">
<div class="row">
<!--  <div class="col-sm-12">        -->
<?php

include('connect.php');
//echo "ref = $refcode";



         echo "<div class='col-sm-12'>";
         $sql = "select * FROM muse_pic where pic_id ='$picid' ";
         $query=mysqli_query($link,$sql) or die("Can't Query");
         $num_rows=mysqli_num_rows($query);
         $line =0;
	     for ($i=0; $i<$num_rows; $i++) {

         				$result=mysqli_fetch_array($query);
         				//echo "$result[pic_name]";
         				$picname = $result['pic_name'];
                        $nrefcode = preg_replace('/[^a-z0-9\_\- ]/i', '', $refcode);
         				$pic = "../../pic/bigmuse/$nrefcode/$result[pic_name]";
         				$picdetail = $result['pic_detail'];



//echo "$pic";
//echo "$picdetail";
//echo "$picname";

              echo"<center><img id='yourImageID' src='$pic' class='img-polaroid'/></img></center>";
         }
 ?>



</div>

<!--</div>-->

<!--        </div>-->


          </div>





<!--        </div>-->
      </div>
    </div>
    <!-- End content -->



    <!-- Start Footer -->
  <?php include "footer.php" ; ?>
    <!-- End Footer -->

<!--  </div>-->
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- Style Switcher -->


  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>
