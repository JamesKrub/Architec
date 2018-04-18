<?php
require('connect.php');

error_reporting(0);
session_name('tzLogin');
session_set_cookie_params(2*7*24*60*60);
session_start();

$id = $_SESSION['id'];
$usr = $_SESSION['usr'];

//echo "ไอดีที่ถูกส่งมาคือ ".$id."<br> ชื่อผู้ใช้คือ ".$usr;
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
                <!-- header logo: style can be found in header.less -->
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
							require('connect.php');
										$sql = "select * from tz_members where id = '$id'   ";
										$query=mysqli_query($link,$sql) or die("Can't Query");
										$result=mysqli_fetch_array($query);
										echo "<img src ='../../pic/profile/profile-$result[mem_pic]' class='img-circle' alt='User Image'>";
							?>
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php  echo $_SESSION['usr'] ? $_SESSION['usr'] : 'Admin';?></p>

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
						ผู้ใช้งาน
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">ผู้ใช้งาน</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Main row -->
                    <div class="row">
						<div class="col-md-12">

<!-- Process -->

    <?php
	if($_SESSION['id'])
	{
   	##############  Login Already ############
echo "<h1> You are registered and logged in!</h1>";

$updatedetail= $_REQUEST['updatedetail'];
$myemail= $_REQUEST['myemail'];
$newpassword= $_REQUEST['newpassword'];

$updateusr= $_REQUEST['updateusr'];
$newpermission = $_REQUEST['newpermission'];
$updateid= $_REQUEST['updateid'];
$editpic= $_REQUEST['editpic'];
///////  Check Update Status //////////

if($updateusr == '1')
		{
			echo "
				<div id='alert-message' class='alert alert-success alert-dismissable'>
					<i class='fa fa-check'></i>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					เปลี่ยนสถานะเสร็จสิ้น
				</div>";
          //echo "UPDATE userid = $updateid  $newpermission <br>";
		  $sql = "UPDATE tz_members SET `permission` = '$newpermission'  WHERE `tz_members`.`id` = '$updateid' LIMIT 1 ;";
         $query=mysqli_query($link,$sql) or die("Can't Query");
         // echo " <script>
		 //   window.location = location.href;
         //  </script>
		 // ";
		}
///////  Check Update User Detail //////////
if($updatedetail== '1')
		{
			echo "
				<div id='alert-message' class='alert alert-success alert-dismissable'>
					<i class='fa fa-check'></i>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					บันทึกข้อมูลเสร็จสิ้น
				</div>";
          //echo "UPDATE id = $id  $myemail $mypasword  $newpassword<br>";
		  //echo "New Password = $newpassword <br>";
		  if($newpassword !='')
			{
		  //$sql = "UPDATE `rcythai2`.`tz_members` SET `email` = '$myemail'  WHERE `tz_members`.`id` = '$id' LIMIT 1 ;";
		  ////echo "<b>$id $newpassword </b>";
		  $sql ="UPDATE tz_members SET `email` = '$myemail' ,`pass` = '$newpassword'  WHERE `tz_members`.`id` = $id LIMIT 1 ;";
         $query=mysqli_query($link,$sql) or die("Can't Query");
		//echo "<br>  new password <br>";
			}
		else  if ($newpassword == '')
			{
          // echo "<br> no new password <br>";
		 $sql ="UPDATE tz_members SET `email` = '$myemail' WHERE `tz_members`.`id` = $id LIMIT 1 ;";
         $query=mysqli_query($link,$sql) or die("Can't Query");

			}
         // echo " <script>
		  //  window.location = location.href;
           //</script>
		  //";
		}

    //}
///////  Check Update User Picture //////////

if($editpic== 1)
    {
			$myfilecover =$_REQUEST['myfilecover'];
			if($_FILES['uploadedfile']['name'] !='')
		{
			######## UPload FILE###########
		 $target_path = "../../pic/profile/";
		 $target_path_profile = "../../pic/profile/";

		$target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
		$target_path_profile = $target_path_profile . basename( $_FILES['uploadedfile']['name']);


		$myfile = $_FILES['uploadedfile']['name'];
		if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
			//echo "The file ".  basename( $_FILES['uploadedfile']['name'])." has been uploaded";
			echo "
				<div id='alert-message' class='alert alert-success alert-dismissable'>
					<i class='fa fa-check'></i>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					บันทึกรูปภาพเสร็จสิ้น
				</div>";
		} else{
			echo "There was an error uploading the file, please try again!";
		}

		$original = "../../pic/profile/".$myfile;
		$dest = "../../pic/profile/".$myfile;
		copy($original,$dest);

		$profile = "profile-".$myfile;
		$myprofile = "../../pic/profile/".$profile;
		//echo "$profile --> $myprofile";
		rename($dest, $myprofile);

		$sql = "UPDATE tz_members SET `mem_pic` = '$myfile', `mem_picshow` = '$myfilecover'
		 WHERE `tz_members`.`id` = '$id' LIMIT 1 ;";
		 }
		 else
		 {
		 $sql = "UPDATE tz_members SET `mem_picshow` = '$myfilecover'
		 WHERE `tz_members`.`id` = '$id' LIMIT 1 ;";
		 }
		$query=mysqli_query($link,$sql) or die("Can't Query");

    }
