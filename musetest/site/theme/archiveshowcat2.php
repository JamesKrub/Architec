<?php //include "connect.php" ; ?>
<?
//$menu2_1=$menu2_2=$menu1_1=$menu1_2=$menu1_3=$menu1_4="";
$menu=$menu1=$menu2=$menu3=$menu4=$menu5=$menu6=$menu7="";

if(isset($_GET['menu'])){
$menu=$_GET['menu'];
switch ($menu) {
    case '1':
        $menu1="class=active";
        break;
    case '2':
        $menu2="class=active";
        break;
    case '3':
        $menu3="class=active";
        break;
    case '4':
        $menu4="class=active";
        break;
    case '5':
        $menu5="class=active";
        break;
    case '6':
        $menu6="class=active";
        break;
    case '7':
        $menu7="class=active";
        break;
    default:
        $menu7="class=active";
        break;
}
}else{
   $menu4="class=active";
}
?>
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>


  <!-- Basic -->
  <title>Digital Archive | จดหมายเหตุดิจิตัล</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="Margo - Responsive HTML5 Template">
  <meta name="author" content="">


  <?php include "head.php" ; ?>
  <!-- Margo JS  -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/jquery.migrate.js"></script>
  <script type="text/javascript" src="js/modernizrr.js"></script>
  <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="js/jquery.appear.js"></script>
  <script type="text/javascript" src="js/count-to.js"></script>
  <script type="text/javascript" src="js/jquery.textillate.js"></script>
  <script type="text/javascript" src="js/jquery.lettering.js"></script>
  <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="js/jquery.parallax.js"></script>
  <script type="text/javascript" src="js/mediaelement-and-player.js"></script>
  <script type="text/javascript" src="js/jquery.slicknav.js"></script>
  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>

  <!-- Container -->
  <div id="container">

    <!-- Start Header -->
    <div class="hidden-header"></div>
    <header class="clearfix">

      <!-- Start Top Bar -->
      <?php include "topbar.php" ; ?>  
      <!-- End Top Bar -->

      <!-- Start Header ( Logo & Naviagtion ) -->
      <div class="navbar navbar-default navbar-top">
          <?php include "menu.php" ; ?>  
    

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
            <a href="index.html">Home</a>
            <ul class="dropdown">
              <li><a href="index.html">Home Main Version</a>
              </li>
              <li><a href="index-01.html">Home Version 1</a>
              </li>
              <li><a href="index-02.html">Home Version 2</a>
              </li>
              <li><a href="index-03.html">Home Version 3</a>
              </li>
              <li><a href="index-04.html">Home Version 4</a>
              </li>
              <li><a href="index-05.html">Home Version 5</a>
              </li>
              <li><a href="index-06.html">Home Version 6</a>
              </li>
              <li><a href="index-07.html">Home Version 7</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="active" href="about.html">Pages</a>
            <ul class="dropdown">
              <li><a class="active" href="about.html">About</a>
              </li>
              <li><a href="services.html">Services</a>
              </li>
              <li><a href="right-sidebar.html">Right Sidebar</a>
              </li>
              <li><a href="left-sidebar.html">Left Sidebar</a>
              </li>
              <li><a href="404.html">404 Page</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Shortcodes</a>
            <ul class="dropdown">
              <li><a href="tabs.html">Tabs</a>
              </li>
              <li><a href="buttons.html">Buttons</a>
              </li>
              <li><a href="action-box.html">Action Box</a>
              </li>
              <li><a href="testimonials.html">Testimonials</a>
              </li>
              <li><a href="latest-posts.html">Latest Posts</a>
              </li>
              <li><a href="latest-projects.html">Latest Projects</a>
              </li>
              <li><a href="pricing.html">Pricing Tables</a>
              </li>
              <li><a href="accordion-toggles.html">Accordion & Toggles</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="portfolio-3.html">Portfolio</a>
            <ul class="dropdown">
              <li><a href="portfolio-2.html">2 Columns</a>
              </li>
              <li><a href="portfolio-3.html">3 Columns</a>
              </li>
              <li><a href="portfolio-4.html">4 Columns</a>
              </li>
              <li><a href="single-project.html">Single Project</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="blog.html">Blog</a>
            <ul class="dropdown">
              <li><a href="blog.html">Blog - right Sidebar</a>
              </li>
              <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a>
              </li>
              <li><a href="single-post.html">Blog Single Post</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="contact.html">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header ( Logo & Naviagtion ) -->

    </header>
    <!-- End Header -->


    <!-- Start Page Banner -->
    <div class="page-banner" style="padding:40px 0; background: url(images/coming-soon-bg.png) center #f9f9f9;">
      <div class="container">
        <div class="row">
          
          <div class="col-sm-12">
            <ul class="breadcrumbs">
              <li><a href="../site/index.php">หน้าแรก</a></li>
              <li>วัตถุจัดแสดง</li>
