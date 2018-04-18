<?php
error_reporting(0);
session_name('tzLogin');
session_set_cookie_params(2*7*24*60*60);
session_start();
$id=$_SESSION['id'];
$usr=$_SESSION['usr'];
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
										require('connect.php');
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
						แก้ไขข้อมูลพันธุ์สัตว์
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="show-animal.php"><i class="fa fa-dashboard"></i> ข้อมูลพันธุ์สัตว์</a></li>
                        <li class="active">แก้ไขข้อมูลพันธุ์สัตว์</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Main row -->
                    <div class="row">
						<div class="col-md-12">


<!--------------   Process --->

        <?php
	if($_SESSION['id'])
	{
   	##############  Login Already ############
	#echo "<h1> You are registered and logged in!</h1>";
############  GET DB ########
//including the database connection file
require('connect.php');
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
WHERE `archive_object`.`obj_id` ='$objid'";
 $query=mysqli_query($link,$sql) or die("Can't Query0");
echo "
<div id='alert-message' class='alert alert-success alert-dismissable'>
	<i class='fa fa-check'></i>
	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
	แก้ไขข้อมูลข้อมูลพันธุ์สัตว์เสร็จสิ้น
</div>";
}

//fetching data in descending order (lastest entry first)
 $sql = "select * from archive_object  where obj_id = '$objectid'";
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




