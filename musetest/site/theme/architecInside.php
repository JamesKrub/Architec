<?php
   $refcode = $_REQUEST['refcode'];

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
    <div class="page-banner" style="padding:40px 0; background: url(images/tour-bg.png) center #f9f9f9;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            
          </div>
        </div>
      </div>
    </div>

    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="col-12">
          <?php
            include('connect.php');
            $sql = "select count(*) as count FROM architec_pic where archObj_Refcode = '$refcode' ";
            $query=mysqli_query($link,$sql) or die("Can't Query");
		        $num_rows=mysqli_num_rows($query);
            // echo "numrows = $num_rows xxxx";
            $total_rec = mysqli_fetch_array($query); // เก็บจำนวน Record ทั้งหมดไว้ใน $total_page
            $total_rec = $total_rec['count'] ;
            $p_size = 30; //กำหนดจำนวน Record ที่จะแสดงผลต่อ 1 เพจ
            $total_page=(int)($total_rec/$p_size);
            
            if(($total_rec % $p_size)!=0){ //ถ้าข้อมูลมีเศษให้ทำการบวกเพิ่มจำนวนหน้าอีก 1
              $total_page++;
            }
            if(empty($_GET['page'])){
		          /* ถ้่ายังไม่มีการส่งค่ามาเพื่อทำการเลือกดูหน้าข้อมูลใด ๆ ให้กำหนดเป็นหน้าแรกของข้อมูลเป็นค่า Default และให้ Record แรกเริ่มที่ Record ที่ 0 หรือ Record แรก */
              $page=1;
              $start=0;
			      }else{
              /* หากมีการส่งค่ามาเพื่อเลือกดูหน้าข้อมูลหน้าใดให้ทำการคำนวน โดยใช้ จำนวนข้อมูลที่ต้องการแสดงต่อ 1 เพจ คูณกับ หน้าข้อมูลที่ต้องการเลือกชม ลบด้วย 1*/
              $page=$_GET['page'];
              $start=$p_size*($page-1);
            }

            echo "<div class='col-sm-12'>";
            $sql = "SELECT * FROM architec_pic where archObj_Refcode = '$refcode' and archPic_Open = '1' LIMIT $start , $p_size ";
            $query=mysqli_query($link,$sql) or die("Can't Query");
            $num_rows=mysqli_num_rows($query);
            $line =0;

            for ($i=0; $i<$num_rows; $i++) {
              $result=mysqli_fetch_array($query);
              $refcode = $result['archObj_Refcode'];
                  
              $folder_refcode = $result['archFolder_Refcode'];     
              $objpic = $result['archThumb_Name'];
              $picid = $result['archPic_Id'];
              $pictype = explode(".", $result['archPic_Name']);
              $filetype = $pictype[1];
              $cover = $result['archObj_Cover'];
              $open = $result['archPic_Open'];

              if($num_rows == 0) {
                $objpic = "../../pic/thumb_architec/$nrefcode/blank.jpg";
              } else {
                $objpics = $result['archThumb_Name'];
                if ($objpics == ""){
                  $objpic = "../../pic/thumb_architec/blank.jpg";
                }
                $objpic = "../../pic/thumb_architec/$folder_refcode/$objpics";
              }
              if($line == 0){
                echo "<div class='row-eq-height'>";
              }
              $line++;
              $objpic = "../../pic/thumb_architec/$folder_refcode/$objpics";
              echo "<div class='col-xs-6 col-sm-4 col-md-4'>";
              echo    "<a href='architecDetail_lvl1.php?picid=$picid&refcode=$refcode&ac3_id=$ac3_id&ac2_id=$ac2_id&ac1_id=$ac1_id'>
                          <img src='$objpic' class='img-thumbnail' style='margin:5px 0px 15px; height:auto; width:400px;' alt='' '>
                        </a>";
              echo "</div>";
              if($line == 3){
                echo "</div>";
                $line = 0;
              } else if( ($line < 3) && ($i == $num_rows-1)){
                echo"</div>";
              }
            } // ภาพทั่วไป
            
            $sql =  "SELECT * FROM `architec_360` WHERE obj_refcode = '$refcode' ";
            $query=mysqli_query($link,$sql) or die("Can't Query");
            $num_rows=mysqli_num_rows($query);
            $line =0;
            if($num_rows > 0){
              echo "  <p><h3 class='text-info'>ภาพ 360</h3></p>";
            }
            for ($i=0; $i<$num_rows; $i++) {
              $result=mysqli_fetch_array($query);
              $folder_refcode = $result['obj_refcode'];
              $picname = $result['arch360_Dir'];
              $pictype = explode(".", $result['arch360_Dir']);
              $filetype = $pictype[1];
              if($line == 0){
                echo "<div class='row-eq-height'>";
              }
              $line++;
                  $objpic = "../../pic/architec_360/$folder_refcode/$picname";
                  echo "<div class='col-xs-6 col-sm-4 col-md-4'>";
                  echo    "<a href='../../site/360/architec_pano.php?refcode=".$folder_refcode."&file=".$picname."'>
                              <img src='$objpic' 
                                  class='img-thumbnail' 
                                  style='margin:5px 0px 15px; height:auto; width:400px;' alt=''>
                                <img src='../../pic/architec_360/icon_360.gif' style='POSITION: ABSOLUTE; bottom: 22px; left: 149px;' height:auto; width:100px;' alt=''>
                              </a>";
                  echo "</div>";
              if($line == 3){
                echo "</div>";
                $line = 0;
              } else if( ($line < 3) && ($i == $num_rows-1)){
                echo"</div>";
              }
            } // ภาพ 360 องศา
          ?>
        <?php
          echo "<div class='row'>";
          $sql5 = "SELECT * FROM `architec_object` WHERE archObj_Refcode = '$refcode' ";
          $query5 = mysqli_query($link,$sql5) or die("Can't Query5");
          $num_rows5=mysqli_num_rows($query5);
          for ($i=0; $i<$num_rows5; $i++) {
            $result5=mysqli_fetch_array($query5);
            $obj_Id = $result5['archObj_Id'];
		      	$title = $result5['archObj_Title'];
            $physicals = $result5['archObj_Physicals'];
            $extent = $result5['archObj_Extent']; // ขนาด

            $location_display = $result5['archObj_Location']; //สถานที่จัดเก็บต้นฉบับ
            $obj_ex = $result5['archObj_Existence']; //สถานที่จัดเก็บสำเนา
            $obj_cr = $result5['archObj_Creator']; //ชื่อเจ้าของ
            $obj_bi = $result5['archObj_Bio']; //ประวัติเจ้าของ
            $obj_his = $result5['archObj_History']; //ประวัติวัตถุจัดแสดง
            $obj_ac = $result5['archObj_Acquis']; //แหล่งที่ได้มา/โอนย้าย
            $obj_da = $result5['archObj_Dateacc']; //ช่วงเวลาการสะสม

            //include data checked
            $cr_obj_location_display = $result5['archObj_Location_Display']; //สถานที่จัดเก็บต้นฉบับ
            $ch_obj_existence = $result5['archObj_Existence_Display']; //สถานที่จัดเก็บสำเนา
            $ch_obj_creator_display = $result5['archObj_Creator_Display']; //่ขื่อเจ้าของ
            $ch_obj_bio = $result5['archObj_Bio_Display']; //ประวัติเจ้าของ
            $ch_obj_history_display= $result5['archObj_History_Display']; //ประวัติวัตถุจัดแสดง
            $ch_obj_acquis_display = $result5['archObj_Acquis_Display']; //แหล่งที่ได้มา/โอนย้าย
            $ch_obj_dateacc_display = $result5['archObj_Dateacc_Display']; //ชวงเวลาสะสม
          }
          echo "<div class='col-sm-12 col-md-12'>";
          echo "  <p><h3 class='text-info'>$title</h3></p>";
          echo "  <p>$physicals</p>";
          echo "</div>";
            
          $sql = "SELECT * FROM `architec_upload` WHERE obj_id = $obj_Id";
          $query = mysqli_query($link,$sql) or die("Can't Query5");
          $PDF=array();
          $MP3=array();
          $MP4=array();
          while($row = mysqli_fetch_array($query)) {
            $filetype = explode(".", $row['bpu_file']);
            $filetype = $filetype[1];
            if($filetype == 'pdf'){
              array_push($PDF,$row['bpu_file']);
            }
            else if($filetype == 'mp3'){
              array_push($MP3,$row['bpu_file']);
            }
            else if($filetype == 'mp4'){
              array_push($MP4,$row['bpu_file']);
            }
          } // end while
            
        ?>
        <?php
          if(count($PDF) > 0){
        ?>
            <div class='col-sm-12 col-md-12' style="margin-top: 20px">
              <p><h3 class='text-info'>เอกสาร</h3></p>
                <?php
                  foreach($PDF as $row){ ?>
                    <div class="col-sm-1 col-md-2" >
                    <?php
                        echo "<center><a target='_blank' href='../../pic/architec_upload/".$refcode."/".$row."'>
                                <br><img style='width: 45px;' src='../../admin/object/images/pdf.png' width='100'> <br>
                                ".mb_substr($row,0,20)."...</center></a>";
                        echo "</div>";
                      }
                    ?>
            </div>
      <?php
        }
      ?>

      <?php
        if(count($MP3) > 0){
      ?>
          <div class='col-sm-12 col-md-12' style="margin-top: 20px">
            <p><h3 class='text-info'>ไฟล์ MP3</h3></p>
            <?php
              foreach($MP3 as $row){ ?>
                <div class="col-sm-4 col-md-4">
            <?php
                echo "<audio width='250' controls>
                          <source src='../../pic/architec_upload/".$refcode."/".$row."' type='audio/mpeg'>
                          <embed src='../../pic/architec_upload/".$refcode."/".$row."' width='250'>
                      </audio>";
                echo "</div>";
              }
            ?>
          </div>
      <?php
        }
      ?>

      <?php
        if(count($MP4) > 0){
      ?>
          <div class='col-sm-12 col-md-12' style="margin-top: 20px">
            <p><h3 class='text-info'>ไฟล์ MP4</h3></p>
            <?php
              foreach($MP4 as $row){ ?>
                <div class="col-sm-4 col-md-4">
            <?php
                echo "<video width='250'  controls>
                          <source src='../../pic/architec_upload/".$refcode."/".$row."' type='video/mp4'>
                          <object data='../../pic/architec_upload/".$refcode."/".$row."' width='250' >
                          </object>
                      </video>";
                echo "</div>";
              }
            ?>
          </div>
      <?php
        }
      ?>
      <?php    
        echo " </div>";
      ?>      
        </div>
        
      </div>
    </div>
    <!-- End content -->
    <!-- Start Footer -->
  <?php //include "footer.php" ; ?>
    <!-- End Footer -->
    
  </div>
  <?php include "footer.php" ; ?>
  <!-- End Container -->
  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <script type="text/javascript" src="js/script.js"></script>
  
</body>
</html>
