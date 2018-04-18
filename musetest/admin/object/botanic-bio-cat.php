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
        <!-- DATA TABLES -->
        <link href="css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

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
						ประเภทชีวภาพ
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">ประเภทชีวภาพ</li>
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


//including the database connection file
require('connect.php');

////////// Check User /////////

$sql = "select * from tz_members where id = '$id'";
 $query=mysqli_query($link,$sql) or die("Can't Query");
 $num_rows=mysqli_num_rows($query);



	     for ($i=0; $i<$num_rows; $i++) {
         $result=mysqli_fetch_array($query);
		//echo "$result[id] $result[usr]  $result[permission]<br>";
		$permission =$result[permission];

}

if($permission == 'user')
		{
		echo "you don't have permission";
		die();
}


//echo "Per : $permission <br>";

////////// End Check User ///////

$edit = $_REQUEST['edit'];
$del = $_REQUEST['del'];
$new = $_REQUEST['new'];
$catid = $_REQUEST['catid'];
$catname = $_REQUEST['catname'];
$parentid = $_REQUEST['parentid'];

if($edit ==1)
{
echo "
<div id='alert-message' class='alert alert-success alert-dismissable'>
	<i class='fa fa-check'></i>
	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
	แก้ไขประเภทวัตถุจัดแสดงเสร็จสิ้น
</div>";

$sql = "UPDATE botanic_bio_category SET `cat1_name` = '$catname'  WHERE `botanic_bio_category`.`cat1_id` = '$catid' LIMIT 1 ;";
$query=mysqli_query($link,$sql) or die("Can't Query");

}

if($del == 1)
{
echo "
<div class='callout callout-danger'>
	<h4>ต้องการที่จะลบประเภทวัตถุจัดแสดง</h4>
	<p>
	<a class='btn btn-danger' href='botanic-bio-cat.php?catid=$catid&del=2'> ยืนยัน</a>
	<a class='btn btn-default' href='botanic-bio-cat.php'> ยกเลิก</a>
	</p>
</div>";
}
else if ($del == 2)
{
$sql = "DELETE FROM botanic_bio_category WHERE cat1_id = '$catid' ";
$query=mysqli_query($link,$sql) or die("Can't Query");
$sql2 = "DELETE FROM botanic_bio_category WHERE cat1_parent = '$catid' ";
$query2=mysqli_query($link,$sql2) or die("Can't Query2");
echo "
<div id='alert-message' class='alert alert-success alert-dismissable'>
	<i class='fa fa-check'></i>
	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
	ลบประเภทวัตถุจัดแสดงเสร็จสิ้น
</div>";
}

if($new == 1)
{
echo "
<div id='alert-message' class='alert alert-success alert-dismissable'>
	<i class='fa fa-check'></i>
	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
	เพิ่มประเภทวัตถุจัดแสดงเสร็จสิ้น
</div>";

$sql = "INSERT INTO botanic_bio_category (`cat1_id` ,`cat1_name`,`cat1_parent` )VALUES (NULL, '$catname','$parentid');";
$query=mysqli_query($link,$sql) or die("Can't Query");

}
echo "<div class='box box-primary'>";
echo "<div class='box-body table-responsive'>";

echo "<form class='form-horizontal' role='form' name='form1' action='botanic-bio-cat.php' method='post'>";

$sql = "select * from botanic_bio_category where cat1_parent = '0' ";
$query=mysqli_query($link,$sql) or die("Can't Query");
$num_rows=mysqli_num_rows($query);
echo "<div class='form-group'>";
echo "<label class='col-sm-2 control-label' >เลือกประเภทหลัก</label>";
echo "<div class='col-sm-8'>";
//echo "เลือกประเภทหลัก<select name ='parentid'>";
echo "<select class='form-control' name ='parentid' id='ca' lv='1'>";
echo "<option value='0'>-- ไม่มีประเภทหลัก --</option>";
for ($i=0; $i<$num_rows; $i++) {
         $result=mysqli_fetch_array($query);
         echo "<option value='$result[cat1_id]'>$result[cat1_name]</option>";
}
echo "</select>";
echo "</div>";
echo "<div id='level_1_add'></div>";
echo "</div><!-- /.form-group -->";
echo "</form>";

