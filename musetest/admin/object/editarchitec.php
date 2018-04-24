
<?php
require('connect.php');
error_reporting(0);
session_name('tzLogin');
session_set_cookie_params(2*7*24*60*60);
session_start();

$id=$_SESSION['id'];
$usr=$_SESSION['usr'];
//edit day
//set
if(!isset($_REQUEST['locationdisplay'])) {
   $_REQUEST['locationdisplay'] = 0;
}
if(!isset($_REQUEST['existencedisplay'])) {
   $_REQUEST['existencedisplay'] = 0;
}
if(!isset($_REQUEST['existencedisplay'])) {
   $_REQUEST['existencedisplay'] = 0;
}
if(!isset($_REQUEST['biodisplay'])) {
   $_REQUEST['biodisplay'] = 0;
}
if(!isset($_REQUEST['dateaccdisplay'])) {
   $_REQUEST['dateaccdisplay'] = 0;
}
if(!isset($_REQUEST['historydisplay'])) {
   $_REQUEST['historydisplay'] = 0;
}
if(!isset($_REQUEST['acquisdisplay'])) {
   $_REQUEST['acquisdisplay'] = 0;
}

if(!isset($_REQUEST['creatordisplay'])) {
   $_REQUEST['creatordisplay'] = 0;
}
if(!isset($_REQUEST['cate_2'])) {
   $_REQUEST['cate_2'] = 0;
}
if(!isset($_REQUEST['cate_3'])) {
   $_REQUEST['cate_3'] = 0;
}

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
        <title>Arichitecture | สถาปัตยกรรม</title>
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
		<!-------  Piro Box -------->
		<!--<link href="css/stylepiro.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery_ui.min.js"></script>
		<script type="text/javascript" src="js/piro_box.js">
		</script><script type="text/javascript">
		$(document).ready(function() {
			$.pirobox_ext({
				piro_speed : 700,
				zoom_mode : true,
				move_mode : 'mousemove',
				bg_alpha : 0.5,
				piro_scroll : false,
				share: true
		});
		//$('#try_it').click()
		});
		</script>-->
		<!----------- End of Piro Box --------------->

		<!--- Pop Up --->
		<script type="text/javascript">
		// Popup window code
		function newPopup(url) {
			popupWindow = window.open(
				url,'popUpWindow','height='+screen.height+',width='+screen.width+',left=10,top=10,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=no')
		}
		</script>

		<script type="text/javascript">
		// Popup window code
		function newPopupdetail(url) {
			popupWindow = window.open(
				url,'popUpWindow','height=700,width=800,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=no')
		}
		</script>
		<!------- End of Pop Up-------->

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
										$query=mysqli_query($link,$sql) or die("Can't Query");
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
												echo"$result[email]";
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
								include("connect.php");
								$sql = "select * from tz_members where id = '$id'   ";
								$query=mysqli_query($link,$sql) or die("Can't Query");
								$result=mysqli_fetch_array($query);
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
						แก้ไขสถาปัตยกรรม
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="showarch.php"><i class="fa fa-dashboard"></i> ข้อมูลสถาปัตยกรรม</a></li>
                        <li class="active">แก้ไขสถาปัตยกรรม</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Main row -->
                    <div class="row">
						<div class="col-md-12">


<!-- ------------  Process ----- -->

