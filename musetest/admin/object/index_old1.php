
<?php
require('connect.php');

error_reporting(0);
session_name('tzLogin');
session_set_cookie_params(2*7*24*60*60);
session_start();

$id = $_SESSION['id'];
$usr = $_SESSION['usr'];

?>
<?php if(!isset($_SESSION['usr'])) {
	header("location: login.php");
} ?>
<?php
if($_SESSION['id'] && !isset($_COOKIE['tzRemember']) && !$_SESSION['rememberMe'])
{
	// If you are logged in, but you don't have the tzRemember cookie (browser restart)
	// and you have not checked the rememberMe checkbox:

	$_SESSION = array();
	session_destroy();

	// Destroy the session
}
if(isset($_GET['logoff']))
{
	$_SESSION = array();
	session_destroy();

	header("Location: login.php");
	exit;
}
?>
<!------------------ End Get Session ------------------>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Digital Archive | จดหมายเหตุดิจิตัล</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <!-- Bootstrap Image Gallery
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->
		<link rel="stylesheet" href="css/gallery/blueimp-gallery.min.css">
		<link rel="stylesheet" href="css/gallery/bootstrap-image-gallery.min.css">
		<link rel="stylesheet" href="css/gallery/blueimp-gallery-indicator.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
				<body class="skin-blue">
		        <!-- header logo: style can be found in header.less -->
		        <header class="header">
		            <a href="index.php" class="logo">
		                <!-- Add the class icon to your logo image or logo icon to add the margining -->
		                Digital Archive
		            </a>
		            <!-- Header Navbar: style can be found in header.less -->
		            <nav class="navbar navbar-static-top" role="navigation">
		                <!-- Sidebar toggle button-->
		                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </a>
		                <div class="navbar-right">
		                    <ul class="nav navbar-nav">
		                        <!-- User Account: style can be found in dropdown.less -->
		                        <li class="dropdown user user-menu">
		                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                                <i class="glyphicon glyphicon-user"></i>
		                                <span> <?php echo $_SESSION['usr'] ? $_SESSION['usr'] : 'Guest';?> <i class="caret"></i></span>
		                            </a>
		                            <ul class="dropdown-menu">
		                                <!-- User image -->
		                                <li class="user-header bg-light-blue">
											<?php

											if($_SESSION['id'])
											{

											  include("connect.php");
												$sql = "select * from tz_members where id = '$id'   ";
												$query = mysqli_query($link,$sql) or die("Can't Query");
												$result=mysqli_fetch_array($query);
												echo "<img src ='../../pic/profile/profile-$result[mem_pic]' class='img-circle' alt='User Image'>";
											}
											?>
		                                    <p>
		                                        <?php echo $_SESSION['usr'] ? $_SESSION['usr'] : 'Guest';?>
		                                        <small>
													<?php
													if($_SESSION['id'])
													{
														include("connect.php");
														$sql = "select * from tz_members where id = '$id'   ";
														$query=mysqli_query($link,$sql) or die("Can't Query");
														$result=mysqli_fetch_array($query);
														echo $result['email'];
													}
													?>
												</small>
		                                    </p>
		                                </li>
		                                <!-- Menu Footer-->
		                                <li class="user-footer">
											<div class="pull-left">
		                                        <a href="user.php" class="btn btn-default btn-flat">Profile</a>
		                                    </div>
		                                    <div class="pull-right">
		                                        <a href="?logoff" class="btn btn-default btn-flat">Sign out</a>
		                                    </div>
		                                </li>
		                            </ul>
		                        </li>
		                    </ul>
		                </div>
		            </nav>
		        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
							<?php
							if($_SESSION['id'])
							{

								$sql = "SELECT * from tz_members where id = '$id'   ";
								$query = mysqli_query($link,$sql) or die("----");
								$result = mysqli_fetch_array($query);

								echo "<img src ='../../pic/profile/profile-$result[mem_pic]' class='img-circle' alt='User Image'>";

							}
							?>
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo $_SESSION['usr'] ? $_SESSION['usr'] : 'Guest';?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="index.php" method="post" role="search" name="form1" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="s" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
						<!-----  Menu --------->
						<?php

						if($_SESSION['id'])
						{
						############## Menu  Login Already ############
						include('menu.php');
						}
						?>
						<!---- End of Menu -------->
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
						คลังข้อมูลเพื่อการอนุรักษ์

                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-home"></i> หน้าแรก</a></li>
                    </ol>
                </section>

                <!-- Main content -->
				<section class="content">


					 <!-- Small boxes (Stat box) -->
					<?php //including the database connection file


					$sql = "SELECT * FROM archive_object";
					$result = mysqli_query($link,$sql) or die("1");
					$objnum = mysqli_num_rows($result);

					$countdownload = 0;
					$query = mysqli_query($link,$sql) or die("2");
					$num_rows = mysqli_num_rows($query);

						     for ($i=0; $i<$num_rows; $i++) {
					         $result = mysqli_fetch_array($query);
					         $countdownload = $countdownload+$result['obj_countdownload'];
					         }

								// foreach ($num_rows as $value) {
								//
								// $result = mysqli_fetch_array($query);
								// $countdownload = $countdownload+$result['obj_countdownload'];
								// }

					$sql2 = "SELECT * from archive_news";
					$query2 = mysqli_query($link,$sql2) or die("1");
					$newsnum = mysqli_num_rows($query2);

					$sql3 = "SELECT * from archive_stat";
					$query3 = mysqli_query($link,$sql3) or die("2");
					$usernum =mysqli_num_rows($query3);

					$sql4 = "SELECT * from archive_pic";
					$query4=mysqli_query($link,$sql4) or die("5");
					$picnum=mysqli_num_rows($query4);

					$sql5 = "SELECT * from muse_object";
					$query5=mysqli_query($link,$sql5) or die("55");
					$musenum=mysqli_num_rows($query5);


					?>
					                    <div class="row">
					                        <div class="col-lg-3 col-xs-6">
					                            <!-- small box -->
					                            <div class="small-box bg-aqua">
					                                <div class="inner">
					                                    <h3>
					                                        <?php echo $objnum; ?>
					                                    </h3>
					                                    <p>
					                                        เอกสารจดหมายเหตุ  <?php echo "/".$picnum."ภาพ"; ?>
					                                    </p>
					                                </div>
					                                <div class="icon">
					                                    <i class="ion ion-bag"></i>
					                                </div>
					                                <a href="showobj.php" class="small-box-footer">
					                                    รายละเอียดเพิ่มเติม <i class="fa fa-arrow-circle-right"></i>
					                                </a>
					                            </div>
					                        </div><!-- ./col -->
					                        <div class="col-lg-3 col-xs-6">
					                            <!-- small box -->
					                            <div class="small-box bg-green">
					                                <div class="inner">
					                                    <h3>
					                                        <?php echo $musenum;?><sup style="font-size: 20px"></sup>
					                                    </h3>
					                                    <p>
					                                        วัตถุจัดแสดง
					                                    </p>
					                                </div>
					                                <div class="icon">
					                                    <i class="ion ion-stats-bars"></i>
					                                </div>
					                                <a href="showmuse.php" class="small-box-footer">
					                                    รายละเอียดเพิ่มเติม <i class="fa fa-arrow-circle-right"></i>
					                                </a>
					                            </div>
					                        </div><!-- ./col -->
					                        <div class="col-lg-3 col-xs-6">
					                            <!-- small box -->
					                            <div class="small-box bg-yellow">
					                                <div class="inner">
					                                    <h3>
					                                        <?php echo $countdownload; ?>
					                                    </h3>
					                                    <p>
					                                        จำนวนการดาวน์โหลด
					                                    </p>
					                                </div>
					                                <div class="icon">
					                                    <i class="ion ion-person-add"></i>
					                                </div>
					                                <a href="statreport_archive.php" class="small-box-footer">
					                                    รายละเอียดเพิ่มเติม <i class="fa fa-arrow-circle-right"></i>
					                                </a>
					                            </div>
					                        </div><!-- ./col -->
					                        <div class="col-lg-3 col-xs-6">
					                            <!-- small box -->
					                            <div class="small-box bg-red">
					                                <div class="inner">
					                                    <h3>
					                                        <?php echo $newsnum; ?>
					                                    </h3>
					                                    <p>
					                                        ข่าวประชาสัมพันธ์
					                                    </p>
					                                </div>
					                                <div class="icon">
					                                    <i class="ion ion-pie-graph"></i>
					                                </div>
					                                <a href="shownews.php" class="small-box-footer">
					                                    รายละเอียดเพิ่มเติม <i class="fa fa-arrow-circle-right"></i>
					                                </a>
					                            </div>
					                        </div><!-- ./col -->
					                    </div><!-- /.row -->
					<br>
					                    <!-- Main row -->
					<div class="row">
						<div class="col-md-12">

