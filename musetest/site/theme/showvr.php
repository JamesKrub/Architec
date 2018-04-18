
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
<!--  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>-->
<!--
<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>
-->
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
    <script src="vr/js/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script src="vr/js/jquery-ui-1.8.4.all.min.js" type="text/javascript"></script>
    <script src="vr/js/jquery.spritespin.js" type="text/javascript"></script>
<!--    <link href="http://plugindetector.com/css/demo.css" rel="stylesheet" />-->
    <link href="vr/js/jquery-ui-1.8.4.all.css" media="screen, projection" rel="stylesheet" type="text/css" />
<!--    <link href="http://plugindetector.com/demo/_lib/demo.css" rel="stylesheet" />    -->
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
              <li><a href="museshowcatall.php">วัตถุจัดแสดง</a></li>

                 <?php
         $refcode = $_REQUEST['refcode'];

         $sql5 = "select distinct `muse_object`.`obj_category` , `muse_category`.`cat1_id` , `muse_category`.`cat1_name` , `muse_object`.`obj_title` FROM `muse_object` , `muse_category` WHERE `muse_object`.`obj_category` = `muse_category`.`cat1_id` and `muse_object`.`obj_refcode` = '$refcode'  ";
         			$query5=mysqli_query($link,$sql5) or die("Can't Query");
         			$num_rows5=mysqli_num_rows($query5);
	     			for ($i=0; $i<$num_rows5; $i++) {
         				$result5=mysqli_fetch_array($query5);
         				$objc = $result5['obj_category'];
                        $objn = $result5['cat1_name'];
                        $objtitle = $result5['obj_title'];
                        $objid = $result5['obj_id'];
         				//$downloadfile = $result5['obj_downloadfile'];
         				}
				   if($objc != "")
				   {
//                       /thailue/site/theme/museshowcat.php?catid=137
				         echo "<li><a href='museshowcat.php?catid=$objc'>$objn</a></li>";
                        echo "<li><a href='museshowcat2.php?refcode=$refcode'>$objtitle</a></li>";
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
<!--    <div id="content">-->
      <div class="container">
<!--        <div class="page-content">-->
<div class="row">
<?php    
$mydir=$_REQUEST['mydir'];
$direction=$_REQUEST['direction'];

//$mydir='H0009';
//$direction = 'R';
//echo "$mydir: $direction <br>";
?>    

<div>
                   <?php //include 'vr/showvr-detail.php'; ?>
				
				  <?php //include 'vr/t360.php'; ?>

     <script type="text/javascript">
    $(function(){
    
      $("#bike").spritespin({
        width     : 800,
        height    : 600,
        frames    : 36,
        image     : [

         <?php    
$allowed_types=array('jpg','JPG','jpeg','gif','png');
//$dirs    = "../../pic/vr/H001/";
$dirs    = "../../pic/vr/$mydir/";
//echo "$dirs: $mydir frames <br>";            
$files1 = scandir($dirs);
foreach($files1 as $key=>$value){
    if($key>1){
        $file_parts = explode('.',$value);
        $ext = strtolower(array_pop($file_parts));
        if(in_array($ext,$allowed_types)){
           
            //echo "\"$dirs$value\",";
		   if($direction == 'R')
		  {
//		         for($j=0;$j<=$i-1;$j++)
//		              {
                     // echo" \"$mydir2/$filevr[$j]\",";
                     echo "\"$dirs$value\",";
                      // echo "\"http://localhost/culture/pic/vr/$mydir/$filevr[$j]\",";   
//	              }
		  }
		  else if($direction == 'L')
		  {
//				      for($j=$i-1;$j>=0;$j--)
//		              {
                      //echo" \"$mydir2/$filevr[$j]\",";
                          echo "\"$dirs$value\",";
//		              }

		  }
        
        }
 
    }
    
    	
}  
?>    
        ],
        animate   : true,
        loop      : true,
        frameTime : 160,
//	   onFrame   : function(){
//		// on each frame update, set the slider to the current frame position
//		var currentFrame = $("#bike").spritespin("frame");
//		$(".slider").slider({ value : currentFrame });
//	   }

      });
	 

  // slider to slide to desired position
  $(".slider").slider({
    range: "min",
    value: 0,                                         // initial frame
    min: 0,                                           // number of rist frame
    max: 36,                                          //  number of last frame
    slide: function( event, ui ) {
      $("#bike").spritespin("frame", ui.value);
          }
       });
    });
    </script>   
    	<div class="wrapper">
		<div class="inner">
    <div id="spritespin"></div>
    <div id="bike"></div>

    </div>
    	</div>
    
</div>
 
  

          
 </div>

          <!-- Divider -->
        

         

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


<!--        </div>-->
<!--      </div>-->
    </div>
    <!-- End content -->


    <!-- Start Footer -->
  <?php include "footer.php" ; ?>  
    <!-- End Footer -->

  </div>
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- Style Switcher -->
  

  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>