<?php
if($_SESSION['id']) {
include("connect.php");
$update=$_REQUEST['update'];
$openpic=$_REQUEST['openpic'];

$updatepic=$_REQUEST['updatepic'];
$delpic=$_REQUEST['delpic'];
$setpic=$_REQUEST['setpic'];
$picid=$_REQUEST['picid'];

$updown=$_REQUEST['updown'];
$download =$_REQUEST['download'];
$deldownload =$_REQUEST['deldownload'];


$updatevr=$_REQUEST['updatevr'];
$delvr=$_REQUEST['delvr'];
$vrid=$_REQUEST['vrid'];

$dirchange =$_REQUEST['dirchange'];

$deldwload=$_REQUEST['deldwload'];

$objid=$_REQUEST['objectid'];
$objectid=$_REQUEST['objectid'];

    $oldrefcode =$_REQUEST['oldrefcode'];
	$title = addslashes($_REQUEST['title']);
	$category = addslashes($_REQUEST['category']);
	$datecreate = $_REQUEST['datecreate'];

	$newdate = explode("-",$datecreate);
	$datecreate = $newdate[2]."-".$newdate[1]."-".$newdate[0];

	$creator = addslashes($_REQUEST['creator']);
    $level= addslashes($_REQUEST['level']);
    $extent= addslashes($_REQUEST['extent']);
    $bio = addslashes($_REQUEST['bio']);
    $dateacc = $_REQUEST['dateacc'];
    $history = addslashes($_REQUEST['history']);
    $acquis = addslashes($_REQUEST['acquis']);
    $scope = addslashes($_REQUEST['scope']);
    $appraisal = addslashes($_REQUEST['appraisal']);
	$accruals =  addslashes($_REQUEST['accruals']);
    $arrangement = addslashes($_REQUEST['arrangement']);
    $legal = addslashes($_REQUEST['legal']);
    $condition = addslashes($_REQUEST['condition']);
    $copyright = addslashes($_REQUEST['copyright']);
    $lang = addslashes($_REQUEST['lang']);
    $physicals = addslashes($_REQUEST['physicals']);
    $aids = addslashes($_REQUEST['aids']);
    $location = addslashes($_REQUEST['location']);
    $existence = addslashes($_REQUEST['existence']);
    $related = addslashes($_REQUEST['related']);
    $associated = addslashes($_REQUEST['associated']);
    $pubnote = addslashes($_REQUEST['pubnote']);
    $note = addslashes($_REQUEST['note']);
    $date = new DateTime();
    $date = $date->format('Y-m-d');
        
    $dateapi = new DateTime();
    $dateapi = $dateapi->format('Y-m-d h:i:sa');
    
    $now = new DateTime();
    $timestring = $now->format('Y-m-d h:i:s');

    $keyword = $_REQUEST['keyword'];
    $access = $_REQUEST['access'];
    $display = $_REQUEST['display'];
    $locationdisplay = $_REQUEST['locationdisplay'];
	$existencedisplay = $_REQUEST['existencedisplay'];
	$creatordisplay = $_REQUEST['creatordisplay'];
	$biodisplay = $_REQUEST['biodisplay'];
	$dateaccdisplay = $_REQUEST['dateaccdisplay'];
	$historydisplay = $_REQUEST['historydisplay'];
	$acquisdisplay = $_REQUEST['acquisdisplay'];

  $titleengupdate = $_REQUEST['titleeng'];
  $physicalsengupdate = $_REQUEST['physicalseng'];

if($update == '1')
{
    $sql = "UPDATE architec_object
    SET
    `archOld_Obj_Refcode`='$oldrefcode' ,
    `archObj_Title` ='$title',
    `archObj_Titleeng` = '$titleengupdate',
    `archObj_Datecreate`='$datecreate' ,
    `archObj_Level` ='$level',
    `archObj_Extent` ='$extent',
    `archObj_Creator` ='$creator',
    `archObj_Bio` ='$bio',
    `archObj_Dateacc` ='$dateacc',
    `archObj_History` ='$history',
    `archObj_Acquis` ='$acquis',
    `archObj_Scope` ='$scope',
    `archObj_Appraisal` ='$appraisal',
    `archObj_Accruals` ='$accruals',
    `archObj_Arrangement` ='$arrangement',
    `archObj_Legal` ='$legal',
    `archObj_Condition`='$condition' ,
    `archObj_Copyright` ='$copyright',
    `archObj_Lang` ='$lang',
    `archObj_Physicals` ='$physicals',
    `archObj_Physicalseng` = '$physicalsengupdate',
    `archObj_Aids` ='$aids',
    `archObj_Location` ='$location',
    `archObj_Existence` ='$existence',
    `archObj_Related` ='$related',
    `archObj_Associated` ='$associated',
    `archObj_Pubnote` ='$pubnote',
    `archObj_Note` ='$note',
    `archObj_Date` = '$timestring',
    `archObj_Category` ='$category',
    `archObj_Access`= '$access',
    `archObj_Keyword`= '$keyword',
    `archObj_Approve`= '$id',
    `archObj_Display`= '$display',
    `archObj_Location_Display` = '$locationdisplay',
    `archObj_Existence_Display` = '$existencedisplay',
    `archObj_Creator_Display` = '$creatordisplay',
    `archObj_Bio_Display` = '$biodisplay',
    `archObj_Dateacc_Display` = '$dateaccdisplay',
    `archObj_History_Display` = '$historydisplay',
    `archObj_Acquis_Display` = '$acquisdisplay',
    `archObj_Cate2`= '$_REQUEST[cate_2]',
    `archObj_Cate3`= '$_REQUEST[cate_3]'
    WHERE `architec_object`.`archObj_Id` = '$objid'
    ";
    if (!mysqli_query($link,$sql))
        {
        echo("โปรดแก้ไขโปรแกรมของท่าน    " . mysqli_error($link) . "<br>");
	}
	
    $sql1 = "UPDATE `muse_pic` SET `obj_refcode` = '$refcode'

    WHERE `muse_pic`.`obj_id` = '$objid'";  
        
    if (!mysqli_query($link,$sql1)){
        echo("โปรดแก้ไขโปรแกรมของท่าน    " . mysqli_error($link) . "<br>");
    }    

    echo "
    <div id='alert-message' class='alert alert-success alert-dismissable'>
        <i class='fa fa-check'></i>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        แก้ไขข้อมูลสถาปัตยกรรมเสร็จสิ้น
    </div>";
} // end if

	//fetching data in descending order (lastest entry first)
	$sql = "select * from architec_object  where archObj_Id = '$objectid'";
	$query = mysqli_query($link,$sql) or die("Can't Query: หน้าต่าแสดงผลข้อมูล (523)");
	$num_rows = mysqli_num_rows($query);

	for ($i=0; $i<$num_rows; $i++) {
		$result = mysqli_fetch_array($query);
		//echo "$result[obj_id] $result[obj_title] <br>";
		$objid = $result[archObj_Id] ;
		$refcode = $result[archObj_Refcode];
		$oldrefcode = $result[archOld_Obj_Refcode];
		$title = $result[archObj_Title];
		$titleeng = $result[archObj_Titleeng];
		$datecreate = $result[archObj_Datecreate] ;

		$newdate = explode("-",$datecreate);
		$datecreate = $newdate[2]."-".$newdate[1]."-".$newdate[0];

		$level = $result[archObj_Level] ;
		$extent = $result[archObj_Extent] ;
		$creator = $result[archObj_Creator] ;
		$bio = $result[archObj_Bio] ;
		$dateacc = $result[archObj_Dateacc] ;
		$history = $result[archObj_History] ;
		$acquis = $result[archObj_Acquis] ;
		$scope = $result[archObj_Scope] ;
		$appraisal = $result[archObj_Appraisal] ;
		$accruals = $result[archObj_Accruals] ;
		$arrangement = $result[archObj_Arrangement] ;
		$legal = $result[archObj_Legal] ;
		$condition = $result[archObj_Condition] ;
		$copyright = $result[archObj_Copyright] ;
		$lang = $result[archObj_Lang] ;
		$physicals= $result[archObj_Physicals] ;
		$physicalseng = $result[archObj_Physicalseng];

		$aids= $result[archObj_Aids] ;
		$location = $result[archObj_Location] ;
		$existence = $result[archObj_Existence] ;
		$related = $result[archObj_Related] ;
		$associated = $result[archObj_Associated] ;
		$pubnote = $result[archObj_Pubnote] ;
		$note= $result[archObj_Note] ;
		$date = $result[archObj_Date] ;

		$access= $result[archObj_Access] ;
		$keyword = $result[archObj_Keyword] ;
		$display = $result[archObj_Display] ;
		$locationdisplay = $result[archObj_Location_Display];
		$existencedisplay = $result[archObj_Existence_Display];
		$creatordisplay = $result[archObj_Creator_Display];
		$biodisplay = $result[archObj_Bio_Display];
		$dateaccdisplay = $result[archObj_Dateacc_Display];
		$historydisplay = $result[archObj_History_Display];
		$acquisdisplay = $result[archObj_Acquis_Display];

		$access= $result['archObj_Access'];
		// $data = $result[obj_date];
		$date = new DateTime($date);
		$date = $date->format('Y-m-d');
		//$newdate1 = explode("-",$date);
		//$date1 = $newdate1[2]."-".$newdate1[1]."-".$newdate1[0];
		// echo "date = ".$date;
		// echo "date1 = ".$date1;
		// echo "newdate = ".$newdate;
		$category = $result['archObj_Category'] ;
		$category2 = $result['archObj_Cate2'];
		$category3 = $result['archObj_Cate3'] ;
		$keyword = $result['archObj_Keyword'] ;
	} // end for

	$sql = "select * from architec_category_lv2 where archCate2_Parent = $category";
	$query = mysqli_query($link,$sql) or die("Can't Query: Level2 ");
	$num_of_lvl2 = mysqli_num_rows($query);

	$sql = "select * from architec_category_lv3 where archCate3_Parent = $category2";
	$query = mysqli_query($link,$sql) or die("Can't Query: lvel3");
	$num_of_lvl3 = mysqli_num_rows($query);

	

###########################




	######  Start Tab ##########
echo "
<form class='form-horizontal' role='form' name='form1' method='post' action='editarchitec.php' enctype='multipart/form-data'>
<div class='nav-tabs-custom'>


<!--<ul class='nav nav-tabs'> ไม่ได้ใช้
<li><a href=\"#\" onclick=\"easytabs('1', '1');\" onfocus=\"easytabs('1', '1');\" onclick=\"return false;\"  title=\"\" id=\"tablink1\">ข้อมูลทั่วไป*</a></li>
<li><a href=\"#\" onclick=\"easytabs('1', '2');\" onfocus=\"easytabs('1', '2');\" onclick=\"return false;\"  title=\"\" id=\"tablink2\">ประวัติ</a></li>
<li><a href=\"#\" onclick=\"easytabs('1', '3');\" onfocus=\"easytabs('1', '3');\" onclick=\"return false;\"  title=\"\" id=\"tablink3\">ขอบเขต</a></li>
<li><a href=\"#\" onclick=\"easytabs('1', '4');\" onfocus=\"easytabs('1', '4');\" onclick=\"return false;\"  title=\"\" id=\"tablink4\">เงื่อนไขการใช้</a></li>
<li><a href=\"#\" onclick=\"easytabs('1', '5');\" onfocus=\"easytabs('1', '5');\" onclick=\"return false;\"  title=\"\" id=\"tablink5\">การจัดเก็บ</a></li>
<li><a href=\"#\" onclick=\"easytabs('1', '6');\" onfocus=\"easytabs('1', '6');\" onclick=\"return false;\"  title=\"\" id=\"tablink6\">บันทึก</a></li>
</ul>-->

<ul class='nav nav-tabs'>
	<li class='active'><a href='#tab_1' data-toggle='tab'>ข้อมูลทั่วไป*</a></li>
	<li><a href='#tab_2' data-toggle='tab'>ประวัติ</a></li>
	<li><a href='#tab_3' data-toggle='tab'>ขอบเขต</a></li>
	<li><a href='#tab_4' data-toggle='tab'>เงื่อนไขการใช้</a></li>
	<li><a href='#tab_5' data-toggle='tab'>การจัดเก็บ</a></li>
	<li><a href='#tab_6' data-toggle='tab'>บันทึก</a></li>
	<li><a href=\"showarch.php?objectid=$result[archObj_Id]&del=obj\"><img src='images/icon_del.gif'></a></li>
</ul> ";

	########################
	######  Tab 1 ##########
	echo "
<div class='tab-content'>
<div class='tab-pane active' id='tab_1'>
<div class='box-body'>

<div class='form-group'>
	<label class='col-sm-2 control-label'>รหัส*</label>
	<div class='col-sm-10'>
		<input class='form-control' type='text' name ='refcode' value='$refcode' disabled>
	</div>
</div>
<div class='form-group'>
	<label class='col-sm-2 control-label'>รหัสเดิม*</label>
	<div class='col-sm-10'>
		<input class='form-control' type='text' name ='oldrefcode' value='$oldrefcode' >
	</div>
</div>
<div class='form-group'>
	<label class='col-sm-2 control-label'>ชื่อสถาปัตยกรรม*</label>
	<div class='col-sm-10'>
		<input class='form-control' type='text' name ='title' value='$title' required>
	</div>
</div>

<div class='form-group'>
	<label class='col-sm-2 control-label'>title*</label>
	<div class='col-sm-10'>
		<input class='form-control' type='text' name ='titleeng' value='$titleeng' >
	</div>
</div>


<div class='form-group'>
	<label class='col-sm-2 control-label' >ประเภท*</label>
	<div class='col-sm-10'>
	";

echo "<select class='form-control' id='cate_1' name='category' required>";
echo "<option value='0'>-- เลือกประเภท --</option>";
	$sql = "select * from architec_category  where archCate_Parent ='0' ";
	$query=mysqli_query($link,$sql) or die("Can't Query2");
	$num_rows=mysqli_num_rows($query);

	for ($i=0; $i<$num_rows; $i++) {
		$result=mysqli_fetch_array($query);
			if($category ==  $result['archCate_Id'])
			{
				echo "<option value='$result[archCate_Id]' selected>$result[archCate_Name]</option>";
			}
			else
			{
				echo "<option value='$result[archCate_Id]'> $result[archCate_Name]</option>";
			}

		// Sub Category //
    	$parent = $result[archCate_Id];
		$sql5 = "select * from architec_category  ";
    	$query5=mysqli_query($link,$sql5) or die("Can't Query");
    	$num_rows5=mysqli_num_rows($query5);

	}
echo "</select>
</div>
</div>";

echo "<div class='form-group' id='form_cate_2'>";
if($category != 0 && $category2 != 0) {
	echo "

			<label for='cate_2' class='col-sm-3 control-label'>ประเภทระดับ 2</label>
			<div class='col-sm-9'>
				<select name='cate_2' class='form-control' id='cate_2'>";
					echo "<option value='0'>ไม่ระบุ</option>";
					$query = mysqli_query($link,"SELECT * FROM architec_category_lv2 WHERE archCate2_Parent = '".$category."'");
					while($cate = mysqli_fetch_array($query)) {
						if($cate['archCate2_Id'] === $category2) {
							echo "<option value='".$cate['archCate2_Id']."' selected>".$cate['archCate2_Name']."</option>";
						} else {
							echo "<option value='".$cate['archCate2_Id']."'>".$cate['archCate2_Name']."</option>";
						}
					}
				echo "</select>
			</div>

	";
} else if ($category2 == 0 && $num_of_lvl2 != 0) {
	echo "
			<label for='cate_2' class='col-sm-3 control-label'>ประเภทระดับ 2</label>
			<div class='col-sm-9'>
				<select name='cate_2' class='form-control' id='cate_2'>";
					echo "<option value='0'>ไม่ระบุ</option>";
					$query = mysqli_query($link,"SELECT * FROM architec_category_lv2 WHERE archCate2_Parent = '".$category."'");
					while($cate = mysqli_fetch_array($query)) {
						if($cate['archCate2_Id'] === $category2) {
							echo "<option value='".$cate['archCate2_Id']."' selected>".$cate['archCate2_Name']."</option>";
						} else {
							echo "<option value='".$cate['archCate2_Id']."'>".$cate['archCate2_Name']."</option>";
						}
					}
				echo "</select>
			</div>

	";
}
echo "</div>";

echo "<div class='form-group' id='form_cate_3'>";
if($category != 0 && $category2 != 0 && $category3 != 0) {
	echo "
			<label for='cate_3' class='col-sm-4 control-label'>ประเภทระดับ 3</label>
			<div class='col-sm-8'>
				<select name='cate_3' class='form-control' id='cate_3'>";
					echo "<option value='0'>ไม่ระบุ</option>";
					$query = mysqli_query($link,"SELECT * FROM architec_category_lv3 WHERE archCate3_Parent = '".$category2."'");
					while($cate = mysqli_fetch_array($query)) {
						if($cate['archCate3_Id'] === $category3) {
							echo "<option value='".$cate['archCate3_Id']."' selected>".$cate['archCate3_Name']."</option>";
						} else {
							echo "<option value='".$cate['archCate3_Id']."'>".$cate['archCate3_Name']."</option>";
						}
					}
				echo "</select>
			</div>
	";
} else if($category3 == 0 && $num_of_lvl3 != 0) {
	echo "
			<label for='cate_3' class='col-sm-4 control-label'>ประเภทระดับ 3</label>
			<div class='col-sm-8'>
				<select name='cate_3' class='form-control' id='cate_3'>";
					echo "<option value='0'>ไม่ระบุ</option>";
					$query = mysqli_query($link,"SELECT * FROM architec_category_lv3 WHERE archCate3_Parent = '".$category2."'");
					while($cate = mysqli_fetch_array($query)) {
						if($cate['archCate3_Id'] === $category3) {
							echo "<option value='".$cate['archCate3_Id']."' selected>".$cate['archCate3_Name']."</option>";
						} else {
							echo "<option value='".$cate['archCate3_Id']."'>".$cate['archCate3_Name']."</option>";
						}
					}
				echo "</select>
			</div>
	";
}
echo "</div>";


	?>

	<?php

$sql = "select * from tz_members where id = '$id'   ";
 $query=mysqli_query($link,$sql) or die("Can't Query3");
 $num_rows=mysqli_num_rows($query);



	     for ($i=0; $i<$num_rows; $i++) {
         $result=mysqli_fetch_array($query);
		//echo "$result[usr]  $result[permission]<br>";
		$permission =$result[permission];

}

//echo "Per : $permission  $access";

if(($permission == 'superadmin') or ($permission == 'admin'))
		{

###   การเผยแพร่  ###
if($access=='0')
	{
echo "
<div class='form-group'>
	<label class='col-sm-2 control-label'>การเผยแพร่*</label>
	<div class='col-sm-10'>
		<div class='radio'>
			<label>
				<input type='radio' name='access' value='0' checked> รออนุมัติ
			</label>
		</div>
		<div class='radio'>
			<label>
				<input type='radio' name='access' value='1'> อนุมัติ
			</label>
		</div>
		<div class='radio'>
			<label>
				<input type='radio' name='access' value='2'> ไม่อนุมัติ
			</label>
		</div>
	</div>
</div>";
}

else if($access =='1')
	{
echo "
<div class='form-group'>
	<label class='col-sm-2 control-label'>การเผยแพร่*</label>
	<div class='col-sm-10'>
		<div class='radio'>
			<label>
				<input type='radio' name='access' value='0'> รออนุมัติ
			</label>
		</div>
		<div class='radio'>
			<label>
				<input type='radio' name='access' value='1' checked> อนุมัติ
			</label>
		</div>
		<div class='radio'>
			<label>
				<input type='radio' name='access' value='2'> ไม่อนุมัติ
			</label>
		</div>
	</div>
</div>";
}

else if($access == '2')
	{
echo "
<div class='form-group'>
	<label class='col-sm-2 control-label'>การเผยแพร่*</label>
	<div class='col-sm-10'>
		<div class='radio'>
			<label>
				<input type='radio' name='access' value='0'> รออนุมัติ
			</label>
		</div>
		<div class='radio'>
			<label>
				<input type='radio' name='access' value='1'> อนุมัติ
			</label>
		</div>
		<div class='radio'>
			<label>
				<input type='radio' name='access' value='2' checked> ไม่อนุมัติ
			</label>
		</div>
	</div>
</div>";
}

###   สถานะการจัดแสดง  ###
echo "
<div class='form-group'>
	<label class='col-sm-2 control-label'>สถานะจัดแสดง</label>
	<div class='col-sm-10'> ";

if($display == 1) {
	echo "	<div class='radio'>
			<label>
				<input type='radio' name='display' value='1' checked> จัดแสดง
			</label>
		</div>
		<div class='radio'>
			<label>
				<input type='radio' name='display' value='0'> จัดเก็บ
			</label>
		</div> ";
} else if($display == 0) {
	echo "	<div class='radio'>
			<label>
				<input type='radio' name='display' value='1'> จัดแสดง
			</label>
		</div>
		<div class='radio'>
			<label>
				<input type='radio' name='display' value='0' checked> จัดเก็บ
			</label>
		</div> ";
}
echo "</div>
	  </div> ";

###   การแสดงผล  ###
echo "
<div class='form-group'>
	<label class='col-sm-2 control-label'>การแสดงผล</label>
	<div class='col-sm-10'> ";

    if($locationdisplay == 1)
    {
	echo "
		<div class='checkbox'>
			<label>
				<input type='checkbox' name='locationdisplay' value='1' checked> สถานที่จัดเก็บต้นฉบับ
			</label>
		</div> ";
    }
    else
    {
	echo "
		<div class='checkbox'>
			<label>
				<input type='checkbox' name='locationdisplay' value='1'> สถานที่จัดเก็บต้นฉบับ
			</label>
		</div> ";
    }

    if($existencedisplay == 1)
    {
	echo "
		<div class='checkbox'>
			<label>
				<input type='checkbox' name='existencedisplay' value='1' checked> สถานที่จัดเก็บสำเนา
			</label>
		</div> ";
    }
    else
    {
	echo "
		<div class='checkbox'>
			<label>
				<input type='checkbox' name='existencedisplay' value='1'> สถานที่จัดเก็บสำเนา
			</label>
		</div> ";
    }

    if($creatordisplay == 1)
    {
	echo "
		<div class='checkbox'>
			<label>
				<input type='checkbox' name='creatordisplay' value='1' checked> ชื่อเจ้าของ
			</label>
		</div> ";
    }
    else
    {
	echo "
		<div class='checkbox'>
			<label>
				<input type='checkbox' name='creatordisplay' value='1'> ชื่อเจ้าของ
			</label>
		</div> ";
    }

	if($biodisplay == 1)
    {
	echo "
		<div class='checkbox'>
			<label>
				<input type='checkbox' name='biodisplay' value='1' checked> ประวัติเจ้าของ
			</label>
		</div> ";
    }
    else
    {
	echo "
		<div class='checkbox'>
			<label>
				<input type='checkbox' name='biodisplay' value='1'> ประวัติเจ้าของ
			</label>
		</div> ";
    }

	if($historydisplay == 1)
    {
	echo "
		<div class='checkbox'>
			<label>
				<input type='checkbox' name='historydisplay' value='1' checked> ประวัติสถาปัตยกรรม
			</label>
		</div> ";
    }
    else
    {
	echo "
		<div class='checkbox'>
			<label>
				<input type='checkbox' name='historydisplay' value='1'> ประวัติสถาปัตยกรรม
			</label>
		</div> ";
    }

	if($acquisdisplay == 1)
    {
	echo "
		<div class='checkbox'>
			<label>
				<input type='checkbox' name='acquisdisplay' value='1' checked> แหล่งที่ได้มา/โอนย้าย
			</label>
		</div> ";
    }
    else
    {
	echo "
		<div class='checkbox'>
			<label>
				<input type='checkbox' name='acquisdisplay' value='1'> แหล่งที่ได้มา/โอนย้าย
			</label>
		</div> ";
    }

	if($dateaccdisplay == 1)
    {
	echo "
		<div class='checkbox'>
			<label>
				<input type='checkbox' name='dateaccdisplay' value='1' checked> ช่วงเวลาการสะสม
			</label>
		</div> ";
    }
    else
    {
	echo "
		<div class='checkbox'>
			<label>
				<input type='checkbox' name='dateaccdisplay' value='1'> ช่วงเวลาการสะสม
			</label>
		</div> ";
    }

echo "
	</div>
</div> ";
}

#########################################
else {
	echo "
	<div class='form-group'>
	<label class='col-sm-2 control-label'>การเผยแพร่*</label>
	<div class='col-sm-10'>	";
	if($access =='0')
			{
	echo "รออนุมัติ";
	        }
	else if($access =='1')
			{
	echo "อนุมัติ";
			}
	else if($access == '2')
			{
	echo "ไม่อนุมัติ";

			}
echo"
	</div>
</div>";
}

#########################################

echo "
<div class='form-group'>
	<label class='col-sm-2 control-label'>วันที่เก็บข้อมูล</label>
	<div class='col-sm-5'>
		<input id='datepicker' data-date-format='dd-mm-yyyy' class='form-control' type='text' name ='datecreate' value='$datecreate'>
	</div>
</div>


<div class='form-group'>
	<label class='col-sm-2 control-label'>รายละเอียด</label>
	<div class='col-sm-10'>
		<textarea class='form-control' rows='4' name ='physicals'>$physicals</textarea>
	</div>
</div>

<div class='form-group'>
	<label class='col-sm-2 control-label'>description</label>
	<div class='col-sm-10'>
		<textarea class='form-control' rows='4' name ='physicalseng'>$physicalseng</textarea>
	</div>
</div>

<div class='form-group'>
	<label class='col-sm-2 control-label'>ขนาดและลักษณะ</label>
	<div class='col-sm-10'>
		<input class='form-control' type='text' name ='extent' value='$extent'>
	</div>
</div>

<div class='form-group'>
	<label class='col-sm-2 control-label'>คำสำคัญ</label>
	<div class='col-sm-10'>
		<input class='form-control' type='text' name ='keyword' value='$keyword'> <br/>
        <span>เพื่อใช้เป็น keyword ผู้ใช้สามารถระบุคำสำคัญได้มากกว่า 1 คำ เช่น ภาพวาด , รูปปั้น **</span>
	</div>
</div>

</div><!-- /.box -->
</div><!-- /.tab-pane -->
";
# End of Tab 1 ########

### Start  Tab2 ########
echo "
<div class='tab-pane' id='tab_2'>
<div class='box-body'>

<div class='form-group'>
	<label class='col-sm-2 control-label'>ชื่อเจ้าของ</label>
	<div class='col-sm-10'>
		<input class='form-control' type='text' name ='creator' value='$creator'>
	</div>
</div>

<div class='form-group'>
	<label class='col-sm-2 control-label'>ประวัติเจ้าของ</label>
	<div class='col-sm-10'>
		<textarea class='form-control' rows='4' name ='bio'>$bio</textarea>
	</div>
</div>

<div class='form-group'>
	<label class='col-sm-2 control-label'>ช่วงเวลาการสะสม</label>
	<div class='col-sm-10'>
		<textarea class='form-control' rows='4' name ='dateacc'>$dateacc</textarea>
	</div>
</div>

<div class='form-group'>
	<label class='col-sm-2 control-label'>ประวัติสถาปัตยกรรม</label>
	<div class='col-sm-10'>
		<textarea class='form-control' rows='4' name ='history'>$history</textarea>
	</div>
</div>

<div class='form-group'>
	<label class='col-sm-2 control-label'>แหล่งที่ได้มา/โอนย้าย</label>
	<div class='col-sm-10'>
		<textarea class='form-control' rows='4' name ='acquis'>$acquis</textarea>
	</div>
</div>

</div><!-- /.box -->
</div><!-- /.tab-pane -->
";
#######  End of Tab 2 #######

#######   Start Tab3 ########
echo "
<div class='tab-pane' id='tab_3'>
<div class='box-body'>

<div class='form-group'>
	<label class='col-sm-2 control-label'>ขอบเขต</label>
	<div class='col-sm-10'>
		<textarea class='form-control' rows='4' name ='scope'>$scope</textarea>
	</div>
</div>

<div class='form-group'>
	<label class='col-sm-2 control-label'>การประเมินคุณค่า</label>
	<div class='col-sm-10'>
		<textarea class='form-control' rows='4' name ='appraisal'>$appraisal</textarea>
	</div>
</div>

<div class='form-group'>
	<label class='col-sm-2 control-label'>การเพิ่มปริมาณ</label>
	<div class='col-sm-10'>
		<textarea class='form-control' rows='4' name ='accruals'>$accruals</textarea>
	</div>
</div>

<div class='form-group'>
	<label class='col-sm-2 control-label'>การจัดเรียง</label>
	<div class='col-sm-10'>
		<textarea class='form-control' rows='4' name ='arrangement'>$arrangement</textarea>
	</div>
</div>

</div><!-- /.box -->
</div><!-- /.tab-pane -->
";
####### End of Tab 3 ########

####  Start of Tab 4 ########
echo "
<div class='tab-pane' id='tab_4'>
<div class='box-body'>

<div class='form-group'>
	<label class='col-sm-2 control-label'>กฎ ระเบียบ</label>
	<div class='col-sm-10'>
		<textarea class='form-control' rows='4' name ='legal'>$legal</textarea>
	</div>
</div>

<div class='form-group'>
	<label class='col-sm-2 control-label'>เงื่อนไขการเข้าถึง</label>
	<div class='col-sm-10'>
		<input class='form-control' type='text' name ='condition' value='$condition'>
	</div>
</div>

<div class='form-group'>
	<label class='col-sm-2 control-label'>เงื่อนไขการทำสำเนา</label>
	<div class='col-sm-10'>
		<input class='form-control' type='text' name ='copyright' value='$copyright'>
	</div>
</div>

<div class='form-group'>
	<label class='col-sm-2 control-label'>ภาษา</label>
	<div class='col-sm-10'>
		<input class='form-control' type='text' name ='lang' value='$lang'>
	</div>
</div>

<div class='form-group'>
	<label class='col-sm-2 control-label'>เครื่องมือช่วยค้น</label>
	<div class='col-sm-10'>
		<input class='form-control' type='text' name ='aids' value='$aids'>
	</div>
</div>

</div><!-- /.box -->
</div><!-- /.tab-pane -->
";
####### End of Tab4 #####

###### Start  Tab 5  #####
echo "
<div class='tab-pane' id='tab_5'>
<div class='box-body'>

<div class='form-group'>
	<label class='col-sm-2 control-label'>สถานที่เก็บต้นฉบับ</label>
	<div class='col-sm-10'>
		<input class='form-control' type='text' name ='location' value='$location'>
	</div>
</div>

<div class='form-group'>
	<label class='col-sm-2 control-label'>สถานที่เก็บสำเนา</label>
	<div class='col-sm-10'>
		<input class='form-control' type='text' name ='existence' value='$existence'>
	</div>
</div>

<div class='form-group'>
	<label class='col-sm-2 control-label'>สถาปัตยกรรมที่เกี่ยวข้อง</label>
	<div class='col-sm-10'>
		<input class='form-control' type='text' name ='related' value='$related'>
	</div>
</div>

<div class='form-group'>
	<label class='col-sm-2 control-label'>ข้อความการพิมพ์</label>
	<div class='col-sm-10'>
		<input class='form-control' type='text' name ='associated' value='$associated'>
	</div>
</div>

<div class='form-group'>
	<label class='col-sm-2 control-label'>การเผยแพร่</label>
	<div class='col-sm-10'>
		<textarea class='form-control' rows='4' name ='pubnote'>$pubnote</textarea>
	</div>
</div>

</div><!-- /.box -->
</div><!-- /.tab-pane -->
";
####### End of Tab5 #####

#####  Start Tab6 #######
echo "
<div class='tab-pane' id='tab_6'>
<div class='box-body'>

<div class='form-group'>
	<label class='col-sm-2 control-label'>บันทึกการปฎิบัติการ</label>
	<div class='col-sm-10'>
		<textarea class='form-control' rows='4' name ='note'>$note</textarea>
	</div>
</div>

</div><!-- /.box -->
</div><!-- /.tab-pane -->
";
###### End of Tab6 #####

##### Start Tab7 #######
#echo "
#<div id='tabcontent7'>
#<table>
 # <tr>
  #  <td width='260' ><font face='ms san serif' size='2'>รูปภาพ</font></td>
#	<td width='372'  align='left'>

		   #<input type='hidden' name='MAX_FILE_SIZE' value='100000' />
		   #<input name='uploadedfile' type='file' />
		   #<input name='uploadedfile2' type='file' />
		   #<input name='uploadedfile3' type='file' />
		   # <input name='uploadedfile4' type='file' />
		#	<input name='uploadedfile5' type='file' />
		#</td>
  #</tr>
#</table>
#</div>
#";
######### End Of Tab 7 ############

#######  Submit #########
echo "
<hr>
<input type='hidden' name='update' value='1'>
<input type='hidden' name='objectid' value='$objid'>
<button type='submit' name='submit' class='btn btn-primary'>บันทึก</button>

</div><!-- /.tab-content -->
</div><!-- nav-tabs-custom -->
</form>
";
###### End Submit #######
	}


	############ Not Login Yet #################
	else {
		echo "<h1>Please, <a href='demo.php'>login</a> and come back later!</h1>";
	}
    ?>