<!----------------- Process ----------------->

        <?php
	 if($_SESSION['id'])
	 {
   	#############  Login Already ############
//	echo "<h1> You are registered and logged in!</h1>";
 $s= $_REQUEST['s'];


//including the database connection file
include("connect.php");

////////// Check User /////////
//$sql7 = "SELECT * FROM tz_members WHERE id = '$id' ";
//$result7 = mysqli_query($link,$sql7) or die("1");
//$objnum = mysqli_num_rows($result7);

$sql6 = " SELECT `permission` from `tz_members` where id = '$id' ";

            $query6 =  mysqli_query($link,$sql6);
            while($row6 = mysqli_fetch_array($query6,MYSQLI_ASSOC))
            {
                $permission= $row6['permission'];
               // $osm_lname= $row1['LNAME'];
            }
////////// End Check User ///////


if($s!='')
//echo "ไอดีที่ถูกส่งมาคือ ".$id."<br> ชื่อผู้ใช้คือ ".$usr;
		{

//fetching data in descending order (lastest entry first)
  //$sql = "SELECT * FROM rcy_pic p, rcy_object o WHERE p.obj_refcode = o.obj_refcode group by o.obj_refcode order by o.obj_refcode DESC;";
  			if(($permission == 'admin') or ($permission == 'superadmin') or ($permission =='editor'))
			{

             $sql = "SELECT * FROM  archive_object  Where obj_title like '%$s%' group by obj_refcode order by  obj_id DESC Limit 0,20;";
			}
			else if ($permission =='user')
			{
			$sql = "SELECT * FROM  archive_object  Where obj_title like '%$s%'  and user_id = '$id' group by obj_refcode order by  obj_id DESC Limit 0,20;";
            }
  $query=mysqli_query($sql,$link) or die("55");
   $num_rows=mysqli_num_rows($query);
		}
else
	    {
				if(($permission == 'admin') or ($permission == 'superadmin') or ($permission =='editor'))
			{
				$sql = "SELECT * FROM  archive_object  group by obj_refcode order by  obj_id DESC Limit 0,20;";
			}
			else if ($permission =='user')
			{
				$sql = "SELECT * FROM  archive_object  where user_id ='$id' group by obj_refcode order by  obj_id DESC Limit 0,20;";
			}

  $query=mysqli_query($link,$sql) or die("1111");
   $num_rows=mysqli_num_rows($query);
		}
echo "</form>";
echo "<div class='box box-primary'>"; // Start box-primary
echo "<div class='box-body'>"; // Start box-body
echo "<div id='links'>"
;
echo "<table width='100%' border=0>";
echo "<tr>";
$line =1;

//foreach ($query as $result) {
for ($i=0; $i<$num_rows; $i++) {
	$result=mysqli_fetch_array($query);
	$piccode = $result['obj_refcode'];
	$sql2 = "SELECT * FROM  archive_pic  WHERE obj_refcode = '$piccode' Limit 0,1 ";
	$query2=mysqli_query($link,$sql2) or die("55");
	$num_rows2=mysqli_num_rows($query2);
	$result2=mysqli_fetch_array($query2);
$filetype = explode(".", $result2['pic_name']);
$filetype = $filetype[1];

    if($num_rows2 > 0 )
		{
		if(($filetype == 'jpg') or ($filetype == 'JPG') or ($filetype =='jpeg') or ($filetype =='png') or ($filetype =='PNG'))
			{

				$pic = "thumb-".$result2[pic_name];
				$bigpic = $result2[pic_name];
				$thumb = $result2[thumb_name];
				$refcode = $result2[obj_refcode];
				// echo "$pic";

			}
		else
			{
				$pic = "blank.gif";
				$bigpic = "blank.jpg";
				$refcode = "";
			}
		}
	else
		{
			$pic = "blank.gif";
			$bigpic = "blank.jpg";
			$refcode = "";
		}

		if($line < 4 )
		 {
						//echo "<td align='center'> <a href=\"watermark.php?photo=pic/big/$refcode/$bigpic\" title=\"$result[obj_title]\" data-gallery><img src='watermark.php?photo=pic/thumb/$refcode/$thumb' width='200'></a><br><a href='edit.php?objectid=$result[obj_id]&refcode=$result2[obj_refcode]' > $result[obj_title]</a></td>";
						echo "<td align='center'> <a href=\"../../pic/big/$refcode/$bigpic\" title=\"$result[obj_title]\" data-gallery><img src='../../pic/thumb/$refcode/$thumb' width='200'></a><br>";
						if (($permission == 'editor') and ($result[user_id] != $id))
						{
						echo "$result2[obj_title]</td>";
						}
						else if (($permission == 'editor') and ($result2[user_id] == $id))
						{
						echo "<a href='edit.php?objectid=$result[obj_id]&refcode=$result2[obj_refcode]' > $result[obj_title]</a></td>";
						}
						else
						{
						echo "<a href='edit.php?objectid=$result[obj_id]&refcode=$result2[obj_refcode]' > $result[obj_title]</a></td>";
						}
						$line = $line+1;
					 }
	 else
		 {
						 //echo "<td align='center'><a href=\"watermark.php?photo=pic/big/$refcode/$bigpic\" title=\"$result[obj_title]\" data-gallery><img src='watermark.php?photo=pic/thumb/$refcode/$thumb' width='200'></a><br><a href='edit.php?objectid=$result[obj_id]&refcode=$result2[obj_refcode]' > $result[obj_title]</a></td>";
						 echo "<td align='center'><a href=\"../../pic/big/$refcode/$bigpic\" title=\"$result[obj_title]\" data-gallery><img src='../../pic/thumb/$refcode/$thumb' width='200'></a><br>";
						 if (($permission == 'editor') and ($result[user_id] != $id))
						 {
						 echo "$result[obj_title]</td>";
						 }
						 else if (($permission == 'editor') and ($result[user_id] == $id))
						 {
						 echo "<a href='edit.php?objectid=$result[obj_id]&refcode=$result2[obj_refcode]' > $result[obj_title]</a></td>";
						 }
						 else
						 {
						 echo "<a href='edit.php?objectid=$result[obj_id]&refcode=$result2[obj_refcode]' > $result[obj_title]</a></td>";
						 }
						 echo "</tr>";
			 echo "<tr>";
			 $line = 1;
		 }

}

echo "</table>";



/// museum

// end of museum


echo "</div>";
echo "</div>"; // End box-body
echo "</div>"; // End box-primary
echo "
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id='blueimp-gallery' class='blueimp-gallery'>
    <!-- The container for the modal slides -->
    <div class='slides'></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class='title'></h3>
    <a class='prev'>‹</a>
    <a class='next'>›</a>
    <a class='close'>×</a>
    <a class='play-pause'></a>
    <ol class='indicator'></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class='modal fade'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title'></h4>
                </div>
                <div class='modal-body next'></div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-primary pull-left prev'>
                        <i class='glyphicon glyphicon-chevron-left'></i>
                        Previous
                    </button>
					<button type='button' class='btn btn-default play-pause'>
                        <i class='glyphicon glyphicon glyphicon-play'></i>

                    </button>
					<button type='button' class='btn btn-default play-pause'>
                        <i class='glyphicon glyphicon glyphicon-pause'></i>

                    </button>
                    <button type='button' class='btn btn-primary next'>
                        Next
                        <i class='glyphicon glyphicon-chevron-right'></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
";

     }


                            ?>

