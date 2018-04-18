<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	//กำหนดค่าการเชื่อมต่อ DB
  // $host = "emuseum_db";
  $host = "localhost";
	$username = "root";
  // $dbname = "culture_thailue";
	$dbname = "muse_test";  
	$password2 = "";	
	// $password = "heavygeese24"; 
	
	date_default_timezone_set('Asia/Bangkok');	

	//$link = mysqli_connect($host,$username,$password2,$dbname);
?>
<?php
   //$objectid = $_REQUEST['objectid'];
  // $refcode = $_REQUEST['refcode'];

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
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
<head>
<title></title>
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
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
</head>
<body>
 <?php
include('connect.php');
echo "ref = $refcode";    
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
   <div class="page-banner" style="padding:40px 0; background: url(images/coming-soon-bg.png) center #f9f9f9;">
      <div class="container">
        <div class="row">
          
          <div class="col-md-12">
            <ul class="breadcrumbs">
              <li><a href="index.php">หน้าแรก</a></li>
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
     <div class="panel-heading">
                 <h4 class="classic-title"><span>ข่าวประชาสัมพันธ์</span></h4>   
    </div>     

 <?php
    $conn = new mysqli($host,$username,$password,$dbname);
    mysqli_query($conn, "SET NAMES utf8");
	mysqli_commit($conn);
                                   $sql2 = "select * from archive_news ";
                                   $query = mysqli_query($conn,$sql2);
    								//$objid = $result2['news_id'];
                                        
                                 $sql3 = "select * from news_upload where obj_id = '$result2[news_id]'  limit 0,1 ";
         $query3=mysqli_query($conn,$sql3) or die("Can't Query2");
         $num_rows3=mysqli_num_rows($query3);
         $result3=mysqli_fetch_array($query3);
          if($result3['bpu_file']  == '')
         {
         $objpic = "../../pic/big/blank.jpg";
             
         }
         else
         {
         //echo "$result2[pic_name] <br>";
         $objpics = $result3['bpu_file'];
         $objpic = "../../pic/news_upload/$objpics";

         }
$i=1;
while($result2 = mysqli_fetch_array($query,MYSQLI_ASSOC))
{
    echo "<div class='panel panel-default'>";
    echo "<div class='comment-box clearfix'>";
    echo "<div class='avatar'><img alt='' src='$objpic' /></div>";
    echo "<div class='comment-content'>";
    echo "<div class='comment-meta'>";
    echo "<span class='comment-by'>".$result2['news_title']."</span>";
    echo " <span class='reply-link'><a href='#'>อ่านต่อ</a></span>";
     echo "</div>";
    echo "<p>".$result2['news_detail']."</p>";
    
    
    echo "</div>";
    echo "</div>";
    echo "</div>";                    

     $i++;
 }
  
?> 
<div class="comment-box clearfix">
                    <div class="avatar"><img alt="" src="images/avatar.png" /></div>
                    <div class="comment-content">
                      <div class="comment-meta">
                        <span class="comment-by">John Doe </span>
<!--                        <span class="comment-date">February 15, 2013 at 11:39 pm</span>-->
                        <span class="reply-link"><a href="#">อ่านต่อ</a></span>
                      </div>
                      <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia desrut mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                    </div>
</div>

</div>
 
                          
                       
 </div>
                          
 </div>                       
<!--</div>-->
<!--      </div>-->

  <!-- End Container -->
   <?php include "footer.php" ; ?>  

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- Style Switcher -->
  

  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>