<!-- ------   End Of Process---------- -->
<!-- ------ สถาปัตยกรรมดาวน์โหลด ----------- -->

<?php
if($updatevr == 1) {
	$target_path_vr = "../../pic/vr/";
	$target_path_vr = $target_path_vr . basename( $_FILES['uploadedfilevr']['name']);
	echo $myvr;
	$myvr = $_FILES['uploadedfilevr']['name'];

	if(move_uploaded_file($_FILES['uploadedfilevr']['tmp_name'], $target_path_vr)) {
		echo "The file ".  basename( $_FILES['uploadedfilevr']['name']).   " has been uploaded";
	} else{
		echo "Can't Upload $target_path_vr ";
	}

	###########  ZIP File #############

	$ZipName = "../../pic/vr/$myvr";

	##### Create DIR ###########

	$word = explode(".", $myvr);
	$newdir1= $word[0];
	$newdir = "$newdir1";


	$flgCreate = mkdir("../../pic/vr/$newdir");

	if($flgCreate) {
		echo "Folder Created.";
	}
	else {
		echo " Folder Not Create.";
	}
	#############################

	$DesName = "../../pic/vr/$newdir/";
	require_once("dUnzip2.inc.php"); // include Class
	$zip = new dUnzip2($ZipName); // New Class
	$zip->unzipAll($DesName); // Unzip All

	######  ADD DB############

	$sql = " INSERT INTO `muse_vr` (`vr_dir`, `obj_id`, `obj_refcode`, `vr_direction`) VALUES ('$newdir1', $objectid, '$refcode', 'R') ";

	if (!mysqli_query($link,$sql)) {
		echo("พังที่นี่นะแก้ด้วย    " . mysqli_error($link) . "<br>");
	}
} // end if

