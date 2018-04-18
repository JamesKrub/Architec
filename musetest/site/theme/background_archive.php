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
   $menu2="class=active";
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
<!--
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
              <li><a href="animated-graphs.html">Animated Graphs</a>
              </li>
              <li><a href="accordion-toggles.html">Accordion & Toggles</a>
              </li>
            </ul>
-->
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
              <li><a href="/index.php">หน้าแรก</a></li>
              <li>ความเป็นมาจดหมายเหตุ</li>
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

            <div class="col-md-7">
                <?php
                
               // $bgid=$_REQUEST['catid'];
                
                                    $sql = "select * from archive_bg where bg_id = '1' ";
									$query=mysql_query($sql) or die("Can't Query");
									$num_rows=mysql_num_rows($query);
									for ($i=0; $i<$num_rows; $i++) {
										$result=mysql_fetch_array($query);
                                        $bg_desc = $result['bg_desc'];
                                        $bg_name = $result['bg_name'];      
												//echo "<p>$result[bg_desc]</p>";
												
									
				?>
              <!-- Classic Heading -->
              <h4 class="classic-title"><span><?php echo "$result[bg_name]";?></span></h4>

              <!-- Some Text -->
<!--              <p>วัดมงคลทุ่งแป้ง ถือเป็นวัดเก่าแก่ มีอายุประมาณ 500 ปีขึ้นไป ภายในวัดปรากฎซากโบราณสถาน ได้แก่ ซุ้มประตูโขงทางด้านทิศเหนือและทิศตะวันตก นอกจากนี้ยังมีวิหารเก่าที่มีความสวยงามภายในประดิษฐานพระพุทธรูปปางมารวิชัย ซึ่งวิหารดังกล่าวปัจจุบันได้รับการบูรณะเป็นที่เรียบร้อยแต่ยังคงไว้ซึ่งเอกลักษณ์และความสวยงามดั้งเดิม ซึ่งจากการบูรณะวิหารดังกล่าว เจ้าอาวาสรุ่นก่อน ๆ ได้เห็นถึงความสำคัญของส่วนประกอบของวิหารเก่า จึงได้จัดเก็บและรักษาไว้เพื่อให้คนรุ่นหลังได้ชมความเก่าแก่ของวิหารนี้ ไม่เพียงแค่นั้นต่อมาได้นำโบราณวัตถุต่าง ๆ ที่พบในวัด ได้แก่ ข้าวของเครื่องใช้ของพระภิกษุสงฆ์แต่เดิม และวัตถุที่ชาวบ้านที่มีจิตศรัทธานำมาถวายในอดีต โดยนำมาจัดแสดงภายในตู้กระจกภายในวิหารของวัด</p>-->
              
     
                 <?php
//                                    $sql = "select * from archive_bg where bg_id = '1' ";
//									$query=mysql_query($sql) or die("Can't Query");
//									$num_rows=mysql_num_rows($query);
//									for ($i=0; $i<$num_rows; $i++) {
//										$result=mysql_fetch_array($query);
//                                        $bg_desc = $result['bg_desc'];
//                                        $bg_name = $result['bg_name'];  
//                                          echo "<p>$result[bg_name]</p>";
								          echo "<p>$result[bg_desc]</p>";
												
									}
				?>
                
            </div>

            <div class="col-md-5">

              <!-- Start Touch Slider -->
              <div class="touch-slider" data-slider-navigation="true" data-slider-pagination="true">
                   <?php
             
             $sql = "select * from archive_object where obj_access = '1' order by obj_id DESC limit 0,4";
				$query=mysql_query($sql) or die("Can't Query");
				$num_rows=mysql_num_rows($query);
						for ($i=0; $i<$num_rows; $i++) {
						$result=mysql_fetch_array($query);
						$refcode= $result['obj_refcode'];
						$title = $result['obj_title'];
						$physicals = $result['obj_physicals'];
						 	$sql2 = "select * from archive_pic where obj_refcode = '$refcode' and obj_cover ='1' limit 0,1";
							$query2=mysql_query($sql2) or die("Can't Query2");
							$num_rows2=mysql_num_rows($query2);
								for ($j=0; $j<$num_rows2; $j++) {
								$result2=mysql_fetch_array($query2);
								$pic = $result2['thumb_name'];
								}
                       
                            if($result2['thumb_name']  == '')
         {
         $objpic = "../pic/thumb/blank.jpg";
         }
         else
         {
         //echo "$result2[pic_name] <br>";
         $objpic = $result2['thumb_name'];
         $objpic = "../pic/thumb/$refcode/$pic";

         } ?>
                  
                <div class="item"> 
                    <?    
                echo " <img src='$objpic' style='margin:50px 50px 50px;' alt=''> " ; ?>
                </div>
             
<? } ?>
              </div>
              <!-- End Touch Slider -->

            </div>

          </div>

          <!-- Divider -->
          <div class="hr1" style="margin-bottom:50px;"></div>

          <div class="row">

          

              <!-- Classic Heading -->
 


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
<!--
    <footer>
      <div class="container">
        <div class="row footer-widgets">
-->

          <!-- Start Subscribe & Social Links Widget -->
         
          <!-- .col-md-3 -->
          <!-- End Subscribe & Social Links Widget -->


          <!-- Start Twitter Widget -->
          
          <!-- .col-md-3 -->
          <!-- End Twitter Widget -->


          <!-- Start Flickr Widget -->
         
          <!-- .col-md-3 -->
          <!-- End Flickr Widget -->


          <!-- Start Contact Widget -->
<!--          <div class="col-md-12">-->
<!--
            <div class="footer-widget contact-widget">
              <h4><img src="images/footer-margo.png" class="img-responsive" alt="Footer Logo" /></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              <ul>
                <li><span>Phone Number:</span> +01 234 567 890</li>
                <li><span>Email:</span> company@company.com</li>
                <li><span>Website:</span> www.yourdomain.com</li>
              </ul>
            </div>
-->
<!--          </div>-->
          <!-- .col-md-3 -->
          <!-- End Contact Widget -->


<!--        </div>-->
        <!-- .row -->

        <!-- Start Copyright -->
<!--
        <div class="copyright-section">
          <div class="row">
            <div class="col-md-6">
               <p>พิพิธภัณฑ์อิเล็กทรอนิกส์พัฒนาโดย ศูนย์เทคโนโลยีอิเล็กทรอนิกส์และคอมพิวเตอร์แห่งชาติ</p>
            </div>
            <div class="col-md-6">
              <ul class="footer-nav">
-->
<!--
                <li><a href="#">Sitemap</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact</a></li>
-->
<!--
              </ul>
            </div>
          </div>
        </div>
-->
        <!-- End Copyright -->

<!--
      </div>
    </footer>
-->
    <!-- End Footer -->

  </div>
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- Style Switcher -->
  

  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>