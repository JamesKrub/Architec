<?php include "../../admin/object/conf/connectdb.php.inc" ;  ?>
<div class="container">

      <!-- Start Top Bar -->
      <div class="top-bar color-bar">
<!--        <div class="container">-->
          <div class="row">
            <div class="col-md-7">
              <!-- Start Contact Info -->
              <ul class="contact-details">
                <li><a href="#"><i class="fa fa-map-marker"></i> House-54/A, London, UK</a>
                </li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> info@yourcompany.com</a>
                </li>
                <li><a href="#"><i class="fa fa-phone"></i> +12 345 678 000</a>
                </li>
              </ul>
              <!-- End Contact Info -->
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-5">
              <!-- Start Social Links -->
              <ul class="social-list">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a class="dribbble itl-tooltip" data-placement="bottom" title="Dribble" href="#"><i class="fa fa-dribbble"></i></a>
                </li>
                <li>
                  <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a class="flickr itl-tooltip" data-placement="bottom" title="Flickr" href="#"><i class="fa fa-flickr"></i></a>
                </li>
                <li>
                  <a class="tumblr itl-tooltip" data-placement="bottom" title="Tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                </li>
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a class="vimeo itl-tooltip" data-placement="bottom" title="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                </li>
                <li>
                  <a class="skype itl-tooltip" data-placement="bottom" title="Skype" href="#"><i class="fa fa-skype"></i></a>
                </li>
              </ul>
              <!-- End Social Links -->
            </div>
            <!-- .col-md-6 -->
<!--          </div>-->
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .top-bar -->
 </div>    
 <div class="container">   
      <!-- End Top Bar -->    
      <div class="navbar navbar-default navbar-top">
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
									$query=mysql_query($sql) or die("Can't Query");
									$num_rows=mysql_num_rows($query);
									for ($i=0; $i<$num_rows; $i++) {
										$result=mysql_fetch_array($query);
                                        $bg_desc = $result['bg_desc'];
                                        $bg_name = $result['bg_name'];      
												//echo "<p>$result[bg_desc]</p>";
											 echo "$result[bg_name]";	
                                    }
                //echo "$result[bg_name]";
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
<!--
             <li>
                <a <?php //echo $menu2;?> href="#">เกี่ยวกับเรา </a>
                <ul class="dropdown">
                  <li ><a href="background_muse.php">ประวัติพิพิธภัณฑ์</a></li>
                  <li ><a href="background_archive.php">ประวัติจดหมายเหตุ</a></li>
                </ul>
              </li>    
-->
              <li>
                   
                  
                <?php
                                    $sql = "select * from muse_menu where menu_id = '1' and menu_enable != '0' ";
									$query=mysql_query($sql) or die("Can't Query1");
									$num_rows=mysql_num_rows($query);
									for ($i=0; $i<$num_rows; $i++) {
										$result=mysql_fetch_array($query);
                                        $menu_id = $result['menu_id'];
												echo " <a $menu2 href='background_muse.php'>$result[menu_name]</a>";
												
												}
							
                  
									?>
                    <ul class="dropdown">
                     <?php
