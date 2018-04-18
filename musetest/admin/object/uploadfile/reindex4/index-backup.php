<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Drag & Drop</title>
<!--<link href="uploaddoc/reindex/style.css" rel="stylesheet" type="text/css" />-->
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery-ui.js"></script>
<style>
ul {
	padding:0px;
	margin: 0px;
}
#response {
	padding:10px;
	background-color:#ffff;
	border:2px solid #396;
	margin-bottom:20px;
}
#list li {
	margin: 0 0 3px;
	padding:8px;
	background-color:#cccccc;
	color:#fff;
	list-style: none;
}
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

<?php $objectid = $_REQUEST['objectid'];
   $refcode = $_REQUEST['refcode'];
 ?>
<script language="JavaScript">
<!--
function refreshParent() {
  window.opener.location.href = '../../editmuse.php?objectid=<?php echo $objectid;?>&refcode=<?php echo $refcode;?>';

  if (window.opener.progressWindow)

 {
    window.opener.progressWindow.close()
  }
  window.close();
}
//-->
</script>

</head>
<body>
<form name='form2'>
<button id="px-submit" type='submit'onclick=refreshParent();> ปิดการ จัดเรียงเอกสาร </button>
</form>
<div id="container">
  <div id="list">

    <div id="response"> </div>
    <ul>
      <?php
                $refcode = $_REQUEST['refcode'];
                include("../../conf/connectdb.php.inc");
				$query  = "SELECT pic_id, pic_name FROM muse_pic WHERE obj_refcode = '$refcode' ORDER BY listorder ASC";
				$result = mysql_query($query);
				while($row = mysql_fetch_array($result, MYSQL_ASSOC))
				{

				$id = stripslashes($row['pic_id']);
				$name = stripslashes($row['pic_name']);

				?>
     <!-- <li id="arrayorder_<?php echo $id ?>"><?php echo $id?> <?php #echo $name; ?>-->
      <li id="arrayorder_<?php echo $id ?>">
      <?php
      $filetype = explode(".", $name);
	  $filetype = $filetype[1];

				  if(($filetype == 'jpg') or ($filetype =='JPG'))
				  {
				  echo "<img src ='../../../../pic/bigmuse/$refcode/$name' width='170'>";
				  }
				  else
				  if($filetype =='mp4')
				  {
				  			//echo "../../../../pic/bigmuse/$refcode/$name";
							echo "<video width='200'  controls>
  								  <source src='../../../../pic/bigmuse/$refcode/$name' type='video/mp4'>
  								  <object data='../../../../pic/bigmuse/$refcode/$name' width='200' >

         						  </object>
								</video>";
						    echo "<br>";
				  }
				  else if($filetype =='mp3')
				  {
				  		//echo "$name <br>";
				  		//echo "<a href ='player.php?picname=$result3[pic_name]'>$result3[pic_name]</a>";
				  		echo "<audio width='200' controls>
  				  		<source src='../../../../pic/bigmuse/$refcode/$name' type='audio/mpeg'>
  			     		<embed src='../../../../pic/bigmuse/$refcode/$name' width='200'>
						</audio>";
                  		echo "<br>";
				  }
				  else if($filetype =='pdf')
				  {
				  		//echo "$result3[pic_name] <br>";
				  		echo "<a href ='../../../../pic/bigmuse/$refcode/$name' target='_blank'><img src='../../images/pdf-icon.png' width='150'></a>";
                  		echo "<br>";
				  }
      ?>
      <?php #echo "$filetype xxxxx <img src ='../../../../pic/bigmuse/$refcode/$name' width='170'>"; ?>
       <!--<form name='form1' action='xx.php' method='post'>
       <input type ='text' name='text'>
       <input type='submit' name='submit' value='submit'>
       </form>
       -->
        <div class="clear"></div>
      </li>
      <?php } ?>
    </ul>
  </div>
</div>


</body>
</html>
