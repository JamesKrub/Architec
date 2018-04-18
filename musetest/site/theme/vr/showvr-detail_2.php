<!DOCTYPE html>

<html lang='en' xml:lang='en' xmlns='http://www.w3.org/1999/xhtml'>
  <head>
    <meta content='text/html;charset=UTF-8' http-equiv='content-type'>
    <title></title>
      <link href="http://localhost/culture/site/vr/vr/showvr/css/jquery-ui-1.8.4.all.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <script src="http://localhost/culture/site/vr/vr/showvr/js/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script src="http://localhost/culture/site/vr/vr/showvr/js/jquery-ui-1.8.4.all.min.js" type="text/javascript"></script>
    <script src="http://localhost/culture/site/vr/vr/src/jquery.spritespin.js" type="text/javascript"></script>
<!--    <link href="vr/vr/showvr/css/jquery-ui-1.8.4.all.css" media="screen, projection" rel="stylesheet" type="text/css" />  -->
   
<!--
   <style type="text/css">
      .preload {
        background : url('http://localhost/culture/site/vr/showvr/stylesheets/images/ajax-loader.gif') no-repeat 50% 50%;
      }
    </style>
-->
    <!--<img src ='../../admin/object/pic/vr/H0009//H0009_551.jpg'> -->
    <?php
//$mydir = (isset($_GET['mydir'])) ? $_GET['mydir'] : ''; 
 $i=0;
//$mydir = "";
//$mydir='H0009';
//$direction = 'R';
$mydir = $_REQUEST['mydir'];
$direction = $_REQUEST['direction'];
//$mydir='H0009';
//$direction = 'R';
$filevr=[0];      
//echo "$mydir : $direction <br>";

$mydir2= "http://localhost/culture/pic/vr/$mydir";
echo "$mydir2  <br>";
//print_r($mydir2);
      
$objScan = scandir("../pic/vr/$mydir");
//echo "obj = $objScan  <br>";
      foreach ($objScan as $value) {
      echo "$value<br>";

		 $vrpic1 = explode(".", $value);
	     //echo "vr = $vrpic1[0]";
		 if($vrpic1[0]=="jpg")
			 {
            //$i == 1;     
		 	 $vrpic[$i] = $vrpic1[0];
			 echo "$vrpic[$i]<br>";
			 $filevr[$j] = $vrpic[$i].".jpg";
			 echo "$filevr[$j] <br>";
             $imagesize = "http://localhost/culture/pic/vr/$mydir/$filevr[$j]";           
			 $j=$i+1;
             echo "f : $filevr[$j] <br>";   
			 }
	     else if($vrpic1[1]=="JPG")
			 {
             $i == 0;
		 	 $vrpic[$i] = $vrpic1[0];
			 //echo "$vrpic[$i]<br>";
			 $filevr[$j] = $vrpic[$i].".JPG";
			 echo "$filevr[$j] <br>";
             $imagesize = "http://localhost/culture/pic/vr/$mydir/$filevr[$j]";           
			 $j=$i+1;
			 }
        }

//$imagesize = "http://localhost/culture/pic/vr/$mydir/$filevr[$j]";
$j="1";      
$imagesize = "http://localhost/culture/pic/vr/$mydir/$filevr[1]";      
$j=$j+1;  
                        
echo "img = $imagesize";      
list($width, $height, $type, $attr) = getimagesize("$imagesize");
//echo "<img src=\"$imagesize\"$filevr[$j]\" $attr alt=\"getimagesize() example\" />";
//      
//list($width, $height, $type, $attr) = getimagesize($imagesize);

//list($width, $height, $type, $attr) = getimagesize("$imagesize");
//echo "<img src=\"$imagesize\" $attr alt=\"getimagesize() example\" />";
      
echo "Image width " .$width;
echo "<BR>";
echo "Image height " .$height;
echo "<BR>";
echo "Image type " .$type;
echo "<BR>";
echo "Attribute " .$attr;

$width= "500";
$height = "500";

	?>
<?
    
 for($k=$i-1;$k>=0;$k--)
		              {
                      //echo" \"http://localhost/culture/pic/vr/H0002/$filevr[$k]\",";
		              }

?>



    <script type="text/javascript">
    jqNew = jQuery.noConflict();
    jqNew(function(){
      jqNew("#bike").spritespin({
//        width     : <? //echo $width; ?>,
//        height    : <? //echo $height; ?>,
//		frames    : <? //echo $i;?>,
        width     : 500,
        height    : 500,
		frames    : 36,
        image     : [
        			<?
			if($direction == 'R')
		  {
			         for($j=1;$j<=$i;$j++)
		              {
                      echo "\"$mydir2/$filevr[$j]\",";
		              }
		  }
		  else if($direction == 'L')
		  {
				      for($j=$i-1;$j>=0;$j--)
		              {
                      echo "\"$mydir2/$filevr[$j]\",";
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
