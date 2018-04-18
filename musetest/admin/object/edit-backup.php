<?php
session_name('tzLogin');
session_set_cookie_params(2*7*24*60*60);
session_start();
$id=$_SESSION['id'];
$usr=$_SESSION['usr'];
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
				url,'popUpWindow','height=700,width=400,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=no')
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
          <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
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
										require('connect.php');
										$sql = "select * from tz_members where id = '$id'   ";
										$query=mysqli_query($link,$sql) or die("Can't Query");
										$result=mysqli_fetch_array($query);
										echo "<img src ='pic/profile/profile-$result[mem_pic]' class='img-circle' alt='User Image'>";
									}
									?>
                                    <p>
                                        <?php echo $_SESSION['usr'] ? $_SESSION['usr'] : 'Guest';?>
                                        <small>
											<?php
											if($_SESSION['id'])
											{
												require('connect.php');
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
								require('connect.php');
								$sql = "select * from tz_members where id = '$id'   ";
								$query=mysqli_query($link,$sql) or die("Can't Query");
								$result=mysqli_fetch_array($query);
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
						แก้ไขเอกสารจดหมายเหตุ
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="showobj.php"><i class="fa fa-dashboard"></i> เอกสารจดหมายเหตุ</a></li>
                        <li class="active">แก้ไขเอกสารจดหมายเหตุ</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Main row -->
                    <div class="row">
						<div class="col-md-12">


<!--------------   Process ----------------->

        <?php
	if($_SESSION['id'])
	{
   	##############  Login Already ############
	#echo "<h1> You are registered and logged in!</h1>";
############  GET DB ########
//including the database connection file
require('connect.php');
$update=$_REQUEST['update'];

$updatepic=$_REQUEST['updatepic'];
$delpic=$_REQUEST['delpic'];
$setpic=$_REQUEST['setpic'];
$picid=$_REQUEST['picid'];

$updatevr=$_REQUEST['updatevr'];
$delvr=$_REQUEST['delvr'];
$vrid=$_REQUEST['vrid'];

$dirchange =$_REQUEST['dirchange'];



$objid=$_REQUEST['objectid'];
$objectid=$_REQUEST['objectid'];

//$refcode=$_REQUEST['refcode'];
//$title=$_REQUEST['title'];
//$keyword = $_REQUEST['keyword'];

$refcode =$_REQUEST['refcode'];
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
    $date = $_REQUEST['date'];
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


if($update == '1')
{

$sql = "UPDATE archive_object SET
`obj_refcode`='$refcode' ,
`obj_title` ='$title',
`obj_datecreate`='$datecreate' ,
`obj_level` ='$level',
`obj_extent` ='$extent',
`obj_creator` ='$creator',
`obj_bio` ='$bio',
`obj_dateacc` ='$dateacc',
`obj_history` ='$history',
`obj_acquis` ='$acquis',
`obj_scope` ='$scope',
`obj_appraisal` ='$appraisal',
`obj_accruals` ='$accruals',
`obj_arrangement` ='$arrangement',
`obj_legal` ='$legal',
`obj_condition`='$condition' ,
`obj_copyright` ='$copyright',
`obj_lang` ='$lang',
`obj_physicals` ='$physicals',
`obj_aids` ='$aids',
`obj_location` ='$location',
`obj_existence` ='$existence',
`obj_related` ='$related',
`obj_associated` ='$associated',
`obj_pubnote` ='$pubnote',
`obj_note` ='$note',
`obj_date` ='$date',
`obj_category` ='$category',
`obj_access`= '$access',
`obj_keyword`= '$keyword',
`obj_display`= '$display',
`obj_location_display` = '$locationdisplay',
`obj_existence_display` = '$existencedisplay',
`obj_creator_display` = '$creatordisplay',
`obj_bio_display` = '$biodisplay',
`obj_dateacc_display` = '$dateaccdisplay',
`obj_history_display` = '$historydisplay',
`obj_acquis_display` = '$acquisdisplay',
`obj_approve`= '$id'
WHERE `archive_object`.`obj_id` =$objid";
 $query=mysqli_query($link,$sql) or die("Can't Query0");
echo "
<div id='alert-message' class='alert alert-success alert-dismissable'>
	<i class='fa fa-check'></i>
	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
	แก้ไขข้อมูลเอกสารจดหมายเหตุเสร็จสิ้น
</div>";
}

//fetching data in descending order (lastest entry first)
 $sql = "select * from archive_object  where obj_id = $objectid";
         $query=mysqli_query($link,$sql) or die("Can't Query1");
         $num_rows=mysqli_num_rows($query);
	     for ($i=0; $i<$num_rows; $i++) {
         $result=mysqli_fetch_array($query);
		    //echo "$result[obj_id] $result[obj_title] <br>";
			$objid = $result[obj_id] ;
			$refcode = $result[obj_refcode] ;
			$title = $result[obj_title] ;
			$datecreate = $result[obj_datecreate] ;

			$newdate = explode("-",$datecreate);
			$datecreate = $newdate[2]."-".$newdate[1]."-".$newdate[0];

			$level = $result[obj_level] ;
			$extent = $result[obj_extent] ;
			$creator = $result[obj_creator] ;
			$bio = $result[obj_bio] ;
			$dateacc = $result[obj_dateacc] ;
			$history = $result[obj_history] ;
			$acquis = $result[obj_acquis] ;
			$scope = $result[obj_scope] ;
			$appraisal = $result[obj_appraisal] ;
			$accruals = $result[obj_accruals] ;
			$arrangement = $result[obj_arrangement] ;
			$legal = $result[obj_legal] ;
			$condition = $result[obj_condition] ;
			$copyright = $result[obj_copyright] ;
			$lang = $result[obj_lang] ;
			$physicals= $result[obj_physicals] ;
			$aids= $result[obj_aids] ;
			$location = $result[obj_location] ;
			$existence = $result[obj_existence] ;
			$related = $result[obj_related] ;
			$associated = $result[obj_associated] ;
			$pubnote = $result[obj_pubnote] ;
			$note= $result[obj_note] ;
			$date = $result[obj_date] ;
			$category = $result[obj_category] ;
			$access= $result[obj_access] ;
			$keyword = $result[obj_keyword] ;
			$display = $result[obj_display] ;
			$locationdisplay = $result[obj_location_display];
			$existencedisplay = $result[obj_existence_display];
			$creatordisplay = $result[obj_creator_display];
			$biodisplay = $result[obj_bio_display];
			$dateaccdisplay = $result[obj_dateacc_display];
			$historydisplay = $result[obj_history_display];
			$acquisdisplay = $result[obj_acquis_display];
              }

###########################



	######  Start Tab ##########
echo "
<form class='form-horizontal' role='form' name='form1' method='post' action='edit.php' enctype='multipart/form-data'>
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
	<li><a href=\"showobj.php?objectid=$result[obj_id]&del=obj\"><img src='images/icon_del.gif'></a></li>
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
		<input class='form-control' type='text' name ='refcode' value='$refcode' required>
	</div>
</div>

<div class='form-group'>
	<label class='col-sm-2 control-label'>ชื่อเอกสาร*</label>
	<div class='col-sm-10'>
		<input class='form-control' type='text' name ='title' value='$title' required>
	</div>
</div>

<div class='form-group'>
	<label class='col-sm-2 control-label' >ประเภท*</label>
	<div class='col-sm-10'>
	";
	?>
	<?php include('conf/connectdb.php.inc'); ?>
	<?
echo "<select class='form-control' name='category' required>";
echo "<option value=''>-- เลือกประเภท --</option>";
	$sql = "select * from archive_category  where cat1_parent ='0' ";
	$query=mysqli_query($link,$sql) or die("Can't Query2");
	$num_rows=mysqli_num_rows($query);
	for ($i=0; $i<$num_rows; $i++) {
		$result=mysqli_fetch_array($query);
			if($category ==  $result[cat1_id])
			{
				echo "<option value='$result[cat1_id]' selected>$result[cat1_name]</option>";
			}
			else
			{
				echo "<option value='$result[cat1_id]'> $result[cat1_name]</option>";
			}

		// Sub Category //
    	$parent = $result[cat1_id];
		$sql5 = "select * from archive_category  ";
    	$query5=mysqli_query($link,$sql5) or die("Can't Query");
    	$num_rows5=mysqli_num_rows($query5);

    	for ($j=0; $j<$num_rows5; $j++) {
        $result5=mysqli_fetch_array($query5);
        if($result5[cat1_parent] == $result[cat1_id])
         	{
         	if($category ==  $result5[cat1_id])
			 {
                   echo "<option value='$result5[cat1_id]' selected>--$result5[cat1_name]</option>";
			 }
			 else
			 {
                   echo "<option value='$result5[cat1_id]'>--$result5[cat1_name]</option>";
			 }
         	}
        }
	}
echo "</select>
</div>
</div>";
	?>

	<?

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

if($display == 1)
	{
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
}

else if($display == 0)
	{
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
echo "
	</div>
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
				<input type='checkbox' name='historydisplay' value='1' checked> ประวัติเอกสาร
			</label>
		</div> ";
    }
    else
    {
	echo "
		<div class='checkbox'>
			<label>
				<input type='checkbox' name='historydisplay' value='1'> ประวัติเอกสาร
			</label>
		</div> ";
    }

	if($acquisdisplay == 1)
    {
	echo "
		<div class='checkbox'>
			<label>
				<input type='checkbox' name='acquisdisplay' value='1' checked> ประวัติเอกสาร
			</label>
		</div> ";
    }
    else
    {
	echo "
		<div class='checkbox'>
			<label>
				<input type='checkbox' name='acquisdisplay' value='1'> ประวัติเอกสาร
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
else
		{
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
	<label class='col-sm-2 control-label'>ลักษณะทางกายภาพ</label>
	<div class='col-sm-10'>
		<textarea class='form-control' rows='4' name ='physicals'>$physicals</textarea>
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
		<input class='form-control' type='text' name ='keyword' value='$keyword'>
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
	<label class='col-sm-2 control-label'>ประวัติเอกสาร</label>
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
	<label class='col-sm-2 control-label'>เอกสารที่เกี่ยวข้อง</label>
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


<!--------   End Of Process------------>




<!-----  Picture  --------->

   <?php
	if($_SESSION['id'])
	{


if($delpic == 1)
		{
	      $sql = "DELETE FROM archive_pic WHERE pic_id = '$picid' ";
		  $query=mysqli_query($link,$sql) or die("Can't Query5");
		 echo "
		<div id='alert-message' class='alert alert-success alert-dismissable'>
			<i class='fa fa-check'></i>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			ลบภาพเสร็จสิ้น
		</div>";
		}
if($setpic == 1)
		{
// ปรับค่าให้ obj_cover อื่นๆให้มีค่าเป็น 0 เพื่อที่จะให้เหลือค่า 1 ค่าเดียว
 $sql0 = "UPDATE archive_pic SET `obj_cover`='0' WHERE `archive_pic`.`obj_refcode` ='$refcode' AND `archive_pic`.`pic_id` !='$picid'";
 $query0=mysqli_query($link,$sql0) or die("Can't Query-0");

 $sql = "UPDATE archive_pic SET `obj_cover`='1' WHERE `archive_pic`.`pic_id` =$picid";
 $query=mysqli_query($link,$sql) or die("Can't Query-1");



		 echo "
		<div id='alert-message' class='alert alert-success alert-dismissable'>
			<i class='fa fa-check'></i>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			ตั้งเป็นภาพปกเสร็จสิ้น
		</div>";
		}

   	############## Picture  Login Already ############
	echo "<div class='box box-primary'>"; // Start box-primary
	echo "<div class='box-header'>";
	echo "<h3 class='box-title'>เอกสาร</h3>";
	echo "</div>";
	echo "<div class='box-body'>"; // Start box-body
	echo "<div>
			<a class='btn btn-primary' href=\"JavaScript:newPopup('uploaddoc/index.php?dir=$refcode&objectid=$objectid&refcode=$refcode');\">
				<i class='fa fa-upload fa-lg'></i> อัพโหลดเอกสาร
			</a>
			<a class='btn btn-primary pull-right' href=\"JavaScript:newPopup('uploaddoc/reindex4/index-backup.php?objectid=$objectid&refcode=$refcode');\">
				<i class='fa fa-sort-amount-desc fa-lg'></i> จัดเรียงเอกสาร
			</a><br><br>
		  </div>";


	##### Start Tab Pic 1 #######
##check number of pics ##
if($updatepic == '1')
{
$sql5 = "SELECT * FROM `archive_pic` WHERE obj_refcode = '$refcode' ";
$query5=mysqli_query($link,$sql5) or die("Can't Query5");
$num_rows5=mysqli_num_rows($query5);
//echo "number of pics = $num_rows5 <br>";
//if($num_rows5 >= 3)
//{
//$updatepic = 0;
//echo "Max 3 Pics";
//}
}
### end check number of pics ###
if($updatepic == '1')
		{
	    echo "Updatepic";

######## UPload FILE###########
 $target_path = "pic/big/";
 $target_path_thumb = "pic/thumb/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
$target_path_thumb = $target_path_thumb . basename( $_FILES['uploadedfile']['name']);


$myfile = $_FILES['uploadedfile']['name'];

echo "$myfile";
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']).
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}

//$dest = "pic/big/"."thumb-".$myfile;
//rename($target_path, $dest);

$original = "pic/big/".$myfile;
$dest = "pic/thumb/".$myfile;
copy($original,$dest);

$thumb = "thumb-".$myfile;
$mythumb = "pic/thumb/".$thumb;
//echo "$thumb --> $mythumb";
rename($dest, $mythumb);

//////////////////////////////////////////

	$sql = "INSERT INTO archive_pic (`pic_id` ,`pic_name` ,`obj_id` ,`obj_refcode` )VALUES ( NULL, '$myfile', 0, '$refcode')";

$query=mysqli_query($link,$sql) or die("Can't Query4");

		}

////////////   End Upload File /////////

//echo "<div class='box box-primary'>"; // Start box-primary
//echo "<div class='box-body'>"; // Start box-body
echo "<div id='links'>"
;
//echo "<table border=0>";
echo "<table width=100% border=0>";
echo "<tr>";
 $sql3 = "SELECT * FROM `archive_pic` WHERE obj_refcode = '$refcode' ORDER BY listorder ";
         $query3=mysqli_query($link,$sql3) or die("Can't Query2");
         $num_rows3=mysqli_num_rows($query3);

	//	echo "x $num_rows3 x <br>";
	     for ($i=0; $i<$num_rows3; $i++) {
			     $result3=mysqli_fetch_array($query3);
			     $filetype = explode(".", $result3[pic_name]);
			     $filetype = $filetype[1];
				 $cover =$result3[obj_cover];

				 if($line < 3)
			 {
				 echo "<td align='center'>";
                // echo "<img src ='pic/thumb/thumb-$result3[pic_name]' width='50'> $result3[pic_id] $result3[obj_refcode]$result3[pic_name] <br>";

				  if(($filetype == 'jpg') or ($filetype =='jpeg') or ($filetype =='png'))
				  {
				  			echo "<a href=\"pic/big/$refcode/$result3[pic_name]\" data-gallery>
							<img src ='pic/big/$refcode/$result3[pic_name]' width='200'></a> <br>";
				  }
				  else
				  if($filetype =='mp4')
				  {
				  			//echo "pic/big/$refcode/$result3[pic_name]";
							echo "<video width='200'  controls>
  								  <source src='pic/big/$refcode/$result3[pic_name]' type='video/mp4'>
  								  <object data='pic/big/$refcode/$result3[pic_name]' width='200' >

         						  </object>
								</video>";
						    echo "<br>";
				  }
				  else if($filetype =='mp3')
				  {
				  		//echo "$result3[pic_name] <br>";
				  		//echo "<a href ='player.php?picname=$result3[pic_name]'>$result3[pic_name]</a>";
				  		echo "<audio width='200' controls>
  				  		<source src='pic/big/$refcode/$result3[pic_name]' type='audio/mpeg'>
  			     		<embed src='pic/big/$refcode/$result3[pic_name]' width='200'>
						</audio>";
                  		echo "<br>";
				  }
				  else if($filetype =='pdf')
				  {
				  		//echo "$result3[pic_name] <br>";
				  		echo "<a href ='pic/big/$refcode/$result3[pic_name]' target='_blank'><img src='images/pdf-icon.png' width='150'></a>";
                  		echo "<br>";
				  }


			echo "
			<a href=\"JavaScript:newPopupdetail('zoom/picdetail.php?picid=$result3[pic_id]&objectid=$objid&refcode=$refcode');\"> <img src='images/edit_icon2.png'></a>
			<a href ='edit.php?picid=$result3[pic_id]&delpic=1&objectid=$objid&refcode=$refcode'> <img src ='images/icon_del2.png'> </a>";

			if(($filetype == 'jpg') or ($filetype =='jpeg') or ($filetype =='png'))
			{
				if($cover == '1')
				{
					echo "<a href ='edit.php?picid=$result3[pic_id]&setpic=1&objectid=$objid&refcode=$refcode'> <img src ='images/icon_set2.png'> </a>"; //Checked
				}
				else
				{
					echo "<a href ='edit.php?picid=$result3[pic_id]&setpic=1&objectid=$objid&refcode=$refcode'> <img src ='images/icon_set3.png'> </a>"; //Unchecked
				}
			}
			echo "</td>";

			$line = $line+1;
			 }
			 else
             {
				 echo "<td align='center'>";
                //echo "<img src ='pic/thumb/thumb-$result3[pic_name]' width='50'> $result3[pic_id] $result3[obj_refcode]$result3[pic_name] <br>";
				// echo "        <a href=\"pic/big/$refcode/$result3[pic_name]\"   media=\"gallery\" id=\"tre\"  class=\"pirobox_gall\" title=\"\">
				//<img src ='pic/big/$refcode/$result3[pic_name]' width='150'></a>
				//<br>
				// <a href=\"JavaScript:newPopupdetail('zoom/picdetail.php?picid=$result3[pic_id]&objectid=$objid&refcode=$refcode');\"><img src='images/edit_icon.png'></a>
				//<a href ='edit.php?picid=$result3[pic_id]&delpic=1&objectid=$objid&refcode=$refcode'> <img src ='images/icon_del.gif'> </a>";

				 if(($filetype == 'jpg') or ($filetype =='jpeg') or ($filetype =='png'))
				  {
				  		echo "<a href=\"pic/big/$refcode/$result3[pic_name]\" data-gallery>
						<img src ='pic/thumb/$refcode/$result3[thumb_name]' width='200'></a> <br>";
				  }
				  else
				  if($filetype =='mp4')
				  {
				  		//echo "pic/big/$refcode/$result3[pic_name]";
						echo "<video width='200'  controls>
  							  <source src='pic/big/$refcode/$result3[pic_name]' type='video/mp4'>
  							  <object data='pic/big/$refcode/$result3[pic_name]' width='200' >
  							  </object>
							  </video>";
						echo "<br>";
				  }
				  else if($filetype =='mp3')
				  {
				  		//echo "$result3[pic_name] <br>";
				  		//echo "<a href ='player.php?picname=$result3[pic_name]'>$result3[pic_name]</a>";
				  		echo "<audio width='200' controls>
  				  			<source src='pic/big/$refcode/$result3[pic_name]' type='audio/mpeg'>
  			     			<embed src='pic/big/$refcode/$result3[pic_name]' width='200'>
							</audio>";
                  		echo "<br>";
				  }
				  else if($filetype =='pdf')
				  {
				  		//echo "$result3[pic_name] <br>";
				  		echo "<a href ='pic/big/$refcode/$result3[pic_name]' target='_blank'><img src='images/pdf-icon.png' width='150'></a>";
                  echo "<br>";
				  }

			echo "
			<a href=\"JavaScript:newPopupdetail('zoom/picdetail.php?picid=$result3[pic_id]&objectid=$objid&refcode=$refcode');\"> <img src='images/edit_icon2.png'></a>
			<a href ='edit.php?picid=$result3[pic_id]&delpic=1&objectid=$objid&refcode=$refcode'> <img src ='images/icon_del2.png'> </a>";

			if(($filetype == 'jpg') or ($filetype =='jpeg') or ($filetype =='png'))
			{
				if($cover == '1')
				{
					echo "<a href ='edit.php?picid=$result3[pic_id]&setpic=1&objectid=$objid&refcode=$refcode'> <img src ='images/icon_set2.png'> </a>"; //Checked
				}
				else
				{
					echo "<a href ='edit.php?picid=$result3[pic_id]&setpic=1&objectid=$objid&refcode=$refcode'> <img src ='images/icon_set3.png'> </a>"; //Unchecked
				}
			}
			echo "</td>";
			echo "</tr>";
				$line =0;
			 }
		 }
echo "</table>";

echo "</div>";
//echo "</div>"; // End box-body
//echo "</div>"; // End box-primary

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

	}
	?>

	<!---- End of  Picture  -------->



<!------------------------------------------------------------>


						</div>
						</div>

						</div>
				    </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- jQuery 2.0.2 -->
        <!--<script src="js/jquery-2.0.2.min.js"></script>-->
        <script src="../js/jquery.min.js"></script>
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
			});
		</script>


    </body>
</html>
