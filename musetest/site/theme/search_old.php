<?php
include 'connect.php';
$sql = "select * from muse_object where obj_title like '%{$_POST['obj_title']}%'";
$query = mysqli_query($link,$sql) or die("Can't Query");
?>
<div class="col-md-12">
    <table class="table">
        <thead>
            <tr>
                <th>ลำดับ</th>
                <th>รหัสวัตถุ</th>
                <th>ชื่อวัตถุ</th>
                <th>รายละเอียด</th>
<!--                <th>หน่วยนับ</th>-->
            </tr>
        </thead>
        <tbody>
            <?php $i=1; while ($result = mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $result['obj_refcode'];?></td>
                <td><?php echo $result['obj_title'];?></td>
                <td><?php echo $result['obj_physicals'];?></td>
<!--                <td><?php //echo $result['unit'];?></td>-->
            </tr>
            <?php $i++; } ?>
        </tbody>
    </table>
</div>