<!------->
    </div>
</div>
<!-- /.row (main row) -->


  <div class="box box-primary">
	<div class="box-body">
		<div class="row">
    <?php
         $sql9 = "SELECT `muse_object`.`obj_refcode`, `muse_object`.`obj_id`, `muse_object`.`obj_title` FROM `muse_object` LEFT JOIN `muse_pic` ON `muse_object`.`obj_refcode` = `muse_pic`.`obj_refcode` WHERE `muse_pic`.`obj_cover` = '1' LIMIT 0,8 ";
        $query9 = mysqli_query($link,$sql9) or die("55");
        $num_rows9 = mysqli_num_rows($query9);

  $line =1;

		for ($i=0; $i<$num_rows9; $i++) {
		$result9 =mysqli_fetch_array($query9);
		$piccode = $result9['obj_refcode'];
        $objid =  $result9['obj_id'];
        // echo "$objid <br/>";

		$sql10 = "SELECT * FROM  muse_pic  WHERE obj_refcode = '$piccode' Limit 0,1 ";
		$query10=mysqli_query($link,$sql10) or die("55");
		$num_rows10=mysqli_num_rows($query10);
		$result10=mysqli_fetch_array($query10);
	$filetype = explode(".", $result10[pic_name]);
	$filetype = $filetype[1];
        if($num_rows10 >0 )
			{
			if(($filetype == 'jpg') or ($filetype == 'JPG') or ($filetype =='jpeg') or ($filetype =='png'))
				{

					$pic = "thumb-".$result10[pic_name];
					$bigpic = $result10[pic_name];
					$thumb = $result10[thumb_name];
					$refcode2 = $result10[obj_refcode];
					// echo "$pic";

				}
			else
				{
					$pic = "blank.gif";
					$bigpic = "blank.jpg";
					$refcode2 = "";
				}
			}
		else
			{
				$pic = "blank.gif";
				$bigpic = "blank.jpg";
				$refcode2 = "";
			}

?>


				<div class="col-md-3 text-center">
					<a href="../../pic/bigmuse/<?php echo $refcode2."/".$bigpic ?>" title="<?php $result9['obj_title']; ?>" data-gallery><img style="height: 135px !important;" src="../../pic/thumbmuse/<?php echo $refcode2."/".$thumb ?>"></a>
					<br>
					<a href="editmuse.php?objectid=<?php echo $objid; ?>&refcode=<?php echo $refcode2; ?>"><?php echo $result9['obj_title']; ?></a>
				</div><!-- /.col-md-3 -->
    <?php } ?>



