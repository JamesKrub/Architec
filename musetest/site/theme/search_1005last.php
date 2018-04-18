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
    <div class="row">
    <?php echo $_POST['obj_title'];?>
    </div>    
    <table class="table">
        <thead>
            <tr>
<!--                <th>ลำดับ</th>-->
                <th>รหัสวัตถุ</th>
                <th>ชื่อวัตถุ</th>
                <th>รายละเอียด</th>
                <th>ภาพ</th>
<!--                <th>หน่วยนับ</th>-->
            </tr>
        </thead>
        <tbody>
            <?php $i=1; while ($result = mysqli_fetch_assoc($query)) { 
            
    $sql2 = "SELECT * FROM muse_pic WHERE obj_refcode = '$result[obj_refcode]' ORDER BY obj_cover DESC limit 0,1  ";
	$query2=mysqli_query($link,$sql2) or die("Can't Query2");
	$result2=mysqli_fetch_array($query2);
	$num_rows2=mysqli_num_rows($query2);
    $picname = $result2['pic_name'];
	$filetype = explode(".", $result2[pic_name]);
	$filetype = $filetype[1];
		if($num_rows2 >0 )
		{
			if(($filetype == 'jpg') or ($filetype == 'JPG') or ($filetype =='jpeg') or ($filetype =='png'))
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

            
            ?>
            <tr>
<!--                <td><?php //echo $i;?></td>-->
                <td><?php echo $result['obj_refcode'];?></td>
                <td><?php echo $result['obj_title'];?></td>
                <td><?php echo $result['obj_physicals'];?></td>
                <td> 
                     <a href='museshowcat2.php?refcode=<?php echo $result["obj_refcode"];?>&ac3_id=<?php echo '$ac3_id'?>&ac2_id=<?php echo '$ac2_id'?>&ac1_id=<?php echo '$ac1_id'?>'><img src='<?php echo $objpic;?>' class='img-thumbnail' style='margin:5px 0px 5px;' alt=''> </a>

                </td>
            </tr>
            <?php $i++; } ?>
        </tbody>
    </table>
</div>