
<?php

   $refcode = $_REQUEST['refcode'];
   $objectid = $_REQUEST['objectid'];


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
<title></title>
    <!-- Basic -->
  <title>พิพิธภัณฑ์ไทลื้อ ศูนย์การเรียนรู้บ้านใบบุญ</title>

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
      </div>

      <ul class="wpb-mobile-menu">
      <?php include "menu_mobile.php"; ?>
      </ul>
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
              <li><a href="museshowcatall.php">วัตถุจัดแสดง</a></li>

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
//                       /thailue/site/theme/museshowcat.php?catid=137
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



<!-- End Page Banner -->

    <!-- Start Content -->
<div id="content">
<div class="container">
<div class='row'>
<?php
   include('connect.php');
   //mysqli_query($conn, "SET NAMES utf8");
	//$sql = "SELECT * FROM customer";
          $sql = "select * FROM archive_object,archive_category where archive_object.obj_category = archive_category.cat1_id and archive_object.obj_access = '1'";
//    $sql = "SELECT DISTINCT * FROM muse_object,muse_category,muse_pic WHERE muse_object.obj_category = muse_category.cat1_id and muse_pic.obj_refcode = muse_object.obj_refcode  and muse_object.obj_access = '1' and muse_pic.obj_cover = '1'";

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


    	$sql .= " order by archive_object.obj_id DESC LIMIT $row_start ,$row_end ";
	$query = mysqli_query($link,$sql);

?>


<?php
//$line == 0;
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
    $line = 1;
    $refid = $result['obj_id'];
    $refcode = $result['obj_refcode'];
    $nrefcode = preg_replace('/[^a-z0-9\_\- ]/i', '', $refcode);
   // $objpics = $result['thumb_name'];
   // $objpic = "../../pic/thumbmuse/$nrefcode/$objpics";
    // $objpic = "../../pic/thumbmuse/$nrefcode/$objpics";
    $sql4 = "select * from archive_pic where obj_refcode = '$refcode'  limit 0,1 ";
      $query4 = mysqli_query($link,$sql4);
      $result4= mysqli_fetch_array($query4);
          if($result4['thumb_name']  == '')
         {
         $objpic = "../../pic/thumb/$nrefcode/blank.jpg";
         }
         else
         {
         //echo "$result2[pic_name] <br>";
         $objpics = $result4['thumb_name'];
         $objpic = "../../pic/thumb/$nrefcode/$objpics";

         }

    //
        $sql2 = "select * from archive_vr where obj_refcode = '$refcode'  limit 0,1 ";
     $query2 = mysqli_query($link,$sql2);
     $result2=mysqli_fetch_array($query2);
         $picvr = 0;
         if($result2['vr_id']!= '')
         {
             $picvr = 1;
         }

     $sql3 = "select * from archive_upload where obj_id = '$refid'  limit 0,1 ";
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
         if($line < 5 and $line > 1)
         {
 ?>

    <div class='col-sm-3'>
    <h5 class='text-info'><?php echo $result["obj_title"];?></h5>
    <a href='showcat2.php?refcode=<?php echo $result["obj_refcode"];?>'><img src='<?php echo $objpic;?>' class='img-thumbnail' style='margin:15px 0px 15px;' alt=''> </a> <br/>
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
    else if($line == 1)
         {
 ?>

    <div class='col-sm-3'>
    <h5 class='text-info'><?php echo $result["obj_title"];?></h5>
    <a href='showcat2.php?refcode=<?php echo $result["obj_refcode"];?>'><img src='<?php echo $objpic;?>' class='img-thumbnail' style='margin:15px 0px 15px;' alt=''> </a> <br/>
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
}
?>
    </div>
<!--</table>-->
<br>

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
