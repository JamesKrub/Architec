
<?php


$ac2_id = $_GET["ac2_id"];
// echo $ac2_id;


   $refcode = $_REQUEST['refcode'];
   $objectid = $_REQUEST['objectid'];


   $refcode = $_REQUEST['refcode'];
   $ac1_id =  $_REQUEST['ac1_id'];
   $ac3_id = $_REQUEST['ac3_id'];
   $ac2_id = $_REQUEST['ac2_id'];
   $catid  = $_REQUEST['catid'];

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
<?php include "connect.php" ; ?>    
  <?php
$sqlquer = "SELECT bg_name FROM `muse_bg`";
$querydata = mysqli_query($link , $sqlquer);
$row = mysqli_fetch_assoc($querydata);

	 ?>
  <title><?php echo $row[bg_name]; ?></title>

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
 <?php


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
<!--              <li><a href="index.php">หน้าแรก</a></li>-->

              <li>วัตถุจัดแสดง</li>

     

            </ul>
          </div>
        </div>
      </div>
    </div>



<!-- End Page Banner -->
<div id="content">
<div class="container">
  <div class="row">
      <div class="col-sm-8">
      </div>
                <div class="col-sm-4 text-right">
                    <form class="form-inline" method="get" name="searchform" id="searchform">
                        <div class="form-group">
<!--                            <label for="textsearch" >....</label>-->
                            <input type="text" name="obj_title" id="obj_title" class="form-control" placeholder="คำค้นหา" autocomplete="off">
                        </div>
                        <button type="button" class="btn btn-primary" id="btnSearch">
                            <i class="fa fa-search"></i>
                            ค้นหา
                        </button>
                    </form>
                </div>
</div>
</div>
 </div>
    <!-- Start Content -->
<div id="content">