////////////////////////////////////////////////
 $sql = "select * from tz_members where id = '$id'   ";
 $query=mysqli_query($link,$sql) or die("Can't Query");
 $num_rows=mysqli_num_rows($query);

	     for ($i=0; $i<$num_rows; $i++) {
         $result=mysqli_fetch_array($query);
		//echo "$result[usr]  $result[permission]<br>";
		$myusername = $result[usr];
		$myemail = $result[email];
		$permission =$result[permission];

}
//echo "per = $permission ";
if($permission == 'superadmin')
		{
          //  echo "SuperAdmin <br>";
			echo "<div class='box box-primary'>"; // Start box-primary
		    echo "<form class='form-horizontal' role='form'  name='form22' method='post' action='user.php'>";

			echo "<div class='box-body'>"; // Start box-body
			echo "<div class='form-group'>";
			echo "<label class='col-sm-2 control-label'>User name</label>"; //User name
			echo "<div class='col-sm-10'>";
		    echo "<input class='form-control' type ='text' name='myusername' value ='$myusername' disabled>";
			echo "</div>";
			echo "</div>";

			echo "<div class='form-group'>";
			echo "<label class='col-sm-2 control-label'>Email</label>"; //Email
			echo "<div class='col-sm-10'>";
		    echo "<input class='form-control' type ='text' name ='myemail' value ='$myemail'>";
			echo "</div>";
			echo "</div>";

			echo "<div class='form-group'>";
			echo "<label class='col-sm-2 control-label'>New password</label>"; //New password
			echo "<div class='col-sm-10'>";
		    echo "<input class='form-control' type ='password' name = 'newpassword' value =''>";
			echo "</div>";
			echo "</div>";
			echo "</div>"; // End box-body

			echo "<div class='box-footer'>"; // Start box-footer
			echo "<input type='hidden' name='updatedetail' value='1'>";
			echo "<button type='submit' name='submit' class='btn btn-primary'>บันทึก</button>";
			echo "</div>"; // End box-footer

            echo "</form>";
			echo "</div>"; // End box-primary

//ข้อมูลภาพโปรไฟล์

echo "<div class='box box-primary'>"; // Start box-primary
echo "<form class='form-horizontal' role='form' name='formpic' method='post' action='user.php' enctype='multipart/form-data'>";
echo "<div class='box-body'>"; // Start box-body

echo "<div class='form-group'>";
echo "<label class='col-sm-2 control-label'>ภาพโปรไฟล์</label>";
echo "<div class='col-sm-10'>";


$sql3 = "select * from tz_members where id= '$id' limit 1";
$query=mysqli_query($link,$sql3) or die("Can't Query");
$num_rows=mysqli_num_rows($query);
if($num_rows != 0)
{
	for ($i=0; $i<$num_rows; $i++) {
	$result=mysqli_fetch_array($query);
	echo "<img src ='../../pic/profile/profile-$result[mem_pic]' width='100'>";
	}
}
echo "</div>";
echo "</div>";

echo "<div class='form-group'>";
echo "<label class='col-sm-2 control-label'></label>";
echo "<div class='col-sm-5'>";
echo "<input type='hidden' name='MAX_FILE_SIZE' value='1000000' />
		   <input class='form-control' name='uploadedfile' type='file' />";
echo "</div>";
echo "</div>";

echo "</div>"; // End box-body

echo "<div class='box-footer'>"; // Start box-footer
echo "<input type='hidden' name='editpic' value='1'><button type='submit' name='submit' class='btn btn-primary'>บันทึก</button>";
echo "</div>"; // End box-footer

echo "</form>";
echo "</div>"; // End box-primary

//สิ้นสุดข้อมูลภาพโปรไฟล์



$sql2 = "select * from tz_members where permission != 'superadmin' ";
           $query2=mysqli_query($link,$sql2) or die("Can't Query");
           $num_rows2=mysqli_num_rows($query2);


echo "<div class='box box-primary'>"; // Start box-primary
echo "<div class='box-body table-responsive'>";
echo "<table class='table table-bordered table-hover' id='example1'>";

echo "<thead>";
echo "<tr>";
echo "<th class='col-sm-2 text-center'>ลำดับที่</th>";
echo "<th class='col-sm-5 text-center'>ชื่อผู้ใช้งาน</th>";
echo "<th colspan='2' class='col-sm-5 text-center'>สิทธิ์</th>";
echo "</tr>";
echo "</thead>";

					//add new user
				 echo "<form class='form-horizontal' role='form'  name='form21' method='post' action=''>";
				 echo "<div class='form-group'>";
				//  echo "<input type='hidden' name='url' value='user.php'>";
				// <a class="btn btn-primary" href="addmuse-1page.php"><i class="fa fa-plus-square fa-lg"></i> เพิ่มข้อมูล</a>
				 echo "<a class='btn btn-primary' href='adduser.php'><i class='fa fa-plus-square fa-lg'></i> เพิ่มผู้ใช้</a> ";
				 echo "</div>";

			   echo "</form>";


              for ($j=0; $j<$num_rows2; $j++) {
			          $result2=mysqli_fetch_array($query2);
					  $num = $j+1;
                      $updateid = $result2['id'];
					  echo "<tr><td class='text-center'>$num</td>";

				      echo "<td> $result2[usr] </td> ";
					   //$updateid = $result2[id];

					   if($result2['permission'] =='Superadmin' )
                 				  {

								  echo "<form class='form-horizontal' role='form'  name='form21' method='post' action='user.php'>";

								  echo "<td class='col-sm-4'>";
					              echo "<select class='form-control' name='newpermission'>";
					              echo "<option value='superadmin' selected>Superadmin</option> ";
   					              echo "<option value='admin'>Admin</option> ";
   					              echo "<option value='editor'>Editor</option> ";
   					              echo "<option value='user'>User</option> ";
				   	              echo "</select>";
								  echo "</td>";

								  echo "<td class='col-sm-1'>";
								  echo "<input type='hidden' name='updateid' value='$updateid'>";
   								  echo "<input type='hidden' name='updateusr' value='1'>";
								  echo "<button type='submit' name='submit' class='btn btn-primary'>เปลี่ยนสถานะ</button>";
								  echo "</td>";

				
					              }


					   else  if($result2['permission'] =='admin' )
                 				  {
   								  echo "<form class='form-horizontal' role='form'  name='form2' method='post' action='user.php'>";

								  echo "<td class='col-sm-4'>";
					              echo "<select class='form-control' name='newpermission'>";
					              echo "<option value='superadmin' >Superadmin</option> ";
   					              echo "<option value='admin' selected>Admin</option> ";
   					              echo "<option value='editor'>Editor</option> ";
   					              echo "<option value='user'>User</option> ";
				   	              echo "</select>";
								  echo "</td>";

								  echo "<td class='col-sm-1'>";
  								  echo "<input type='hidden' name='updateid' value='$updateid'> $update1";
   								  echo "<input type='hidden' name='updateusr' value='1'>";
								  echo "<button type='submit' name='submit' class='btn btn-primary'>เปลี่ยนสถานะ</button>";
								  echo "</td>";

								  echo "</form>";

					              }
					   else  if($result2['permission'] == 'editor')
                 				  {
   								  echo "<form class='form-horizontal' role='form'  name='form2' method='post' action='user.php'>";

								  echo "<td class='col-sm-4'>";
					              echo "<select class='form-control' name='newpermission'>";
					              echo "<option value='superadmin' >Superadmin</option> ";
   					              echo "<option value='admin'>Admin</option> ";
   					              echo "<option value='editor'selected>Editor</option> ";
   					              echo "<option value='user'>User</option> ";
				   	              echo "</select>";
								  echo "</td>";

								  echo "<td class='col-sm-1'>";
  								  echo "<input type='hidden' name='updateid' value='$updateid'> $update1";
   								  echo "<input type='hidden' name='updateusr' value='1'>";
								  echo "<button type='submit' name='submit' class='btn btn-primary'>เปลี่ยนสถานะ</button>";
								  echo "</td>";

								  echo "</form>";

					              }


					   else  if($result2[permission] =='user' )
                 				  {
   							      echo "<form class='form-horizontal' role='form'  name='form2' method='post' action='user.php'>";

								  echo "<td class='col-sm-4'>";
					              echo "<select class='form-control' name ='newpermission'>";
					              echo "<option value='superadmin' >Superadmin</option> ";
   					              echo "<option value='admin' >Admin</option> ";
   					              echo "<option value='editor'>Editor</option> ";
   					              echo "<option value='user' selected  >User</option> ";
				   	              echo "</select>";
								  echo "</td>";

								  echo "<td class='col-sm-1'>";
  								  echo "<input type='hidden' name='updateid' value='$updateid'>";
   								  echo "<input type='hidden' name='updateusr' value='1'>";
								  echo "<button type='submit' name='submit' class='btn btn-primary'>เปลี่ยนสถานะ</button>";
								  echo "</td>";

								  echo "</form>";
					              }

				echo "</tr>";
		               }
//echo "</tbody>";
echo "</table>";
echo "</div>";
echo "</div>"; // End box-primary

	    }