////////////////  SHOW VR PIC /////////////////////

if($delvr == 1) {
	$sql = "DELETE FROM muse_vr WHERE vr_id = '$vrid' ";
	$query=mysqli_query($link,$sql) or die("Can't Query");
	echo "<br>";
}

if($dirchange != '') {
	// echo "<br>Change Direction $vrid  $dirchange <br>";
	echo "<br>Change Direction <br>";
	$sql = "UPDATE muse_vr SET `vr_direction` = '$dirchange'  WHERE `muse_vr`.`vr_id` = '$vrid' LIMIT 1 ;";
	$query=mysqli_query($link,$sql) or die("Can't Query");
}

echo "<div class='box box-primary'>"; // Start box-primary
echo "<div class='box-header'>";
echo "<h3 class='box-title'>ภาพ 3 มิติ</h3>";
echo "</div>";
echo "<div class='box-body'>"; // Start box-body
echo "<div>";
$sql3 = "SELECT * FROM `muse_vr` WHERE obj_refcode = '$refcode' ";
$query3=mysqli_query($link,$sql3) or die("Can't Query2");
$num_rows3=mysqli_num_rows($query3);
for ($i=0; $i<$num_rows3; $i++) {
	$result3=mysqli_fetch_array($query3);
	$objScan = scandir("../../pic/vr/$result3[vr_dir]");
	$j=0;
	foreach ($objScan as $value) {
		$vrpic1 = explode(".", $value);
		if($vrpic1[1]=="jpg") {
		 	$vrpic[$i] = $vrpic1[0];
			$filevr[$i] = $vrpic[$i].".jpg";
			if($j <5) {
				echo "<img src ='../../pic/vr/$result3[vr_dir]/$filevr[$i]' width='150'> ";
			}
			$j=$j+1;
		}
        if($vrpic1[1]=="JPG") {
		 	$vrpic[$i] = $vrpic1[0];
			$filevr[$i] = $vrpic[$i].".JPG";
			if($j <5) {
				echo "<img src ='../../pic/vr/$result3[vr_dir]/$filevr[$i]' width='150'> ";
			}
			$j=$j+1;
		}
        if($vrpic1[1]=="jpeg") {
		 	$vrpic[$i] = $vrpic1[0];
			$filevr[$i] = $vrpic[$i].".jpeg";
			if($j <5) {
				echo "<img src ='../../pic/vr/$result3[vr_dir]/$filevr[$i]' width='150'> ";
			}
			$j=$j+1;
		}   
        if($vrpic1[1]=="JPEG") {
		 	$vrpic[$i] = $vrpic1[0];
			$filevr[$i] = $vrpic[$i].".JPEG";
			if($j <5) {
				echo "<img src ='../../pic/vr/$result3[vr_dir]/$filevr[$i]' width='150'> ";
			}
				 $j=$j+1;
		}     
        if($vrpic1[1]=="png") {
		 	$vrpic[$i] = $vrpic1[0];
			$filevr[$i] = $vrpic[$i].".png";
			if($j <5) {
				echo "<img src ='../../pic/vr/$result3[vr_dir]/$filevr[$i]' width='150'> ";
			}
			$j=$j+1;
		}
        if($vrpic1[1]=="PNG") {
		 	$vrpic[$i] = $vrpic1[0];
			$filevr[$i] = $vrpic[$i].".PNG";
			if($j <5) {
				echo "<img src ='../../pic/vr/$result3[vr_dir]/$filevr[$i]' width='150'> ";
			}
			$j=$j+1;
		}
    } // end foreach
		if($result3[vr_direction] == 'R' ) {
			echo "<a href='editarchitec.php?vrid=$result3[vr_id]&objectid=$objectid&refcode=$refcode&dirchange=L'><img src='images/right_arrow.jpg' width ='30'></a>";
		}
		else if($result3[vr_direction] == 'L') {
			echo "<a href='editarchitec.php?vrid=$result3[vr_id]&objectid=$objectid&refcode=$refcode&dirchange=R'><img src='images/left_arrow.jpg' width ='30'></a>";
		}
///////////  End Check Pic ///////////
        echo "<a href ='editarchitec.php?vrid=$result3[vr_id]&objectid=$objectid&refcode=$refcode&delvr=1'> <img src ='images/icon_del.gif'> </a> <br>";
} // end for

