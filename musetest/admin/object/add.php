<?php
error_reporting();
session_name('tzLogin');
session_set_cookie_params(2*7*24*60*60);
session_start();


$id=$_SESSION['id'];
$usr=$_SESSION['usr'];

if(!isset($_REQUEST['cate_2'])) {
  $_REQUEST['cate_2'] = 0;
}
if(!isset($_REQUEST['cate_3'])) {
  $_REQUEST['cate_3'] = 0;
}
?>
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
		<!-- datepicker -->
        <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
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
								include_once("conf/connectdb.php.inc");
								$sql = "select * from tz_members where id = '$id'   ";
								$query=mysqli_query($link,$sql) or die("Can't Query");
								$result=mysqli_fetch_array($link,$query);
								echo "<img src ='pic/profile/profile-$result[mem_pic]' class='img-circle' alt='User Image'>";
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
						เพิ่มเอกสารจดหมายเหตุ
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="showobj.php"><i class="fa fa-dashboard"></i> เอกสารจดหมายเหตุ</a></li>
                        <li class="active">เพิ่มเอกสารจดหมายเหตุ</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Main row -->
                    <div class="row">
						<div class="col-md-12">

<!--------------   Process -->


        <?php
	if($_SESSION['id'])
	{
   	##############  Login Already ############
	#echo "<h1> You are registered and logged in!</h1>";


//including the database connection file
include("connect.php");

$sql = "select * from archive_object";
$query=mysqli_query($link,$sql) or die("Can't a");
$num_rows=mysqli_num_rows($query);

//if($num_rows >= 100)
//{
//echo "MAX 100 Records";
//echo "back to clear";
//die();
//}



	$refcode =$_REQUEST['refcode'];
	$title =$_REQUEST['title'];
  $titleeng = $_REQUEST['titleeng'];
	$category =$_REQUEST['category'];
  $categorysub2 =$_REQUEST['cate_2'];
  $categorysub3 =$_REQUEST['cate_3'];

  // echo "sub2 = ".$categorysub2."<br> sub3 = ".$categorysub3;
	$datecreate =$_REQUEST['datecreate'];
	$newdate = explode("-",$datecreate);
	if(!isset($newdate[2])) {
		$newdate[2] = "";
	}
	if(!isset($newdate[1])) {
		$newdate[1] = "";
	}
	$datecreate = $newdate[2]."-".$newdate[1]."-".$newdate[0];
	 //echo "$newdate[2]."-".$newdate[1]."-".$newdate[0]";
	if(isset($_REQUEST['level'])) {
		$level= $_REQUEST['level'];
	}	else {
		$level = NULL;
	}
    if(isset($_REQUEST['aids'])) {
		$aids = $_REQUEST['aids'];
	} else {
		$aids = NULL;
	}
	if(isset($_REQUEST['date'])) {
		$date = $_REQUEST['date'];
	} else {
		$date = NULL;
	}
	$creator =$_REQUEST['creator'];

    $extent= $_REQUEST['extent'];
    $bio = $_REQUEST['bio'];
    $dateacc = $_REQUEST['dateacc'];
    $history = $_REQUEST['history'];
    $acquis = $_REQUEST['acquis'];
    $scope = $_REQUEST['scope'];
    $appraisal = $_REQUEST['appraisal'];
	   $accruals =  $_REQUEST['accruals'];
    $arrangement = $_REQUEST['arrangement'];
    $legal = $_REQUEST['legal'];
    $condition = $_REQUEST['condition'];
    $copyright = $_REQUEST['copyright'];
    $lang = $_REQUEST['lang'];
    $physicals = $_REQUEST['physicals'];

    $location = $_REQUEST['location'];
    $existence = $_REQUEST['existence'];
    $related = $_REQUEST['related'];
    $associated = $_REQUEST['associated'];
    $physicalseng = $_REQUEST['physicalseng'];
    $pubnote = $_REQUEST['pubnote'];
    // $date = "2017-2-5";
    $data = date("Y-m-d");
    $newdate = explode("-",$data);
    $data = $newdate[0]."-".$newdate[1]."-".$newdate[2];

    $note = $_REQUEST['note'];
    $keyword = $_REQUEST['keyword'];

    //edit by day set data into database
    $access = '0';
    $approve = '0';
    $display = '0';
    $location_display = '0';
    $existence_display = '0';
    $creator_display = '1';
    $bio_display = '0';
    $dateacc_display = '0';
    $history_display = '0';
    $acquis_display = '0';
    $download = '0';
    $countdownload = '0';
    $downloadfile = '0';
    $location_display = '1';
	// checking empty fields
	if(empty($refcode) || empty($title) || empty($category))
	{
		//if refcode field is empty
		if(empty($refcode))
		{
			echo "<font color='red'>Refcode field is empty.</font><br/>";
		}
		//if title field is empty
		if(empty($title))
		{
			echo "<font color='red'>Title field is empty.</font><br/>";
		}
		//if category field is empty
		if(empty($category))
		{
			echo "<font color='red'>Category field is empty.</font><br/>";
		}

		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	else // if all the fields are filled (not empty)
  {
// edit by day
$sql = "INSERT INTO archive_object
(`obj_id`, `obj_refcode`, `obj_title`,`obj_titleeng`, `obj_datecreate`, `obj_level`, `obj_extent`, `obj_creator`, `obj_bio`, `obj_dateacc`, `obj_history`, `obj_acquis`, `obj_scope`, `obj_appraisal`, `obj_accruals`, `obj_arrangement`,
`obj_legal`, `obj_condition`, `obj_copyright`, `obj_lang`, `obj_physicals`,`obj_physicalseng`, `obj_aids`, `obj_location`, `obj_existence`, `obj_related`,
`obj_associated`, `obj_pubnote`, `obj_note`, `obj_date`, `obj_category`, `obj_access`, `user_id`, `obj_keyword`, `obj_approve`, `obj_relation`,
`obj_display`, `obj_location_display`, `obj_existence_display`, `obj_creator_display`, `obj_bio_display`, `obj_dateacc_display`, `obj_history_display`,
`obj_acquis_display`, `obj_downloadfile`, `obj_download`, `obj_countdownload`, `obj_cate2`, `obj_cate3`)
   VALUES (NULL, '$refcode', '$title', '$titleeng', '$datecreate', '$level', '$extent', '$creator', '$bio', '$dateacc', '$history', '$acquis', '$scope', '$appraisal', '$accruals',
   '$arrangement', '$legal', '$condition', '$copyright', '$lang', '$physicals', '$physicalseng','$aids', '$location', '$existence', '$related','$associated', '$pubnote',
   '$note', '$data', '$category', '$access', '$id', '$keyword', '$approve', '$relation',
   '$display', '$location_display', '$existence_display', '$creator_display', '$bio_display', '$dateacc_display', '$history_display', '$acquis_display',
   '$downloadfile', '$download', '$countdownload', '".$_REQUEST['cate_2']."', '".$_REQUEST['cate_3']."');



";

// edit by day
 if (!mysqli_query($link,$sql))
   {
    echo("พังที่นี่นะแก้ด้วย    " . mysqli_error($link) . "<br>");
 }

		//display success message
		//echo "<font color='green'>บันทึกข้อมูลเสร็จสิ้น.";

		echo "
		<div id='alert-message' class='alert alert-success alert-dismissable'>
			<i class='fa fa-check'></i>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			บันทึกข้อมูลเสร็จสิ้น
		</div>
		";

		  $sql = "select * from archive_object order by obj_id DESC  Limit 0,1";
  $query=mysqli_query($link,$sql) or die("Can't Query");
           $result=mysqli_fetch_array($query);
          // $num_rows=mysqli_num_rows($query);
          //edit by day for to foreach
  foreach ($query as $result) {
           $objectid=$result['obj_id'];
  }

   // 	     for ($i=0; $i<$num_rows; $i++) {
    //        $result=mysqli_fetch_array($query);
    //          $objectid=$result['obj_id'];
		//  }
		//echo "<br/><a href='edit.php?objectid=$objectid'>กลับหน้าแสดงผล</a>";
		echo "<a class='btn btn-primary' href='edit.php?objectid=$objectid'> กลับหน้าแสดงผล</a>";
	}



	}


	############ Not Login Yet #################
	else {
		echo "<h1>Please, <a href='demo.php'>login</a> and come back later!</h1>";
	}
    ?>


<!--------   End Of Process------------>

</div>
				    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- jQuery 2.0.2 -->
        <script src="js/jquery-2.0.2.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
		<!-- datepicker -->
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <script src="js/plugins/datepicker/locales/bootstrap-datepicker.th.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="js/AdminLTE/demo.js" type="text/javascript"></script>
		<!-- Page script -->
		<script type="text/javascript">
			$(function() {
				$('#datepicker').datepicker({
					language: 'th'
				});

				$("#alert-message").alert();
					window.setTimeout(function() { $("#alert-message").alert('close'); }, 3000);
			});
		</script>

    </body>
</html>