<div class="container">
<? if($_GET["obj_title"] != ""){

echo $_GET['obj_title'];
    ?>
<div class='row' id="list-data">
<?php
   include('connect.php');
    // $refcode = $_REQUEST['refcode'];
   //mysqli_query($conn, "SET NAMES utf8");
	//$sql = "SELECT * FROM customer";
    $sql = "SELECT DISTINCT * FROM muse_object,muse_category where muse_object.obj_category = muse_category.cat1_id and muse_object.obj_access = '1' ";
    // $sql = "SELECT DISTINCT * FROM muse_object,muse_category,muse_pic WHERE muse_object.obj_category = muse_category.cat1_id and muse_pic.obj_refcode = muse_object.obj_refcode  and muse_object.obj_access = '1' and muse_pic.obj_cover = '1'  ";
//       $sql = "SELECT DISTINCT * FROM muse_object,muse_category,muse_pic WHERE muse_object.obj_category = muse_category.cat1_id and muse_pic.obj_refcode = muse_object.obj_refcode and muse_object.obj_access = '1' and muse_pic.obj_cover = '1'   ";
$query=mysqli_query($link,$sql) or die("Can't Query");
$num_rows=mysqli_num_rows($query);
$per_page = 24;   // Per Page
$page  = 1;

if(isset($_GET["Page"]))
{
  $page = $_GET["Page"];
}

$prev_page = $page-1;
$next_page = $page+1;

$row_start = (($per_page*$page)-$per_page);
if($num_rows<=$per_page)
{
  $num_pages =1;
}
else if(($num_rows % $per_page)==0)
{
  $num_pages =($num_rows/$per_page) ;
}
else
{
  $num_pages =($num_rows/$per_page)+1;
  $num_pages = (int)$num_pages;
}
$row_end = $per_page * $page;
if($row_end > $num_rows)
{
  $row_end = $num_rows;
}


	$sql .= " order by muse_object.obj_id DESC LIMIT $row_start ,$row_end ";
	$query = mysqli_query($link,$sql);

?>

<div class="col-md-12">
<div class="row">
<?php
//$line == 0;
$i = 1;
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
    $line = 1;
    $refid = $result['obj_id'];
    $pic_id = $result['pic_id'];
    $refcode = $result['obj_refcode'];
    $coverid = $result['obj_cover'];
    // echo "$coverid";
//    $nrefcode = preg_replace('/[^a-z0-9\_\- ]/i', '', $refcode);
   // $objpics = $result['thumb_name'];
   // $objpic = "../../pic/thumbmuse/$nrefcode/$objpics";
    // $objpic = "../../pic/thumbmuse/$nrefcode/$objpics";
      $sql4 = "SELECT * from muse_pic where obj_refcode = '$refcode' and muse_pic.obj_cover = '1' ORDER BY  obj_cover DESC limit 0,1 ";
      $query4 = mysqli_query($link,$sql4);
      $result4= mysqli_fetch_array($query4);
      $piccheck =$result4['pic_id'];
      $obj_coverdata = $result4['obj_cover'];
      $obj_refcode = $result4['obj_refcode'];
      $folder_refcode = $result4['folder_refcode'];



               $sql6 = "SELECT count(obj_cover) from muse_pic where  obj_refcode = '$refcode' AND  obj_cover = '1' ";
               $query6 = mysqli_query($link,$sql6);
               $result6= mysqli_fetch_array($query6);
               $objcover = $result6[obj_cover];

               $sql7 = "SELECT count(obj_cover) from muse_pic where  obj_refcode = '$refcode' AND  obj_cover = '$objcover' ";
               $query7 = mysqli_query($link,$sql7);
               $num_ro = mysqli_num_rows($query7);
               $result7= mysqli_fetch_array($query7);
               $objcoverdata = $result6[obj_cover];

   if($num_ro > 0 )
   {

    // echo " objcover = $objcover $result6[obj_cover] <br>";
  $objpics = $result4['thumb_name'];
  $objpic = "../../pic/thumbmuse/$folder_refcode/$objpics";

    if ($result4['thumb_name']  == ''  ) {
$objpic = "../../pic/thumbmuse/blank.jpg";
    }

    if ($result4['pic_open']  == 0  ) {
$objpic = "../../pic/thumbmuse/blank.jpg";
    }

   }
   else{
  $objpic = "../../pic/thumbmuse/blank.jpg";



   }

        //
        //   if($result4['thumb_name']  == '')
        //  {
        //  $objpic = "../../pic/thumbmuse/blank.jpg";
        //  }
        //  else
        //  {
        // //  echo "$result4[pic_name] <br>";
        //  $objpics = $result4['thumb_name'];
        //  $objpic = "../../pic/thumbmuse/$nrefcode/$objpics";
        //
        //  }




     $sql2 = "select * from muse_vr where obj_refcode = '$refcode'  limit 0,1 ";
     $query2 = mysqli_query($link,$sql2);
     $result2=mysqli_fetch_array($query2);
         $picvr = 0;
         if($result2['vr_id']!= '')
         {
             $picvr = 1;
         }

     $sql3 = "select * from muse_upload where obj_id = '$refid'  limit 0,1 ";
     $query3 = mysqli_query($link,$sql3);
//         $num_rows4=mysqli_num_rows($query4);
         $result3=mysqli_fetch_array($query3);
         $bpu = 0;
         if($result3['bpu_id']!= '')
         {
             $bpu = 1;
         }


  $line = $line + 1;
 // echo "$line <br>";
 //echo "<div class='row'>";
         if($line < 4 and $line > 1)
         {
   //echo "<div class='row'>";
 ?>
<?php $ref = $result[obj_refcode]; ?>

    <div class='col-sm-4'>
    <h5 class='text-info'><?php echo $result["obj_title"];?></h5>
        <!-- <h5 class='text-info'><?php echo $result["obj_category"];?></h5> -->
<?php $catdata = $result["obj_category"]; ?>
<?php
$sqlsub2 = "SELECT distinct `muse_category`.`cat1_id`
FROM muse_category
WHERE `muse_category`.`cat1_id` = '$catdata' ";

$querysub1 = mysqli_query($link,$sqlsub2) or die("Can't Query");
$num_row2 = mysqli_num_rows($querysub1);

for ($test=0; $test < $num_row2 ; $test++) {
  $r_sub = mysqli_fetch_array($querysub1);
  $cat1_id = $r_sub['cat1_id'];

}
 ?>















<?php echo "<a href='muse_show_cat1.php?refcode=$ref&catid=$cat1_id'><img src='$objpic' class='img-thumbnail' style='margin:15px 0px 15px;' alt=''> </a> <br/>" ?>
 <?php    if(($picvr == 1) and ($bpu == 0))
         {
?>
    <img src='images/icon_info.png'> <img src='images/icon_camera.png'><img src='images/icon_360-1.gif'><br/>
 <?php        }

         if(($bpu == 1) and ($picvr == 0))
         {
?>
     <img src='images/icon_info.png'> <img src='images/icon_camera.png'><img src='images/Music-Music-icon.png'><br/>
 <?php        }
         if(($bpu == 1) and ($picvr == 1))
         {
?>
       <img src='images/icon_info.png'> <img src='images/icon_camera.png'><img src='images/icon_360-1.gif'>
         <img src='images/Music-Music-icon.png'><br/>
 <?php
         }
         if(($bpu == 0) and ($picvr == 0))
         {
?>
     <img src='images/icon_info.png'> <img src='images/icon_camera.png'><br/>

    <p>
    <?php }
             echo $result["obj_physicals"];?></p> <br/>

    </div>


<?php
//echo "</div>";
         }
// echo "</div>";
    else if($line == 1)
         {
 ?>


    <div class='col-sm-3'>
    <h5 class='text-info'><?php echo $result["obj_title"];?></h5>



      <a href='muse_show_cat1.php?refcode=<?php echo $result["obj_refcode"];?>'><img src='<?php echo $objpic;?>' class='img-thumbnail' style='margin:15px 0px 15px;' alt=''> </a> <br/>
 <?php    if(($picvr == 1) and ($bpu == 0))
         {
?>
    <img src='images/icon_info.png'> <img src='images/icon_camera.png'><img src='images/icon_360-1.gif'><br/>
 <?php        }

         if(($bpu == 1) and ($picvr == 0))
         {
?>
     <img src='images/icon_info.png'> <img src='images/icon_camera.png'><img src='images/Music-Music-icon.png'><br/>
 <?php        }
         if(($bpu == 1) and ($picvr == 1))
         {
?>
       <img src='images/icon_info.png'> <img src='images/icon_camera.png'><img src='images/icon_360-1.gif'>
         <img src='images/Music-Music-icon.png'><br/>
 <?php
         }
         if(($bpu == 0) and ($picvr == 0))
         {
?>
     <img src='images/icon_info.png'> <img src='images/icon_camera.png'><br/>

    <p>
    <?php }
        echo $result["obj_physicals"];?></p> <br/>
    </div>


<?php
        }
    ////
    if($i % 3 === 0) echo "</div><div class='row'>"; // close and open a div with class row

     $i++;
}
?>

 </div>