else if(($permission == 'admin') or ($permission == 'editor'))
		{
           //  echo "Admin <br>";
			echo "<div class='box box-primary'>"; // Start box-primary
		    echo "<form class='form-horizontal' role='form'  name='form22' method='post' action='user.php'>";

			echo "<div class='box-body'>"; // Start box-body
			echo "<div class='form-group'>";
			echo "<label class='col-sm-2 control-label'>User name</label>"; //User name
			echo "<div class='col-sm-10'>";
		    echo "<input class='form-control' type ='text' name='myusername' value ='$myusername' disabled>";
			echo "</div>";
			echo "</div>";

			echo "<div class='form-group'>";
			echo "<label class='col-sm-2 control-label'>Email</label>"; //Email
			echo "<div class='col-sm-10'>";
		    echo "<input class='form-control' type ='text' name ='myemail' value ='$myemail'>";
			echo "</div>";
			echo "</div>";

			echo "<div class='form-group'>";
			echo "<label class='col-sm-2 control-label'>New password</label>"; //New password
			echo "<div class='col-sm-10'>";
		    echo "<input class='form-control' type ='password' name = 'newpassword' value =''>";
			echo "</div>";
			echo "</div>";
			echo "</div>"; // End box-body

			echo "<div class='box-footer'>"; // Start box-footer
			echo "<input type='hidden' name='updatedetail' value='1'>";
			echo "<button type='submit' name='submit' class='btn btn-primary'>แก้ไข</button>";
			echo "</div>"; // End box-footer

            echo "</form>";
			echo "</div>"; // End box-primary
//ข้อมูลภาพโปรไฟล์

echo "<div class='box box-primary'>"; // Start box-primary
echo "<form class='form-horizontal' role='form' name='formpic' method='post' action='user.php' enctype='multipart/form-data'>";
echo "<div class='box-body'>"; // Start box-body

echo "<div class='form-group'>";
echo "<label class='col-sm-2 control-label'>ภาพโปรไฟล์</label>";
echo "<div class='col-sm-10'>";

$sql3 = "select * from tz_members where id=$id limit 1";
$query=mysqli_query($link,$sql3) or die("Can't Query");
$num_rows=mysqli_num_rows($query);
if($num_rows != 0)
{
	for ($i=0; $i<$num_rows; $i++) {
	$result=mysqli_fetch_array($query);
	echo "<img src ='../../pic/profile/profile-$result[mem_pic]' width='100'>";
	}
}
echo "</div>";
echo "</div>";

echo "<div class='form-group'>";
echo "<label class='col-sm-2 control-label'></label>";
echo "<div class='col-sm-5'>";
echo "<input type='hidden' name='MAX_FILE_SIZE' value='1000000' />
		   <input class='form-control' name='uploadedfile' type='file' />";
echo "</div>";
echo "</div>";

echo "</div>"; // End box-body

echo "<div class='box-footer'>"; // Start box-footer
echo "<input type='hidden' name='editpic' value='1'><button type='submit' name='submit' class='btn btn-primary'>บันทึก</button>";
echo "</div>"; // End box-footer

echo "</form>";
echo "</div>"; // End box-primary

//สิ้นสุดข้อมูลภาพโปรไฟล์
	    }