//                                    $sql = "select * from muse_category where cat1_type = 0";
//									$query=mysql_query($sql) or die("Can't Query1");
//									$num_rows=mysql_num_rows($query);
//									for ($i=0; $i<$num_rows; $i++) {
//										$result=mysql_fetch_array($query);
//                                        $cat1_id = $result['cat1_id'];
//												echo "<li><a href='museshowcat.php?catid=$result[cat1_id]'>$result[cat1_name]</a></li>";
//												$sql2 = "select * from muse_category ";
//												$query2=mysql_query($sql2) or die("Can't Query2");
//												$num_rows2=mysql_num_rows($query2);
//												for ($j=0; $j<$num_rows2; $j++) {
//													$result2=mysql_fetch_array($query2);
//													if($result2['cat1_type'] == $cat1_id)
//													{
//														echo "<li class='active'><a $menu3 href='museshowcat.php?catid=$result2[cat1_id]'>--$result2[cat1_name]</a></li>";
//													}
//												}
//									}
									?>
                </ul>
                </li> 
                 <li>
                <?php
                                    $sql = "select * from muse_menu where menu_id = '2' and menu_enable != '0' ";
									$query=mysql_query($sql) or die("Can't Query1");
									$num_rows=mysql_num_rows($query);
									for ($i=0; $i<$num_rows; $i++) {
										$result=mysql_fetch_array($query);
                                        $menu_id = $result['menu_id'];

                                        echo "<a $menu3 href='museshowcatall.php'>$result[menu_name]</a>";
									}
									?>
                <ul class="dropdown">
                   <?php
                                    $sql = "select * from muse_category where cat1_parent = 0";
									$query=mysql_query($sql) or die("Can't Query1");
									$num_rows=mysql_num_rows($query);
									for ($i=0; $i<$num_rows; $i++) {
										$result=mysql_fetch_array($query);
                                        $cat1_id = $result['cat1_id'];
												echo "<li><a href='museshowcat.php?catid=$result[cat1_id]'>$result[cat1_name]</a></li>";
												$sql2 = "select * from muse_category ";
												$query2=mysql_query($sql2) or die("Can't Query2");
												$num_rows2=mysql_num_rows($query2);
												for ($j=0; $j<$num_rows2; $j++) {
													$result2=mysql_fetch_array($query2);
													if($result2['cat1_parent'] == $cat1_id)
													{
														echo "<li class='active'><a $menu3 href='museshowcat.php?catid=$result2[cat1_id]'>--$result2[cat1_name]</a></li>";
													}
												}
									}
									?>
                </ul>
                </li> 
                
         <li>
                <?php
                                   $sql = "select * from muse_menu where menu_id = '3' and menu_enable != '0' ";
									$query=mysql_query($sql) or die("Can't Query1");
									$num_rows=mysql_num_rows($query);
									for ($i=0; $i<$num_rows; $i++) {
										$result=mysql_fetch_array($query);
                                        $menu_id = $result['menu_id'];
											echo "<a $menu4 href='musenews.php'>$result[menu_name]</a>";
									}
									?>
                <ul class="dropdown">
                   <?php
//                                    $sql = "select * from botanic_plant_category where cat1_parent = '0' ";
//									$query=mysql_query($sql) or die("Can't Query");
//									$num_rows=mysql_num_rows($query);
//									for ($i=0; $i<$num_rows; $i++) {
//										$result=mysql_fetch_array($query);
//                                        $cat1_id = $result['cat1_id'];
//												echo "<li><a href='showcat.php?catid=$result[cat1_id]'>$result[cat1_name]</a></li>";
//												$sql2 = "select * from botanic_plant_category ";
//												$query2=mysql_query($sql2) or die("Can't Query2");
//												$num_rows2=mysql_num_rows($query2);
//												for ($j=0; $j<$num_rows2; $j++) {
//													$result2=mysql_fetch_array($query2);
//													if($result2['cat1_parent'] == $cat1_id)
//													{
//														echo "<li><a href='showcat.php?catid=$result2[cat1_id]'>--$result2[cat1_name]</a></li>";
//													}
//												}
//									}
									?>
                </ul>
            </li> 
            <li>      
                <?php
             
                                    $sql = "select * from muse_menu where menu_id = '4' and menu_enable != '0' ";
									$query=mysql_query($sql) or die("Can't Query1");
									$num_rows=mysql_num_rows($query);
									for ($i=0; $i<$num_rows; $i++) {
										$result=mysql_fetch_array($query);
                                        $menu_id = $result['menu_id'];
											echo "<a $menu5 href='info.php'>$result[menu_name]</a>";
									}
               
									?>
                </li>
<!--            <li> <?php //echo $menu6;?>><a href="contact.php">ติดต่อเรา</a></li>    -->
               <li>
<!--                <a class="active" href="index.php">หน้าแรก</a>-->
                <a <?php echo $menu6;?> href="contact.php">ติดต่อเรา</a>
              </li>
            </ul>
            <!-- End Navigation List -->
          </div>
        </div>  