echo "</div>";
echo "</div>";
echo "<div class='box-body'>"; // Start box-body
echo "<form name ='formupload' method='post' action='editarchitec.php' enctype='multipart/form-data'>";
echo "<div class='form-group'>";

echo "<input type='file' name='uploadedfilevr' id='uploadedfilevr'>";
echo "</div>";
echo "<div class='form-group'>";
echo "<input type='hidden' name='updatevr' value='1'>";
echo "<input type='hidden' name='objectid' value='$objectid'>";
echo "<input type='hidden' name='refcode' value='$refcode'>";
echo "<input type='submit' class='btn btn-primary' value='อัพโหลดไฟล์'>";
echo "</div>";
echo "</form>";
echo "</div>";
echo "</div>";
?>

<?php
//////////////////////////////////////////////////////////////////////////////////// UPLOAD FILE
if($updown == '1') {
	echo "UPLOAD Download File";
	######## UPload FILE###########
	$target_path = "pic/download/";
	$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
	$myfile = $_FILES['uploadedfile']['name'];

	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
		echo "The file ".  basename( $_FILES['uploadedfile']['name'])." has been uploaded";
		$sql0 = "UPDATE muse_object SET `obj_downloadfile`='$myfile', `obj_download`='0' WHERE obj_refcode ='$refcode'";
		$query0=mysqli_query($link,$sql0) or die("Can't Query-0");

	} else {
		echo "There was an error uploading the file, please try again!";
	}
}

echo "<div class='box box-primary'>"; // Start box-primary
echo "<div class='box-header'>";
echo "<h3 class='box-title'>ไฟล์ดาวน์โหลด</h3>";
echo "</div>";
echo "<div class='box-body'>"; // Start box-body
if($download == '1') {
	//echo "อนุญาตให้ดาวน์โหลดได้";
	$sql0 = "UPDATE architec_object SET `archObj_Download`= '1' WHERE archObj_Refcode ='$refcode'";
	$query0=mysqli_query($link,$sql0) or die("Can't Query-0.1");
} else {
	//echo "ไม่อนุญาตให้ดาวน์โหลด";
	$sql0 = "UPDATE architec_object SET `archObj_Download`= '0' WHERE archObj_Refcode ='$refcode'";
	$query0=mysqli_query($link,$sql0) or die("Can't Query-0.2");
}

if($deldownload == '1') {
	//echo "อนุญาตให้ดาวน์โหลดได้";
	$sql0 = "UPDATE architec_object SET `archObj_downloadfile`= '',`archObj_Download`= '0' WHERE archObj_Refcode ='$refcode'";
	$query0=mysqli_query($link,$sql0) or die("Can't Query-0.3");
}

//upload  ไฟล์download

echo "<form name ='formupload' method='post' action='model/funcMediaUploadMuse.php' enctype='multipart/form-data'>";
echo "<div class='form-group'>";
//echo "check exiting download file";
$sql3 = "SELECT * FROM `architec_object` WHERE archObj_Refcode = '$refcode'";
$query3=mysqli_query($link,$sql3) or die("Can't Query3");
$num_rows3=mysqli_num_rows($query3);
for ($i=0; $i<$num_rows3; $i++) {
	$result3=mysqli_fetch_array($query3);
	$downloadfile = $result3['archObj_downloadfile'];
	$download = $result3['archObj_Download'];
	//echo "$result3[obj_downloadfile] <br>";
}

echo "
	<input type='file' name='uploadedfile' id='uploadedfile'>
	<input type='hidden' name='type' value='architec'>
";
echo "</div>";
echo "<div class='form-group'>";
echo "<input type='hidden' name='updown' value='1'>";
echo "<input type='hidden' name='objectid' value='$objectid'>";
echo "<input type='hidden' name='refcode' value='$refcode'>";
echo "<input type='submit' class='btn btn-primary' value='อัพโหลดไฟล์'>";
echo "</div>";
echo "</form>";

$open_check = $_REQUEST['open_check'];
$objectid = $_REQUEST['objectid']; //objid
$req_bpu_id = $_REQUEST['bpu_id_req']; //bpuid


