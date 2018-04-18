<?php
error_reporting(0);
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
        <title>Digital muse | จดหมายเหตุดิจิตัล</title>
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
                Digital muse
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
										$query=mysqli_query($link,$sql) or die("Can't Querssy");
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
												$query=mysqli_query($link,$sql) or die("Can't Quessry");
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
								$query=mysqli_query($link,$sql) or die("Can't Queryss");
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
						ตั้งค่า
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">ตั้งค่า</li>
                    </ol>
                </section>

                <!-- Main content -->

								<section class="content">

									<div class="row">
										<div class="col-md-12">
											<?php
											#### Start museum Background ####
											$sql = "select * from muse_bg  ";
											$query=mysqli_query($link,$sql) or die("Can't Query");
											$num_rows=mysqli_num_rows($query);
											#echo "$num_rows";
											if($num_rows != 0)
											{
											$editdetail =$_REQUEST['editdetail'];
											$editpic =$_REQUEST['editpic'];
											$editpic2 =$_REQUEST['editpic2'];
											$editpic360 =$_REQUEST['editpic360'];

											if($editdetail == 1)
											{
											echo "
											<div id='alert-message' class='alert alert-success alert-dismissable'>
												<i class='fa fa-check'></i>
												<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
												บันทึกข้อมูลเสร็จสิ้น
											</div>";
											$musename =$_REQUEST['musename'];
											$musedesc =$_REQUEST['musedesc'];
											$museentry =$_REQUEST['museentry'];
											$muselat =$_REQUEST['muselat'];
											$muselon =$_REQUEST['muselon'];
											$musenumber =$_REQUEST['musenumber'];
											$musetambon =$_REQUEST['musetambon'];
											$museampher =$_REQUEST['museampher'];
											$musecity =$_REQUEST['musecity'];
											$musepostcode =$_REQUEST['musepostcode'];
											$musetel =$_REQUEST['musetel'];
											$museemail =$_REQUEST['museemail'];
											$musewebsite =$_REQUEST['musewebsite'];
											$musepic =$_REQUEST['musepic'];
											$musepicshow =$_REQUEST['musepicshow'];
											$sql = "UPDATE muse_bg SET `bg_name` = '$musename', `bg_desc` = '$musedesc', `bg_entry` = '$museentry',
											`bg_lat` = '$muselat',`bg_lon` = '$muselon',`bg_number` = '$musenumber',`bg_tambon` = '$musetambon',
											`bg_ampher` = '$museampher',`bg_city` = '$musecity',`bg_postcode` = '$musepostcode',`bg_tel` = '$musetel',
											`bg_email` = '$museemail',`bg_website` = '$musewebsite'
											 WHERE `muse_bg`.`bg_id` = '1' LIMIT 1 ;";
											$query=mysqli_query($link,$sql) or die("Can't Quersday");
											}
											else
											{
												for ($i=0; $i<$num_rows; $i++) {
											        $result=mysqli_fetch_array($query);
											         #echo "$result[bg_name] <br>";
											        $musename =$result[bg_name];
													$musedesc =$result[bg_desc];
													$museentry =$result[bg_entry];
													$muselat =$result[bg_lat];
													$muselon =$result[bg_lon];
													$musenumber =$result[bg_number];
													$musetambon =$result[bg_tambon];
													$museampher =$result[bg_ampher];
													$musecity =$result[bg_city];
													$musepostcode =$result[bg_postcode];
													$musetel =$result[bg_tel];
													$museemail =$result[bg_email];
													$musewebsite =$result[bg_website];
											         }

											    if($editpic== 1)
											    {
											echo "
											<div id='alert-message' class='alert alert-success alert-dismissable'>
												<i class='fa fa-check'></i>
												<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
												บันทึกรูปภาพเสร็จสิ้น
											</div>";
											    $musecover =$_REQUEST['musecover'];

											    if($_FILES['uploadedfile']['name'] !='')
													{
											    ######## UPload FILE###########
											 $target_path = "../../pic/big/";
											 $target_path_thumb = "../../pic/thumb/";

											$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
											$target_path_thumb = $target_path_thumb . basename( $_FILES['uploadedfile']['name']);


											$myfile = $_FILES['uploadedfile']['name'];
											if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
											    //echo "The file ".  basename( $_FILES['uploadedfile']['name']).
											    //" has been uploaded";
											} else{
											    //echo "There was an error uploading the file, please try again!";
											}

											//$dest = "pic/big/"."thumb-".$myfile;
											//rename($target_path, $dest);
											$musecover = '1';
											$original = "../../pic/big/".$myfile;
											$dest = "../../pic/thumb/".$myfile;
											copy($original,$dest);

											$thumb = "thumb-".$myfile;
											$mythumb = "../../pic/thumb/".$thumb;

											// echo "$thumb- $mythumb<br>";
											rename($dest, $mythumb);

											 $sql = "UPDATE muse_bg SET `bg_pic` = '$myfile', `bg_picshow` = '$musecover'
 										 		WHERE `muse_bg`.`bg_id` = '1' LIMIT 1 ;";
	//กำหนดค่าการเชื่อมต่อ DB
	$host = "emuseum_db";
	$username = "root";
	$dbname = "culture_api";
	//$password2 = "";	
	$password2 = "heavygeese24"; 
	
	date_default_timezone_set('Asia/Bangkok');	

	$link2 = mysqli_connect($host,$username,$password2,$dbname);

		if (!$link2) {
		    echo "Error: Unable to connect to MySQL." . PHP_EOL;
		    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
		    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
		    exit;
		}

	mysqli_query($link2, "SET NAMES utf8");
	mysqli_commit($link2);  

$now = new DateTime();
$timestring = $now->format('Y-m-d h:i:s'); 
        
//echo "$bg_path"; 
   
 $uri = $_SERVER['REQUEST_URI']; // $uri == example.com/index
 $exploded_uri = explode('/', $uri); //$exploded_uri ==     array('example.com','index')
 $domain_name = $exploded_uri[1]; 
                                                    $sql2 = "UPDATE muse_bg SET `bg_pic` = '$myfile'
                                                     WHERE `muse_bg`.`bg_path` = '$domain_name' LIMIT 1 ;";
                                                    $query=mysqli_query($link2,$sql2) or die("Can't Query");  
											 }
											 else
											 {

											 $sql = "UPDATE muse_bg SET `bg_picshow` = '$musecover'
											 WHERE `muse_bg`.`bg_id` = '1' LIMIT 1 ;";
											 }
// $query=mysqli_query($link,$sql) or die("aaa");
											if (!mysqli_query($link,$sql)) {
									echo "! q";
								}else {
									echo "";
								}

											    }

									######################################### NEW

													if($editpic360 == 1)
													{
											echo "
											<div id='alert-message' class='alert alert-success alert-dismissable'>
												<i class='fa fa-check'></i>
												<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
												บันทึกรูปภาพเสร็จสิ้น 360
											</div>";
													$musecover = $_REQUEST['musecover'];
                                                    $pano = $_REQUEST['360pano']; 
													if($_FILES['uploadedfile']['name'] !='')
													{
													######## UPload FILE###########
											 $target_path = "../../pic/big/";
											 $target_path_thumb = "../../pic/thumb/";

											$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
											$target_path_thumb = $target_path_thumb . basename( $_FILES['uploadedfile']['name']);


											$myfile = $_FILES['uploadedfile']['name'];
											if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
													//echo "The file ".  basename( $_FILES['uploadedfile']['name']).
													//" has been uploaded";
											} else{
													//echo "There was an error uploading the file, please try again!";
											}

											//$dest = "pic/big/"."thumb-".$myfile;
											//rename($target_path, $dest);
											$musecover = '1';
                                            //$360pano = $_REQUEST['360pano']; 
                                            //$pano  =  $360pano ; 
											$original = "../../pic/big/".$myfile;
											$dest = "../../pic/thumb/".$myfile;
											copy($original,$dest);

											$thumb = "thumb-360-".$myfile;
											$mythumb = "../../pic/thumb/".$thumb;

								            echo "$thumb- $mythumb<br>";
                                            echo "$musecover <br>";    
                                                        
											rename($dest, $mythumb);

											 $sql = "UPDATE muse_bg SET `bg_pano` = '$myfile', `bg_picshow` = '$musecover' , `bg_panoshow` = '$pano' WHERE `muse_bg`.`bg_id` = '1' LIMIT 1 ;";

											 }
											 else
											 {
                                                 
                                            $pano = $_REQUEST['360pano']; 
                                           // echo "$musecover <br>";     
                                          //  echo "pano = $pano <br>";    
                                                 
                                            $sql = "UPDATE muse_bg SET `bg_panoshow` = '$pano' WHERE `muse_bg`.`bg_id` = '1' LIMIT 1 ;";     
//											 $sql = "UPDATE muse_bg SET `bg_picshow` = '$musecover'
//											 WHERE `muse_bg`.`bg_id` = '1' LIMIT 1 ;";
											 }
// $query=mysqli_query($link,$sql) or die("aaa");
											if (!mysqli_query($link,$sql)) {
									echo "! คิวรี่";
								}else {
									//echo " คิว รี่";
								}

													}

											#########################################

											    if($editpic2== 1)
											    {

											echo "
											<div id='alert-message' class='alert alert-success alert-dismissable'>
												<i class='fa fa-check'></i>
												<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
												บันทึกรูปภาพเสร็จสิ้น
											</div>";
											$str_file = explode(".",$_FILES['uploadedfile']['name']);
											$new_name="watermark.".$str_file['1'];

											$target_path = "../../pic/watermark/";

											//$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
											$target_path = $target_path . $new_name;

											$myfile = $_FILES['uploadedfile']['name'];
											if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
											    echo "The file ".  basename( $_FILES['uploadedfile']['name']).
											    " has been uploaded";
											} else {
											    //echo "There was an error uploading the file, please try again!";
											}

											$sql = "UPDATE muse_bg SET `bg_watermark` = '$new_name' WHERE `muse_bg`.`bg_id` = '1' LIMIT 1 ;";
											$query=mysqli_query($link,$sql) or die("Can't Query");

											    }
											#########################################
											}

											}
											else
											{
											$musename =$_REQUEST['musename'];
											$musedesc =$_REQUEST['musedesc'];
											$museentry =$_REQUEST['museentry'];
											$muselat =$_REQUEST['muselat'];
											$muselon =$_REQUEST['muselon'];
											$musenumber =$_REQUEST['musenumber'];
											$musetambon =$_REQUEST['musetambon'];
											$museampher =$_REQUEST['museampher'];
											$musecity =$_REQUEST['musecity'];
											$musepostcode =$_REQUEST['musepostcode'];
											$musetel =$_REQUEST['musetel'];
											$museemail =$_REQUEST['museemail'];
											$musewebsite =$_REQUEST['musewebsite'];
											$musepic =$_REQUEST['musepic'];
											$musepicshow =$_REQUEST['musepicshow'];
											$editdetail =$_REQUEST['editdetail'];
											$editpic =$_REQUEST['editpic'];
											$editpic2 =$_REQUEST['editpic2'];
											#echo "$musecity";
											if($editdetail == 1)
											{
											echo "INSERT DETAIL";
											$sql2 = "INSERT INTO muse_bg (`bg_id`,`bg_name`,`bg_desc`,`bg_entry`,`bg_lat`,`bg_lon`,`bg_number`,
											`bg_tambon`,`bg_ampher`,`bg_city`,`bg_postcode`,`bg_tel`,`bg_email`,`bg_website`)
											VALUES ('1', '$musename','$musedesc','$museentry','$muselat','$muselon','$musenumber',
											'$musetambon','$museampher','$musecity','$musepostcode','$musetel','$museemail','$musewebsite');";
											$query2=mysqli_query($link,$sql2) or die("Can't Query");
											}

											if($editpic == 1)
											{
											echo "INSERT PIC";
											$musecover =$_REQUEST['musecover'];
											   ######## UPload FILE###########
											 $target_path = "../../pic/big/";
											 $target_path_thumb = "../../pic/thumb/";

											$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
											$target_path_thumb = $target_path_thumb . basename( $_FILES['uploadedfile']['name']);


											$myfile = $_FILES['uploadedfile']['name'];
											if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
											    echo "The file ".  basename( $_FILES['uploadedfile']['name']).
											    " has been uploaded";
											} else{
											    echo "There was an error uploading the file, please try again!";
											}

											//$dest = "pic/big/"."thumb-".$myfile;
											//rename($target_path, $dest);

											$original = "../../pic/big/".$myfile;
											$dest = "../../pic/thumb/".$myfile;
											copy($original,$dest);

											$thumb = "thumb-".$myfile;
											$mythumb = "../../pic/thumb/".$thumb;
											//echo "$thumb --> $mythumb";
											rename($dest, $mythumb);

											#$sql2 = "INSERT INTO `museum`.`muse_bg` (`bg_id`,`bg_pic`,`bg_picshow`)
											#VALUES ('1', '$myfile','$musecover');";
											$sql2 = "INSERT INTO muse_bg (`bg_id`,`bg_pic`,`bg_picshow`)
											VALUES ('1', '$myfile','$musecover');";
											$query2=mysqli_query($link,$sql2) or die("Can't Query");

											}

											if($editpic2 == 1)
											{
											echo "INSERT PIC";
											$musecover =$_REQUEST['musecover'];
											   ######## UPload FILE###########
											 $target_path = "../../pic/watermark/";
											 $target_path_thumb = "../../pic/watermarkthumb/";

											$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
											$target_path_thumb = $target_path_thumb . basename( $_FILES['uploadedfile']['name']);


											$myfile = $_FILES['uploadedfile']['name'];
											if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
											    echo "The file ".  basename( $_FILES['uploadedfile']['name']).
											    " has been uploaded";
											} else{
											    echo "There was an error uploading the file, please try again!";
											}

											//$dest = "pic/big/"."thumb-".$myfile;
											//rename($target_path, $dest);

											$original = "../../pic/watermark/".$myfile;
											$dest = "../../pic/watermarkthumb/".$myfile;
											copy($original,$dest);

											$thumb = "watermark-".$myfile;
											$mythumb = "../../pic/watermarkthumb/".$thumb;
											//echo "$thumb --> $mythumb";
											rename($dest, $mythumb);

											#$sql2 = "INSERT INTO `museum`.`muse_bg` (`bg_id`,`bg_pic`,`bg_picshow`)
											#VALUES ('1', '$myfile','$musecover');";
											$sql2 = "INSERT INTO muse_bg (`bg_id`,`bg_watermark`,`bg_watermarkshow`)
											VALUES ('1', '$myfile','$musecover');";
											$query2=mysqli_query($link,$sql2) or die("Can't Queraaay");

											}

											} ?>

											<?php
											//ข้อมูลภาพจดหมายเหตุ

											echo "<div class='box box-primary'>"; // Start box-primary
											echo "<form class='form-horizontal' role='form' name='form2' method='post' action='setting.php' enctype='multipart/form-data'>";
											echo "<div class='box-body'>"; // Start box-body

											echo "<div class='form-group'>";
											echo "<label class='col-sm-2 control-label'>ภาพหน้าแรก</label>";
											echo "<div class='col-sm-10'>";

											$sql = "select * from muse_bg";
											$query=mysqli_query($link,$sql) or die("Can't Queryaa");
											$num_rows=mysqli_num_rows($query);
											if($num_rows != 0)
											{
												     for ($i=0; $i<$num_rows; $i++) {
											         $result=mysqli_fetch_array($query);
											         echo "<img src ='../../pic/thumb/thumb-$result[bg_pic]' width='100'>";
											         }
											}
											echo "</div>";
											echo "</div>";

											echo "<div class='form-group'>";
											echo "<label class='col-sm-2 control-label'></label>";
											echo "<div class='col-sm-10'>";
											echo "<input type='hidden' name='MAX_FILE_SIZE' value='9000000' />
													   <input class='form-control' name='uploadedfile' type='file' />";
											echo "</div>";
											echo "</div>";

											echo "</div>"; // End box-body

											echo "<div class='box-footer'>"; // Start box-footer
											echo "<input type='hidden' name='editpic' value='1'><button type='submit' name='submit' class='btn btn-primary'>บันทึก</button>";
											echo "</div>"; // End box-footer

											#echo "<tr>";
											#echo "<td><input type='radio' name='musecover' value='1'> แสดงภาพ  <br>
											#<input type='radio' name='musecover' value='0' checked='checked' > ไม่แสดงภาพ
											#</td>";
											#echo "</tr>";

											echo "</form>";
											echo "</div>"; // End box-primary



											//ภาพลายน้ำ Watermark

											echo "<div class='box box-primary'>"; // Start box-primary
											echo "<form class='form-horizontal' role='form' name='form2' method='post' action='setting.php' enctype='multipart/form-data'>";
											echo "<div class='box-body'>"; // Start box-body

											echo "<div class='form-group'>";
											echo "<label class='col-sm-2 control-label'>ภาพลายน้ำ</label>";
											echo "<div class='col-sm-10'>";

											$sql = "select * from muse_bg";
											$query=mysqli_query($link,$sql) or die("Can't Queryss");
											$num_rows=mysqli_num_rows($query);
											if($num_rows != 0)
											{
												     for ($i=0; $i<$num_rows; $i++) {
											         $result=mysqli_fetch_array($query);
											         echo "<img src ='../../pic/watermark/$result[bg_watermark]' width='100'>";
											         }
											}
											echo "</div>";
											echo "</div>";

											echo "<div class='form-group'>";
											echo "<label class='col-sm-2 control-label'></label>";
											echo "<div class='col-sm-10'>";
											echo "<input type='hidden' name='MAX_FILE_SIZE' value='1000000' />
													   <input class='form-control' name='uploadedfile' type='file' />";
											echo "</div>";
											echo "</div>";

											echo "</div>"; // End box-body

											echo "<div class='box-footer'>"; // Start box-footer
											echo "<input type='hidden' name='editpic2' value='1'><button type='submit' name='submit' class='btn btn-primary'>บันทึก</button>";
											echo "</div>"; // End box-footer

											#echo "<tr>";
											#echo "<td><input type='radio' name='musecover' value='1'> แสดงภาพ  <br>
											#<input type='radio' name='musecover' value='0' checked='checked' > ไม่แสดงภาพ
											#</td>";
											#echo "</tr>";

											echo "</form>";
											echo "</div>"; // End box-primary

											    ?>
													<?php
													//ภาพ 360

													//ภาพ 360

													echo "<div class='box box-primary'>"; // Start box-primary
													echo "<form class='form-horizontal' role='form' name='form2' method='post' action='setting.php' enctype='multipart/form-data'>";
													echo "<div class='box-body'>"; // Start box-body

													echo "<div class='form-group'>";
													echo "<label class='col-sm-2 control-label'>อัพโหลดภาพ 360 pano</label>";
													echo "<div class='col-sm-10'>";

													$sql = "select * from muse_bg";
													$query=mysqli_query($link,$sql) or die("Can't Queryaa");
													$num_rows=mysqli_num_rows($query);
													if($num_rows != 0)
													{
																 for ($i=0; $i<$num_rows; $i++) {
																	 $result=mysqli_fetch_array($query);
																	 echo "<img src ='../../pic/thumb/thumb-360-$result[bg_pano]' width='100'>";
																	 }
													}
													echo "</div>";
													echo "</div>";

													echo "<div class='form-group'>";
													echo "<label class='col-sm-2 control-label'></label>";
													echo "<div class='col-sm-10'>";
													echo "<input type='hidden' name='MAX_FILE_SIZE' value='9000000' />
																 <input class='form-control' name='uploadedfile' type='file' />";
													echo "</div>";
													echo "</div>";
                                                   echo "<tr>";
                                                    if ($result[bg_panoshow] == 1){
                                                     echo "<td><input type='radio' name='360pano' value='1' checked='checked' > แสดงภาพ 360  <br></td><td>
													<input type='radio' name='360pano' value='0'> ไม่แสดงภาพ 360 
													</td>";   
                                                    }
													else if ($result[bg_panoshow] == 0){
                                                     echo "<td><input type='radio' name='360pano' value='1' > แสดงภาพ 360 <br></td><td>
													<input type='radio' name='360pano' value='0' checked='checked' > ไม่แสดงภาพ 360 
													</td>";   
                                                    }
                                                   else {
                                                     echo "<td><input type='radio' name='360pano' value='1' > แสดงภาพ 360 <br></td><td>
													<input type='radio' name='360pano' value='0' > ไม่แสดงภาพ 360 
													</td>";   
                                                    }
													echo "</tr>";
                                            
