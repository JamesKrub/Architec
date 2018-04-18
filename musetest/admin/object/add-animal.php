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
						เพิ่มพันธุ์สัตว์
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="show-animal.php"><i class="fa fa-dashboard"></i> พันธุ์สัตว์</a></li>
                        <li class="active">เพิ่มพันธุ์สัตว์</li>
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

	//echo "<a href='index.php'>Back</a><br/><br/>";

	######  Start Tab ##########
echo "
<form class='form-horizontal' role='form' name='form1' method='post' action='model/botanic/add.php' enctype='multipart/form-data'>";

echo "
<div class='box box-primary'>
		<div class='box-body'>
			<div class='form-group'>
				<label for='code' class='col-sm-2 control-label'>รหัสพันธุ์สัตว์</label>
				<div class='col-sm-10'>
					<input type='text' class='form-control' id='code' name='code'>
				</div>
			</div>
			<div class='form-group'>
				<label for='name' class='col-sm-2 control-label'>ชื่อพื้นเมือง</label>
				<div class='col-sm-10'>
					<input type='text' class='form-control' id='name' name='title'>
				</div>
			</div>
			<div class='form-group'>
				<label for='identity' class='col-sm-2 control-label'>ลักษณะเด่น</label>
				<div class='col-sm-10'>
					<input type='text' class='form-control' id='identity' name='identity'>
				</div>
			</div>
			<div class='form-group'>
				<label for='desc' class='col-sm-2 control-label'>ข้อมูลภูมิปัญญา</label>
				<div class='col-sm-10'>
					<textarea type='text' class='form-control' id='desc' name='desc'></textarea>
				</div>
			</div>";
			echo "
			<div class='form-group'>
				<label for='cate' class='col-sm-2 control-label'>หมวดหมู่</label>
				<div class='col-sm-10'>
					<select name='cate' class='form-control' id='cate_1'>
						<option value='0'>ไม่ระบุ</option>
						";
						$query = mysqli_query($link,"SELECT * FROM botanic_animal_category");
						while($row = mysqli_fetch_array($query)) {
							echo "<option value='".$row['cat1_id']."'>".$row['cat1_name']."</option>";
						}
						echo"
					</select>
				</div>
			</div>
			<div id='form_cate_2' class='form-group'></div>
			<div id='form_cate_3' class='form-group'></div>
			";
			echo "
			<div class='form-group'>
				<label for='area' class='col-sm-2 control-label'>บริเวณที่พบ</label>
				<div class='col-sm-10'>
					<input type='text' class='form-control' id='area' name='area'>
				</div>
			</div>
			<div class='form-group'>
				<label for='creator' class='col-sm-2 control-label'>เจ้าของ</label>
				<div class='col-sm-10'>
					<input type='text' class='form-control' id='creator' name='creator'>
				</div>
			</div>
			<div class='form-group'>
				<label class='col-sm-2 control-label'>วันที่เก็บข้อมูล</label>
				<div class='col-sm-5'>
					<input id='datepicker' data-date-format='dd-mm-yyyy' class='form-control' type='text' name ='datecreate' value='$datecreate'>
				</div>
			</div>
			<div class='form-group'>
				<label for='comment' class='col-sm-2 control-label'>หมายเหตุ</label>
				<div class='col-sm-10'>
					<input type='text' class='form-control' id='comment' name='comment'>
				</div>
			</div>
		</div><!-- /.box-body -->
		<div class='box-footer'>
			<button type='submit' class='btn btn-primary'>บันทึก</button>
			";
			echo "
			<input type='hidden' name='type' value='animal'>
			";
			echo "
		</div>
</div>

";

echo "</form>";
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
   	############## Picture  Login Already ############
	echo "
<div class='box box-primary'> <!-- Start box-primary -->
	<div class='box-header'>
		<h3 class='box-title'>เอกสาร</h3>
	</div>";



	##### Start Tab Pic 1 #######
echo "
	<form class='form-horizontal' role='form' name='form1' method='post' action='uppic.php' enctype='multipart/form-data'>
	<div class='box-body'> <!-- Start box-body -->
		<a class='btn btn-default' disabled='disabled' href=\"JavaScript:newPopup('uploaddoc/index.php?dir=$refcode&objectid=$objectid&refcode=$refcode');\">
			<i class='fa fa-upload fa-lg'></i> อัพโหลดเอกสาร
		</a>
		<a class='btn btn-default pull-right' disabled='disabled' href=\"JavaScript:newPopup('uploaddoc/reindex4/index-backup.php?objectid=$objectid&refcode=$refcode');\">
			<i class='fa fa-sort-amount-desc fa-lg'></i> จัดเรียงเอกสาร
		</a>
	</div> <!-- End box-body -->
	</form>
</div> <!-- End box-primary -->
";


######### End Of Tab  Pic 1 ############

	}
	?>

	<!---- End of  Picture  -------->


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
			});
		</script>

		<!----------------------------- 3 Level Category ----------------------------------->

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

		</script>

		<!----------------------------- 3 Level Category ----------------------------------->

    </body>
</html>
