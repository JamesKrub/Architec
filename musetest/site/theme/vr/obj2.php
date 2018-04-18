

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
    <script type="text/javascript">
    jqNew = jQuery.noConflict();
    jqNew(function(){
      jqNew("#bike").spritespin({
        width     : 500,
        height    : 500,
		frames    : 36,
        image     : [
        			 "vr/obj2/glass36.jpg", "vr/obj2/glass35.jpg", "vr/obj2/glass34.jpg", "vr/obj2/glass33.jpg", "vr/obj2/glass32.jpg", "vr/obj2/glass31.jpg", "vr/obj2/glass30.jpg", "vr/obj2/glass29.jpg", "vr/obj2/glass28.jpg", "vr/obj2/glass27.jpg", "vr/obj2/glass26.jpg", "vr/obj2/glass25.jpg", "vr/obj2/glass24.jpg", "vr/obj2/glass23.jpg", "vr/obj2/glass22.jpg", "vr/obj2/glass21.jpg", "vr/obj2/glass20.jpg", "vr/obj2/glass19.jpg", "vr/obj2/glass18.jpg", "vr/obj2/glass17.jpg", "vr/obj2/glass16.jpg", "vr/obj2/glass15.jpg", "vr/obj2/glass14.jpg", "vr/obj2/glass13.jpg", "vr/obj2/glass12.jpg", "vr/obj2/glass11.jpg", "vr/obj2/glass10.jpg","vr/obj2/glass09.jpg", "vr/obj2/glass08.jpg", "vr/obj2/glass07.jpg", "vr/obj2/glass06.jpg", "vr/obj2/glass05.jpg", "vr/obj2/glass04.jpg", "vr/obj2/glass03.jpg", "vr/obj2/glass02.jpg", "vr/obj2/glass01.jpg",     ],
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


