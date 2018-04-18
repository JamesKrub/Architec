
<?php
   $objectid = $_REQUEST['objectid'];
   $refcode = $_REQUEST['refcode'];

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
<?php
include('connect.php');
//echo "ref = $refcode";
?>


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

<!--<div class="containner">-->
    <!-- Start Page Banner -->
     <div class="page-banner" style="padding:40px 0; background: url(images/coming-soon-bg.png) center #f9f9f9;">
      <div class="container">
        <div class="row">

          <div class="col-md-12">
            <ul class="breadcrumbs">
              <li><a href="index.php">หน้าแรก</a></li>
              <li><a href="showcatall.php">วัตถุจัดแสดง</a></li>

                 <?php
         $refcode = $_REQUEST['refcode'];

         $sql5 = "select distinct `archive_object`.`obj_category` , `archive_category`.`cat1_id` , `archive_category`.`cat1_name` , `archive_object`.`obj_title` FROM `archive_object` , `archive_category` WHERE `archive_object`.`obj_category` = `archive_category`.`cat1_id` and `archive_object`.`obj_refcode` = '$refcode'  ";
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
//                       /thailue/site/theme/showcat.php?catid=137
				        echo "<li><a href='/thailue/site/theme/showcat.php?catid=$objc''>$objn</a></li>";
                        echo "<li>$objtitle</a></li>";
				    }
				    else
				    {
						//echo "<p><input type='button' value ='noดาวน์โหลด' class='btn btn-info btn-mini' ></p>";
				    }



 ?>

            </ul>
          </div>
        </div>
      </div>
    </div>



    <!-- Start Content -->

    <div id="content">

    <div class="containner">
<div class="row">


<?php

