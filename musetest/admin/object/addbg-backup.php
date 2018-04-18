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
						ข้อมูลจดหมายเหตุ
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">ข้อมูลจดหมายเหตุ</li>
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

$sql = "select * from tz_members where id = '$id'   ";
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



//ข้อมูลทั่วไป

echo "<div class='box box-primary'>"; // Start box-primary
echo "<form class='form-horizontal' role='form' name='form1' method='post' action='addbg.php' enctype='multipart/form-data'>";
echo "<div class='box-body'>"; // Start box-body

echo "<div class='form-group'>";
echo "<label class='col-sm-2 control-label'>ชื่อจดหมายเหตุ</label>";
echo "<div class='col-sm-10'>";
echo "<input class='form-control' type='text' name ='archivename' value='$archivename'>";
echo "</div>";
echo "</div>";

echo "<div class='form-group'>";
echo "<label class='col-sm-2 control-label'>รายละเอียด</label>";
echo "<div class='col-sm-10'>";
echo "<textarea class='form-control' rows='3' name ='archivedesc'>$archivedesc</textarea>";
echo "</div>";
echo "</div>";

echo "<div class='form-group'>";
echo "<label class='col-sm-2 control-label'>ข้อมูลผู้เยี่ยมชม</label>";
echo "<div class='col-sm-10'>";
echo "<textarea class='form-control' rows='3' name ='archiveentry'>$archiveentry</textarea>";
echo "</div>";
echo "</div>";

echo "<div class='form-group'>";
echo "<label class='col-sm-2 control-label'>พิกัด</label>";
echo "<div class='col-sm-1'>";
echo "<h5>ละติจูด</h5>";
echo "</div>";
echo "<div class='col-sm-4'>";
echo "<input class='form-control' name ='archivelat' value='$archivelat'>";
echo "</div>";
echo "<div class='col-sm-1'>";
echo "<h5>ลองจิจูด</h5>";
echo "</div>";
echo "<div class='col-sm-4'>";
echo "<input class='form-control' name ='archivelon' value='$archivelon'>";
echo "</div>";
echo "</div>";

echo "<div class='form-group'>";
echo "<label class='col-sm-2 control-label'>เลขที่</label>";
echo "<div class='col-sm-10'>";
echo "<input class='form-control' name ='archivenumber' value='$archivenumber'>";
echo "</div>";
echo "</div>";

echo "<div class='form-group'>";
echo "<label class='col-sm-2 control-label'>ตำบล</label>";
echo "<div class='col-sm-10'>";
echo "<input class='form-control' name ='archivetambon' value='$archivetambon'>";
echo "</div>";
echo "</div>";

echo "<div class='form-group'>";
echo "<label class='col-sm-2 control-label'>อำเภอ</label>";
echo "<div class='col-sm-10'>";
echo "<input class='form-control' name ='archiveampher' value='$archiveampher'>";
echo "</div>";
echo "</div>";

echo "<div class='form-group'>";
echo "<label class='col-sm-2 control-label' >จังหวัด</label>";
echo "<div class='col-sm-10'>";
//including the database connection file
require('connect.php');
////////// Check User /////////
echo "<select class='form-control' name='archivecity'>";
#$sql = "select * from province order by PROVINCE_NAME ";
$sql = "select DISTINCT PROVINCE_NAME, PROVINCE_ID from province
	order by if(substr(PROVINCE_NAME, 1, 1) in ('เ', 'แ', 'ไ', 'ใ', 'โ'),
	concat(substr(PROVINCE_NAME, 2, 1), substr(PROVINCE_NAME, 1,1), substr(PROVINCE_NAME, 3)), PROVINCE_NAME)";
		$query=mysqli_query($link,$sql) or die("Can't Query");
		$num_rows=mysqli_num_rows($query);
	     for ($i=0; $i<$num_rows; $i++) {
         $result=mysqli_fetch_array($query);
         if($archivecity == $result[PROVINCE_ID])
         {
         echo "<option value='$result[PROVINCE_ID]' selected>$result[PROVINCE_NAME]</option>";
         }
         else
         {
         echo "<option value='$result[PROVINCE_ID]'>$result[PROVINCE_NAME]</option>";
         }
         }
echo "</select>";
echo "</div>";
echo "</div>";

echo "<div class='form-group'>";
echo "<label class='col-sm-2 control-label'>รหัสไปรษณีย์</label>";
echo "<div class='col-sm-10'>";
echo "<input class='form-control' name ='archivepostcode' value='$archivepostcode'>";
echo "</div>";
echo "</div>";

echo "<div class='form-group'>";
echo "<label class='col-sm-2 control-label'>โทรศัพท์่</label>";
echo "<div class='col-sm-10'>";
echo "<input class='form-control' name ='archivetel' value='$archivetel'>";
echo "</div>";
echo "</div>";

echo "<div class='form-group'>";
echo "<label class='col-sm-2 control-label'>อีเมล์</label>";
echo "<div class='col-sm-10'>";
echo "<input class='form-control' name ='archiveemail' value='$archiveemail'>";
echo "</div>";
echo "</div>";

echo "<div class='form-group'>";
echo "<label class='col-sm-2 control-label'>เว็บไซต์</label>";
echo "<div class='col-sm-10'>";
echo "<input class='form-control' name ='archivewebsite' value='$archivewebsite'>";
echo "</div>";
echo "</div>";

echo "</div>"; // End box-body

echo "<div class='box-footer'>"; // Start box-footer
echo "<input type='hidden' name='editdetail' value='1'><button type='submit' name='submit' class='btn btn-primary'>บันทึก</button>";
echo "</div>"; // End box-footer

echo "</form>";
echo "</div>"; // End box-primary


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

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="js/jquery-2.0.2.min.js"></script>
		<!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
         <!-- AdminLTE for demo purposes -->
        <script src="js/AdminLTE/demo.js" type="text/javascript"></script>
		<!-- Page script -->
		<script type="text/javascript">
			$(function() {
				$("#alert-message").alert();
					window.setTimeout(function() { $("#alert-message").alert('close'); }, 3000);
			});
		</script>

    </body>
</html>
