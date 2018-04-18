

<!DOCTYPE html>
<html lang='en' xml:lang='en' xmlns='http://www.w3.org/1999/xhtml'>
  <head>
    <meta content='text/html;charset=UTF-8' http-equiv='content-type'>
    <title></title>
    <script src="vr/vr/showvr/javascripts/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script src="vr/vr/showvr/javascripts/jquery-ui-1.8.4.all.min.js" type="text/javascript"></script>
    <script src="vr/vr/src/jquery.spritespin.js" type="text/javascript"></script>
    <link href="vr/vr/showvr/stylesheets/jquery-ui-1.8.4.all.css" media="screen, projection" rel="stylesheet" type="text/css" />
   <style type="text/css">
      .preload {
        background : url('vr/showvr/stylesheets/images/ajax-loader.gif') no-repeat 50% 50%;
      }
    </style>
    <!--<img src ='../../admin/object/pic/vr/H0009//H0009_551.jpg'> -->
    <?php
 $i=0;

$mydir=$_REQUEST['mydir'];
$direction=$_REQUEST['direction'];
//$mydir='H0009';
//$direction = 'R';
//echo "$mydir: $direction <br>";

$mydir2= "../admin/object/pic/vr/$mydir/";
//echo "$mydir2  <br>";

   $objScan = scandir("../admin/object/pic/vr/$mydir");

      foreach ($objScan as $value) {
        // echo "folder : $value<br>";

		 $vrpic1 = explode(".", $value);
		// echo"$vrpic[0]";
		 if($vrpic1[1]=="jpg")
			 {
		 	 $vrpic[$i] = $vrpic1[0];
			 //echo "$vrpic[$i]<br>";
			 $filevr[$i] = $vrpic[$i].".jpg";
			//echo "$filevr[$i] <br>";
			 $i=$i+1;
			 }
	     if($vrpic1[1]=="JPG")
			 {
		 	 $vrpic[$i] = $vrpic1[0];
			 //echo "$vrpic[$i]<br>";
			 $filevr[$i] = $vrpic[$i].".JPG";
			//echo "$filevr[$i] <br>";
			 $i=$i+1;
			 }
        }
$imagesize = "$mydir2/$filevr[1]";
//echo "$imagesize";

list($width, $height, $type, $attr) = getimagesize($imagesize);

//echo "Image width " .$width;
//echo "<BR>";
//echo "Image height " .$height;
//echo "<BR>";
//echo "Image type " .$type;
//echo "<BR>";
//echo "Attribute " .$attr;

$width= 500;
$height = 500;

	?>
<?
 for($k=$i-1;$k>=0;$k--)
		              {
                      #echo" \"$mydir2/$filevr[$k]\",";
		              }

?>



    <script type="text/javascript">
    jqNew = jQuery.noConflict();
    jqNew(function(){
      jqNew("#bike").spritespin({
        width     : <? echo $width; ?>,
        height    : <? echo $height; ?>,
		frames    : <? echo $i;?>,
        image     : [
        			<?
			if($direction == 'R')
		  {
			         for($j=0;$j<=$i;$j++)
		              {
                      echo" \"$mydir2/$filevr[$j]\",";
		              }
		  }
		  else if($direction == 'L')
		  {
				      for($j=$i-1;$j>=0;$j--)
		              {
                      echo" \"$mydir2/$filevr[$j]\",";
		              }

		  }
		  ?>
        ],
        animate   : true,
        loop      : true,
        frameTime : 160,
       // fadeFrames : 20,
        //fadeInTime : 0,
       // fadeOutTime : 120
      });
    });
    </script>
  </head>
  <body>
    <div id="spritespin" align ='center'></div>
    <div id="bike" align="center"></div>
    <div id="bike2"></div>
    <div id="bike3"></div>
    </body>
</html>
