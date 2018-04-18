<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
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
   $menu6="class=active";
}
?>
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
<!--
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
-->
              <!-- Start Contact Info -->
<!--
              <ul class="contact-details">
                <li><a href="contact.php"><i class="fa fa-map-marker"></i> อาคารเสมารักษ์ ชั้น 2 กระทรวงศึกษาธิการ ถนนราชดำเนินนอก เขตดุสิต กทม. 10300</a>
                </li>
-->
<!--                <li><a href="#"><i class="fa fa-envelope-o"></i> info@yourcompany.com</a>-->
<!--                </li>-->
<!--
                <li><a href="#"><i class="fa fa-phone"></i> 02-6286403, 02-6286405</a>
                </li>
              </ul>
-->
              <!-- End Contact Info -->
<!--
            </div>
            
          </div>
        </div>
      </div>
-->
      <!-- End Top Bar -->

      <!-- Start Header ( Logo & Naviagtion ) -->
     <div class="navbar navbar-default navbar-top">
        <?php include "menu.php" ; ?>  
        
        </div>    
       

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
            <a href="about.html">Pages</a>
            <ul class="dropdown">
              <li><a href="about.html">About</a>
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
            <a class="active" href="contact.html">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      
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
              <li>กิจกรรม</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->
    

    <!-- Start Content -->
    <div id="content">
      <div class="container">

        <?php

           $sql = "select count(*) FROM archive_news where news_publish ='1' order by news_id DESC";
		   $query=mysql_query($sql) or die("Can't Query");
		   $num_rows=mysql_num_rows($query);
		   $total_rec=mysql_result($query,0,0); // เก็บจำนวน Record ทั้งหมดไว้ใน $total_page
		   $p_size=3; //กำหนดจำนวน Record ที่จะแสดงผลต่อ 1 เพจ
		   $total_page=(int)($total_rec/$p_size);
		   //ทำการหารหาจำนวนหน้าทั้งหมดของข้อมูล ในที่นี้ให้หารออกมาเป็นเลขจำนวนเต็ม
		   if(($total_rec % $p_size)!=0){ //ถ้าข้อมูลมีเศษให้ทำการบวกเพิ่มจำนวนหน้าอีก 1
   		   $total_page++;
		   }
		   if(empty($_GET['page'])){
		   /*
			ถ้่ายังไม่มีการส่งค่ามาเพื่อทำการเลือกดูหน้าข้อมูลใด ๆ ให้กำหนดเป็นหน้าแรกของข้อมูลเป็นค่า Default และให้ Record แรกเริ่มที่ Record ที่ 0 หรือ Record แรก
		   */
   			$page=1;
   			$start=0;
			}else{
			/*
			หากมีการส่งค่ามาเพื่อเลือกดูหน้าข้อมูลหน้าใดให้ทำการคำนวน โดยใช้ จำนวนข้อมูลที่ต้องการแสดงต่อ 1 เพจ คูณกับ หน้าข้อมูลที่ต้องการเลือกชม ลบด้วย 1
			*/
   			$page=$_GET['page'];
   			$start=$p_size*($page-1);
			}
    
		 //$sql = "select * FROM archive_news where news_publish ='1' order by news_id  DESC LIMIT $start , $p_size";
         $sql = "select distinct * FROM `archive_news` , `news_pic` where `archive_news`.`news_publish` ='1' and `archive_news`.`news_id` = `news_pic`.`nw_id` order by `archive_news`.`news_id` DESC LIMIT $start , $p_size";
         $query=mysql_query($sql) or die("Can't Query");
         $num_rows=mysql_num_rows($query);
         $line =1;
	     for ($i=0; $i<$num_rows; $i++) {
         $result=mysql_fetch_array($query);
         $newsid = $result['news_id'];
         $title = $result['news_title'];
         $detail = $result['news_detail'];
         $detail = mb_strimwidth($detail, 0, 1000, "...");
         $pics = $result['np_file'];
        // $pics2 = $result['news_pics2'];
        // $pics3 = $result['news_pics3'];
       //  $pics4 = $result['news_pics4'];
       //  $pics5 = $result['news_pics5'];

         if(($pics != '') or ($pics2 != '') or ($pics3 != '') or ($pic4 != '') or ($pic5 != ''))
         {
         if($pics == '')
         {
         $mypics = $pics2;
         }
         else
         {
         $mypics = $result['np_file'];
         }
         }
         else
         {
         $mypics = "blank_news.jpg";
         }

         echo "<div class='portfolio-page portfolio-4column'>
		        <div class='span2'>
                    <img src='../pic/news/$newsid/$mypics' style='margin:5px 0px 15px;' alt=''>   </div>
                <div class='span10'>
                    <strong> $title  </strong>
                    <p> $detail </p>
                    <p><a href='newsdetail.php?newsid=$newsid'>อ่านต่อ</a> </p>
                </div>
                </div>
          ";
          }

				?>

				<div class="pagination">
                <ul>
                <?php
                for($i=1;$i<=$total_page;$i++){ //สร้าง Link เพื่อให้ผู้ใช้งานเลือกชมหน้าข้อมูล
   				echo "<li><a href=".$_SERVER['PHP_SELF']."?refcode=$refcode&page=".$i."> ".$i."</a> </li> ";
				}?>

                <!--<li class="active"><a href="#">Prev</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">Next</a></li>
                -->
                </ul>
                </div>



                    </div>
 </div>
            <!-- Classic Heading -->
<!--            <h4 class="classic-title"><span>Contact Us</span></h4>-->

            <!-- Start Contact Form -->
           
            <!-- End Contact Form -->

<!--
          </div>

          <div class="col-md-4">
-->

            <!-- Classic Heading -->
           

            <!-- Some Info -->
<!--            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>-->

            <!-- Divider -->
        

            <!-- Info - Icons List -->


            <!-- Divider -->
          

            <!-- Classic Heading -->
           

            <!-- Info - List -->
           

         
        </div>

    <!-- End content -->


    <!-- Start Footer -->
    <?php include "footer.php" ; ?>    
   
    <!-- End Footer -->

  
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>



  <script type="text/javascript" src="js/script.js"></script>

 

</body>

</html>