$ul_query = mysqli_query($link,"SELECT * FROM `architec_upload` WHERE `obj_id` = '$objid'");
echo "<div class='row'>";
while($row = mysqli_fetch_assoc($ul_query)) {
	$ext = pathinfo($row['bpu_file']);
	$bpu_id = $row['bpu_id'];
	$filetype = explode(".", $row[bpu_file]);
	$filetype = $filetype[1];
	$type = "architec";

	if($filetype =='pdf') {
		echo "<div class='col-sm-4' align='center'>";   
		echo "<a target='_blank' href='../../pic/architec_upload/".$refcode."/".$row['bpu_file']."'>
		<br>    <img src='images/pdf.png' width='100'> <br>".$row['bpu_file']." </a>
		<p>  <a href='model/funcDeleteFile.php?objectid=".$objectid."&type=".$type."&refcode=".$refcode."&file=".$row['bpu_id']."'>
		<img src='images/icon_del2.png'></a>  </p>";

		$num_rows=mysqli_num_rows($query);

		for ($i=0; $i < $num_rows; $i++) {
			$result=mysqli_fetch_array($query);
			$email = $result['bg_email'];
		}
		$secheck = "SELECT * FROM architec_upload WHERE bpu_id = '$bpu_id' ";
		$query_checking = mysqli_query($link , $secheck) or die("Can't Query");
		$num_rowssql = mysqli_num_rows($query_checking);
        for ($ssi=0; $ssi < $num_rowssql; $ssi++) {
	        $row_resuldata = mysqli_fetch_array($query_checking);
            $bup = $row_resuldata['bpu_id'];
        }
		$secheckdata = "SELECT * FROM architec_upload_check WHERE bpu_id = '$bup'  ";
		$querydata = mysqli_query($link , $secheckdata) or die("Can't Query");
		$num_r = mysqli_num_rows($querydata);

		for ($ssiss=0; $ssiss < $num_r; $ssiss++) {
			$row_re = mysqli_fetch_array($querydata);
			$bup = $row_re['bpu_id'];
			$objid = $row_re['obj_id'];
			$open_check_res = $row_re['open_check'];
			$open_check_true = $row_re['open_check_true'];
			$open_check_false = $row_re['open_check_false'];
		}

		$cover = $_REQUEST['cover'];
        if ($open_check_res == '1' ) {
			echo "<a href='editarchitec.php?cover=0&objectid=$objectid&refcode=$refcode&bpu_id_req=$bpu_id'>
			<img src='images/icon_set2.png'> อนุญาตให้ดาวน์โหลด </a>";
		} else if ($open_check_res == '0' ) {
			echo "<a href='editarchitec.php?cover=1&objectid=$objectid&refcode=$refcode&bpu_id_req=$bpu_id'>
			<img src='images/icon_set3.png'> อนุญาตให้ดาวน์โหลด </a>";
        }
		if ($cover == '1') {
			$update_data = "UPDATE `architec_upload_check`
			SET

			`bpu_id` = '$req_bpu_id',`obj_id` = '$objectid',`bpu_count_dowload` = '0',`open_check` = '1' WHERE `bpu_id` = '$req_bpu_id'  ";

			mysqli_query($link,$update_data);
		}
		if ($cover == '0') {
			$update_data = "UPDATE `architec_upload_check`
			SET

			`bpu_id` = '$req_bpu_id',`obj_id` = '$objectid',`bpu_count_dowload` = '0',`open_check` = '0' WHERE `bpu_id` = '$req_bpu_id'  ";

			mysqli_query($link,$update_data);
		}

		echo "</div>";

	} // if ใหญ่
    else {

    }
			//echo "</div><!-- /.col-md-2 -->";
} // while loop

echo "</div><!-- /.row -->";
echo "</div>";
echo "</div>";
		/* UPLOAD FILE */
?>

<!- -------- video ----- -->

<?php
//////////////////////////////////////////////////////////////////////////////////// Video FILE
if($updown == '1') 	{
	echo "UPLOAD Download File";
	######## UPload FILE###########
	$target_path = "pic/download/";
	$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
	$myfile = $_FILES['uploadedfile']['name'];

	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
		echo "The file ".  basename( $_FILES['uploadedfile']['name']).
		" has been uploaded";
		$sql0 = "UPDATE muse_object SET `obj_downloadfile`='$myfile', `obj_download`='0' WHERE obj_refcode ='$refcode'";
		$query0=mysqli_query($link,$sql0) or die("Can't Query-0");
	} else {
		echo "There was an error uploading the file, please try again!";
	}
}

echo "<div class='box box-primary'>"; // Start box-primary
echo "<div class='box-header'>";
echo "<h3 class='box-title'>ไฟล์มีเดีย (MP3 , MP4)</h3>";
echo "</div>";
echo "<div class='box-body'>"; // Start box-body
if($download == '1') {
	//echo "อนุญาตให้ดาวน์โหลดได้";
	$sql0 = "UPDATE architec_object SET `archObj_Download`= '1' WHERE archObj_Refcode ='$refcode'";
	$query0=mysqli_query($link,$sql0) or die("Can't Query-0");
} else {
	//echo "ไม่อนุญาตให้ดาวน์โหลด";
	$sql0 = "UPDATE architec_object SET `archObj_Download`= '0' WHERE archObj_Refcode ='$refcode'";
	$query0=mysqli_query($link,$sql0) or die("Can't Query-0");
}
if($deldownload == '1') {
	//echo "อนุญาตให้ดาวน์โหลดได้";
	$sql0 = "UPDATE architec_object SET `archObj_downloadfile`= '',`archObj_Download`= '0' WHERE archObj_Refcode ='$refcode'";
	$query0=mysqli_query($link,$sql0) or die("Can't Query-0");
}

echo "<form name ='formupload' method='post' action='model/funcMediaUploadMuse.php' enctype='multipart/form-data'>";
echo "<div class='form-group'>";
$sql3 = "SELECT * FROM `architec_object` WHERE archObj_Refcode = '$refcode'";
$query3=mysqli_query($link,$sql3) or die("Can't Query3");
$num_rows3=mysqli_num_rows($query3);
for ($i=0; $i<$num_rows3; $i++) {
	$result3=mysqli_fetch_array($query3);
	$downloadfile = $result3['archObj_downloadfile'];
	$download = $result3['archObj_Download'];
}

echo "
<input type='file' name='uploadedfile' id='uploadedfile'>
	<input type='hidden' name='type' value='architec'>
";
echo "</div>";
echo "<div class='form-group'>";
echo "<input type='hidden' name='updown' value='1'>";
echo "<input type='hidden' name='objectid' value='$objectid'>";
echo "<input type='hidden' name='refcode' value='$refcode'>";
echo "<input type='submit' class='btn btn-primary' value='อัพโหลดไฟล์(มีเดีย)'>";
echo "</div>";
echo "</form>";
			
$ul_query = mysqli_query($link,"SELECT * FROM `architec_upload` WHERE `obj_id` = '".$objid."'");
echo "<div class='row'>";
while($row = mysqli_fetch_assoc($ul_query)) {
	$ext = pathinfo($row['bpu_file']);

	$filetype = explode(".", $row[bpu_file]);
	$filetype = $filetype[1];
	$type = "architec";

	if(($filetype =='mp3') or ($filetype =='MP3')) {
		echo "<div class='col-sm-4' align='center'>";
		echo "<audio width='250' controls>
		<source src='../../pic/architecupload/$refcode/$row[bpu_file]' type='audio/mpeg'>
		<embed src='../../pic/architec_upload/$refcode/$row[bpu_file]' width='250'>
		</audio>";
		echo "<br>";
		echo "<p>
				<a href='model/funcDeleteFile.php?objectid=".$objectid."&type=".$type."&refcode=".$refcode."&file=".$row['bpu_id']."'><img src='images/icon_del2.png'></a>
			</p> ";
		echo "</div>";
	} else if(($filetype =='mp4') or ($filetype =='MP4')) {
		echo "<div class='col-sm-4' align='center'>";
		echo "<video width='250'  controls>
				<source src='../../pic/museum_upload/$refcode/$row[bpu_file]' type='video/mp4'>
				<object data='../../museum_upload/$refcode/$row[bpu_file]' width='250' >
				</object>
			</video>";
		echo "<br>";
		echo "<p>
			<a href='model/funcDeleteFile.php?objectid=".$objectid."&type=".$type."&refcode=".$refcode."&file=".$row['bpu_id']."'><img src='images/icon_del2.png'></a>
			</p> ";
		echo "</div>";
	} else {
		echo "";
	}
} // end while
	echo "</div><!-- /.row -->";
	echo "</div>";
	echo "</div>";
	/* UPLOAD File */
?>

<!-----  Picture  --------->