<!--            <li>    -->
                 <?php
         $refcode = $_REQUEST['refcode'];
        // $refc = substr($refcode,-6,1); 
       //  $sql5 = "select distinct obj_category  FROM muse_object WHERE obj_refcode = '$refcode'   ";
         $sql5 = "select distinct `muse_object`.`obj_category` , `muse_category`.`cat1_id` , `muse_category`.`cat1_name` , `muse_object`.`obj_title` FROM `muse_object` , `muse_category` WHERE `muse_object`.`obj_category` = `muse_category`.`cat1_id` and `muse_object`.`obj_refcode` = '$refcode'  ";
         			$query5=mysql_query($sql5) or die("Can't Query");
         			$num_rows5=mysql_num_rows($query5);
	     			for ($i=0; $i<$num_rows5; $i++) {
         				$result5=mysql_fetch_array($query5);	
         				$objc = $result5['obj_category'];
                        $objn = $result5['cat1_name'];
                        $objtitle = $result5['obj_title'];
                        $objid = $result5['obj_id'];
         				//$downloadfile = $result5['obj_downloadfile'];
         				}
				   if($objc != "")
				   {
				        echo "<li><a href='../../site/test/museshowcat.php?catid=$objc''>$objn</a></li>";
                        echo "<li>$objtitle</a>";
				    }
				    else
				    {
						//echo "<p><input type='button' value ='noดาวน์โหลด' class='btn btn-info btn-mini' ></p>";
				    }
        
          
                  
 ?>          
<!--                </li>-->
                
                
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->


    <!-- Start Content -->
    <div id="content">
      <div class="container">
