<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

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
  <title>Digital Archive | จดหมายเหตุดิจิตัล</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="Digital Archive | จดหมายเหตุดิจิตัล">
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
  <script src="http://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
  <script type="text/javascript" src="js/jquery.slicknav.js"></script>
   
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
</header>      
    <!-- End Header -->


    <!-- Start Page Banner -->
    <div class="page-banner" style="padding:40px 0; background: url(images/coming-soon-bg.png) center #f9f9f9;">
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
        
    <div id="main-slide" class="carousel slide" data-ride="carousel">


                    
    <div class="row">
<!--<----/////---->-->
  <?php
                
               // $bgid=$_REQUEST['catid'];
                
//                                    $sql = "select * from muse_bg where bg_id = '1' ";
//									$query=mysql_query($sql) or die("Can't Query");
//									$num_rows=mysql_num_rows($query);
//									for ($i=0; $i<$num_rows; $i++) {
//										$result=mysql_fetch_array($query);
//                                        $lat = $result['bg_lat'];
//                                        $long = $result['bg_lon'];   
//                                        $bgname = $result['bg_name']; 
//												//echo "<p>$result[bg_desc]</p>";
//                                    }
			$conn = new mysqli($host,$username,$password,$dbname);
    mysqli_query($conn, "SET NAMES utf8");
	mysqli_commit($conn);


	$sql2 = "select * from muse_bg where bg_id = '1' ";

	$query = $conn->query($sql2);
	//$query->num_rows;
	$result2 = $query->fetch_assoc();
	if($result2)
	{
		//echo $result["bg_desc"]."<br>";
		//echo $result2["bg_name"];
    ?>    
        <div id="map" data-position-latitude="<? echo $result2['bg_lat']; ?>" 
            data-position-longitude="<? echo $result2['bg_lon']; ?>"></div>
	<?
    }
	$conn->close();
						
				?>  
    <!-- Start Map -->
<!--    <div id="map" data-position-latitude="<? echo "$lat"; ?>" data-position-longitude="<? echo "$long"; ?>"></div>-->
    <script>
      (function($) {
        $.fn.CustomMap = function(options) {

          var posLatitude = $('#map').data('position-latitude'),
            posLongitude = $('#map').data('position-longitude');

          var settings = $.extend({
            home: {
              latitude: posLatitude,
              longitude: posLongitude
            },
            text: '<div class="map-popup"><p><? echo $result2['bg_name']; ?></p></div>',
            icon_url: $('#map').data('marker-img'),
            zoom: 15
          }, options);

          var coords = new google.maps.LatLng(settings.home.latitude, settings.home.longitude);

          return this.each(function() {
            var element = $(this);

            var options = {
              zoom: settings.zoom,
              center: coords,
              mapTypeId: google.maps.MapTypeId.ROADMAP,
              mapTypeControl: false,
              scaleControl: false,
              streetViewControl: false,
              panControl: true,
              disableDefaultUI: true,
              zoomControlOptions: {
                style: google.maps.ZoomControlStyle.DEFAULT
              },
              overviewMapControl: true,
            };

            var map = new google.maps.Map(element[0], options);

            var icon = {
              url: settings.icon_url,
              origin: new google.maps.Point(0, 0)
            };

            var marker = new google.maps.Marker({
              position: coords,
              map: map,
              icon: icon,
              draggable: false
            });

            var info = new google.maps.InfoWindow({
              content: settings.text
            });

            google.maps.event.addListener(marker, 'click', function() {
              info.open(map, marker);
            });

            var styles = [{
              "featureType": "landscape",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 65
              }, {
                "visibility": "on"
              }]
            }, {
              "featureType": "poi",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 51
              }, {
                "visibility": "simplified"
              }]
            }, {
              "featureType": "road.highway",
              "stylers": [{
                "saturation": -100
              }, {
                "visibility": "simplified"
              }]
            }, {
              "featureType": "road.arterial",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 30
              }, {
                "visibility": "on"
              }]
            }, {
              "featureType": "road.local",
              "stylers": [{
                "saturation": -100
              }, {
                "lightness": 40
              }, {
                "visibility": "on"
              }]
            }, {
              "featureType": "transit",
              "stylers": [{
                "saturation": -100
              }, {
                "visibility": "simplified"
              }]
            }, {
              "featureType": "administrative.province",
              "stylers": [{
                "visibility": "on"
              }]
            }, {
              "featureType": "water",
              "elementType": "labels",
              "stylers": [{
                "visibility": "on"
              }, {
                "lightness": -25
              }, {
                "saturation": -100
              }]
            }, {
              "featureType": "water",
              "elementType": "geometry",
              "stylers": [{
                "hue": "#ffff00"
              }, {
                "lightness": -25
              }, {
                "saturation": -97
              }]
            }];

            map.setOptions({
              styles: styles
            });
          });

        };
      }(jQuery));

      jQuery(document).ready(function() {
        jQuery('#map').CustomMap();
      });
    </script>
 
        
    <br>
     <br>          
     </div>  
<!--   ///      -->
     <div id="content">
      <div class="container">

        <div class="row">



            <!-- Classic Heading -->
         

            <!-- Start Contact Form -->
                <div class="col-md-12">



            <!-- Classic Heading -->
            <h4 class="classic-title"><span>ติดต่อ</span></h4>

            <!-- Some Info -->
<!--            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>-->

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:10px;"></div>
       <?php
//                                    $sql = "select * from muse_bg where bg_id = '1' ";
//									$query=mysql_query($sql) or die("Can't Query");
//									$num_rows=mysql_num_rows($query);
//									for ($i=0; $i<$num_rows; $i++) {
//										$result=mysql_fetch_array($query);
                                        //$bg_number = $result['bg_number'];
												
	//								}
									?>
            <!-- Info - Icons List -->
            <ul class="icons-list">
              <li><i class="fa fa-globe">  </i> <strong>Address:</strong> <? //echo "$result[bg_number]"." "."$result[bg_ampher]"." "."$result[bg_postcode]"; ?>  </li>
              <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> info@yourcompany.com</li>
              <li><i class="fa fa-mobile"></i> <strong>Phone:</strong> <? //echo "$result[bg_tel]"; ?></li>
            </ul>

            <!-- Divider -->
            <div class="hr1" style="margin-bottom:15px;"></div>

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>เวลาทำการ</span></h4>

            <!-- Info - List -->
            <ul class="list-unstyled">
              <li><? //echo "$result[bg_entry]"; ?> </li>
<!--
              <li><strong>Saturday</strong> - 9am to 2pm</li>
              <li><strong>Sunday</strong> - Closed</li>
-->
            </ul>

          </div>

        </div>

      </div>
    </div>       
</div>
 </div>  
 </div>   
 <?php //include "footer.php" ; ?>  
    <footer>
      <div class="container">
        <div class="row footer-widgets">

          <div class="col-md-12">

          </div>
          <!-- .col-md-3 -->
          <!-- End Contact Widget -->


        </div>
        <!-- .row -->

        <!-- Start Copyright -->
        <div class="copyright-section">
          <div class="row">
            <div class="col-md-12">
               <p>พิพิธภัณฑ์อิเล็กทรอนิกส์พัฒนาโดย ศูนย์เทคโนโลยีอิเล็กทรอนิกส์และคอมพิวเตอร์แห่งชาติ</p>
            </div>

          </div>
        </div>
        <!-- End Copyright -->

      </div>
    </footer>    
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
       
               