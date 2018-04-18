
<?php include "connectdb2.php" ; ?>
<!--
<style type="text/css">
    .scrollable-menu {
    height: auto;
    max-height: 450px;
    overflow-x: hidden;
}
</style>
-->
<div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="index.php">
<!--              <img alt="" src="images/margo.png">-->
                 <?php

               // $bgid=$_REQUEST['catid'];

                                    $sql = "select * from muse_bg where bg_id = '1' ";
									$query=mysqli_query($link,$sql) or die("Can't Query");
									$num_rows=mysqli_num_rows($query);
									for ($i=0; $i<$num_rows; $i++) {
										$result=mysqli_fetch_array($query);
                                        $bg_desc = $result['bg_desc'];
                                        $bg_name = $result['bg_name'];
												//echo "<p>$result[bg_desc]</p>";
											 //echo "$result[bg_name]";
                                    }
                echo "$result[bg_name]";
				?>

            </a>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Stat Search -->
            <div class="search-side">
              <a class="show-search"><i class="fa fa-search"></i></a>
              <div class="search-form">
                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                  <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                </form>
              </div>
            </div>
            <!-- End Search -->
            <!-- Start Navigation List -->

            <ul class="nav navbar-nav navbar-right">

              <li>
<!--                <a class="active" href="index.php">หน้าแรก</a>-->
                <a <?php echo $menu1;?> href="index.php">หน้าแรก</a>
              </li>
             <li>
                <a <?php echo $menu2;?> href="background_muse.php">เกี่ยวกับเรา </a>
<!--
                <ul class="dropdown">
                  <li ><a href="background_muse.php">ประวัติพิพิธภัณฑ์</a></li>
                  <li ><a href="background_archive.php">ประวัติจดหมายเหตุ</a></li>
                </ul>