/*****************************************************************************/
/*
 * UPDATE: Insert Path Multi-level
 * 09-Sep-16, 11:11 AM
 */
echo "<div id='level_2_add'></div>";
echo "<div id='level_2_list'></div>";

/*****************************************************************************/


//echo "<br>";
$sql = "select  count(*) from botanic_bio_category  where cat1_parent = '0' ";
$query=mysqli_query($link,$sql) or die("Can't Query");
$num_rows=mysqli_num_rows($query);

echo "<div class='table-responsive'>";
echo "<table class='table table-bordered table-hover' id='example2'>";

echo "<thead>";
echo "<tr>";
echo "<th class='col-sm-2 text-center'>ลำดับ</th>";
echo "<th class='col-sm-6 text-center'>ชื่อประเภท</th>";
echo "<th class='col-sm-2 text-center'>บริหารจัดการ</th>";
echo "</tr>";
echo "</thead>";

//$link=mysqli_connect("localhost","root","1234");
//mysqli_select_db("rcythai2",$link);

//$sql="Select count(*) From archive_category"; //นับจำนวน Record ทั้งหมดใน Table
 //$query=mysqli_query($link,$sql) or die("Can't Query");

//$rs=mysqli_query($link,$sql);
$p_size=40; //กำหนดจำนวน Record ที่จะแสดงผลต่อ 1 เพจ

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
////////// Check User /////////

$sql = "select * from tz_members where id = '$id'   ";
 $query=mysqli_query($link,$sql) or die("Can't Query");
 $num_rows=mysqli_num_rows($query);

	     for ($i=0; $i<$num_rows; $i++) {
         $result=mysqli_fetch_array($query);
		//echo "$result[id] $result[usr]  $result[permission]<br>";
		$permission =$result[permission];

}

//echo "Per : $permission <br>";

////////// End Check User ///////

          $sql = "select * from botanic_bio_category where cat1_parent = '0'  order by cat1_id DESC LIMIT $start , $p_size ";
          $query=mysqli_query($link,$sql) or die("Can't Query");
          $num_rows=mysqli_num_rows($query);

//$sql="Select * From botanic_bio_category LIMIT $start , $p_size";
//ใช้ Option LIMIT ของ MySQL เพื่อทำการเลือกข้อมูลออกมาตามต้องการ
$num = 1;
$rs = mysqli_query($link,$sql);