/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$query = mysqli_query($link,"SELECT * FROM botanic_animal_object WHERE obj_id = '".$_GET['objectid']."'");
while($row = mysqli_fetch_array($query)) {
	echo "
		<form class='form-horizontal' action='model/botanic/update.php' method='post'>
			<div class='box box-primary'>
				<div class='box-body'>
					<div class='form-group'>
						<label for='code' class='col-sm-2 control-label'>รหัสพันธุ์สัตว์</label>
						<div class='col-sm-10'>
							<input type='text' class='form-control' id='code' name='code' value='".$row['obj_refcode']."'>
						</div>
					</div>
					<div class='form-group'>
						<label for='name' class='col-sm-2 control-label'>ชื่อพื้นเมือง</label>
						<div class='col-sm-10'>
							<input type='text' class='form-control' id='name' name='title' value='".$row['obj_title']."'>
						</div>
					</div>
					<div class='form-group'>
						<label for='identity' class='col-sm-2 control-label'>ลักษณะเด่น</label>
						<div class='col-sm-10'>
							<input type='text' class='form-control' id='identity' name='identity' value='".$row['obj_identity']."'>
						</div>
					</div>
					<div class='form-group'>
						<label for='desc' class='col-sm-2 control-label'>ข้อมูลภูมิปัญญา</label>
						<div class='col-sm-10'>
							<textarea type='text' class='form-control' id='desc' name='desc'>".$row['obj_desc']."</textarea>
						</div>
					</div>
					<div class='form-group'>
						<label for='cate' class='col-sm-2 control-label'>หมวดหมู่</label>
						<div class='col-sm-10'>
							<select name='cate' class='form-control' id='cate_1'>
								<option value='0'>ไม่ระบุ</option>
								";
								$query = mysqli_query($link,"SELECT * FROM botanic_animal_category");
								while($cate = mysqli_fetch_array($query)) {
									if($cate['cat1_id'] === $row['obj_cate']) {
										echo "<option value='".$cate['cat1_id']."' selected>".$cate['cat1_name']."</option>";
									} else {
										echo "<option value='".$cate['cat1_id']."'>".$cate['cat1_name']."</option>";
									}
								}
								echo"
							</select>
						</div>
					</div><!-- /.cate 11111111111111 ---------------->";

					echo "<div class='form-group' id='form_cate_2'>";
					if($row['obj_cate'] != 0 && $row['obj_cate2'] != 0) {
						echo "

								<label for='cate_2' class='col-sm-3 control-label'>หมวดหมู่ระดับ 2</label>
								<div class='col-sm-9'>
									<select name='cate_2' class='form-control' id='cate_2'>";
										echo "<option value='0'>ไม่ระบุ</option>";
										$query = mysqli_query($link,"SELECT * FROM botanic_animal_category_lv2 WHERE ac1_id = '$row[obj_cate]'");
										while($cate = mysqli_fetch_array($query)) {
											if($cate['ac2_id'] === $row['obj_cate2']) {
												echo "<option value='".$cate['ac2_id']."' selected>".$cate['ac2_name']."</option>";
											} else {
												echo "<option value='".$cate['ac2_id']."'>".$cate['ac2_name']."</option>";
											}
										}
									echo "</select>
								</div>

						";
					}
					echo "</div>";

					echo "<div class='form-group' id='form_cate_3'>";
					if($row['obj_cate'] != 0 && $row['obj_cate2'] != 0 && $row['obj_cate3'] != 0) {
						echo "
								<label for='cate_3' class='col-sm-4 control-label'>หมวดหมู่ระดับ 3</label>
								<div class='col-sm-8'>
									<select name='cate_3' class='form-control' id='cate_3'>";
										echo "<option value='0'>ไม่ระบุ</option>";
										$query = mysqli_query($link,"SELECT * FROM botanic_animal_category_lv3 WHERE ac2_id = '$row[obj_cate2]'");
										while($cate = mysqli_fetch_array($query)) {
											if($cate['ac3_id'] === $row['obj_cate3']) {
												echo "<option value='".$cate['ac3_id']."' selected>".$cate['ac3_name']."</option>";
											} else {
												echo "<option value='".$cate['ac3_id']."'>".$cate['ac3_name']."</option>";
											}
										}
									echo "</select>
								</div>
						";
					}
					echo "</div>";

					echo "

					<div class='form-group'>
						<label for='area' class='col-sm-2 control-label'>บริเวณที่พบ</label>
						<div class='col-sm-10'>
							<input type='text' class='form-control' id='area' name='area' value='".$row['obj_area']."'>
						</div>
					</div>
					<div class='form-group'>
						<label for='creator' class='col-sm-2 control-label'>เจ้าของ</label>
						<div class='col-sm-10'>
							<input type='text' class='form-control' id='creator' name='creator' value='".$row['obj_creator']."'>
						</div>
					</div>
					<div class='form-group'>
						<label class='col-sm-2 control-label'>วันที่เก็บข้อมูล</label>
						<div class='col-sm-5'>
							<input id='datepicker' data-date-format='dd-mm-yyyy' class='form-control' type='text' name ='datecreate' value='".$row['obj_date']."'>
						</div>
					</div>
					<div class='form-group'>
						<label for='comment' class='col-sm-2 control-label'>หมายเหตุ</label>
						<div class='col-sm-10'>
							<input type='text' class='form-control' id='comment' name='comment' value='".$row['obj_comment']."'>
						</div>
					</div>
					";


					?>
					<div class='form-group'>
						<label class='col-sm-2 control-label'>การเผยแพร่*</label>
						<div class='col-sm-10'>
							<div class='radio'>
								<label>
									<input type='radio' name='access' value='0' <?php echo ($row['obj_access']==0) ? "checked" : ""; ?>> รออนุมัติ
								</label>
							</div>
							<div class='radio'>
								<label>
									<input type='radio' name='access' value='1' <?php echo ($row['obj_access']==1) ? "checked" : ""; ?>> อนุมัติ
								</label>
							</div>
							<div class='radio'>
								<label>
									<input type='radio' name='access' value='2' <?php echo ($row['obj_access']==2) ? "checked" : ""; ?>> ไม่อนุมัติ
								</label>
							</div>
						</div>
					</div>
					<?php


				echo "
				</div><!-- /.box-body -->
				<div class='box-footer'>
					<button class='btn btn-primary' type='submit'>บันทึก</button>
					<input type='hidden' name='type' value='animal'>
					<input type='hidden' name='id' value='".$row['obj_id']."'>
				</div><!-- /.footer -->
			</div>
		</form>
	";
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




} /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	############ Not Login Yet #################
	else {
		echo "<h1>Please, <a href='demo.php'>login</a> and come back later!</h1>";
	}
    ?>