-->
              </li>

              <li>



                <?php
                  $sql = "select * from feature where fet_id = '2' and fet_enable != '0' ";
									$query=mysqli_query($link,$sql) or die("Can't Query1");
									$num_rows=mysqli_num_rows($query);
									for ($i=0; $i<$num_rows; $i++) {
										$result=mysqli_fetch_array($query);
                                        $fet_id = $result['fet_id'];
										echo " <a $menu3 href='museshowcatall.php'>$result[fet_name]</a>";}


                            $sql1 = "SELECT * FROM muse_category where cat1_parent = '0' ";
                            $query1=mysqli_query($link,$sql1) or die("Can't Query3"); ?>


                            <ul class="dropdown">
                            <?php foreach ($query1 as $key => $value) { ?><?php

                            $sql2 = "SELECT * FROM muse_category_lv2 where ac1_id = '".$value['cat1_id']."'";
                            $query2 =mysqli_query($link,$sql2) or die("Can't Query3"); ?>


                            <?php if($query2->num_rows > 0){ ?>
                            <li id="q2" class="dropdown-submenu scrollable-menu">

                            <?php echo "<a class='test' href='museshowcat.php?catid=$value[cat1_id]''>$value[cat1_name] <span class='caret'></span></a>"; ?>
                            <ul class="dropdown-menu">

                                                <?php foreach ($query2 as $key => $value) { ?>

                                                <?php $sql3 = "SELECT * FROM muse_category_lv3 where ac2_id = '".$value['ac2_id']."'";
                                                $query3 =mysqli_query($link,$sql3) or die("Can't Query3");  ?>

                                                <?php if($query3->num_rows > 0){ ?>
                                                      <li class="dropdown-submenu">

                                                          <?php echo "<a class='test' href='museshowcat.php?catid=$value[ac1_id]'> $value[ac2_name]<span class='caret'></span></a>"; ?>
                                                          <ul id="q2" class="dropdown-menu">

                                                          <!-- LV3 -->
                                                          <?php foreach ($query3 as $key => $value) { ?>
                                                          <li>
                                                            <?php echo "<a class='test'  href='museshowcat.php?catid=$value[ac3_id]'>$value[ac3_name]</a>"; ?>
                                                          </li>

                                                          <?php } ?>
                                                          </ul>

                                                       </li>

                                 <?php }else{ ?>
                                    <li>  <?php echo "<a class='test' href='museshowcat.php?catid=$value[ac1_id]'> $value[ac2_name]</a>"; ?></li>
                                 <?php } ?>


                              <?php } ?>

                            </ul>

                          </li>



                        <?php }else { ?>
                            <li>    <?php echo "<a class='test' href='museshowcat.php?catid=$value[cat1_id]''>$value[cat1_name] </a>"; ?>
                           </li>
                        <?php } ?>

                      <?php }//for q1 ?>
                </ul>


                </li>
                 <li>
                <?php
                                    $sql = "select * from feature where fet_id = '1' and fet_enable != '0' ";
									$query=mysqli_query($link,$sql) or die("Can't Query1");
									$num_rows=mysqli_num_rows($query);
									for ($i=0; $i<$num_rows; $i++) {
										$result=mysqli_fetch_array($query);
                                        $fet_id = $result['fet_id'];

												echo "<a $menu4 href='showcatall.php'>$result[fet_name]</a>";
									}
									?>
                <ul class="dropdown">
                   <?php
                                    $sql = "select * from archive_category where cat1_parent = '0' ";
									$query=mysqli_query($link,$sql) or die("Can't Query");
									$num_rows=mysqli_num_rows($query);
									for ($i=0; $i<$num_rows; $i++) {
										$result=mysqli_fetch_array($query);
                                        $cat1_id = $result['cat1_id'];
												echo "<li><a href='showcat.php?catid=$result[cat1_id]'>$result[cat1_name]</a></li>";
												$sql2 = "select * from archive_category ";
												$query2=mysqli_query($link,$sql2) or die("Can't Query2");
												$num_rows2=mysqli_num_rows($query2);
												for ($j=0; $j<$num_rows2; $j++) {
													$result2=mysqli_fetch_array($query2);
													if($result2['cat1_parent'] == $cat1_id)
													{
														echo "<li><a href='showcat.php?catid=$result2[cat1_id]'>--$result2[cat1_name]</a></li>";
													}
												}
									}
									?>
                </ul>
                </li>

         <li>
                <?php
                                    $sql = "select * from feature where fet_id = '3' and fet_enable != '0' ";
									$query=mysqli_query($link,$sql) or die("Can't Query1");
									$num_rows=mysqli_num_rows($query);
									for ($i=0; $i<$num_rows; $i++) {
										$result=mysqli_fetch_array($query);
                                        $fet_id = $result['fet_id'];
												echo "<a $menu5 href='#'>$result[fet_name]</a>";
									}
									?>
                <ul class="dropdown scrollable-menu">
                   <?php
                                    $sql = "select * from botanic_plant_category where cat1_parent = '0' ";
									$query=mysqli_query($link,$sql) or die("Can't Query");
									$num_rows=mysqli_num_rows($query);
									for ($i=0; $i<$num_rows; $i++) {
										$result=mysqli_fetch_array($query);
                                        $cat1_id = $result['cat1_id'];
												echo "<li><a href='showcat.php?catid=$result[cat1_id]'>$result[cat1_name]</a></li>";
												$sql2 = "select * from botanic_plant_category ";
												$query2=mysqli_query($link,$sql2) or die("Can't Query2");
												$num_rows2=mysqli_num_rows($query2);
												for ($j=0; $j<$num_rows2; $j++) {
													$result2=mysqli_fetch_array($query2);
													if($result2['cat1_parent'] == $cat1_id)
													{
														echo "<li><a href='showcat.php?catid=$result2[cat1_id]'>--$result2[cat1_name]</a></li>";
													}
												}
									}
									?>
                </ul>
            </li>


            <li><a <?php echo $menu6;?> href="musenews.php">กิจกรรม</a></li>
            <li><a <?php echo $menu7;?> href="contact.php">ติดต่อเรา</a></li>

            </ul>
            <!-- End Navigation List -->
          </div>


          <script>


            $(document).ready(function()
            {
              $('.dropdown-submenu a.test').hover(function(e){
              $(this).next('ul').toggle();


                                }, function() {



                e.stopPropagation();
                e.preventDefault();
              });
            });
          </script>
