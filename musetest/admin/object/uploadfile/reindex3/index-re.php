<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Drag & Drop</title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />

<!--<style>
body {
    font-family: "Trebuchet MS", "Helvetica", "Arial",  "Verdana", "sans-serif";
    font-size: 62.5%;
}
#sortable { list-style-type: none; margin: 0; padding: 0; width: 450px; }
#sortable li { margin: 3px 3px 3px 0; padding: 1px; float: left; width: 100px; height: 90px; font-size: 4em; text-align: center; 
</style>
-->

<style>
  #response { list-style-type: none; margin: 0; padding: 0; width: 450px; }
  #response li { margin: 3px 3px 3px 0; padding: 1px; float: left; width: 100px; height: 90px; font-size: 4em; text-align: center; }
  </style>
  
<script type="text/javascript">
$(document).ready(function(){ 	
	  function slideout(){
  setTimeout(function(){
  $("#response").slideUp("slow", function () {
      });
    
}, 2000);}
	
    $("#response").hide();
	$(function() {
	$("#list ul").sortable({ opacity: 0.8, cursor: 'move', update: function() {
			
			var order = $(this).sortable("serialize") + '&update=update'; 
			$.post("updateList.php", order, function(theResponse){
				$("#response").html(theResponse);
				$("#response").slideDown('slow');
				slideout();
			}); 															 
		}								  
		});
	});

});	
</script>
</head>
<body>
<div id="container">
  <div id="list">

    <div id="response"> </div>
    <ul>
      <?php
                $refcode = $_REQUEST['refcode'];
                include("../../conf/connectdb.php.inc");
				$query  = "SELECT pic_id, pic_name FROM archive_pic WHERE obj_refcode = '$refcode' ORDER BY listorder ASC";
				$result = mysql_query($query);
				while($row = mysql_fetch_array($result, MYSQL_ASSOC))
				{					
				$id = stripslashes($row['pic_id']);
				$name = stripslashes($row['pic_name']);					
		?>
	  <form name='form1' action='xx.php' method='post'>
      <li id="arrayorder_<?php echo $id ?>"><?php echo $id?> <?php #echo $name; ?>
      <?php echo "<img src ='../../pic/thumb/thumb-$name' height='50'>"; ?>
       <input type ='text' name='text'>
       <input type='submit' name='submit' value='submit'>
       </form>
        <!--<div class="clear"></div>-->
      </li>
      <?php } ?>
    </ul>
  </div>
</div>


</body>
</html>
