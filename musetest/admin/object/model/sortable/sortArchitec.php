<?php
if(empty($_GET['ref']) || empty($_GET['type'])) {
  header('location: /');
} else {
    include("../../connect.php");
    switch($_GET['type']) {
    case 'architec':
        $table = 'architec_pic';
        $redi = 'editarchitec';
        $pic = 'big_architec';
    break;
    }
    $query = mysqli_query($link , "SELECT * FROM '".$table."' WHERE archObj_Refcode = '".$_GET['ref']."' ORDER BY archListorder ASC");
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

    </div>
    <ul class="sortable" style="padding-left: 0 !important; margin-top: 10px !important;">
    <input type='hidden' name='table' value='<?php echo $table; ?>'/>
<?php

$refCode =  "$_GET[ref]";
$sql = "SELECT * FROM `architec_pic` WHERE `architec_pic`.`archObj_Refcode` = '$refCode' ORDER BY archListorder ASC";
$result = mysqli_query($link, $sql);
$i = 0;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
        $objref = $row['archObj_Refcode'];
        $folderref = $row['archFolder_Refcode'];   
        echo "<li id='item-".$row['archPic_Id']."'>
				<img src='../../../../pic/big_architec/".$folderref."/".$row['archPic_Name']."'/>
		      </li>";
        $i++;
    }
} else {
    echo "0 results";
}
?>
</ul>
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
            url: 'saveAchitec.php',
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
