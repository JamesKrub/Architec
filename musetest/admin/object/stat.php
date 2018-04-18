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
						คลังข้อมูลเพื่อการอนุรักษ์
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-home"></i> หน้าแรก</a></li>
                        <li class="active">สถิติ</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Main row -->
                    <div class="row">
						<div class="col-md-12">


<!--------------   Process -----------
->

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


        $sql = "select * from archive_object";
        $query=mysqli_query($link,$sql) or die("Can't Query");
        $num_rows_archive =mysqli_num_rows($query);

        $sql = "select * from archive_news";
        $query=mysqli_query($link,$sql) or die("Can't Query");
        $num_rows_news =mysqli_num_rows($query);

        $sql = "select * from archive_pic";
        $query=mysqli_query($link,$sql) or die("Can't Query");
        $num_rows_pic =mysqli_num_rows($query);

        $sql = "select * from muse_object";
        $query=mysqli_query($link,$sql) or die("Can't Query");
        $num_rows_muse =mysqli_num_rows($query);

echo "
              <!-- Main content -->
                <section class='content'>

                    <div class='row'>
                        <div class='col-md-6'>
                            <!-- Object CHART -->
                            <div class='box box-primary'>
                                <div class='box-header'>
                                    <h3 class='box-title'><a href='statreport_detail.php'>ข้อมูลสรุป</a></h3>
                                </div>
                                <div class='box-body chart-responsive'>
                                    <div class='chart' id='donut-archive' style='height: 300px;'></div>
                                    <li>เอกสารจดหมายเหตุ $num_rows_archive รายการ/$num_rows_pic ภาพ </li>
                                    <li>พิพิธภัณฑ์ $num_rows_muse รายการ </li>
                                     <li>ข่าว $num_rows_news รายการ </li>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                    </div><!-- /.row -->

                    <div class='row'>
                        <div class='col-md-6'>
                            <!-- Object CHART -->
                            <div class='box box-primary'>
                                <div class='box-header'>
                                    <h3 class='box-title'><a href='statreport_archive.php'>การดาวน์โหลดสูงสุด 10 อันดับ</a></h3>
                                </div>
                                <div class='box-body chart-responsive'>";

        							$sql = "select * from archive_object where obj_countdownload > '0' order by obj_countdownload DESC LIMIT 0,10";
        							$query=mysqli_query($link,$sql) or die("Can't Query");
        							$num_rows  =mysqli_num_rows($query);
        							for ($i=0; $i<$num_rows; $i++) {
         								$result=mysqli_fetch_array($query);
         								echo "<li>$result[obj_title] ($result[obj_countdownload] ครั้ง)</li>";
         							}

                                echo "
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                    </div><!-- /.row -->

                    <div class='row'>
                        <div class='col-md-12'>
                            <!-- Object CHART -->
                            <div class='box box-primary'>
                                <div class='box-header'>
                                    <h3 class='box-title'> <a href='statreport_archive.php'>&nbsp;เอกสารจดหมายเหตุ </a></h3>
                                    <a class='btn btn-default pull-right' href='statreport_detail.php'> แยกตามประเภท</a>
                                    <a class='btn btn-default pull-right' href='statreport_archive.php'> รายละเอียด</a>
                                </div>
                                <div class='box-body chart-responsive'>
                                    <div class='chart' id='bar-archive' style='height: 300px;'></div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                    </div><!-- /.row -->

                            <div class='col-md-12'>
                            <!-- Object -->
                            <div class='box box-primary'>
                                <div class='box-header'>
                                    <h3 class='box-title'>&nbsp;วัตถุจัดแสดง</h3>
                                </div>
                                <div class='box-body chart-responsive'>
                                    <div id='bar-object'></div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->


                    </div><!-- /.row -->


                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

";


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

        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/morris/morris.css">

        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="js/AdminLTE/demo.js" type="text/javascript"></script>

        <?php
        $sql = "select * from archive_object";
        $query=mysqli_query($link,$sql) or die("Can't Query");
        $num_rows_archive =mysqli_num_rows($query);

        $sql = "select * from archive_news";
        $query=mysqli_query($link,$sql) or die("Can't Query");
        $num_rows_news =mysqli_num_rows($query);

        $sql = "select * from muse_object";
        $query=mysqli_query($link,$sql) or die("Can't Query");
        $num_rows_muse =mysqli_num_rows($query);


        ?>
        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                "use strict";


                //BAR CHART
                var bar = new Morris.Bar({
                    element: 'bar-archive',
                    resize: true,
                    data: [
                    <?php
                    $sql = "SELECT COUNT( t1.obj_refcode ) AS  'num_pic', t3.cat1_name, count(distinct t1.obj_id) as 'num_cat'
							FROM archive_object t1, archive_pic t2 , archive_category t3 WHERE t1.obj_refcode = t2.obj_refcode and t1.obj_category = t3.cat1_id GROUP BY t3.cat1_name";
      				$query=mysqli_query($link,$sql) or die("Can't Query");
        			$num_rows =mysqli_num_rows($query);
        	     		for ($i=0; $i<$num_rows; $i++) {
         			$result=mysqli_fetch_array($query);
         			echo "{y:'$result[cat1_name]', a: $result[num_cat], b:$result[num_pic]},";
         				}
                    ?>
                    ],
                    barColors: ['#00a65a','#2E64FE'],
                    xkey: 'y',
                    ykeys: ['a','b'],
                    labels: ['รายการ','ชิ้น'],
                    hideHover: 'auto'
                });



				 //Object Bar Chart with Label
                Morris.Bar({
  				element: 'bar-object',
  				data: [
  				                    <?php
                    $sql = "SELECT COUNT( t1.obj_refcode ) AS 'num_pic', t3.cat1_name, count(distinct t1.obj_id) as 'num_cat' FROM muse_object t1, muse_pic t2 , muse_category t3 WHERE t1.obj_refcode = t2.obj_refcode and t1.obj_category = t3.cat1_id GROUP BY t3.cat1_name";
      				$query=mysqli_query($link,$sql) or die("Can't Query");
        			$num_rows =mysqli_num_rows($query);
        	     		for ($i=0; $i<$num_rows; $i++) {
         			$result=mysqli_fetch_array($query);
         			echo "{y:'$result[cat1_name]', a: $result[num_cat], b:$result[num_pic]},";
         				}
                    ?>

  				],

  				xkey: 'y',
  				ykeys: ['a',],
  				gridTextSize : '10',
  				xLabelAngle: '70',
  				labels: ['จำนวน']
				});

				//Donut Archive
				Morris.Donut({
  				element: 'donut-archive',
  				data: [
    				{label: "จดหมายเหตุ", value: <?php echo $num_rows_pic; ?>},
    				{label: "พิพิธภัณฑ์", value: <?php echo $num_rows_muse;?>},
    				{label: "ข่าว", value: <?php echo $num_rows_news; ?>}
  					],
  				colors: [
				'#0080FF',
    			'#FF9900',
    			'#DF013A'
  				]
				});

            });
        </script>

    </body>
</html>
