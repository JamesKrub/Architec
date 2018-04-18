
<!DOCTYPE html>
<html lang='en' xml:lang='en' xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta content='text/html;charset=UTF-8' http-equiv='content-type'>
<title></title>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="src/jquery.min.js" type="text/javascript"></script>
<script src="src/spritespin.js" type="text/javascript"></script>
<!--
<style type="text/css">
.spritespin-preload {
background : url('stylesheets/images/ajax-loader.gif') no-repeat 50% 50%;
}
.spritespin-instance {
border: 1px dashed;
margin: 20px;
}
</style>
-->
</head>
<body>


<div id="360frames"></div>

   

<script type="text/javascript">
    $(function(){
      var frames = [
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

       
        ];

      $("#360frames").spritespin({
        width     : 800,
        height    : 600,
        frames    : frames.length,
        behavior  : "drag", // "hold"
        module    : "360",
        sense     : -1,
        source    : frames,
        animate   : true,
        loop      : true,
        frameWrap : true,
        frameStep : 1,
        frameTime : 60,
        enableCanvas : true
      });

     
    });
    </script>
</body>
</html>