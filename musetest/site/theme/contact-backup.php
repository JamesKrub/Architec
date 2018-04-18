<?php

	//กำหนดค่าการเชื่อมต่อ DB
	$host = "emuseum_db";
	$username = "root";
	$dbname = "culture_thailue";
	//$password2 = "";
	$password = "heavygeese24";

	date_default_timezone_set('Asia/Bangkok');

	//$link = mysqli_connect($host,$username,$password2,$dbname);
?>
<?php
$refcode = $_REQUEST['refcode'];
$objectid = $_REQUEST['objectid'];




$ac3_id = $_REQUEST['ac3_id'];




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
   $menu7="class=active";
}
?>
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>พิพิธภัณฑ์ไทลื้อ ศูนย์การเรียนรู้บ้านใบบุญ</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="Digital Archive | จดหมายเหตุดิจิตัล">
  <meta name="author" content="">

<?php include "head.php" ; ?>
     <!-- Margo JS  -->
		 <link rel="stylesheet" type="text/css" href="csscontact.css">
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
  <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
  <script type="text/javascript" src="js/jquery.slicknav.js"></script>

</head>
<body>

  <!-- Full Body Container -->
  <div id="container">

    <!-- Start Header Section -->
    <div class="hidden-header"></div>
    <header class="clearfix">

      <!-- Start Top Bar -->
       <?php include "topbar.php" ; ?>
      <!-- .top-bar -->
      <!-- End Top Bar -->


      <!-- Start  Logo & Naviagtion  -->
      <div class="navbar navbar-default navbar-top">
        <?php include "menu.php" ; ?>

        </div>

				<ul class="wpb-mobile-menu">
				<?php include "menu_mobile.php"; ?>
				</ul>
</header>
    <!-- End Header -->


    <!-- Start Page Banner -->
    <div class="page-banner" style="padding:40px 0; background: url(images/tour-bg.png) center #f9f9f9;">
       <div class="container">
        <div class="row">

          <div class="col-md-12">
            <ul class="breadcrumbs">
              <li><a href="index.php">หน้าแรก</a></li>
               <li>ติดต่อเรา</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->
<div class="container">
         <br>
     <br>


 </div>
 </div>
 <div id="content">
     <div class="container">
    <div class="row">
      <?php //include "map.php" ; ?>
      <div id="map"></div>



			<?php $sqlmap = "SELECT bg_lat , bg_lon ,bg_name FROM muse_bg";
					 $querymap=mysqli_query($link,$sqlmap) or die("Can't Query");
					 $num_rowsmap=mysqli_num_rows($querymap);
				 for ($map=0; $map<$num_rowsmap; $map++) {
						 $resultmap=mysqli_fetch_array($querymap);

						 $bg_lat = $resultmap['bg_lat'];
						 $bg_lon = $resultmap['bg_lon'];
						 $bg_name = $resultmap['bg_name'];

						 } ?>
    <script>
      //var map;
      function initMap() {
             var map = new google.maps.Map(document.getElementById('map'), {
               zoom: 14,
               center: {lat: <?php echo $bg_lat ?>, lng: <?php echo $bg_lon ?>}
             });

             setMarkers(map);
           }
           var beaches = [
       ['<?php echo $bg_name ?>', <?php echo $bg_lat ?>, <?php echo $bg_lon ?>, 4],

     ];
     function setMarkers(map) {
       // Adds markers to the map.

       // Marker sizes are expressed as a Size of X,Y where the origin of the image
       // (0,0) is located in the top left of the image.

       // Origins, anchor positions and coordinates of the marker increase in the X
       // direction to the right and in the Y direction down.
       var image = {
         url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
         // This marker is 20 pixels wide by 32 pixels high.
         size: new google.maps.Size(20, 32),
         // The origin for this image is (0, 0).
         origin: new google.maps.Point(0, 0),
         // The anchor for this image is the base of the flagpole at (0, 32).
         anchor: new google.maps.Point(0, 32)
       };
       // Shapes define the clickable region of the icon. The type defines an HTML
       // <area> element 'poly' which traces out a polygon as a series of X,Y points.
       // The final coordinate closes the poly by connecting to the first coordinate.
       var shape = {
         coords: [1, 1, 1, 20, 18, 20, 18, 1],
         type: 'poly'
       };
       for (var i = 0; i < beaches.length; i++) {
         var beach = beaches[i];
         var marker = new google.maps.Marker({
           position: {lat: beach[1], lng: beach[2]},
           map: map,
           icon: image,
           shape: shape,
           title: beach[0],
           zIndex: beach[3]
         });
       }
     }