//                                                    echo "<tr>";
//													echo "<td><input type='radio' name='360pano' value='1'> แสดงภาพ 360  <br></td><td>
//													<input type='radio' name='360pano' value='0' checked='checked' > ไม่แสดงภาพ 360
//													</td>";
//													echo "</tr>";
                                            
													echo "</div>"; // End box-body

													echo "<div class='box-footer'>"; // Start box-footer
													echo "<input type='hidden' name='editpic360' value='1'><button type='submit' name='submit' class='btn btn-primary'>บันทึก</button>";
													echo "</div>"; // End box-footer

//													echo "<tr>";
//													echo "<td><input type='radio' name='musecover' value='1'> แสดงภาพ  <br>
//													<input type='radio' name='musecover' value='0' checked='checked' > ไม่แสดงภาพ
//													</td>";
//													echo "</tr>";

													echo "</form>";
													echo "</div>"; // End box-primary
 ?>
											<!--   End Of Process------------>
											<div class="box box-primary">
												<form action="changeTheme.php" method="post">
													<div class="box-body">
														<p><strong>ธีม</strong></p>
														<div class="row">
															<?php
															$query = mysqli_query($link,"SELECT * FROM `theme`");
															while($row = mysqli_fetch_array($query)) { ?>
																<div class="col-md-2 tex-center">
																	<div style="margin-bottom: 30px;">
																		<a href="changeTheme.php?theme=<?php echo $row['thm_id']; ?>" class="text-center">
																			<?php echo ($row['thm_enable'] == 1) ? "<span style='z-index: 99; color: #fff; left: 70px; top: 40px; position: absolute;'>ใช้งาน</span>" : ""; ?>
																			<img style="height: 100px; width: 100%; background-image: url('preview-templete/<?php echo $row['thm_file']; ?>.png'); border: 1px solid #ccc; <?php echo ($row['thm_enable'] == 1) ? "filter: brightness(50%); -webkit-filter: brightness(50%); -moz-filter: brightness(50%);" : ""; ?>"/>
																		</a>
																	</div>
																</div>
															<?php }
															?>
														</div>

													</div><!-- /.box-body -->
												</form>
											</div><!-- /.box box-primary -->

											<!--   End Of Process------------>

											<div class="box box-primary">
												<form action="changeFeature.php" method="post">
													<div class="box-body">
														<p><strong>ฟีเจอร์</strong></p>
														<div class="row">
															<div class="col-md-12">
																<div class="form-group">
																<?php
																$query = mysqli_query($link,"SELECT * FROM `feature`");
																while($row = mysqli_fetch_array($query)) { ?>
																	<div class="checkbox">
																		<label>


																			<input name="feature[]" type="checkbox" disabled="disabled" value="<?php echo $row['fet_id']; ?>" <?php echo ($row['fet_enable'] == 1) ? "checked": ""; ?>>
																			<?php echo $row['fet_name']; ?>



																		</label>
																	</div><!-- /.checkbox -->
																<?php }
																?>
																</div><!--/.form-group -->
															</div><!-- /.col-md-12 -->
														</div><!-- /.row -->
													</div><!-- /.box-body -->
