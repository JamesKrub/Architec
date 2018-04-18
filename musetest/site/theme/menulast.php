<style media="screen">

/*include css by day*/

#nav ul{
    background: #FFFFFF !important;
    padding: 0px !important;
    border-bottom: 1px solid #DDDDDD !important;
    border-right: 1px solid #DDDDDD !important;
    border-left:1px solid #DDDDDD !important;
    border-radius: 0px 0px 3px 3px !important;
    box-shadow: 2px 2px 3px #ECECEC !important;
    -webkit-box-shadow: 2px 2px 3px #ECECEC !important;
    -moz-box-shadow:2px 2px 3px #ECECEC !important;
    width:170px !important;
}

#nav li:hover{
    background: #FFFFFF !important;
}
#nav li a{
    display: block !important;
}
#nav ul li {
    border-right:none !important;
    border-bottom:1px solid #DDDDDD !important
    width:170px !important;
    height:39px !important;
}
#nav ul li a {
    border-right: none !important;
    color:#6791AD !important;
    text-shadow: 1px 1px 1px #FFF !important;
    border-bottom:1px solid #FFFFFF !important;
}


#nav ul li:last-child { border-bottom: none !important;}
#nav ul li:last-child a{ border-bottom: none !important;}
/* Sub menus */

</style>

<style type="text/css">
.black-ribbon {
  position: fixed;
  z-index: 9999;
  width: 70px;
}

@media only all and (min-width: 768px) {
  .black-ribbon {
    width: auto;
  }
}

.stick-left { left: 0; }
.stick-right { right: 0; }
.stick-top { top: 0; }
.stick-bottom { bottom: 0; }

</style>
<img src="images/black_ribbon_top_right.png" class="black-ribbon stick-top stick-right"/>
<?php

// SET COLOR DROP DOWN MUTI BY DAY
$thm_color_sql = " SELECT thm_id , thm_enable , thm_pk_code FROM theme WHERE thm_enable = 1 ";
$thm_color_query = mysqli_query($link,$thm_color_sql) or die("Can't Quer $thm_color_queryy");
$thm_color_num_rows = mysqli_num_rows($thm_color_query);

      for ($thm_color_i=0; $thm_color_i < $thm_color_num_rows; $thm_color_i++) {
                      $thm_color_result = mysqli_fetch_array($thm_color_query);
                      $thm_color_thm_enable = $result['thm_enable'];
                      $thm_color_thm_pk_code = $result['thm_pk_code'];

            if ($thm_color_thm_enable = 1 ) {
               ?>
               <style media="screen">
                 #nav a:hover{color: <?php echo "#".$thm_color_thm_pk_code ?>!important;}

               </style>
               <?php
            }

      }

 ?>
<!-- END -->

<?php include "connectdb2.php" ; ?>
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
                <form autocomplete="on" role="search" method="get" class="searchform" action="#">
                  <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                </form>
              </div>
            </div>
            <!-- End Search -->
            <!-- Start Navigation List -->

            <ul class="nav navbar-nav navbar-right " >

              <li>
                <a <?php echo $menu1;?> href="index.php">หน้าแรก</a>
              </li>

             <li>
                <a <?php echo $menu2;?> href="background_muse.php">เกี่ยวกับเรา </a>
              </li>

              <li>

                <?php


                  $sql = "select * from feature where fet_id = '2' and fet_enable != '0' ";
									$query=mysqli_query($link,$sql) or die("Can't Query1");
									$num_rows=mysqli_num_rows($query);

									for ($i=0; $i<$num_rows; $i++) {
										$result=mysqli_fetch_array($query);
                    $fet_id = $result['fet_id'];

										echo "<a $menu3 href='museshowcatall.php'>$result[fet_name]</a>";}


                            $sql1 = "SELECT * FROM muse_category where cat1_parent = '0' ";
                            $query1=mysqli_query($link,$sql1) or die("Can't Query3"); ?>



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

                                      <?php echo "<a href='museshowcatsub2.php?ac2_id=$value[ac2_id]&ac1_id=$value[ac1_id]'> $value[ac2_name]<span class='caret'></span></a>"; ?>
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
                                <li>    <?php echo "<a href='museshowcat.php?catid=$value[cat1_id]''>$value[cat1_name] </a>"; ?></a></li>
                                <?php } ?>

<?php   }  ?>
                            </ul>
<!-- end -->



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
                <ul class="dropdown">
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

          $(document).ready(function(){
              $("#nav li").hover(
              function(){
                  $(this).children('ul').hide();
                  $(this).children('ul').slideDown('fast');
              },
              function () {
                  $('ul', this).slideUp('fast');
              });
          });
          </script>