</div>
<!--</table>-->
<? } ?>

<br>

    <script type="text/javascript">
            $(function () {
                $("#btnSearch").click(function () {
                    $.ajax({
                        url: "search.php",
                        type: "post",
                        data: {obj_title: $("#obj_title").val()},
                        beforeSend: function () {
                            $(".loading").show();
                        },
                        complete: function () {
                            $(".loading").hide();
                        },
                        success: function (data) {
                            $("#list-data").html(data);
                        }
                    });
                });
                $("#searchform").on("keyup keypress",function(e){
                   var code = e.keycode || e.which;
                   if(code==13){
                       $("#btnSearch").click();
                       return false;
                   }
                });
            });
        </script>



<div id="pagination">
<!--     <span class="all-pages">Total <?php echo $num_rows;?> Record </span>-->
<?php
if($prev_page)
{
	echo " <a class='next-page' href='$_SERVER[SCRIPT_NAME]?Page=$prev_page'> Back </a> ";
}

for($i=1; $i<=$num_pages; $i++){
	if($i != $page)
	{
		echo "<a class='page-num' href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> ";
	}
	else
	{
		echo "<span class='current page-num'> <b> $i </b></span>";
	}
}
if($page!=$num_pages)
{
	echo " <a class='next-page' href ='$_SERVER[SCRIPT_NAME]?Page=$next_page'>Next </a> ";
}
$conn = null;
?>
     </div>
    </div>
      </div>
<!--</div>        -->
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
<!--
    <script type="text/javascript">
            $(function () {
                $("#btnSearch").click(function () {
                    $.ajax({
                        url: "search.php",
                        type: "post",
                        data: {obj_title: $("#obj_title").val()},
                        beforeSend: function () {
                            $(".loading").show();
                        },
                        complete: function () {
                            $(".loading").hide();
                        },
                        success: function (data) {
                            $("#list-data").html(data);
                        }
                    });
                });
                $("#searchform").on("keyup keypress",function(e){
                   var code = e.keycode || e.which;
                   if(code==13){
                       $("#btnSearch").click();
                       return false;
                   }
                });
            });
        </script>
-->
</body>

</html>
