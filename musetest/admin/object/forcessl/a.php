<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript" src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
     $("#btn1").click(function(){
 $.post("b.php", { 
      museum_code: $("#museum_code").val(),
      item_code: $("#item_code").val()
 
 }, 
      function(data){
  $("#showajax").html(data);
      }
  );

     });
});
</script>
</head>

<body>
<input type="text" id="museum_code" cols="45" rows="5">
<input type="text" id="item_code" cols="45" rows="5">    
<input type="button" id="btn1" value="Send"/>
<div id="showajax"></div>
</body>
</html>