<?php
if($_SESSION['id']) {
	if($delpic == 1) {
		$sql = "DELETE FROM architec_pic WHERE archPic_Id = '$picid' ";
		$query=mysqli_query($link,$sql) or die("Can't Query - ไม่สามารถลบภาพสถาปัตยกรรมได้ : 1825");
		echo "<div id='alert-message' class='alert alert-success alert-dismissable'>
				<i class='fa fa-check'></i>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
				ลบภาพเสร็จสิ้น
			</div>";
	}
	if($setpic == 1) {
		// ปรับค่าให้ obj_cover อื่นๆให้มีค่าเป็น 0 เพื่อที่จะให้เหลือค่า 1 ค่าเดียว
		$sql0 = "UPDATE architec_pic SET `archObj_Cover`='0' WHERE `architec_pic`.`archObj_Refcode` ='$refcode' AND `architec_pic`.`archPic_Id` !='$picid'";
		$query0=mysqli_query($link,$sql0) or die("Can't Query - ไม่สามารถปรับ 0 ทั้งหมดให้การปรับภาพหน้าปก : 1850");

		$sql = "UPDATE architec_pic SET `archObj_Cover`='1' WHERE `architec_pic`.`archPic_Id` ='$picid'";
		$query=mysqli_query($link,$sql) or die("Can't Query - ไม่สามารถปรับ 1 ให้กับภาพหน้าปกที่เลือก : 1853");
		echo "<div id='alert-message' class='alert alert-success alert-dismissable'>
				<i class='fa fa-check'></i>
				<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
				ตั้งเป็นภาพปกเสร็จสิ้น
			  </div>";
	}
    else {
		// รอปรับแก้จากของเก่า ทำให้ error
		// echo 'this is: '.$setpic;
		// $sql = "UPDATE architec_pic SET `archObj_Cover`='0' WHERE `architec_pic`.`architec_pic` ='$picid'";
		// $query=mysqli_query($link,$sql) or die("Can't Query-2");
  	}

##check open pics ## mkallamamlqnmal makmnzj lalma

	if($openpic == '1') {
		//echo "สั่งเปิดรูป";
		$sql123 = "UPDATE architec_pic SET `archPic_Open`='0' WHERE `architec_pic`.`archPic_Id` ='$picid'";
		$query123=mysqli_query($link,$sql123) or die("Can't Query - ไม่สามารถสั่งเปิดรูป"); 
	} else if($openpic == '0'){
		$sql123 = "UPDATE architec_pic SET `archPic_Open`='1' WHERE `architec_pic`.`archPic_Id` ='$picid'";
		$query123=mysqli_query($link,$sql123) or die("Can't Query - ไม่สามารถสั่งปิดรูป");
	}
   	############## Picture  Login Already ############

	$data = $refcode ;
	function ConvertTH_EN($data) {	
		$CovertedText = "";
		$CharacterTable = array("ก" => "k", 
                            "ข" => "kh",
                            "ฃ" => "kh",
                            "ค" => "kh",
                            "ฅ" => "kh",
                            "ฆ" => "kh",
                            "ง" => "ng",
                            "จ" => "ch",
                            "ฉ" => "ch",
                            "ช" => "ch",
                            "ซ" => "s",
                            "ฌ" => "ch",
                            "ญ" => "y",
                            "ฎ" => "d",
                            "ฏ" => "t",
                            "ฐ" => "th",
                            "ฑ" => "th",
                            "ฒ" => "th",
                            "ณ" => "n",
                            "ด" => "d",
                            "ต" => "t",
                            "ถ" => "th",
                            "ท" => "th",
                            "ธ" => "th",
                            "น" => "n",
                            "บ" => "b",
                            "ป" => "p",
                            "ผ" => "ph",
                            "ฝ" => "f",
                            "พ" => "ph",
                            "ฟ" => "f",
                            "ภ" => "ph",
                            "ม" => "m",
                            "ย" => "y",
                            "ร" => "r",
                            "ล" => "l",
                            "ว" => "w",
                            "ศ" => "s",
                            "ษ" => "s",
                            "ส" => "s",
                            "ห" => "h",
                            "ฬ" => "l",
                            "อ" => "o",
                            "ฮ" => "h", 
                            "๑" => "1",
                            "๒" => "2",
                            "๓" => "3",
                            "๔" => "4",
                            "๕" => "5",
                            "๖" => "6",
                            "๗" => "7",
                            "๘" => "8",
                            "๙" => "9",
                            "๐" => "0",);
		$data = trim($data);
		$data = preg_replace('/[^A-Za-z0-9ก-๙\\s]/', '', $data);
		$charArray;
		$length = mb_strlen($data, 'utf-8');
		$strlen = $length;	
		while ($strlen) { 
			$charArray[] = mb_substr($data,0,1,"UTF-8"); //to Character Array
			$data = mb_substr($data,1,$strlen,"UTF-8"); //decrease string by 1
			$strlen = mb_strlen($data); //decrease strlen by 1
		}
		
		for ($i=0; $i < $length; $i++) {
			if(strcmp('', preg_replace('/[^ก-๙]/', '', $charArray[$i])) == 0) {
				$CovertedText .= $charArray[$i];
			} else {
				$CovertedText .= $CharacterTable[$charArray[$i]];
			}            
		}
		return strtolower($CovertedText);
	} // end function
  
	echo "<div class='box box-primary'>"; // Start box-primary
	echo "<div class='box-header'>";
	echo "<h3 class='box-title'>รูปสถาปัตยกรรม</h3>";

    $ref = ConvertTH_EN($data);
     
	echo "</div>";
	echo "<div class='box-body'>"; // Start box-body
	echo "<div>
			<a class='btn btn-primary' href=\"JavaScript:newPopup('uploadarchitec/index.php?dir=$ref&objectid=$objectid&refcode=$refcode');\">
				<i class='fa fa-upload fa-lg'></i> อัพโหลดรูปสถาปัตยกรรม
			</a>
			<a class='btn btn-primary pull-right' href=\"JavaScript:newPopup('model/sortable/sortArchitec.php?ref=$refcode&type=architec&id=$objectid');\">
				<i class='fa fa-sort-amount-desc fa-lg'></i> จัดเรียงรูปสถาปัตยกรรม
			</a><br><br>
		  </div>";


	##### Start Tab Pic 1 #######
	##check number of pics ##
	if($updatepic == '1') {
		$sql5 = "SELECT * FROM `architec_pic` WHERE obj_refcode = '$refcode' ";
		$query5=mysqli_query($link,$sql5) or die("Can't Query5");
		$num_rows5=mysqli_num_rows($query5);
	}
	### end check number of pics ###

	if($updatepic == '1'){
		echo "Updatepic";
		######## UPload FILE###########
		$target_path = "pic/big_architec/";
		$target_path_thumb = "pic/thumb_architec/";

		$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
		$target_path_thumb = $target_path_thumb . basename( $_FILES['uploadedfile']['name']);


		$myfile = $_FILES['uploadedfile']['name'];

		echo "$myfile";
		if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
			echo "The file ".  basename( $_FILES['uploadedfile']['name']).
			" has been uploaded";
		} else {
			echo "There was an error uploading the file, please try again!";
		}

		$original = "../../pic/big_architec/".$myfile;
		$dest = "../../pic/thumb_architec/".$myfile;
		copy($original,$dest);

		$thumb = "thumb-".$myfile;
		$mythumb = "../../pic/thumb_architec/".$thumb;
		//echo "$thumb --> $mythumb";
		rename($dest, $mythumb);

		//////////////////////////////////////////

		$sql = "INSERT INTO architec_pic (`archPic_Id` ,`archPic_Name` ,`archObj_Id` ,`archObj_Refcode` )VALUES ( NULL, '$myfile', 0, '$refcode')";

		$query=mysqli_query($link,$sql) or die("Can't Query: แก้ไขรูปภาพ (2084)");
	}

	////////////   End Upload File /////////

	echo "<div id='links'>";
	echo "<table width=100% border=0>";
	echo "<tr>";
	$sql3 = "SELECT * FROM `architec_pic` WHERE archObj_Refcode = '$refcode' ORDER BY archListorder ASC";
			$query3=mysqli_query($link,$sql3) or die("Can't Query แสดงรูปภาพในส่วนของภาพที่อัปโหลด: 2152");
			$num_rows3=mysqli_num_rows($query3);

	foreach ($query3 as $result3) {
		$filetype = explode(".", $result3['archPic_Name']);
		$filetype = $filetype[1];
		$cover =$result3['archObj_Cover'];
		$objref =$result3['archObj_Refcode'];
		$foldref =$result3['archFolder_Refcode'];        
		$refcode = $objref ;    
		if($line < 3){
			echo "<td align='center'>";
			if(($filetype == 'jpg') or ($filetype =='jpeg') or ($filetype =='png') or ($filetype =='PNG') or ($filetype =='JPEG') or ($filetype == 'JPG')) {
				echo "<a href=\"../../pic/big_architec/$foldref/$result3[archPic_Name]\" data-gallery>
					<img src ='../../pic/big_architec/$foldref/$result3[archPic_Name]' width='200'></a> <br>";
			}
			else if($filetype =='mp4' or $filetype =='MP4') {
				echo "<video width='200'  controls>
					<source src='../../pic/big_architec/$refcode/$result3[archPic_Name]' type='video/mp4'>
					<object data='../../pic/big_architec/$refcode/$result3[archPic_Name]' width='200' >
					</object>
					</video>";
				echo "<br>";
			} else if($filetype =='mp3' or $filetype =='MP3') {
				echo "<audio width='200' controls>
					<source src='../../pic/big_architec/$refcode/$result3[archPic_Name]' type='audio/mpeg'>
					<embed src='../../pic/big_architec/$refcode/$result3[archPic_Name]' width='200'>
					</audio>";
				echo "<br>";
			} else if($filetype =='pdf') {
				echo "<a href ='../../pic/big_architec/$refcode/$result3[archPic_Name]' target='_blank'><img src='images/pdf-icon.png' width='150'></a>";
				echo "<br>";
			}

			echo "
			<a href=\"JavaScript:newPopupdetail('zoom/picArchitecEdit.php?picid=$result3[archPic_Id]&objectid=$objid&refcode=$refcode');\"> <img src='images/edit_icon2.png'></a>
			<a href ='editarchitec.php?picid=$result3[archPic_Id]&delpic=1&objectid=$objid&refcode=$refcode'> <img src ='images/icon_del2.png'> </a>";

			if(($filetype == 'jpg') or ($filetype =='jpeg') or ($filetype =='png') or ($filetype =='JPG') or ($filetype =='PNG') or ($filetype =='JPEG')) {
				if($cover == '1') {
					echo "<a href ='editarchitec.php?picid=$result3[archPic_Id]&setpic=0&objectid=$objid&refcode=$refcode'><img src ='images/icon_set2.png'> </a>"; //Checked
				} else {
					echo "<a href ='editarchitec.php?picid=$result3[archPic_Id]&setpic=1&objectid=$objid&refcode=$refcode'> <img src ='images/icon_set3.png'> </a>"; //Unchecked
				}
				if($result3['archPic_Open'] == '0') {
					echo "<a href ='editarchitec.php?picid=$result3[archPic_Id]&openpic=0&objectid=$objid&refcode=$refcode'><img src='images/eye-close.png'></a>";
				}
				else {
					echo "<a href ='editarchitec.php?picid=$result3[archPic_Id]&openpic=1&objectid=$objid&refcode=$refcode'><img src='images/eye-open.png'></a>";
				}
			}
			echo "</td>";
			$line = $line+1;
		} else {
			echo "<td align='center'>";
			if(($filetype == 'jpg') or ($filetype =='jpeg') or ($filetype =='png') or ($filetype =='JPG') or ($filetype =='PNG') or ($filetype =='JPEG')) {
				echo "<a href=\"../../pic/big_architec/$foldref/$result3[archPic_Name]\" data-gallery>
				<img src ='../../pic/big_architec/$foldref/$result3[archPic_Name]' width='200'></a> <br>";
			} else if($filetype =='mp4' or $filetype =='MP4') {
				echo "<video width='200'  controls>
					<source src='../../pic/big_architec/$refcode/$result3[archPic_Name]' type='video/mp4'>
					<object data='../../pic/big_architec/$refcode/$result3[archPic_Name]' width='200' >
					</object>
					</video>";
				echo "<br>";
			} else if($filetype =='mp3' or $filetype =='MP4') {
				echo "<audio width='200' controls>
						<source src='../../pic/big_architec/$refcode/$result3[archPic_Name]' type='audio/mpeg'>
						<embed src='../../pic/big_architec/$refcode/$result3[archPic_Name]' width='200'>
					</audio>";
				echo "<br>";
			} else if($filetype =='pdf') {
				echo "<a href ='../../pic/big_architec/$refcode/$result3[archPic_Name]' target='_blank'><img src='images/pdf-icon.png' width='150'></a>";
				echo "<br>";
			}
			echo " <a href=\"JavaScript:newPopupdetail('zoom/picArchitecEdit.php?picid=$result3[archPic_Id]&objectid=$objid&refcode=$refcode');\"> <img src='images/edit_icon2.png'></a>
				<a href ='editarchitec.php?picid=$result3[archPic_Id]&delpic=1&objectid=$objid&refcode=$refcode'><img src ='images/icon_del2.png'></a>";
	
			if(($filetype == 'jpg') or ($filetype =='jpeg') or ($filetype =='png') or ($filetype =='JPG') or ($filetype =='PNG') or ($filetype =='JPEG')) {
				if($cover == '1') {
					echo "<a href ='editarchitec.php?picid=$result3[archPic_Id]&setpic=1&objectid=$objid&refcode=$refcode'> <img src ='images/icon_set2.png'> </a>"; //Checked
				}
				else {
					echo "<a href ='editarchitec.php?picid=$result3[archPic_Id]&setpic=1&objectid=$objid&refcode=$refcode'> <img src ='images/icon_set3.png'> </a>"; //Unchecked
				}
			}
			
			if($result3[archPic_Open] == '0') { 
				echo "<a href ='editarchitec.php?picid=$result3[archPic_Id]&openpic=0&objectid=$objid&refcode=$refcode'><img src='images/eye-close.png'></a>";
			} else {
				echo "<a href ='editarchitec.php?picid=$result3[archPic_Id]&openpic=1&objectid=$objid&refcode=$refcode'><img src='images/eye-open.png'></a>";
			}
			echo "</td>";
			echo "</tr>";
			$line =0;
		}

	} // end foreach
	echo "</table>";
	echo "</div>";

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
	######### End Of Tab  Pic 1 ############
} // end if
?>



                
<!- --------------------------------------------------------- -->




						</div>
 
	
                    
                    </div><!-- /.row (main row) -->
                    