//        map = new google.maps.Map(document.getElementById('map'), {
//          center: {lat: 18.7826448, lng: 98.992469},
//          zoom: 11
//        });
//      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlPvIGpOeZxEjbdZOvDngpMzRCcxQ-dY0&callback=initMap"
    async defer></script>
 </div>
 </div>
      <div class="container">

        <div class="row">

<br/><br/>

            <!-- Classic Heading -->


            <!-- Start Contact Form -->
                <div class="col-md-12">



            <!-- Classic Heading -->
            <h4 class="classic-title"><span>ติดต่อ</span></h4>

            <!-- Some Info -->
<!--            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>-->

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:10px;"></div>
              <ul class="icons-list">

              <li><i class="fa fa-globe">  </i> <strong>Address:</strong>
       <?php
    $conn = new mysqli($host,$username,$password,$dbname);
    mysqli_query($conn, "SET NAMES utf8");
	mysqli_commit($conn);
                                   $sql = "select * from muse_bg where bg_id = '1' ";
                                   $query = $conn->query($sql);
	//$query->num_rows;
	                                $result = $query->fetch_assoc();



                    if($result)
                    {


                        echo $result["bg_number"]." ";
                        echo $result["bg_ampher"]." ";
                        echo $result["bg_postcode"]." ";
                }
									?>
            <!-- Info - Icons List -->
<!--
            <ul class="icons-list">

              <li><i class="fa fa-globe">  </i> <strong>Address:</strong> <? //echo $result["bg_number"];?> <? //echo "$bg_number"." "."$bg_ampher"." "."$bg_postcode"; ?>
-->

<?php
$sqlemail = "SELECT bg_email
						FROM muse_bg";
						$query=mysqli_query($link,$sqlemail) or die("Can't Query");
						$num_rows=mysqli_num_rows($query);


						for ($i=0; $i < $num_rows; $i++) {
						$result=mysqli_fetch_array($query);
						$email = $result['bg_email'];

 ?>

                </li>
              <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> <?php echo $email ?></li>
              <li><i class="fa fa-mobile"></i> <strong>Phone:</strong>
<?php

							}

	 ?>
                       <?php
    $conn = new mysqli($host,$username,$password,$dbname);
    mysqli_query($conn, "SET NAMES utf8");
	mysqli_commit($conn);
                                   $sql2 = "select * from muse_bg where bg_id = '1' ";
                                   $query2 = $conn->query($sql2);
	//$query->num_rows;
	                                $result2 = $query2->fetch_assoc();



                    if($result2)
                    {
                  echo $result2["bg_tel"]." ";

                }
									?>


                  <? //echo "$result[bg_tel]"; ?></li>
            </ul>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:15px;"></div>

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>เวลาทำการ</span></h4>

            <!-- Info - List -->
            <ul class="list-unstyled">
              <li>                       <?php
    $conn = new mysqli($host,$username,$password,$dbname);
    mysqli_query($conn, "SET NAMES utf8");
	mysqli_commit($conn);
                                   $sql3 = "select * from muse_bg where bg_id = '1' ";
                                   $query3 = $conn->query($sql3);
	//$query->num_rows;
	                                $result3 = $query3->fetch_assoc();



                    if($result3)
                    {
                  echo $result3["bg_entry"]." ";

                }
									?> </li>
<!--
              <li><strong>Saturday</strong> - 9am to 2pm</li>
              <li><strong>Sunday</strong> - Closed</li>
-->
            </ul>

          </div>

        </div>

      </div>
    </div>
 <?php include "footer.php" ; ?>
<!--
    <footer>
      <div class="container">
        <div class="row footer-widgets">

          <div class="col-md-12">

          </div>
-->
          <!-- .col-md-3 -->
          <!-- End Contact Widget -->

<!--

        </div>
-->
        <!-- .row -->

        <!-- Start Copyright -->
<!--
        <div class="copyright-section">
          <div class="row">
            <div class="col-md-12">
               <p>พิพิธภัณฑ์อิเล็กทรอนิกส์พัฒนาโดย ศูนย์เทคโนโลยีอิเล็กทรอนิกส์และคอมพิวเตอร์แห่งชาติ</p>
            </div>

          </div>
        </div>
-->
        <!-- End Copyright -->

<!--
      </div>
    </footer>
-->
<div id="loader">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
</div>

 </body>
  <!-- Style Switcher -->


     <script type="text/javascript" src="js/script.js"></script>
</html>
