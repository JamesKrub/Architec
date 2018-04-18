<?php
include 'connect.php';

   $refcode = $_REQUEST['refcode'];
   $ac1_id =  $_REQUEST['ac1_id'];
   $ac3_id = $_REQUEST['ac3_id'];
   $ac2_id = $_REQUEST['ac2_id'];
   $catid  = $_REQUEST['catid'];

$sql = "select * from muse_object , muse_category where muse_object.obj_category = muse_category.cat1_id and muse_object.obj_access = '1' and muse_object.obj_title like '%{$_POST['obj_title']}%'";
$query = mysqli_query($link,$sql) or die("Can't Query");
?>
<div class="col-md-12">
<!--
    <div class="row">
    <?php //echo $_POST['obj_title'];?>
    </div>
-->
<!--    <table class="table">-->
<!--
        <thead>
            <tr>
-->
<!--                <th>ลำดับ</th>-->
<!--
                <th>รหัสวัตถุ</th>
                <th>ชื่อวัตถุ</th>
                <th>รายละเอียด</th>
                <th>ภาพ</th>
-->
<!--                <th>หน่วยนับ</th>-->
<!--
            </tr>
        </thead>
        <tbody>
-->

<div class="row">
            <?php $i=1;
                while ($result = mysqli_fetch_assoc($query)) {

    $sql2 = "SELECT * FROM muse_pic WHERE obj_refcode = '$result[obj_refcode]' ORDER BY obj_cover DESC limit 0,1  ";
	$query2=mysqli_query($link,$sql2) or die("Can't Query2");
	$result2=mysqli_fetch_array($query2);
	$num_rows2=mysqli_num_rows($query2);
    $line = 1;
    $picname = $result2['pic_name'];
	$filetype = explode(".", $result2[pic_name]);
	$filetype = $filetype[1];
		if($num_rows2 >0 )
		{
			if(($filetype == 'jpg') or ($filetype == 'JPG') or ($filetype =='jpeg') or ($filetype =='png') or ($filetype =='PNG'))
			{
				$objref =$result2['obj_refcode'];
                 $objref = preg_replace('/[^a-z0-9\_\- ]/i', '', $objref);
				$picname = $result2['pic_name'];
                 $objpics = $result2['thumb_name'];
                 $objpic = "../../pic/thumbmuse/$objref/$objpics";
			}
			else //ถ้าไฟล์ไม่ใช้รูปภาพ เช่น mp3 mp4 pdf ให้แสดงภาพว่าง
			{
				$objref = "";
				$objpic = "../../pic/thumbmuse/$objref/blank.jpg";
			}
		}

		else
		{

		}

           $line = $line + 1;
 // echo "$line <br>";
 //echo "<div class='row'>";
         if($line < 4 and $line > 1)
         {
            ?>
<!--           <div class='col-sm-12'> -->

          <div class='col-sm-4'>
    <h5 class='text-info'><?php  echo " $j "; echo $result["obj_title"];?></h5>
<?php echo "<a href='muse_show_cat1.php?refcode=$result[obj_refcode]&ac3_id=$ac3_id&ac2_id=$ac2_id&ac1_id=$ac1_id'><img src='$objpic' class='img-thumbnail' style='margin:15px 0px 15px;' alt=''> </a> <br/>" ?>
 <?php    if(($picvr == 1) and ($bpu == 0))
         {
?>
    <img src='images/icon_info.png'> <img src='images/icon_camera.png'><img src='images/icon_360-1.gif'><br/>
 <?php        }

         if(($bpu == 1) and ($picvr == 0))
         {
?>
     <img src='images/icon_info.png'> <img src='images/icon_camera.png'><img src='images/Music-Music-icon.png'><br/>
 <?php        }
         if(($bpu == 1) and ($picvr == 1))
         {
?>
       <img src='images/icon_info.png'> <img src='images/icon_camera.png'><img src='images/icon_360-1.gif'>
         <img src='images/Music-Music-icon.png'><br/>
 <?php
         }
         if(($bpu == 0) and ($picvr == 0))
         {
?>
     <img src='images/icon_info.png'> <img src='images/icon_camera.png'><br/>

    <p>
    <?php }
             echo $result["obj_physicals"];?></p> <br/>

      </div>
<!--           </div>-->
            <?php //$i++;
         }
      if($i % 3 === 0) echo "</div><div class='row'>"; // close and open a div with class row

     $i++;
} ?>

</div>