//////////////////////////////////////////////////////////////////////////////////////////////////////////
$c1num = 0;
while($c1 = mysqli_fetch_array($rs)) {
	echo "<tr>";
		echo "<form action='botanic-bio-cat.php' method='post'>";
			echo "<td class='text-center'>".++$c1num."</td>";
			echo "<td><input class='form-control' type='text' name='catname' value='".$c1['cat1_name']."'></td>";
			echo "<td class='text-center'>";
				echo "<input class='form-control' type='hidden' name='edit' value='1'>";
				echo "<input type='hidden' name='catid' value='".$c1['cat1_id']."'>";
				echo "<button name='type' class='btn btn-link' type='submit' value='edit'><img src='images/edit_icon2.png'></button>"." ";
				echo "<a class='btn btn-link' href='botanic-bio-cat.php?catid=".$c1['cat1_id']."&del=1'><img src='images/icon_del2.png'></a>";
			echo "</td>";
		echo "</form>";
	echo "</tr>";
	/////////////////////////////LV22222222222222222222222222222222222222
	$cmd = "
		SELECT *
		FROM `botanic_bio_category_lv2` AS c2
		LEFT JOIN `botanic_bio_category` AS c1 ON c2.ac1_id = c1.cat1_id
		WHERE c2.ac1_id = '".$c1['cat1_id']."'
	";
	$queryCL2 = mysqli_query($link,$cmd);
	if(mysqli_num_rows($queryCL2) != 0) {
		$c2num = 0;
		while($c2 = mysqli_fetch_assoc($queryCL2)) {
			echo "<tr>";
				echo "<form action='model/funcCategory.php' method='post'>";
					echo "<td class='text-center'>".$c1num.".".++$c2num."</td>";
					echo
					"<td>
						<div class='input-group col-md-11 col-md-offset-1'>
							<span class='input-group-addon'><i class='fa fa-caret-right'></i></span>
							<input name='category' type='text' value='".$c2['ac2_name']."' class='form-control' style='background-color: #ccc;'>
						</div>
					</td>";
					echo "<td class='text-center'>";
						echo "<button class='btn btn-link' name='type' value='update' type='submit'><img src='images/edit_icon2.png'></button>"." ";
						echo "<button class='btn btn-link' name='type' value='delete' type='submit'><img src='images/icon_del2.png'></button>";
						echo "<input type='hidden' name='id' value='".$c2['ac2_id']."'>";
						echo "<input type='hidden' name='table' value='botanic_bio'>";
						echo "<input type='hidden' name='level' value='2'>";
					echo "</td>";
				echo "</form>";
			echo "</tr>";
			//////////////////////////////////////////////////////////LV33333333333333333333333333333333333
			$cmd = "
				SELECT *
				FROM `botanic_bio_category_lv3` AS c3
				LEFT JOIN `botanic_bio_category_lv2` AS c2 ON c3.ac2_id = c2.ac2_id
				WHERE c3.ac2_id = '".$c2['ac2_id']."'
			";
			$queryCL3 = mysqli_query($link,$cmd);
			if(mysqli_num_rows($queryCL3) != 0) {
				$c3num = 0;
				while($c3 = mysqli_fetch_assoc($queryCL3)) {
					echo "<tr>";
						echo "<form action='model/funcCategory.php' method='post'>";
							echo "<td class='text-center'>".$c1num.".".$c2num.".".++$c3num."</td>";
							echo "
							<td>
								<div class='input-group col-md-10 col-md-offset-2'>
									<span class='input-group-addon'><i class='fa fa-caret-right'></i></span>
									<input type='text' name='category' value='".$c3['ac3_name']."' class='form-control' style='background-color: #eee;'>
								</div><!-- /.input-group -->
							</td>";
							echo "<td class='text-center'>";
								echo "<button class='btn btn-link' name='type' value='update' type='submit'><img src='images/edit_icon2.png'></button>"." ";
								echo "<button class='btn btn-link' name='type' value='delete' type='submit'><img src='images/icon_del2.png'></button>";
								echo "<input type='hidden' name='id' value='".$c3['ac3_id']."'>";
								echo "<input type='hidden' name='table' value='botanic_bio'>";
								echo "<input type='hidden' name='level' value='3'>";
							echo "</td>";
						echo "</form>";
					echo "</tr>";
				}
			}/////////////END LVVV 333333 ------------------------------
		}/////////////END LVVV 22222222222 ------------------------------
	}///////if LVVVVV222222
} ///////////////////////End While Looppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppp


echo "</table>";
echo "</div>"; #<!-- /.table-responsive -->
echo "</div>"; #<!-- /.box-body -->
echo "</div>"; #<!-- /.table-responsive -->

