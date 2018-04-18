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
   $menu4="class=active";
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
              <li><a href="../site/index.php">หน้าแรก</a></li>
              <li>ข่าวประชาสัมพันธ์</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content">

    <div class="container">    
          <div class="row">

   <div class="col-md-12">

              <!-- Classic Heading -->
              <h4 class="classic-title"><span>ข่าวประชาสัมพันธ์</span></h4>

              <!-- Accordion -->
              <div class="panel-group" id="accordion">
<?php
                  
                  $sql = "select count(*) from archive_news where archive_news.news_publish = '1'  order by archive_news.news_id DESC";
		   $query=mysql_query($sql) or die("Can't Query");
		   $num_rows=mysql_num_rows($query);
          //echo "numrows = $num_rows ";
		   $total_rec=mysql_result($query,0,0); // เก็บจำนวน Record ทั้งหมดไว้ใน $total_page
		   $p_size=5; //กำหนดจำนวน Record ที่จะแสดงผลต่อ 1 เพจ
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

                  
                  
                  
                  
                  
                  
                                $sql = "select * from archive_news  LIMIT $start , $p_size";
									$query=mysql_query($sql) or die("Can't Query");
									$num_rows=mysql_num_rows($query);
									for ($i=0; $i<$num_rows; $i++) {
										$result=mysql_fetch_array($query);
                                        //$bg_number = $result['bg_number'];
										$objid = $result['news_id'];
                                        
                                 $sql2 = "select * from news_upload where obj_id = '$objid'  limit 0,1 ";
         $query2=mysql_query($sql2) or die("Can't Query2");
         $num_rows2=mysql_num_rows($query2);
         $result2=mysql_fetch_array($query2);
          if($result2['bpu_file']  == '')
         {
         $objpic = "../../pic/big/blank.jpg";
             
         }
         else
         {
         //echo "$result2[pic_name] <br>";
         $objpics = $result2['bpu_file'];
         $objpic = "../../pic/news_upload/$objpics";

         }
        
?>                                        
                <!-- Start Accordion 1 -->
                <div class="panel panel-default">
                  <!-- Toggle Heading -->
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" class="collapsed">
<!--                        <i class="fa fa-angle-up control-icon"></i>-->
<!--                        <i class="fa fa-desktop"></i>-->
                          <?php echo  ("$result[news_title]");?>
                      </a>
                    </h4>
                  </div>
                  <!-- Toggle Content -->
                  <div id="collapse-1" class="panel-collapse collapse in">
                    <div class="panel-body"><img class="img-thumbnail image-text" style="float:left; width:150px;" alt="" src=" <? echo "$objpic" ?>" /> 
                      
                       <?php 
               
                  echo nl2br("$result[news_detail]") ; 
                      
                       ?> 
                      </div>
                  </div>
                </div>
     <?}?>             
                <!-- End Accordion 1 -->

                <!-- Start Accordion 2 -->

                <!-- End Accordion 2 -->

              </div>
            </div>
      <div class="container">
                <ul class="pagination">
                 <?php
                for($i=1;$i<=$total_page;$i++){ //สร้าง Link เพื่อให้ผู้ใช้งานเลือกชมหน้าข้อมูล
   echo "<li><a href=".$_SERVER['PHP_SELF']."?page=".$i."> ".$i."</a> </li> ";
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

  <div id="loader">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
  </div>

  <!-- Style Switcher -->

  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>