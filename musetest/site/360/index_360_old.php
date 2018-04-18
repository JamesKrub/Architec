   <?php
	//require('connect.php');
	//ini_set('display_errors', 1);
	//error_reporting(~0);

	//กำหนดค่าการเชื่อมต่อ DB
	$host = "emuseum_db";
	$username = "root";
	$dbname = "culture_thailue";
	//$password2 = "";
	$password = "heavygeese24";

	date_default_timezone_set('Asia/Bangkok');

	//$link = mysqli_connect($host,$username,$password2,$dbname);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>360&deg; Image Gallery</title>
     <meta name="description" content="360&deg; Image Gallery - A-Frame">
    <script src="js/aframe.min.js"></script>
    <script src="js/aframe-animation-component@3.0.1"></script>
    <script src="js/aframe-event-set-component@3.0.1"></script>
    <script src="js/aframe-layout-component@3.0.1"></script>
    <script src="js/aframe-template-component@3.0.1"></script>
    <script src="components/set-image.js"></script>
    <script src="components/update-raycaster.js"></script>
    <!-- DELETE SECTION BELOW if you forked code. This is analytics code to track popularity of content for a
         meetup event tracking. -->

    <!-- End Analytics Code. Delete section above if you plan to deploy your own application. The analytics was to help with planning of a meetup -->
  </head>
  <body>
    <a-scene>
      <a-assets>
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
        //echo $result["bg_name"]."<br>";
		// echo $result["bg_pano"]."<br>";
    $pano = $result["bg_pano"];
    // echo $pano;
    echo "<img id='kieran' src='../../pic/thumb/thumb-360-$pano'>";
	}
	$conn->close();

	//$link = mysqli_connect($host,$username,$password2,$dbname);
?>




        <!-- Image link template to be reused. -->
        <script id="link" type="text/nunjucks">
          <a-plane class="link" height="1" width="1"
            material="shader: flat; src: {{ thumb }}"
            event-set__1="_event: mousedown; scale: 1 1 1"
            event-set__2="_event: mouseup; scale: 1.2 1.2 1"
            event-set__3="_event: mouseenter; scale: 1.2 1.2 1"
            event-set__4="_event: mouseleave; scale: 1 1 1"
            set-image="on: click; target: #image-360; src: {{ src }}"
            sound="on: click; src: #click-sound"
            update-raycaster="#cursor"></a-plane>
        </script>
      </a-assets>

      <!-- 360-degree image. -->
      <a-sky id="image-360" radius="10" src="#kieran"></a-sky>

      <!-- Image links. -->
      <a-entity id="links" layout="type: line; margin: 1.5" position="0 -1 -4">
        <!--<a-entity template="src: #link" data-src="#christian" data-thumb="#christian-thumb"></a-entity>-->
       <!-- <a-entity template="src: #link" data-src="#kieran" data-thumb="#kieran-thumb"></a-entity>
        <a-entity template="src: #link" data-src="#eddie" data-thumb="#eddie-thumb"></a-entity>
        -->
      </a-entity>




      <!-- Camera + cursor. -->
      <a-entity camera look-controls>
        <a-cursor id="cursor"
          animation__click="property: scale; startEvents: click; from: 0.1 0.1 0.1; to: 1 1 1; dur: 150"
          animation__fusing="property: fusing; startEvents: fusing; from: 1 1 1; to: 0.1 0.1 0.1; dur: 1500"
          event-set__1="_event: mouseenter; color: springgreen"
          event-set__2="_event: mouseleave; color: black"
          raycaster="objects: .link"></a-cursor>
      </a-entity>
    </a-scene>
  </body>
</html>