include('connect.php');
//echo "ref = $refcode";


           $sql = "select count(*) FROM archive_pic where obj_refcode = '$refcode' and obj_id ='0' ";
		   $query=mysqli_query($link,$sql) or die("Can't Query");
		   $num_rows=mysqli_num_rows($query);
           //echo "numrows = $num_rows xxxx";
		   $total_rec=mysqli_fetch_array($query,0,0); // เก็บจำนวน Record ทั้งหมดไว้ใน $total_page
		   $p_size=30; //กำหนดจำนวน Record ที่จะแสดงผลต่อ 1 เพจ
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

         echo "<div class='col-sm-12'>";
         $sql = "select * FROM archive_pic where obj_refcode = '$refcode' and obj_id ='0'  LIMIT $start , $p_size";
         $query=mysqli_query($link,$sql) or die("Can't Query");
         $num_rows=mysqli_num_rows($query);
         $line =0;
	     for ($i=0; $i<$num_rows; $i++) {
         $result=mysqli_fetch_array($query);
         $refcode = $result['obj_refcode'];
         $nrefcode = preg_replace('/[^a-z0-9\_\- ]/i', '', $refcode);
         //$titlesort = trim($result['obj_title']);
         //echo "$result[pic_name] <br>";
         $objpic = $result['thumb_name'];
         $picid = $result['pic_id'];
         $pictype = explode(".", $result['pic_name']);
         $filetype = $pictype[1];
         $cover =$result[obj_cover];

            // echo "line = $line  file = $filetype  <br>";

         if($num_rows == 0)
         {
          $objpic = "../../pic/thumb/$nrefcode/blank.jpg";
         }

         else
         {
            $objpics = $result['thumb_name'];
            if  ($objpics == ""){
            $objpic = "../../pic/big/blank.jpg";
            }
            else
             {
             $objpic = "../../pic/thumb/$nrefcode/$objpics";
             }
         //$objpic = "../../pic/thumb/$nrefcode/$objpics";

         }



         $line = $line+1;
         if($line <7)
          {
        // echo "line = $line  file = $filetype <br>";
            if(($filetype =='jpg') or ($filetype =='JPG'))  {
//              $test = "../../pic/thumb/REG_1455454_A566/Thumb_2017-09-08_11-06-50_21149972_817742551737351_8968958069032507858_n.jpg";
             // echo "<img src='$test'> ";
                echo "<div class='col-xs-3'>";
                echo "<a href='showdetail.php?picid=$picid&refcode=$refcode'>
                    <img src='$objpic' class='img-thumbnail' style='margin:5px 0px 15px;' alt='' height='400' width='400'>
                    </a>";
                echo "</div>";
            }
             else if ($filetype =='mp4')
			{
				  			//echo "pic/big/$refcode/$result3[pic_name]";
                 echo "<div class='col-xs-3'>";
							echo "<video width='200'  controls>
  								  <source src='../../pic/big/$refcode/$result[pic_name]' type='video/mp4'>
  								  <object data='../../pic/big/$refcode/$result[pic_name]' width='200' >

         						  </object>
								</video>";
						    echo "<br>";
                 echo "</div>";
			}
			else if($filetype =='mp3')
			{
				  		//echo "$result3[pic_name] <br>";
				  		//echo "<a href ='player.php?picname=$result3[pic_name]'>$result3[pic_name]</a>";
                echo "<div class='col-xs-3'>";
				  		echo "<audio width='200' controls>
  				  		<source src='../../pic/big/$refcode/$result[pic_name]' type='audio/mpeg'>
  			     		<embed src='../../pic/big/$refcode/$result[pic_name]' width='200'>
						</audio>";
                  		echo "<br>";
                echo "</div>";
			}
            else
            {

            }
          }
        //echo "</div>";
         else
          {
         //echo "</div>";
          $line = 1;

    if(($filetype =='jpg') or ($filetype =='JPG'))  {
                echo "<div class='col-xs-3'>";
                echo "<a href='showdetail.php?picid=$picid&refcode=$refcode'>
                    <img src='$objpic' class='img-thumbnail' style='margin:5px 0px 15px;' alt='' height='400' width='400'>
                    </a>";
                echo "</div>";
            }
             else if ($filetype =='mp4')
			{
				  			//echo "pic/big/$refcode/$result3[pic_name]";
                 echo "<div class='col-xs-3'>";
							echo "<video width='200'  controls>
  								  <source src='../../pic/big/$refcode/$result[pic_name]' type='video/mp4'>
  								  <object data='../../pic/big/$refcode/$result[pic_name]' width='200' >

         						  </object>
								</video>";
						    echo "<br>";
                 echo "</div>";
			}
			else if($filetype =='mp3')
			{
				  		//echo "$result3[pic_name] <br>";
				  		//echo "<a href ='player.php?picname=$result3[pic_name]'>$result3[pic_name]</a>";
                echo "<div class='col-xs-3'>";
				  		echo "<audio width='200' controls>
  				  		<source src='../../pic/big/$refcode/$result[pic_name]' type='audio/mpeg'>
  			     		<embed src='../../pic/big/$refcode/$result[pic_name]' width='200'>
						</audio>";
                  		echo "<br>";
                echo "</div>";
			}
            else
            {

            }
          }

}



echo"</div>";


?>
<!--     </div>        -->
  </div>

<div class="row">
<!--  <div class="col-sm-12">        -->
<?php

echo "<div class='col-sm-12'>";


         $sql5 = "SELECT * FROM `archive_object` WHERE obj_refcode = '$refcode' ";
         $query5 = mysqli_query($link,$sql5) or die("Can't Query5");
         $num_rows5=mysqli_num_rows($query5);
         for ($i=0; $i<$num_rows5; $i++) {
			$result5=mysqli_fetch_array($query5);
            // $result4= mysqli_fetch_array($query4);
			$title = $result5['obj_title'];
         	$physicals = $result5['obj_physicals'];
         				//$keyword = $result['obj_keyword'];
             $extent = $result5['obj_extent'];

        }

       echo "<div class='col-sm-8'>";
       echo "<p><h5 class='text-info'>$title</h5></p>";
       echo "<p>$physicals</p>";
       echo "<p><h5 class='text-info'>ขนาด</h5></p>" ;
       echo "<p>$extent</p>";
      echo " </div>";
      echo " </div>";


?>
<!--</div>-->

<!--        </div>-->


          </div>

          <!-- Divider -->







<!--        </div>-->
      </div>
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