//for($i=1;$i<=$total_page;$i++){ //สร้าง Link เพื่อให้ผู้ใช้งานเลือกชมหน้าข้อมูล
//   echo "<li><a href=".$_SERVER['PHP_SELF']."?page=".$i."> ".$i."</a></li> ";
//}
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
        <!-- DATA TABES SCRIPT -->
        <script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="js/AdminLTE/demo.js" type="text/javascript"></script>
        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": false,
                    "bInfo": true,
										"pageLength": 30,
                    "bAutoWidth": false
                });

				$("#alert-message").alert();
					window.setTimeout(function() { $("#alert-message").alert('close'); }, 3000);
            });

						var level_1_add = "";
						level_1_add += "<div class='col-sm-8 col-sm-offset-2'>";
						level_1_add += "<br>";
						level_1_add += "<input class='form-control' type='text' name='catname' value ='' required email>";
						level_1_add += "<input class='form-control' type='hidden' name='new' value='1'>";
						level_1_add += "</div>";
						level_1_add += "<div class='col-sm-2'>";
						level_1_add += "<br>";
						level_1_add += "<button type='submit' name='submit' class='btn btn-primary'>เพิ่มประเภทหลัก</button>";
						level_1_add += "</div>";
						$("#level_1_add").html(level_1_add);

				$("#ca").on('change', function() {
					var level_2_add = "";
					var level_2_list = "";
					var lv3add = "";
					if($(this).val() != 0) {
						$("#level_1_add").html("");
						level_2_add += "<div class='row'>";
						level_2_add += "<form method='post' action='model/funcCategory.php'>";
						level_2_add += "<div class='form-group' style='margin-bottom: 5px !important;'>";
						level_2_add += "<div class='col-sm-8 col-sm-offset-2'>";
						level_2_add += "<input type='text' name='category' class='form-control' placeholder='หมวดหมู่ย่อย'>";
						level_2_add += "</div><!-- /.col-sm-8 col-sm-offset-2 -->";
						level_2_add += "<div class='col-sm-2'>";
						level_2_add += "<button type='submit' class='btn btn-success' name='type' value='insert'>เพิ่มหมวดหมู่ย่อย</button>";
						level_2_add += "</div><!-- /.col-sm-2 -->";
						level_2_add += "</div><!-- /.form-group -->";
						level_2_add += "<input type='hidden' name='table' value='botanic_bio'>";
						level_2_add += "<input type='hidden' name='level' value='2'>";
						level_2_add += "<input type='hidden' name='parents' value='"+$(this).val()+"'>";
						level_2_add += "</form>";
						level_2_add += "</div><!-- /.row -->";
						$("#level_2_add").html(level_2_add);
						$.ajax({url: "model/getCategory.php?table=bio&level=2&id="+ $(this).val(), success: function(result){
							var fetch = $.parseJSON(result);
							if(fetch.length != 0) {
								level_2_list += "<br>";
								level_2_list += "<form method='post' action='model/funcCategory.php'>";
								level_2_list += "<div class='form-group'>";
								level_2_list += "<div class='row'>";
								level_2_list += "<div class='col-sm-8 col-sm-offset-2'>";
								level_2_list += "<select class='form-control' id='sss' name='parents'>";
								$.each(fetch, function(key, value) {
								  level_2_list += "<option value='"+value.id+"'>" + value.name + "</option>";
								});
								level_2_list += "</select>";
								level_2_list += "</div><!-- /.col-sm-8 col-sm-offset-2 -->";
								level_2_list += "<div class='col-sm-8 col-sm-offset-2'>";
								level_2_list += "<br>";
								level_2_list += "<input type='text' class='form-control' name='category' placeholder='หมวดหมู่ย่อย'>";
								level_2_list += "</div><!-- /.col-sm-8 col-sm-offset-2 -->";
								level_2_list += "<div class='col-sm-2'>";
								level_2_list += "<br>";
								level_2_list += "<button type='submit' class='btn btn-warning' name='type' value='insert'>เพิ่มหมวดหมู่ย่อย</button>";
								level_2_list += "</div><!-- /.col-sm-2 -->";
								level_2_list += "</div><!-- /.row -->";
								level_2_list += "</div><!-- /.form-group -->";
								level_2_list += "<input type='hidden' name='table' value='botanic_bio'>";
								level_2_list += "<input type='hidden' name='level' value='3'>";
								level_2_list += "</form>";
							} else {
								level_2_list = "";
								level_2_list += "<div style='margin-bottom: 15px;'></div>";
							}
							$("#level_2_list").html(level_2_list);
				    }});
					} else {
						var level_1_add = "";
						level_1_add += "<div class='col-sm-8 col-sm-offset-2'>";
						level_1_add += "<br>";
						level_1_add += "<input class='form-control' type='text' name='catname' value ='' required email>";
						level_1_add += "<input class='form-control' type='hidden' name='new' value='1'>";
						level_1_add += "</div>";
						level_1_add += "<div class='col-sm-2'>";
						level_1_add += "<br>";
						level_1_add += "<button type='submit' name='submit' class='btn btn-primary'>เพิ่มประเภทหลัก</button>";
						level_1_add += "</div>";
						$("#level_1_add").html(level_1_add);
						$("#level_2_add").html("");
						$("#level_2_list").html("");
						$("#lv3add").html("");
					}
				});

        </script>

    </body>
</html>
</html>