<!--
													<div class="box-footer">
														<button type="submit" class="btn btn-primary">บันทึก</button>
													</div>  /.box-footer 
-->
												</form>
											</div><!-- /.box box-primary -->

											<div class="box box-primary">
												<form action="change_cc.php" method="post">
													<div class="box-body">
														<p><strong>สัญญาอนุญาต (cc)</strong></p>
														<div class="row">
															<div class="col-md-12">
																<div class="form-group">
																<?php
																$query = mysqli_query($link,"SELECT * FROM `creativecommons`");
																while($row = mysqli_fetch_array($query)) { ?>
																	<div class="radio">
																			<label>

																				<input name="cc[]" type="radio"  value="<?php echo $row['cc_id']; ?>" <?php echo ($row['cc_open'] == 1) ? "checked": ""; ?>>
																				<img src="../../pic/cc/<?php echo $row['cc_pic_id']; ?>">

																				<?php echo $row['cc_name']; ?>
															

																			</label>
																	</div>

																<?php }
																?>
																</div><!--/.form-group -->
															</div><!-- /.col-md-12 -->
														</div><!-- /.row -->
													</div><!-- /.box-body -->
													<div class="box-footer">
														<button type="submit" class="btn btn-primary">บันทึก</button>
													</div><!--  /.box-footer -->
												</form>
											</div><!-- /.box box-primary -->
											<!--   End Of Process------------>

										</div><!-- /.col-md-12 -->
									</div><!-- /.row -->

                </section><!-- /.content -->




<!-- ------------------------------------------>














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
				$("#alert-message").alert();
					window.setTimeout(function() { $("#alert-message").alert('close'); }, 3000);
            });
        </script>

    </body>
</html>