<div>
<div class='box box-primary'>
<div class='box-header'> <h3 class='box-title'>Exibition</h3> </div>
	
<div class='box-body'>
<div class='row'>
<div class='col-sm-6'>    
<form action="http://www.museumspool.com/adt_anurak/index.php/Adapter/update_item" target='_blank' method='post' >
<!--    <div class="form-group">-->
<?php 
	$refcode = $_REQUEST['refcode'];
    include("connect.php");

	mysqli_query($link2, "SET NAMES utf8");
	mysqli_commit($link2);   
        
	$uri = $_SERVER['REQUEST_URI']; // $uri == example.com/index
	$exploded_uri = explode('/', $uri); //$exploded_uri ==     array('example.com','index')
	$domain_name = $exploded_uri[1]; 

?>    
      <label for="item_code"><?php //echo $domain_name ;?><?php //echo $bg_id6 ;?> <?php //echo $refcode ;?></label>
		<input type="hidden" name="action" value="Item"/>
		<input name="museum_code" type="hidden" id="museum_code" value="<?php echo $bg_id6 ;?>">  
		<input name="item_code" type="hidden" id="item_code" value="<?php echo $refcode ;?>">


    	<button type="submit" class="btn btn-primary"><i class='fa fa-upload fa-lg'></i> ส่งข้อมูล นิทรรศการ </button>
  		</form> 
        </div>  
					<div class='col-sm-6'>     
				<form action="http://www.museumspool.com/adt_anurak/index.php/Adapter/get_link_item" target='_blank' method='post' >
				<!--    <div class="form-group">-->
					<?php $refcode = $_REQUEST['refcode'];//echo $refcode 
						// echo "$bg_id6" ;
					?>    
					<label for="item_code"><?php //echo $bg_id6 ?><?php //echo $refcode ?></label>
						<input type="hidden" name="action" value="Item"/>
					<input name="museum_code" type="hidden" id="museum_code" value="<?php echo $bg_id6 ;?>">    
					<input name="item_code" type="hidden" id="item_code" value="<?php echo $refcode ;?>">


					<button type="submit" class="btn btn-primary pull-right"><i class='fa fa-upload fa-lg'></i> สร้างนิทรรศการ </button>
				</form>        

				</div> 
			</div>           
		</div>
	</div> 
</div>  

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
		<!-- Bootstrap Image Gallery
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
		<script src="js/gallery/jquery.blueimp-gallery.min.js"></script>
		<script src="js/gallery/bootstrap-image-gallery.min.js"></script>
		<script src="js/gallery/blueimp-gallery-indicator.js"></script>
		<!-- Page script -->
		<script type="text/javascript">
			$(function() {
				$('#datepicker').datepicker({
					language: 'th'
				});

				$("#alert-message").alert();
					window.setTimeout(function() { $("#alert-message").alert('close'); }, 3000);
                
                $("#alert-message-cover").alert();
					window.setTimeout(function() { $("#alert-message-cover").alert('close'); }, 3000);
			});
		</script>

		<script>
			var type = "archi";

			$("#cate_1").on('change', function() {
				var list_2 = "";
				var list_3 = "";
				$("#form_cate_2").html(list_2);
				$("#form_cate_3").html(list_3);
				$.ajax({url: "model/getCategory.php?table="+type+"&level=2&archi=true&id="+ $(this).val(), success: function(result){
					var fetch = $.parseJSON(result);

					if(fetch.length > 0) {
						list_2 += "<label for='cate_2' class='col-sm-3 control-label'>ประเภทระดับ 2</label>";
						list_2 += "<div class='col-sm-9'>";
						list_2 += "<select name='cate_2' class='form-control' id='cate_2'>";
						list_2 += "<option value='0'>ไม่ระบุ</option>";
						$.each(fetch, function(key, value) {
							console.log(value);
							list_2 += "<option value='"+value.id+"'>" + value.name + "</option>";
						});
						list_2 += "</select>";
						list_2 += "</div>";
						$("#form_cate_2").html(list_2);
						$("#form_cate_3").html(list_3);

						$("#cate_2").on('change', function() {
							var list_3 = "";
							$("#form_cate_3").html(list_3);
							$.ajax({url: "model/getCategory.php?table="+type+"&level=3&archi=true&id="+ $(this).val(), success: function(xx){
								var ff = $.parseJSON(xx);

								if(ff.length > 0) {
									list_3 += "<label for='cate_3' class='col-sm-4 control-label'>ประเภทระดับ 3</label>";
									list_3 += "<div class='col-sm-8'>";
									list_3 += "<select name='cate_3' class='form-control' id='cate_3'>";
									list_3 += "<option value='0'>ไม่ระบุ</option>";
									$.each(ff, function(key, value) {
										list_3 += "<option value='"+value.id+"'>" + value.name + "</option>";
									});
									list_3 += "</select>";
									list_3 += "</div>";
									$("#form_cate_3").html(list_3);
								}

							}});
						}); //////////////////////////////// 33333333333333333333333
					}

				}});
			}); /////////////////////////////22222222222222222222222222222

		</script>

		<!-- 3 Level Category -->


    </body>
</html>