<!--       <div class="box box-primary">-->
           <?

           $sql = "select count(*) FROM archive_pic where obj_refcode = '$refcode' and obj_id ='0' ";
		   $query=mysql_query($sql) or die("Can't Query");
		   $num_rows=mysql_num_rows($query);
           //echo "numrows = $num_rows xxxx";
		   $total_rec=mysql_result($query,0,0); // เก็บจำนวน Record ทั้งหมดไว้ใน $total_page
		   $p_size=30; //กำหนดจำนวน Record ที่จะแสดงผลต่อ 1 เพจ
		   $total_page=(int)($total_rec/$p_size);
		   //ทำการหารหาจำนวนหน้าทั้งหมดของข้อมูล ในที่นี้ให้หารออกมาเป็นเลขจำนวนเต็ม
		   if(($total_rec % $p_size)!=0){ //ถ้าข้อมูลมีเศษให้ทำการบวกเพิ่มจำนวนหน้าอีก 1
   		   $total_page++;
		   }
		   if(empty($_GET['page'])){
		   /*
			ถ้่ายังไม่มีการส่งค่ามาเพื่อทำการเลือกดูหน้าข้อมูลใด ๆ ให้กำหนดเป็นหน้าแรกของข้อมูลเป็นค่า Default และให้ Record แรกเริ่มที่ Record ที่ 0 หรือ Record แรก
		   */
   			$page=1;
   			$start=0;
			}else{
			/*
			หากมีการส่งค่ามาเพื่อเลือกดูหน้าข้อมูลหน้าใดให้ทำการคำนวน โดยใช้ จำนวนข้อมูลที่ต้องการแสดงต่อ 1 เพจ คูณกับ หน้าข้อมูลที่ต้องการเลือกชม ลบด้วย 1
			*/
   			$page=$_GET['page'];
   			$start=$p_size*($page-1);
			}
          //echo "<div class='col-md-12'>";
         // echo "<div class='col-md-3 text-center'>";
         $sql = "select * FROM archive_pic where obj_refcode = '$refcode' and obj_id ='0'  LIMIT $start , $p_size";
         $query=mysql_query($sql) or die("Can't Query");
         $num_rows=mysql_num_rows($query);
         $line =0;
	     for ($i=0; $i<$num_rows; $i++) {
         $result=mysql_fetch_array($query);		
         $refcode = $result['obj_refcode'];
         $nrefcode = preg_replace('/[^a-z0-9\_\- ]/i', '', $refcode);    
         //$titlesort = trim($result['obj_title']);
         //echo "$result[pic_name] <br>";
         $objpic = $result['thumb_name'];
         $picid = $result['pic_id'];
         $pictype = explode(".", $result['pic_name']);
         $filetype = $pictype[1];
        // $cover =$result[obj_cover];  
          
            // echo "line = $line  file = $filetype  <br>";
               
         if($num_rows == 0)
         {
          $objpic = "../../pic/big/$nrefcode/blank.jpg";
         }
           
         else
         {
            $objpics = $result['pic_name'];
            if  ($objpics == ""){
            $objpic = "../../pic/big/blank.jpg";   
            }
            else
             {
             $objpic = "../../pic/big/$nrefcode/$objpics";         
             }
         //$objpic = "../../pic/thumbmuse/$nrefcode/$objpics";

         }
       						
             
             
         $line =$line+1;
         if($line <= 15)
//         if($line = 1  $line < $line+1; $line++ )   
          {
        // echo "line = $line  file = $filetype <br>";
           
            if($filetype =='jpg'){
                echo "<div class='col-md-3'> 
                    <a href='museshowdetail.php?picid=$picid&refcode=$refcode'><img src='$objpic' class='img-polaroid' style='margin:5px 0px 5px;' alt='' height='200' > </a>               
                   
                    </div> ";
            }
              
            else
            {
                
            }
              
          }
        //echo "</div>";     
         else
          {
        //echo "</div>";
        //echo "</div>";
          $line = 1;
             //echo "line = $line";
             if($filetype =='jpg'){
//                echo "<div class='col-md-3 text-center'> 
//                    <a href='museshowdetail.php?picid=$picid&refcode=$refcode'><img src='$objpic' class='img-polaroid' style='margin:5px 0px 15px;' alt=''> </a>               
//                    
//                    </div> ";
            }  
            else
            {
                
            }
          }
                              
}

//echo "</div>";
          
        



				?>
<!--          </div>    -->
          
<!--  <div class='col-md-12'>  -->
<div class='row'>
        <div class='col-md-12'>
<?php
 // echo "<table width=90% border=0>";