</div>
 </div>
     </div>
                </section>
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->

				        <!-- jQuery 2.0.2 -->
				        <script src="js/jquery-2.0.2.min.js"></script>
				        <!-- jQuery UI 1.10.3 -->
				        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
				        <!-- Bootstrap -->
				        <script src="js/bootstrap.min.js" type="text/javascript"></script>
				        <!-- Morris.js charts -->
				        <script src="js/raphael-min.js"></script>
				<!--        <script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>-->
				        <!-- Sparkline -->
				        <script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
				        <!-- jvectormap -->
				        <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
				        <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
				        <!-- jQuery Knob Chart -->
				        <script src="js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
				        <!-- daterangepicker -->
				        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
				        <!-- datepicker -->
				        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
				        <!-- Bootstrap WYSIHTML5 -->
				        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
				        <!-- iCheck -->
				        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

				        <!-- AdminLTE App -->
				        <script src="js/AdminLTE/app.js" type="text/javascript"></script>

				        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
				        <script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>

				        <!-- AdminLTE for demo purposes -->
				        <script src="js/AdminLTE/demo.js" type="text/javascript"></script>

						<!-- Bootstrap Image Gallery
						<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
						<script src="js/gallery/jquery.blueimp-gallery.min.js"></script>
						<script src="js/gallery/bootstrap-image-gallery.min.js"></script>
						<script src="js/gallery/blueimp-gallery-indicator.js"></script>

				    </body>
				</html>
