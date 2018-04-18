<?php
if(empty($_GET['ref']) || empty($_GET['type'])) {
  header('location: /');
} else {
 include("../../connect.php");
  switch($_GET['type']) {
    case 'muse':
      $table = 'muse_pic';
      $redi = 'editmuse';
      $pic = 'bigmuse';
    break;
    case 'arc':
      $table = 'archive_pic';
      $redi = 'edit';
      $pic = 'big';
    break;
    case 'bgp':
      $table = 'botanic_plant_pic';
      $redi = 'edit-plant';
      $pic = 'big-plant';
    break;
    case 'bga':
      $table = 'botanic_animal_pic';
      $redi = 'edit-animal';
      $pic = 'big-animal';
    break;
    case 'bgb':
      $table = 'botanic_bio_pic';
      $redi = 'edit-bio';
      $pic = 'big-bio';
    break;
    case 'bgi':
      $table = 'botanic_idea_pic';
      $redi = 'edit-idea';
      $pic = 'big-idea';
    break;
  }

  $query = mysqli_query($link , "SELECT * FROM '".$table."' WHERE obj_refcode = '".$_GET['ref']."' ORDER BY listorder ASC");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>จัดเรียงภาพ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/base.css" rel="stylesheet">
    <style>
      body {
        max-width: 100% !important;
        width: 100% !important;
      }
      button.close {
        float: left;
        margin-left: 10px;
        padding: 10px 13px;
        border: none;
        outline: none;
        background: #ccc;
        color: #333;
        font-family: 'Montserrat', Arial, sans-serif;
        text-transform: uppercase;
        cursor: pointer;
        letter-spacing: 1px;
      	border-radius: 2px;
      	-moz-border-radius: 2px;
      	-webkit-border-radius: 2px;
      }
      button.close:hover {
        background: #bfbfbf;
      }
    </style>
  </head>
  <body>
    <div style="margin-top: 10px; margin-left: 10px;">
      <button class="save">บันทึก</button>
      <button class="close" onclick='refreshParent()' >ปิด</button>
      <div id="response"></div>
    </div>
    <div style="margin-top: 10px; margin-left: 10px;">
<!--
      <?php //echo $table; ?>

        <?php //echo $row['obj_refcode']; ?>
-->

      </div>

    <ul class="sortable" style="padding-left: 0 !important; margin-top: 10px !important;">
      <input type='hidden' name='table' value='<?php echo $table; ?>'/>




<?php
//echo "$table";
//echo "$_GET[ref]";
//$a = "$table";
//echo "$a";
$b =  "$_GET[ref]";
// $objref =$result3['obj_refcode'];
// $refcode = preg_replace('/[^a-z0-9\_\- ]/i', '', $objref);
//$sql = "SELECT * FROM 'muse_pic' WHERE obj_refcode = '$b' ORDER BY listorder ASC";
$sql = "SELECT * FROM `muse_pic` WHERE `muse_pic`.`obj_refcode` = '$b' ORDER BY listorder ";
$result = mysqli_query($link, $sql);


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
      $objref = $row['obj_refcode'];
//      $refcode = preg_replace('/[^a-z0-9\_\- ]/i', '', $objref);
       $folderref = $row['folder_refcode'];   
        // echo $row['pic_name'].$row['obj_refcode']. " <br>";
        // echo " AAAAAAA <br>";
        echo "<li id='item-".$row['pic_id']."'>
						<img src='../../../../pic/bigmuse/".$folderref."/".$row['pic_name']."'/>
		</li>";

        $i++;
    }
} else {
    echo "0 results";
}



?>






 <!--------->
    </ul>
 <?
 //$refcode =  $_GET['ref'];
 // echo "ref = $refcode ";
?>


    <script src="js/jquery.min.js" type="text/javascript"></script>
  	<script src="js/jquery.ui.js" type="text/javascript"></script>
    <script type="text/javascript">
  		var ul_sortable = $('.sortable');
  		ul_sortable.sortable({
  			revert: 100,
  			placeholder: 'placeholder'
  		});
  		ul_sortable.disableSelection();
  		var btn_save = $('button.save'),
  			div_response = $('#response');
  		btn_save.on('click', function(e){
  			e.preventDefault();
  			var sortable_data = ul_sortable.sortable('serialize');
        sortable_data += "&table=<?php echo $table; ?>";
  			$.ajax({
          data: sortable_data,
          type: 'POST',
          url: 'save.php',
          success:function(result) {
        	   alert('บันทึกเสร็จสิ้น');
  			  }
  	    });
  		});
      function refreshParent() {
        window.opener.location.href = '../../<?php echo $redi; ?>.php?objectid=<?php echo $_GET['id']; ?>&refcode=<?php echo $_GET['ref'];?>';
        if(window.opener.progressWindow) {
          window.opener.progressWindow.close()
        }
        window.close();
      }
  	</script>
  </body>
</html>