//echo "<tr>";
 $sql3 = "SELECT * FROM `archive_pic` WHERE obj_refcode = '$refcode' ORDER BY listorder ";
         $query3=mysql_query($sql3) or die("Can't Query2");
         $num_rows3=mysql_num_rows($query3);

	//	echo "x $num_rows3 x <br>";
	     for ($i=0; $i<$num_rows3; $i++) {
			     $result3=mysql_fetch_array($query3);
			     $filetype = explode(".", $result3['pic_name']);
			     $filetype = $filetype[1];
				 //$cover =$result3[obj_cover];

				 if($line < 3)
			 {
				 //echo "<td align='center'>";
                // echo "<img src ='../../pic/thumbmuse/thumbmuse-$result3[pic_name]' width='50'> $result3[pic_id] $result3[obj_refcode]$result3[pic_name] <br>";

				 
				  if($filetype =='mp4')
				  {
				  			//echo "pic/bigmuse/$refcode/$result3[pic_name]";
							echo "<video width='200'  controls>
  								  <source src='../../pic/bigmuse/$refcode/$result3[pic_name]' type='video/mp4'>
  								  <object data='../../pic/bigmuse/$refcode/$result3[pic_name]' width='200' >

         						  </object>
								</video>";
						    echo "<br>";
				  }
				  else if($filetype =='mp3')
				  {
				  		//echo "$result3[pic_name] <br>";
				  		//echo "<a href ='player.php?picname=$result3[pic_name]'>$result3[pic_name]</a>";
				  		echo "<audio width='200' controls>
  				  		<source src='../../pic/bigmuse/$refcode/$result3[pic_name]' type='audio/mpeg'>
  			     		<embed src='../../pic/bigmuse/$refcode/$result3[pic_name]' width='200'>
						</audio>";
                  		echo "<br>";
				  }
				  
			//echo "</td>";

			$line = $line+1;
			 }
			 else
             {
				 //echo "<td align='center'>";

				  if($filetype =='mp4')
				  {
				  		//echo "pic/bigmuse/$refcode/$result3[pic_name]";
						echo "<video width='200'  controls>
  							  <source src='../../pic/bigmuse/$refcode/$result3[pic_name]' type='video/mp4'>
  							  <object data='../../pic/bigmuse/$refcode/$result3[pic_name]' width='200' >
  							  </object>
							  </video>";
						echo "<br>";
				  }
				  else if($filetype =='mp3')
				  {
				  		//echo "$result3[pic_name] <br>";
				  		//echo "<a href ='player.php?picname=$result3[pic_name]'>$result3[pic_name]</a>";
				  		echo "<audio width='200' controls>
  				  			<source src='../../pic/bigmuse/$refcode/$result3[pic_name]' type='audio/mpeg'>
  			     			<embed src='../../pic/bigmuse/$refcode/$result3[pic_name]' width='200'>
							</audio>";
                  		echo "<br>";
				  }
				  else if($filetype =='pdf')
				  {
				  		//echo "$result3[pic_name] <br>";
				  		echo "<a href ='../../pic/bigmuse/$refcode/$result3[pic_name]' target='_blank'><img src='images/pdf-icon.png' width='150'></a>";
                  echo "<br>";
				  }

			//echo "</td>";
			//echo "</tr>";
				$line = 0;
			 }
		 }
//echo "</table>";     
?>
            </div>
      </div>
          
<div class="hr1" style="margin-bottom:50px;"></div>            
<div class="container">
                   <div class='row'>
        <div class='col-md-12'>
                    <?
                    $sql = "select * FROM archive_object where obj_refcode = '$refcode' ";
         			$query=mysql_query($sql) or die("Can't Query");
         			$num_rows=mysql_num_rows($query);
         			$line =1;
	     			for ($i=0; $i<$num_rows; $i++) {
         				$result=mysql_fetch_array($query);		
         				$title = $result['obj_title'];
         				$physicals = $result['obj_physicals'];
         				//$keyword = $result['obj_keyword'];
                        $extent = $result['obj_extent'];
         			}
                    ?>  
                    <p><? echo "<h5 class='text-info'>$title</h5>"; ?></p>  
                    <p><? echo "$physicals";?></p> 
                        
                    <p><? echo "<h5 class='text-info'>ขนาด</h5>"; ?></p>      
                    <p><? echo "$extent";?></p> 
                   
                   
                    <hr>
                    
 
                    </div>
          </div>

          
            </div>
          </div>

          <!-- Divider -->
        

         

          <!-- Divider -->
          <div class="hr1" style="margin-bottom:50px;"></div>
        

          <!-- End Team Members -->

          <!-- Divider -->
          <div class="hr1" style="margin-bottom:50px;"></div>

          <!-- Start Clients Carousel -->
          <div class="our-clients">

          </div>
          <!-- End Clients Carousel -->


<!--        </div>-->
<!--      </div>-->
    </div>
    <!-- End content -->


    <!-- Start Footer -->
  <?php include "footer.php" ; ?>  
    <!-- End Footer -->

  </div>
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- Style Switcher -->
  

  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>