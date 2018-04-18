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
						เอกสารรอการอนุมัติข้อมูลพันธุ์สัตว์
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="index.php"> ข้อมูลพันธุ์สัตว์</a></li>
                        <li class="active"> เอกสารรอการอนุมัติ</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Main row -->
                    <div class="row">
						<div class="col-md-12">

<!-- process -->

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

//echo "Per : $permission <br>";

////////// End Check User ///////

$objectid=$_REQUEST['objectid'];
$del=$_REQUEST['del'];
$cfdel=$_REQUEST['cfdel'];

if($del == obj)
{
echo "
<div class='callout callout-danger'>
	<h4>ต้องการที่จะลบข้อมูลพันธุ์สัตว์</h4>
	<p>
	<a class='btn btn-danger' href='show-animal.php?objectid=$objectid&cfdel=1'> ยืนยัน</a>
	<a class='btn btn-default' href='show-animal.php'> ยกเลิก</a>
	</p>
</div>";
}
else if ($cfdel == 1)
{
$sql = "DELETE FROM botanic_animal_object WHERE obj_id = $objectid ";
$query=mysqli_query($link,$sql) or die("Can't Query");
echo "
<div id='alert-message' class='alert alert-success alert-dismissable'>
	<i class='fa fa-check'></i>
	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
	ลบข้อมูลพันธุ์สัตว์เสร็จสิ้น
</div>";
}

echo "<a class='btn btn-primary' href='add-animal.php'><i class='fa fa-plus-square fa-lg'></i> เพิ่มข้อมูล</a>";
echo "<a class='btn btn-default pull-right' href='show-animal.php'>ข้อมูลพันธุ์สัตว์</a><br><br>";


if($s!='')

		{
			if(($permission == 'admin') or ($permission == 'superadmin'))
			{
       // $sql = "select * from botanic_animal_object where obj_title like '%$s%' order by obj_id DESC  ";
		$sql="Select count(*) From botanic_animal_object where obj_title like '%$s%' order by obj_id DESC  ";
		}
			else if ($permission =='user')
			{
        $sql = "select  count(*)  from botanic_animal_object where obj_title like '%$s%' and user_id = '$id' order by obj_id DESC  ";

			}
        $query=mysqli_query($link,$sql) or die("Can't Query");
        $num_rows=mysqli_num_rows($query);
		}
else
		{
			if(($permission == 'admin') or ($permission == 'superadmin'))
			{
          $sql = "select count(*) from botanic_animal_object order by obj_id DESC ";
			}
			else if ($permission =='user')
			{
                       $sql = "select  count(*) from botanic_animal_object  where user_id = '$id' order by obj_id DESC ";
			}
          $query=mysqli_query($link,$sql) or die("Can't Query");
          $num_rows=mysqli_num_rows($query);
		}
echo "<div class='box box-primary'>";
echo "<div class='box-body table-responsive'>";
echo "<table class='table table-bordered table-hover' id='example1'>";

echo "<thead>";
echo "<tr>";
echo "<th class='col-sm-2 text-center'>รหัสวัตถุ</th>";
echo "<th class='col-sm-3 text-center'>ชื่อ</th>";
echo "<th class='col-sm-3 text-center'>เจ้าของ</th>";
echo "<th class='col-sm-2 text-center'>รูปภาพ</th>";
echo "<th class='col-sm-2 text-center'>บริหารจัดการ</th>";
echo "</tr>";
echo "</thead>";

echo "<tbody>";


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


if($s!='')
{
	if(($permission == 'admin') or ($permission == 'superadmin'))
	{
		$sql = "select * from botanic_animal_object where obj_title like '%$s%'";
	}
	else if ($permission =='user')
	{
		$sql = "select * from botanic_animal_object where obj_title like '%$s%' and user_id = '$id'";
	}
	$query=mysqli_query($link,$sql) or die("Can't Query");
	$num_rows=mysqli_num_rows($query);
}
else
{
	if(($permission == 'admin') or ($permission == 'superadmin'))
	{
		$sql = "select * from botanic_animal_object where obj_access != '1'";
	}
	else if ($permission =='user')
	{
		$sql = "select * from botanic_animal_object  where user_id = '$id'";
	}
	$query=mysqli_query($link,$sql) or die("Can't Query");
	$num_rows=mysqli_num_rows($query);
}

$rs=mysqli_query($link,$sql);
while($result=mysqli_fetch_array($rs)){ //วนรอบแสดงข้อมูล
	$objrefcode=$result['obj_refcode'];
	$sql2 = "SELECT * FROM botanic_animal_pic WHERE obj_refcode = '$objrefcode' ORDER BY obj_cover DESC limit 0,1  ";
	$query2=mysqli_query($link,$sql2) or die("Can't Query2");
	$result2=mysqli_fetch_array($query2);
	$num_rows2=mysqli_num_rows($query2);
	$filetype = explode(".", $result2[pic_name]);
	$filetype = $filetype[1];
		if($num_rows2 >0 )
		{
			if(($filetype == 'jpg') or ($filetype =='jpeg') or ($filetype =='png'))
			{
				$objref=$result2['obj_refcode'];
				$picname=$result2['pic_name'];
			}
			else //ถ้าไฟล์ไม่ใช้รูปภาพ เช่น mp3 mp4 fdf ให้แสดงภาพว่าง
			{
				$objref = "";
				$picname = "blank.jpg";
			}
		}

		else
		{
		$objref = "";
		$picname = "blank.jpg";
		}

	echo "<tr>";
	echo "<td>".$result['obj_refcode']."</td>";
	echo "<td>".$result['obj_title']."</td>";
	echo "<td>".$result['obj_creator']."</td>";
	echo "<td><img src ='../../pic/big-animal/$objref/$picname' width='250'></td>";
	echo "<td class='text-center'><a href=\"edit-animal.php?objectid=$result[obj_id]&refcode=$result[obj_refcode]\"><img src='images/edit_icon.png'></a> |
	<a href=\"show-animal.php?objectid=$result[obj_id]&del=obj\"><img src='images/icon_del.gif'></a></td>";

}

echo "</tr>";
echo "</tbody>";
echo "</table>";
echo "</div>";
echo "</div>"; //<!-- /.box-primary -->

	}

	############ Not Login Yet #################
	else {
		echo "<h1>Please, <a href='demo.php'>login</a> and come back later!</h1>";
	}

?>

<!--------   End Of Process------------>


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
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });

				$("#alert-message").alert();
					window.setTimeout(function() { $("#alert-message").alert('close'); }, 3000);
            });
        </script>

    </body>
</html>
</html>
