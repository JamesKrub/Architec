
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
            <ul class="breadcrumbs">
              <!-- <li><a href="index.php">หน้าแรก</a></li>-->
              <!-- <li><a href="museshowcatall.php">วัตถุจัดแสดง</a></li> -->
              <?php
                $catid  = $_REQUEST['catid'];
                $ac2_id = $_REQUEST['ac2_id'];
                $ac3_id = $_REQUEST['ac3_id'];
                $ac1_id = $_REQUEST['ac1_id'];

                $sql5 = "SELECT distinct `muse_object`.`obj_category` , `muse_category`.`cat1_id` , `muse_category`.`cat1_name` , `muse_object`.`obj_title` FROM `muse_object` , `muse_category` WHERE `muse_object`.`obj_category` = `muse_category`.`cat1_id` and `muse_object`.`obj_refcode` = '$refcode'  ";
                $query5=mysqli_query($link,$sql5) or die("Can't Query");
                $num_rows5=mysqli_num_rows($query5);
                for ($i=0; $i<$num_rows5; $i++) {
                  $result5=mysqli_fetch_array($query5);
                  $objc = $result5['obj_category'];
                  $objn = $result5['cat1_name'];
                  $objcat2 = $result5['obj_cate2'];
                  $objcat3 = $result5['obj_cate3'];
                  $objtitle = $result5['obj_title'];
                  $objid = $result5['obj_id'];
         				  //$downloadfile = $result5['obj_downloadfile'];
                 }
                 
                if($objc != "") {
                  $sql_check = "SELECT distinct `muse_category_lv2`.`ac1_id`,`muse_category_lv2`.`ac2_name`
                  FROM muse_category_lv2
                  where `muse_category_lv2`.`ac1_id` = '$objc'";
                  $query6=mysqli_query($link,$sql_check) or die("Can't Query");
                  $num_rows6=mysqli_num_rows($query6);

                  for ($eet=0; $eet < $num_rows6 ; $eet++) {
                    $result6=mysqli_fetch_array($query6);
                    $id = $result6['ac1_id'];
                    $name = $result6['ac2_name'];
                  }
                  $sql_check2 = "SELECT distinct  `muse_category_lv2`.`ac2_id` , `muse_category_lv2`.`ac2_name` FROM  `muse_category_lv2` WHERE `muse_category_lv2`.`ac2_id` = '$ac2_id '  ";
                  $query77=mysqli_query($link,$sql_check2) or die("Can't Query");
                  $num_rows55=mysqli_num_rows($query77);
                  for ($qi=0; $qi<$num_rows55; $qi++) {
                      $result525=mysqli_fetch_array($query77);
                      $objid = $result525['ac2_id'];
                      $objname = $result525['ac2_name'];
                  }
                  $sqlcat4 = "SELECT distinct  `muse_object`.`obj_cate2`
                  FROM  `muse_object` ";
                  $querycat3=mysqli_query($link,$sqlcat4) or die("Can't Query");
                  $num_rows_cat3=mysqli_num_rows($querycat3);

                  for ($cat3=0; $cat3<$num_rows_cat3; $cat3++) {
                    $cat3re = mysqli_fetch_array($querycat3);
                    $idobj2 = $cat3re['obj_cate2'];
                    $sqltest = "SELECT distinct  *
                    FROM  `muse_category_lv2`
                    WHERE ac2_id = '$idobj2' ";
                    $queryday=mysqli_query($link,$sqltest) or die("Can't Query");
                    $num_rowstest=mysqli_num_rows($queryday);
                    for ($catdata=0; $catdata<$num_rowstest; $catdata++) {
                      $cat2id = mysqli_fetch_array($queryday);
                      $ac2_id = $cat2id['ac2_id'];
                      $name2 = $cat2id['ac2_name'];}    
                    }
                    if ($idobj2 != 0  ) {
                      // echo "<li><a href='museshowcat.php?catid=$objc'>$objn</a></li>";
                        // echo "<li><a href='museshowcatsub2.php?ac3_id=$ac3_id&ac2_id=$ac2_id&ac1_id=$ac1_id'>$name</a></li>";
                      // echo "<li>$objtitle</li>";
                    } else {
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
                      FROM  `muse_object`";
                      $querycat3=mysqli_query($link,$sqlcat4aaa) or die("Can't Query");
                      $num_rows_cat3=mysqli_num_rows($querycat3);

                      for ($cat3=0; $cat3<$num_rows_cat3; $cat3++) {
                        $cat3re = mysqli_fetch_array($querycat3);
                        $idobj2 = $cat3re['obj_cate2'];
                      }
                    }
                } else {
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
            //$sql = "SELECT * FROM muse_pic where obj_refcode = '$refcode' and obj_id ='0' ORDER BY listorder ASC LIMIT $start , $p_size";
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
              $cover = $result['obj_cover'];
              $open = $result['pic_open'];
              // echo "line = $line  file = $filetype  <br>";

              if($num_rows == 0) {
                $objpic = "../../pic/thumb_architec/$nrefcode/blank.jpg";
              } else {
                $objpics = $result['thumb_name'];
                if  ($objpics == ""){
                  $objpic = "../../pic/big/blank.jpg";
                } else {

                }
                //$objpic = "../../pic/thumbmuse/$nrefcode/$objpics";
                if ($open == '0'){
                  $objpic = "../../pic/thumbmuse/$folder_refcode/$objpics";
                }
              }

              $line = $line+1;
              if($line <7) {
                // echo "line = $line  file = $filetype <br>";
                if(($filetype =='jpg') or ($filetype =='JPG'))  {
                  if ($open == '0'){
                    echo "<div class='col-xs-3 col-md-4'>";
                    echo "<a href='museshowdetail.php?picid=$picid&refcode=$refcode&ac3_id=$ac3_id&ac2_id=$ac2_id&ac1_id=$ac1_id'>
                      <img src='$objpic' class='img-thumbnail' style='margin:5px 0px 15px;' alt='' height='400' width='400'>
                      </a>";
                    echo "</div>";
                  }
                  else {
                    $objpic = "../../pic/thumbmuse/$folder_refcode/$objpics";
                    echo "<div class='col-xs-3 col-md-4'>";
                    echo "<a href='museshowdetail.php?picid=$picid&refcode=$refcode&ac3_id=$ac3_id&ac2_id=$ac2_id&ac1_id=$ac1_id'>
                        <img src='$objpic' class='img-thumbnail' style='margin:5px 0px 15px;' alt='' height='400' width='400'>
                        </a>";
                    echo "</div>";
                  }
                }
                else if ($filetype == 'mp4') {
                  //echo "pic/bigmuse/$refcode/$result3[pic_name]";
                  echo "<div class='col-xs-3 col-md-4'>";
                  echo "<video width='200'  controls>
                          <source src='../../pic/bigmuse/$refcode/$result[pic_name]' type='video/mp4'>
                          <object data='../../pic/bigmuse/$refcode/$result[pic_name]' width='200' >
                          </object>
                        </video>";
                  echo "<br>";
                  echo "</div>";
                }
                else if($filetype =='mp3') {
                  //echo "$result3[pic_name] <br>";
                  //echo "<a href ='player.php?picname=$result3[pic_name]'>$result3[pic_name]</a>";
                  echo "<div class='col-xs-3 col-md-4'>";
                  echo "<audio width='200' controls>
                          <source src='../../pic/bigmuse/$refcode/$result[pic_name]' type='audio/mpeg'>
                          <embed src='../../pic/bigmuse/$refcode/$result[pic_name]' width='200'>
                        </audio>";
                  echo "<br>";
                  echo "</div>";
                }else if($filetype =='pdf') {
                  // echo "bpu = $row[bpu_id] <br>";
                  echo "<div class='col-sm-4' align='center'>";
                  echo "<a target='_blank' href='../../pic/museum_upload/".$refcode."/".$row['bpu_file']."'>
                  <br>    <img src='images/pdf.png' width='100'> <br>".$row['bpu_file']." </a>
                  ";
                }
                else {

                }
              }
              else {
                $line = 1;
                if(($filetype =='jpg') or ($filetype =='JPG'))  {
                  echo "<div class='col-xs-3 col-md-4'>";
                  echo "<a href='museshowdetail.php?picid=$picid&refcode=$refcode'>
                      <img src='$objpic' class='img-thumbnail' style='margin:5px 0px 15px;' alt='' height='400' width='400'>
                      </a>";
                  echo "</div>";
                }
                else if ($filetype =='mp4') {
                  //echo "pic/bigmuse/$refcode/$result3[pic_name]";
                  echo "<div class='col-xs-3'>";
                  echo "<video width='200'  controls>
                          <source src='../../pic/bigmuse/$refcode/$result[pic_name]' type='video/mp4'>
                          <object data='../../pic/bigmuse/$refcode/$result[pic_name]' width='200' >
                          </object>
                        </video>";
                  echo "<br>";
                  echo "</div>";
                }
                else if($filetype =='mp3') {
                  //echo "$result3[pic_name] <br>";
                  //echo "<a href ='player.php?picname=$result3[pic_name]'>$result3[pic_name]</a>";
                  echo "<div class='col-xs-3'>";
                  echo "<audio width='200' controls>
                          <source src='../../pic/bigmuse/$refcode/$result[pic_name]' type='audio/mpeg'>
                          <embed src='../../pic/bigmuse/$refcode/$result[pic_name]' width='200'>
                        </audio>";
                        echo "<br>";
                  echo "</div>";
                }
                else {

                }
              }
            } // end for

            echo"</div>";
            //echo "<div class='row'>";
            echo "<div class='col-sm-12'>";
			      $ul_query = mysqli_query($link,"SELECT * FROM `muse_upload` INNER JOIN `muse_object` ON `muse_object`.`obj_id` =  `muse_upload`.`obj_id` WHERE `muse_object`.`obj_refcode` = '$refcode'");
			      //echo "<div class='row'>";
		        while($row = mysqli_fetch_assoc($ul_query)) {
			        $ext = pathinfo($row['bpu_file']);
              $filetype = explode(".", $row[bpu_file]);
              $filetype = $filetype[1];
              //echo "<div class='col-md-2 text-center'>";
              $type = "museum";

              if(($filetype =='mp3') or ($filetype =='MP3')) {
                echo "<div class='col-xs-3 col-md-4'>";
                echo "<audio width='250' controls>
                        <source src='../../pic/museum_upload/$refcode/$row[bpu_file]' type='audio/mpeg'>
                        <embed src='../../pic/museum_upload/$refcode/$row[bpu_file]' width='250'>
                      </audio>";
                echo "<br>";
                // echo "".$row['bpu_file']."";
                echo "</div>";
                // <!-- /.col-xs-3 -->
                //echo "<br>";
				      }
              else if(($filetype =='mp4') or ($filetype =='MP4')) {
                echo "<div class='col-xs-3 col-md-4'>";
                echo "<video width='250'  controls>
                        <source src='../../pic/museum_upload/$refcode/$row[bpu_file]' type='video/mp4'>
                        <object data='../../museum_upload/$refcode/$row[bpu_file]' width='250' >
         						    </object>
							        </video>";
                echo "<br>";
                echo "</div>";
				      }
              else {
			          echo "";
              }
		        } 

            echo "</div>";
            echo "<div class='row'>";
            echo "<div class='col-sm-12'>";

            // muse vr
            $sql3 = "SELECT * FROM `muse_vr` WHERE `muse_vr`.`obj_refcode` = '$refcode' ";
            $query3 = mysqli_query($link,$sql3) or die("Can't Query3");
            $num_rows3=mysqli_num_rows($query3);
            for ($i=0; $i<$num_rows3; $i++) {
		          $result3 = mysqli_fetch_array($query3);
              // $result4= mysqli_fetch_array($query4);
              $mydir = $result3['vr_dir'];
              $direction = $result3['vr_direction'];
              $objScan = scandir("../../pic/vr/$mydir");
              $numfile = 0;
      			  foreach ($objScan as $value) {
				        if($numfile <1) {
                  $vrshow1 = explode(".", $value);
                  if($vrshow1[1]=="jpg") {
                    $vrshow[$i] = $vrshow1[0];
                    $mergvr[$i] = $vrshow[$i].".jpg";
                    $file1 = $mergvr[$i];
                    $numfile=$numfile+1;
                  }
			 		        else if($vrshow1[1]=="JPG") {
                    $vrshow[$i] = $vrshow1[0];
                    $mergvr[$i] = $vrshow[$i].".JPG";
                    $file1 = $mergvr[$i];
                    $numfile=$numfile+1;
                  }
		  		      }
              }
              $file1 ="../../pic/vr/$mydir/$file1";
              if($file1 <> ''){
                echo "<div class='col-xs-3 col-md-4'>";
                echo "<a href='showvr.php?mydir=$mydir&direction=$direction'>
                <img src='images/icon_360.gif' class='img-thumbnail' style='padding: 20px 20px; background: url($file1); background-size: 120%; background-color:#ffffff; background-repeat:no-repeat; background-position: center;'></a>";
                echo "</div>";
              }
              else{
                echo " ";
              }
            }
            echo " </div>";
            echo " </div>";
          ?>
        </div>

        <div class="col-12">
          <!--  <div class="col-sm-12">        -->
          <?php
          echo "<div class='col-sm-12'> ";
          echo "<table width=90% border=0>";
          echo "<tr>";
          $sql9 = "SELECT * FROM `muse_pic` WHERE `muse_pic`.`obj_refcode` = '$refcode' ORDER BY listorder ";
          $query9=mysqli_query($link,$sql9) or die("Can't Query2");
          $num_rows9=mysqli_num_rows($query9);
          for ($i=0; $i<$num_rows9; $i++) {
              $result9=mysqli_fetch_array($query3);
              $filetype = explode(".", $result9['pic_name']);
              $filetype = $filetype[1];
              if($line < 3) {
				        echo "<td align='left'>";
				        if($filetype =='mp4') {
                  //echo "pic/bigmuse/$refcode/$result3[pic_name]";
                  echo "<video width='200'  controls>
                          <source src='../../pic/bigmuse/$refcode/$result9[pic_name]' type='video/mp4'>
                          <object data='../../pic/bigmuse/$refcode/$result9[pic_name]' width='200' >
                          </object>
                        </video>";
                  echo "<br>";
				        }
				        else if($filetype =='mp3') {
                  echo "<audio width='200' controls>
                          <source src='../../pic/bigmuse/$refcode/$result9[pic_name]' type='audio/mpeg'>
                          <embed src='../../pic/bigmuse/$refcode/$result9[pic_name]' width='200'>
                        </audio>";
                  echo "<br>";
				        }
		          	echo "</td>";
			          $line = $line+1;
			        }
			        else {
				        echo "<td align='center'>";
                if($filetype =='mp4') {
						      echo "<video width='200'  controls>
                          <source src='../../pic/bigmuse/$refcode/$result9[pic_name]' type='video/mp4'>
                          <object data='../../pic/bigmuse/$refcode/$result9[pic_name]' width='200' >
                          </object>
                        </video>";
                  echo "<br>";
				        }
				        else if($filetype =='mp3') {
                  echo "<audio width='200' controls>
                          <source src='../../pic/bigmuse/$refcode/$result9[pic_name]' type='audio/mpeg'>
                          <embed src='../../pic/bigmuse/$refcode/$result9[pic_name]' width='200'>
                        </audio>";
                  echo "<br>";
				        } else {

				        }

                echo "</td>";
                echo "</tr>";
                $line = 0;
              }
		      }
          echo "</table>";
          echo "</div>";

          echo "<div class='col-sm-12'>";
          echo "<div class='row'>";

          $ul_query = mysqli_query($link,"SELECT * FROM `archive_upload` where obj_id = '$obj_id'");
          while($row = mysqli_fetch_assoc($ul_query)) {
            $ext = pathinfo($row['bpu_file']);
            $bpu_id = $row['bpu_id'];
            $filetype = explode(".", $row[bpu_file]);
            $filetypedata = $filetype[1];
            //      echo "<div class='col-sm-4' align='center'>";
            $type = "archive";

            if($filetypedata =='pdf') {
              // echo "bpu = $row[bpu_id] <br>";
              echo "<div class='col-sm-4' align='center'>";
              echo "<a target='_blank' href='../../pic/archive_upload/".$refcode."/".$row['bpu_file']."'>
                      <br>
                      <img src='images/pdf.png' width='100'> <br>".$row['bpu_file']."
                    </a>
              ";
            }
  			    echo "</div><!-- /.row -->";
            echo "</div>";
          }       
          echo "</div>";
          echo "</div>";
          echo "<div class='col-sm-12'>";
          $sql5 = "SELECT * FROM `muse_object` WHERE obj_refcode = '$refcode' ";
          $query5 = mysqli_query($link,$sql5) or die("Can't Query5");
          $num_rows5=mysqli_num_rows($query5);
          for ($i=0; $i<$num_rows5; $i++) {
			      $result5=mysqli_fetch_array($query5);
		      	$title = $result5['obj_title'];
            $physicals = $result5['obj_physicals'];
            $extent = $result5['obj_extent']; // ขนาด

            $location_display = $result5['obj_location']; //สถานที่จัดเก็บต้นฉบับ
            $obj_ex = $result5['obj_existence']; //สถานที่จัดเก็บสำเนา
            $obj_cr = $result5['obj_creator']; //ชื่อเจ้าของ
            $obj_bi = $result5['obj_bio']; //ประวัติเจ้าของ
            $obj_his = $result5['obj_history']; //ประวัติวัตถุจัดแสดง
            $obj_ac = $result5['obj_acquis']; //แหล่งที่ได้มา/โอนย้าย
            $obj_da = $result5['obj_dateacc']; //ช่วงเวลาการสะสม

            //include data checked
            $cr_obj_location_display = $result5['obj_location_display']; //สถานที่จัดเก็บต้นฉบับ
            $ch_obj_existence = $result5['obj_existence_display']; //สถานที่จัดเก็บสำเนา
            $ch_obj_creator_display = $result5['obj_creator_display']; //่ขื่อเจ้าของ
            $ch_obj_bio = $result5['obj_bio_display']; //ประวัติเจ้าของ
            $ch_obj_history_display= $result5['obj_history_display']; //ประวัติวัตถุจัดแสดง
            $ch_obj_acquis_display = $result5['obj_acquis_display']; //แหล่งที่ได้มา/โอนย้าย
            $ch_obj_dateacc_display = $result5['obj_dateacc_display']; //ชวงเวลาสะสม
          }
          echo "<div class='col-sm-8'>";
          echo "<p><h3 class='text-info'>$title</h3></p>";
          echo "<p>$physicals</p>";
          echo "<p><h3 class='text-info'>ขนาด</h3></p>" ;
          echo "<p>$extent</p>";

          if ($cr_obj_location_display == 1 && $location_display != "") {
            echo "<p><h3 class='text-info'>สถานที่จัดเก็บต้นฉบับ</h3></p>" ;
            echo "<p>$location_display</p>";
          }
          else if ($ch_obj_existence == 1 && $obj_ex != "") {
            echo "<p><h3 class='text-info'>สถานที่จัดเก็บสำเนา</h3></p>" ;
            echo "<p>$obj_ex</p>";
          }
          else if ($ch_obj_creator_display == 1 && $obj_cr != "") {
            echo "<p><h3 class='text-info'>ชื่อเจ้าของ</h3></p>" ;
            echo "<p>$obj_cr</p>";
          }
          else if ($ch_obj_bio == 1 && $obj_bi != "") {
            echo "<p><h3 class='text-info'>ประวัติเจ้าของ</h3></p>" ;
            echo "<p>$obj_bi</p>";
          }
          else if ($ch_obj_history_display == 1 && $obj_his != "") {
            echo "<p><h3 class='text-info'>ประวัติวัตถุจัดแสดง</h3></p>" ;
            echo "<p>$obj_his</p>";
          }
          else if ($ch_obj_acquis_display == 1 &&  $obj_ac != "") {
            echo "<p><h3 class='text-info'>แหล่งที่ได้มา/โอนย้าย</h3></p>" ;
            echo "<p>$obj_ac</p>";
          }
          else if ($ch_obj_dateacc_display == 1 && $obj_da != "") {
            echo "<p><h3 class='text-info'>ช่วงเวลาการสะสม</h3></p>" ;
            echo "<p>$obj_da</p>";
          }else {

          }
          echo " </div>";
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

  <!-- Style Switcher -->


  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>
