<?php include "connect.php"; ?>
<li>
  <a class="active" href="index.php">หน้าแรก</a>

</li>
<li>
      <a href="#">ประวัติความเป็นมา</a>
      <ul class="dropdown">
        <li><a href="background_muse.php">ประวัติพิพิธภัณฑ์</a></li>
<!--                   <li><a href="background_archive">ประวัติจดหมายเหตุ</a></li>-->
      </ul>
</li>

<?php

                 $sql = "select * from feature where fet_id = '2' and fet_enable != '0' ";
                $query=mysqli_query($link,$sql) or die("Can't Query1");
                $num_rows=mysqli_num_rows($query);

                for ($i=0; $i<$num_rows; $i++) {
                  $result=mysqli_fetch_array($query);
                   $fet_id = $result['fet_id'];

                  }

?>
<li>
     <a href="#"><?php echo "<a $menu3 href='museshowcatall.php'>$result[fet_name]</a>"; ?></a>


                              <?php  $sql1 = "SELECT * FROM muse_category where cat1_parent = '0' ";
                                     $query1=mysqli_query($link,$sql1) or die("Can't Query3"); ?> ?>

                                     <ul class="dropdown" id='nav'>

                                       <?php foreach ($query1 as $key => $value) {  ?>

                                         <?php $cat11 = $value['cat1_id'];

                                         // $check = $_REQUEST['cat1_id'];

                                         ?>
                                         <?php
                                         $sql2 = "SELECT * FROM muse_category_lv2 where ac1_id = '".$value['cat1_id']."'";
                                         $query2 =mysqli_query($link,$sql2) or die("Can't Query3"); ?>

                                           <?php if($query2->num_rows > 0){
                                               $cat1_id = $value['cat1_id'];
                                             ?>
                                             <li class="dropdown-submenu">
                                               <!-- ชั้นแรก -->
                                               <?php echo "<a $menu3 href='museshowcat.php?catid=$value[cat1_id]''>$value[cat1_name] <span class='caret'></span></a>"; ?>
                                                 <ul id='nav'>

                                                   <?php foreach ($query2 as $key => $value) {

                                                     ?>

                                               <?php
                                               $sql3 = "SELECT * FROM muse_category_lv3 where ac2_id = '".$value['ac2_id']."'";
                                               $query3 =mysqli_query($link,$sql3) or die("Can't Query3");  ?>

                                               <?php if($query3->num_rows > 0){
                                                 $ac1_id = $value['ac1_id'];
                                                 ?>

                                          <li class="dropdown-submenu contact-details">
                                            <!-- sub 2 ที่มี ลูกต่อ -->

                                             <?php echo "<a href='museshowcatsub2.php?ac3_id=$ac3_id&ac2_id=$value[ac2_id]&ac1_id=$value[ac1_id]'> $value[ac2_name]<span class='caret'></span></a>";   ?>
                                                 <ul id='nav'>

                                                                                 <!-- LV3 -->
                                                                    <?php foreach ($query3 as $key => $value) { ?>
                                                                                 <li>
                                                                                   <!-- จบ sub 3 -->

                                                                                   <?php echo "<a href='museshowcat3.php?ac3_id=$value[ac3_id]&ac2_id=$value[ac2_id]&ac1_id=$ac1_id'>$value[ac3_name]</a>"; ?>

                                                                                 </li>

                                                                     <?php } ?>
                                                   </li>
                                                 </ul>
                                             </li>

                                           <?php }else {?>
                                                     <!-- sub 2 ไม่มีลูกต่อ -->
                                              <li>  <?php echo "<a class='test' name='ac2_id' href='museshowcatsub2.php?ac2_id=$value[ac2_id]&ac1_id=$value[ac1_id]'> $value[ac2_name]</a>"; ?></li>
                                         <?php } ?>
                                         <?php } ?>

                                           </ul>
                                       </li>

                                       <?php }else { ?>
                                       <li>
                                           <?php echo "<a href='museshowcat.php?catid=$value[cat1_id]''>$value[cat1_name] </a>"; ?>
                                        </li>
                                       <?php } ?>

       <?php   }  ?>
                                   </ul>
</li>






















<li>
  <a href="musenews.php">ข่าวประชาสัมพันธ์</a>

</li>

<li>
  <a href="contact.php">ติดต่อเรา</a>
</li>