<!--------   End Of Process------------>
<!-------- เอกสารดาวน์โหลด ------------->
<?php
if($updown == '1')
{
echo "UPLOAD Download File";
######## UPload FILE###########
$target_path = "pic/download/";
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
//echo "<h1>".$target_path."</h1>";
//echo "$target_path";
$myfile = $_FILES['uploadedfile']['name'];

//echo "$myfile";
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']).
    " has been uploaded";
    $sql0 = "UPDATE archive_object SET `obj_downloadfile`='$myfile', `obj_download`='0' WHERE obj_refcode ='$refcode'";
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
	if($download == '1')
	{
	  //echo "อนุญาตให้ดาวน์โหลดได้";
	  $sql0 = "UPDATE archive_object SET `obj_download`= '1' WHERE obj_refcode ='$refcode'";
      $query0=mysqli_query($link,$sql0) or die("Can't Query-0");
	}

	else
	{
	  //echo "ไม่อนุญาตให้ดาวน์โหลด";
	  $sql0 = "UPDATE archive_object SET `obj_download`= '0' WHERE obj_refcode ='$refcode'";
      $query0=mysqli_query($link,$sql0) or die("Can't Query-0");
	}

	if($deldownload == '1')
	{
	  //echo "อนุญาตให้ดาวน์โหลดได้";
	  $sql0 = "UPDATE archive_object SET `obj_downloadfile`= '',`obj_download`= '0' WHERE obj_refcode ='$refcode'";
      $query0=mysqli_query($link,$sql0) or die("Can't Query-0");
	}


	echo "<form name ='formupload' method='post' action='model/funcMediaUpload.php' enctype='multipart/form-data'>";
    echo "<div class='form-group'>";
    //echo "check exiting download file";
    	 $sql3 = "SELECT * FROM `archive_object` WHERE obj_refcode = '$refcode'";
         $query3=mysqli_query($link,$sql3) or die("Can't Query3");
         $num_rows3=mysqli_num_rows($query3);
	     for ($i=0; $i<$num_rows3; $i++) {
			     $result3=mysqli_fetch_array($query3);
			      $downloadfile = $result3['obj_downloadfile'];
			      $download = $result3['obj_download'];
			      //echo "$result3[obj_downloadfile] <br>";
			     }


	if(($downloadfile != '') && ($download == '0'))
	{
    echo "<label> ไฟล์สำหรับ Download <a href='../../pic/download/$downloadfile' target='_blank'> $downloadfile </a></label> <br>";
    echo "<a href='edit-animal.php?download=1&objectid=$objectid&refcode=$refcode'><img src='images/icon_set3.png'> </a>อนุญาตให้ดาวน์โหลด";
    echo "<a href='edit-animal.php?deldownload=1&objectid=$objectid&refcode=$refcode'><img src='images/icon_del2.png'> </a>ลบ <Br><br>";
    }
    else if(($downloadfile != '') && ($download == '1'))
	{
    echo "<label> ไฟล์สำหรับ Download <a href='../../pic/download/$downloadfile' target='_blank'> $downloadfile </a></label> <br>";
    echo "<a href='edit-animal.php?download=0&objectid=$objectid&refcode=$refcode'><img src='images/icon_set2.png'> </a>อนุญาตให้ดาวน์โหลด ";
    echo "<a href='edit-animal.php?deldownload=1&objectid=$objectid&refcode=$refcode'><img src='images/icon_del2.png'> </a>ลบ <Br><br>";
    }

	echo "
	<input type='file' name='uploadedfile' id='uploadedfile'>
		<input type='hidden' name='type' value='animal'>
	";
    echo "</div>";
    echo "<div class='form-group'>";
    echo "<input type='hidden' name='updown' value='1'>";
    echo "<input type='hidden' name='objectid' value='$objectid'>";
    echo "<input type='hidden' name='refcode' value='$refcode'>";
		echo "<input type='submit' class='btn btn-primary' value='บันทึก'>";
    echo "</div>";
    echo "</form>";

		$ul_query = mysqli_query($link,"SELECT * FROM `botanic_animal_upload` WHERE `obj_id` = '".$objid."'");
		echo "<div class='row'>";
		while($row = mysqli_fetch_assoc($ul_query)) {
			$ext = pathinfo($row['bpu_file'], PATHINFO_EXTENSION);
			echo "<div class='col-md-2 text-center'>";
			$type = "animal";
			echo "
			<img src='../../pic/botanic_animal_upload/".$refcode."/".$row['bpu_file']."'/><br>
				<a target='_blank' href='../../pic/botanic_animal_upload/".$refcode."/".$row['bpu_file']."'>
					<img src='../../pic/icon/".$ext.".png'/><br>
					".$row['bpu_file']."
				</a>
				<p>
					<a href='model/funcMediaDelete.php?objectid=".$objectid."&type=".$type."&refcode=".$refcode."&file=".$row['bpu_file']."' class='btn btn-link'><img src='images/icon_del2.png'></a>
				</p>
			";
			echo "</div><!-- /.col-md-2 -->";
		}
		echo "</div><!-- /.row -->";

    echo "</div>";
echo "</div>";
?>
<!-----  Picture  --------->

   <?php
	if($_SESSION['id'])
	{


if($delpic == 1)
		{
	      $sql = "DELETE FROM botanic_animal_pic WHERE pic_id = '$picid' ";
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
 $sql0 = "UPDATE botanic_animal_pic SET `obj_cover`='0' WHERE `botanic_animal_pic`.`obj_refcode` ='$refcode' AND `botanic_animal_pic`.`pic_id` !='$picid'";
 $query0=mysqli_query($link,$sql0) or die("Can't Query-0");

 $sql = "UPDATE botanic_animal_pic SET `obj_cover`='1' WHERE `botanic_animal_pic`.`pic_id` ='$picid'";
 $query=mysqli_query($link,$sql) or die("Can't Query-1");



		 echo "
		<div id='alert-message' class='alert alert-success alert-dismissable'>
			<i class='fa fa-check'></i>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			ตั้งเป็นภาพปกเสร็จสิ้น
		</div>";
		}

##check open pics ##

if($openpic == '1')
{
//echo "สั่งเปิดรูป";
 $sql = "UPDATE botanic_animal_pic SET `pic_open`='0' WHERE `botanic_animal_pic`.`pic_id` ='$picid'";
 $query=mysqli_query($link,$sql) or die("Can't Query-1");
}
else if($openpic == '0')
{
//echo "สั่งปิดรูป";
 $sql = "UPDATE botanic_animal_pic SET `pic_open`='1' WHERE `botanic_animal_pic`.`pic_id` ='$picid'";
 $query=mysqli_query($link,$sql) or die("Can't Query-1");
}
   	############## Picture  Login Already ############
	echo "<div class='box box-primary'>"; // Start box-primary
	echo "<div class='box-header'>";
	echo "<h3 class='box-title'>เอกสาร</h3>";
	echo "</div>";
	echo "<div class='box-body'>"; // Start box-body
	echo "<div>
			<a class='btn btn-primary' href=\"JavaScript:newPopup('upload-animal/index.php?dir=$refcode&objectid=$objectid&refcode=$refcode');\">
				<i class='fa fa-upload fa-lg'></i> อัพโหลดเอกสาร
			</a>
			<a class='btn btn-primary pull-right' href=\"JavaScript:newPopup('model/sortable/index.php?ref=$refcode&type=bgp&id=$objectid');\">
				<i class='fa fa-sort-amount-desc fa-lg'></i> จัดเรียงเอกสาร
			</a><br><br>
		  </div>";


	##### Start Tab Pic 1 #######
##check number of pics ##
if($updatepic == '1')
{
$sql5 = "SELECT * FROM `botanic_animal_pic` WHERE obj_refcode = '$refcode' ";
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
 $target_path = "pic/big-animal/";
 $target_path_thumb = "pic/thumb-animal/";

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

//$dest = "pic/big-animal/"."thumb-".$myfile;
//rename($target_path, $dest);

$original = "../../pic/big-animal/".$myfile;
$dest = "../../pic/thumb-animal/".$myfile;
copy($original,$dest);

$thumb = "thumb-".$myfile;
$mythumb = "../../pic/thumb-animal/".$thumb;
//echo "$thumb --> $mythumb";
rename($dest, $mythumb);

//////////////////////////////////////////

	$sql = "INSERT INTO botanic_animal_pic (`pic_id` ,`pic_name` ,`obj_id` ,`obj_refcode` )VALUES ( NULL, '$myfile', 0, '$refcode')";

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
 $sql3 = "SELECT * FROM `botanic_animal_pic` WHERE obj_refcode = '$refcode' ORDER BY listorder ";
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
                // echo "<img src ='../../pic/thumb-animal/thumb-$result3[pic_name]' width='50'> $result3[pic_id] $result3[obj_refcode]$result3[pic_name] <br>";

				  if(($filetype == 'jpg') or ($filetype =='jpeg') or ($filetype =='png'))
				  {
				  			echo "<a href=\"../../pic/big-animal/$refcode/$result3[pic_name]\" data-gallery>
							<img src ='../../pic/big-animal/$refcode/$result3[pic_name]' width='200'></a> <br>";
				  }
				  else
				  if($filetype =='mp4')
				  {
				  			//echo "pic/big-animal/$refcode/$result3[pic_name]";
							echo "<video width='200'  controls>
  								  <source src='../../pic/big-animal/$refcode/$result3[pic_name]' type='video/mp4'>
  								  <object data='../../pic/big-animal/$refcode/$result3[pic_name]' width='200' >

         						  </object>
								</video>";
						    echo "<br>";
				  }
				  else if($filetype =='mp3')
				  {
				  		//echo "$result3[pic_name] <br>";
				  		//echo "<a href ='player.php?picname=$result3[pic_name]'>$result3[pic_name]</a>";
				  		echo "<audio width='200' controls>
  				  		<source src='../../pic/big-animal/$refcode/$result3[pic_name]' type='audio/mpeg'>
  			     		<embed src='../../pic/big-animal/$refcode/$result3[pic_name]' width='200'>
						</audio>";
                  		echo "<br>";
				  }
				  else if($filetype =='pdf')
				  {
				  		//echo "$result3[pic_name] <br>";
				  		echo "<a href ='../../pic/big-animal/$refcode/$result3[pic_name]' target='_blank'><img src='images/pdf-icon.png' width='150'></a>";
                  		echo "<br>";
				  }


			echo "
			<a href=\"JavaScript:newPopupdetail('zoom/picdetail-botanic.php?type=animal&picid=$result3[pic_id]&objectid=$objid&refcode=$refcode');\"> <img src='images/edit_icon2.png'></a>
			<a href ='edit-animal.php?picid=$result3[pic_id]&delpic=1&objectid=$objid&refcode=$refcode'> <img src ='images/icon_del2.png'> </a>";

			if(($filetype == 'jpg') or ($filetype =='jpeg') or ($filetype =='png'))
			{
				if($cover == '1')
				{
					echo "<a href ='edit-animal.php?picid=$result3[pic_id]&setpic=1&objectid=$objid&refcode=$refcode'> <img src ='images/icon_set2.png'> </a>"; //Checked
				}
				else
				{
					echo "<a href ='edit-animal.php?picid=$result3[pic_id]&setpic=1&objectid=$objid&refcode=$refcode'> <img src ='images/icon_set3.png'> </a>"; //Unchecked
				}
			}

			if($result3[pic_open] == '0')
			{
			echo "<a href ='edit-animal.php?picid=$result3[pic_id]&openpic=0&objectid=$objid&refcode=$refcode'><img src='images/eye-open.png'></a>";
			}
			else
			{
			echo "<a href ='edit-animal.php?picid=$result3[pic_id]&openpic=1&objectid=$objid&refcode=$refcode'><img src='images/eye-close.png'></a>";
			}

			echo "</td>";

			$line = $line+1;
			 }
			 else
             {
				 echo "<td align='center'>";
                //echo "<img src ='../../pic/thumb-animal/thumb-$result3[pic_name]' width='50'> $result3[pic_id] $result3[obj_refcode]$result3[pic_name] <br>";
				// echo "        <a href=\"pic/big-animal/$refcode/$result3[pic_name]\"   media=\"gallery\" id=\"tre\"  class=\"pirobox_gall\" title=\"\">
				//<img src ='../../pic/big-animal/$refcode/$result3[pic_name]' width='150'></a>
				//<br>
				// <a href=\"JavaScript:newPopupdetail('zoom/picdetail.php?picid=$result3[pic_id]&objectid=$objid&refcode=$refcode');\"><img src='images/edit_icon.png'></a>
				//<a href ='edit-animal.php?picid=$result3[pic_id]&delpic=1&objectid=$objid&refcode=$refcode'> <img src ='images/icon_del.gif'> </a>";

				 if(($filetype == 'jpg') or ($filetype =='jpeg') or ($filetype =='png'))
				  {
				  		echo "<a href=\"../../pic/big-animal/$refcode/$result3[pic_name]\" data-gallery>
						<img src ='../../pic/big-animal/$refcode/$result3[pic_name]' width='200'></a> <br>";
				  }
				  else
				  if($filetype =='mp4')
				  {
				  		//echo "pic/big-animal/$refcode/$result3[pic_name]";
						echo "<video width='200'  controls>
  							  <source src='../../pic/big-animal/$refcode/$result3[pic_name]' type='video/mp4'>
  							  <object data='../../pic/big-animal/$refcode/$result3[pic_name]' width='200' >
  							  </object>
							  </video>";
						echo "<br>";
				  }
				  else if($filetype =='mp3')
				  {
				  		//echo "$result3[pic_name] <br>";
				  		//echo "<a href ='player.php?picname=$result3[pic_name]'>$result3[pic_name]</a>";
				  		echo "<audio width='200' controls>
  				  			<source src='../../pic/big-animal/$refcode/$result3[pic_name]' type='audio/mpeg'>
  			     			<embed src='../../pic/big-animal/$refcode/$result3[pic_name]' width='200'>
							</audio>";
                  		echo "<br>";
				  }
				  else if($filetype =='pdf')
				  {
				  		//echo "$result3[pic_name] <br>";
				  		echo "<a href ='../../pic/big-animal/$refcode/$result3[pic_name]' target='_blank'><img src='images/pdf-icon.png' width='150'></a>";
                  echo "<br>";
				  }

			echo "
			<a href=\"JavaScript:newPopupdetail('zoom/picdetail-botanic.php?type=animal&picid=$result3[pic_id]&objectid=$objid&refcode=$refcode');\"> <img src='images/edit_icon2.png'></a>
			<a href ='edit-animal.php?picid=$result3[pic_id]&delpic=1&objectid=$objid&refcode=$refcode'> <img src ='images/icon_del2.png'> </a>";

			if(($filetype == 'jpg') or ($filetype =='jpeg') or ($filetype =='png'))
			{
				if($cover == '1')
				{
					echo "<a href ='edit-animal.php?picid=$result3[pic_id]&setpic=1&objectid=$objid&refcode=$refcode'> <img src ='images/icon_set2.png'> </a>"; //Checked
				}
				else
				{
					echo "<a href ='edit-animal.php?picid=$result3[pic_id]&setpic=1&objectid=$objid&refcode=$refcode'> <img src ='images/icon_set3.png'> </a>"; //Unchecked
				}
			}

			if($result3[pic_open] == '0')
			{
			echo "<a href ='edit-animal.php?picid=$result3[pic_id]&openpic=0&objectid=$objid&refcode=$refcode'><img src='images/eye-open.png'></a>";
			}
			else
			{
			echo "<a href ='edit-animal.php?picid=$result3[pic_id]&openpic=1&objectid=$objid&refcode=$refcode'><img src='images/eye-close.png'></a>";
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
			});
		</script>

		<script>
			var type = "animal";

			$("#cate_1").on('change', function() {
				var list_2 = "";
				var list_3 = "";
				$("#form_cate_2").html(list_2);
				$("#form_cate_3").html(list_3);
				$.ajax({url: "model/getCategory.php?table="+type+"&level=2&id="+ $(this).val(), success: function(result){
					var fetch = $.parseJSON(result);

					if(fetch.length > 0) {
						list_2 += "<label for='cate_2' class='col-sm-3 control-label'>หมวดหมู่ระดับ 2</label>";
						list_2 += "<div class='col-sm-9'>";
						list_2 += "<select name='cate_2' class='form-control' id='cate_2'>";
						list_2 += "<option value='0'>ไม่ระบุ</option>";
						$.each(fetch, function(key, value) {
							list_2 += "<option value='"+value.id+"'>" + value.name + "</option>";
						});
						list_2 += "</select>";
						list_2 += "</div>";
						$("#form_cate_2").html(list_2);
						$("#form_cate_3").html(list_3);

						$("#cate_2").on('change', function() {
							var list_3 = "";
							$("#form_cate_3").html(list_3);
							$.ajax({url: "model/getCategory.php?table="+type+"&level=3&id="+ $(this).val(), success: function(xx){
								var ff = $.parseJSON(xx);

								if(ff.length > 0) {
									list_3 += "<label for='cate_3' class='col-sm-4 control-label'>หมวดหมู่ระดับ 3</label>";
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

			$("#cate_2").on('change', function() {
				var list_3 = "";
				$("#form_cate_3").html(list_3);
				$.ajax({url: "model/getCategory.php?table="+type+"&level=3&id="+ $(this).val(), success: function(xx){
					var ff = $.parseJSON(xx);

					if(ff.length > 0) {
						list_3 += "<label for='cate_3' class='col-sm-4 control-label'>หมวดหมู่ระดับ 3</label>";
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

		</script>

		<!----------------------------- 3 Level Category ----------------------------------->


    </body>
</html>