else 
		{
         // echo "user";
			echo "<div class='box box-primary'>"; // Start box-primary
		    echo "<form class='form-horizontal' role='form'  name='form22' method='post' action='user.php'>";

			echo "<div class='box-body'>"; // Start box-body
			echo "<div class='form-group'>";
			echo "<label class='col-sm-2 control-label'>User name</label>"; //User name
			echo "<div class='col-sm-10'>";
		    echo "<input class='form-control' type ='text' name='myusername' value ='$myusername' disabled>";
			echo "</div>";
			echo "</div>";

			echo "<div class='form-group'>";
			echo "<label class='col-sm-2 control-label'>Email</label>"; //Email
			echo "<div class='col-sm-10'>";
		    echo "<input class='form-control' type ='text' name ='myemail' value ='$myemail'>";
			echo "</div>";
			echo "</div>";

			echo "<div class='form-group'>";
			echo "<label class='col-sm-2 control-label'>New password</label>"; //New password
			echo "<div class='col-sm-10'>";
		    echo "<input class='form-control' type ='password' name = 'newpassword' value =''>";
			echo "</div>";
			echo "</div>";
			echo "</div>"; // End box-body

			echo "<div class='box-footer'>"; // Start box-footer
			echo "<input type='hidden' name='updatedetail' value='1'>";
			echo "<button type='submit' name='submit' class='btn btn-primary'>แก้ไข</button>";
			echo "</div>"; // End box-footer

            echo "</form>";
			echo "</div>"; // End box-primary

			//ข้อมูลภาพโปรไฟล์

echo "<div class='box box-primary'>"; // Start box-primary
echo "<form class='form-horizontal' role='form' name='formpic' method='post' action='user.php' enctype='multipart/form-data'>";
echo "<div class='box-body'>"; // Start box-body

echo "<div class='form-group'>";
echo "<label class='col-sm-2 control-label'>ภาพโปรไฟล์</label>";
echo "<div class='col-sm-10'>";



$sql3 = "select * from tz_members where id=$id limit 1";
$query=mysqli_query($link,$sql3) or die("Can't Query");
$num_rows=mysqli_num_rows($query);
if($num_rows != 0)
{
	for ($i=0; $i<$num_rows; $i++) {
	$result=mysqli_fetch_array($query);
	echo "<img src ='../../pic/profile/profile-$result[mem_pic]' width='100'>";
	}
}

 if ($result[mem_pic] == ''){
	echo "<img src = '../../../../pic/user/user.png' width='100' >";
 }
	//echo "<img src = '../../../../pic/user/user.png' width='100' >";
	

echo "</div>";



echo "</div>";

echo "<div class='form-group'>";
echo "<label class='col-sm-2 control-label'></label>";
echo "<div class='col-sm-5'>";
echo "<input type='hidden' name='MAX_FILE_SIZE' value='1000000' />
		   <input class='form-control' name='uploadedfile' type='file' />";
echo "</div>";
echo "</div>";

echo "</div>"; // End box-body

echo "<div class='box-footer'>"; // Start box-footer
echo "<input type='hidden' name='editpic' value='1'><button type='submit' name='submit' class='btn btn-primary'>บันทึก</button>";
echo "</div>"; // End box-footer

echo "</form>";
echo "</div>"; // End box-primary

//สิ้นสุดข้อมูลภาพโปรไฟล์
		}
    }
echo "<hr>";






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
				$("#alert-message").alert();
					window.setTimeout(function() { $("#alert-message").alert('close'); }, 3000);
            });
        </script>

    </body>
</html>
