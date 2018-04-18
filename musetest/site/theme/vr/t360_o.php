
<!DOCTYPE html>
<html lang='en' xml:lang='en' xmlns='http://www.w3.org/1999/xhtml'>
  <head>
    <meta content='text/html;charset=UTF-8' http-equiv='content-type'>
    <title></title>
    <script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui-1.8.4.all.min.js" type="text/javascript"></script>
    <script src="js/jquery.spritespin.js" type="text/javascript"></script>
    <link href="http://plugindetector.com/css/demo.css" rel="stylesheet" />
    <link href="js/jquery-ui-1.8.4.all.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <link href="http://plugindetector.com/demo/_lib/demo.css" rel="stylesheet" />    <style type="text/css">
    html, body{
	background:white !important;
    }
		
	.preload {
        background : url('stylesheets/images/ajax-loader.gif') no-repeat 50% 50%;
      }
	 body {
		padding:0px;
	 }	
	 .ui-widget-header {
		background:#ccc;
	 }
	 
	 #toolbar {
		margin-top:15px;
		display:inline-block;
		border:none;
		padding:3px;
		width:390px;
		padding-left:25px;
	 }
	 
	 .sliderParent {
		width:420px;
	 }
	 .sliderParent, #toolbar{
		margin-left:40px;
	 
	 }
	 
	 .ui-button-text {
		height:25px !important;
	 }
	 
	 .ui-button-text .ui-button-text {
		padding:0;
	 }
    </style>
    
    <script type="text/javascript">
    $(function(){
    
      $("#bike").spritespin({
        width     : 800,
        height    : 600,
        frames    : 34,
        image     : [

         <?php    
$allowed_types=array('jpg','JPG','jpeg','gif','png');
$dirs    = "../../../pic/vr/H001/";

$files1 = scandir($dirs);
foreach($files1 as $key=>$value){
    if($key>1){
        $file_parts = explode('.',$value);
        $ext = strtolower(array_pop($file_parts));
        if(in_array($ext,$allowed_types)){
           
            echo "\"$dirs$value\",";
		    }
 
    }
}  
?>    
        ],
        animate   : true,
        //loop      : true,
        frameTime : 60,
	   onFrame   : function(){
		// on each frame update, set the slider to the current frame position
		var currentFrame = $("#bike").spritespin("frame");
		$(".slider").slider({ value : currentFrame });
	   }

      });
	 
	 
	   // button jumping to first frame
  $( "#beginning" ).button({
    // set jquery style
    text: false,
    icons: { primary: "ui-icon-seek-start" }
  }).click(function(){
    // on click go to frame 0
    $("#bike").spritespin("frame", 0);
  });
  
  // button jumping to previous frame
  $( "#rewind" ).button({
    // set jquery style
    text: false,
    icons: { primary: "ui-icon-seek-prev" }
  }).click(function(){
    // get current frame and update spritespin to the previous frame
    var currentFrame = $("#bike").spritespin("frame");
    $("#bike").spritespin("frame", currentFrame - 1);
  });
  
  // button to start/pause the animation
  $( "#play" ).button({
    // set jquery style
    text: false,
    icons: { primary: "ui-icon-play" }
  }).click(function() {
    var options;
    // check whether spritepsin is an animate state
    if ( $("#bike").spritespin("animate") ) {
      // set jquery style options
      options = {
        label: "pause",
        icons: { primary: "ui-icon-pause" }
      };
      // stop animation
      $("#bike").spritespin("animate", false);
    } else {
      // set jquery style options
      options = {
        label: "play",
        icons: { primary: "ui-icon-play" }
      };
      // start animation
      $("#bike").spritespin("animate", true);
    }
    // apply jquery style options
    $( this ).button( "option", options );
  });
  
  // button to stop the animation and return to first frame
  $( "#stop" ).button({
    // set jquery style
    text: false,
    icons: { primary: "ui-icon-stop" },
  }).click(function() {
    // set the play buttons style to play
    $( "#play" ).button( "option", {
      label: "play",
      icons: { primary: "ui-icon-play" }
    });
    // stop animation and return to frame 0
    $("#bike").spritespin("animate", false);
    $("#bike").spritespin("frame", 0);
  });
  
  // button jumping to next frame
  $( "#forward" ).button({
    // set jquery style
    text: false,
    icons: { primary: "ui-icon-seek-next" }
  }).click(function(){
    // get current frame and update spritespin to next frame
    var currentFrame = $("#bike").spritespin("frame");
    $("#bike").spritespin("frame", currentFrame + 1);
  });
  
  // button jumping to last frame
  $( "#end" ).button({
    // set jquery style
    text: false,
    icons: { primary: "ui-icon-seek-end" }
  }).click(function(){
    // update spritespin to last frame
    $("#bike").spritespin("frame", 33);
  });
  
  // toggle button to toggle the animation
  $( "#loop" ).button().change(function(){
    // check whether the button is checked or not
    if ($("#loop:checked").length == 1){
      // update loop setting
      $("#bike").spritespin("loop", true);
    } else {
      // update loop setting
      $("#bike").spritespin("loop", false);
    }
  });

  // slider to slide to desired position
  $(".slider").slider({
    range: "min",
    value: 0,                                         // initial frame
    min: 0,                                           // number of rist frame
    max: 33,                                          //  number of last frame
    slide: function( event, ui ) {
      $("#bike").spritespin("frame", ui.value);
    }
  });

	 
      //  
      //$("#bike2").spritespin({
      //  width     : 640,
      //  height    : 437,
      //  frames    : 34,
      //  image     : "images/bike.jpg",
      //  frameTime : 60
      //});
      
      //$("#bike2").spritespin({
      //  width     : 480,
      //  height    : 327,
      //  frames    : 34,
      //  framesX   : 6,
      //  image     : "images/bike6x6.jpg",
      //  frameTime : 60
      //});
      //$("#bike2").spritespin({
      //  width     : 640,
      //  height    : 437,
      //  frames    : 34,
      //  framesX   : 6,
      //  image     : "images/bike6x6_big.jpg",
      //  frameTime : 60
      //});
    });
    </script>
  </head>
  <body>
	<div class="wrapper">
		<div class="inner">
    <div id="spritespin"></div>
    <div id="bike"></div>
    
<!--
    <div class="sliderParent">
	<div class="slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-slider-range-min ui-widget-header" style="width: 0%;"></div><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a></div>
    </div>
-->
    

    
    <div id="bike2"></div>
    <div id="bike3"></div>
    </div>
    	</div>
    
    	  </body>
</html>
