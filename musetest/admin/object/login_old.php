<?php
error_reporting(0);
define('INCLUDE_CHECK',true);
require 'connect.php';
//require 'functions.php';
// Those two files can be included only if INCLUDE_CHECK is defined


session_name('tzLogin');
// Starting the session

session_set_cookie_params(2*7*24*60*60);
// Making the cookie live for 2 weeks

session_start();

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
	session_destroy();

	header("Location: login.php");
	exit;
}

if($_POST['submit']=='Login')
{
	// Checking whether the Login form has been submitted

	$err = array();
	// Will hold our errors

if(trim($_POST["username"]) == "" or $_POST["password"] == "")
	//if(!$_POST['username'] or !$_POST['password'])
		$err[] = 'All the fields must be filled in!';

	if(!count($err))
	{
//		$_POST["username"] = mysqli_real_escape_string($_POST['username']);
//		$_POST['password'] = mysqli_real_escape_string($_POST['password']);
        $user = mysqli_real_escape_string($_POST['username']);
        $pass = mysqli_real_escape_string($_POST['password']);
		$_POST['rememberMe'] = (int)$_POST['rememberMe'];

		// Escaping all input data

		//$row = mysqli_fetch_assoc(mysqli_query("SELECT id,usr FROM tz_members WHERE usr='{$_POST['username']}' AND pass='".md5($_POST['password'])."'"));
//		$row = mysqli_fetch_assoc(mysqli_query("SELECT id, usr FROM tz_members WHERE usr='{$_POST['username']}' AND pass='{$_POST['password']}' "));
$row = mysqli_fetch_assoc(mysqli_query("SELECT `usr` , `id` FROM `tz_members` WHERE `usr` ='$user' AND `pass` ='$pass' "));
        
		if($row['usr'])
		{
			// If everything is OK login

			$_SESSION['usr']= $row['usr'];
			$_SESSION['id'] = $row['id'];
			$_SESSION['rememberMe'] = $_POST['rememberMe'];

			// Store some data in the session

			setcookie('tzRemember',$_POST['rememberMe']);
		}
		else $err[]='Wrong username and/or password!';
	}

	if($err)
	$_SESSION['msg']['login-err'] = implode('<br/>',$err);
	// Save the error messages in the session

	header("Location:index.php");
	echo "<meta http-equiv='refresh' content=\"0; url=index.php\" />";
	exit;
}

/*
else if($_POST['submit']=='Register')
{
	// If the Register form has been submitted

	$err = array();

	if(strlen($_POST['username'])<4 || strlen($_POST['username'])>32)
	{
		$err[]='Your username must be between 3 and 32 characters!';
	}

	if(preg_match('/[^a-z0-9\-\_\.]+/i',$_POST['username']))
	{
		$err[]='Your username contains invalid characters!';
	}

	if(!checkEmail($_POST['email']))
	{
		$err[]='Your email is not valid!';
	}

	if(!count($err))
	{
		// If there are no errors

		//$pass = substr(md5($_SERVER['REMOTE_ADDR'].microtime().rand(1,100000)),0,6);
		$pass = rand(1,1000000);
		// Generate a random password

		$_POST['email'] = mysqli_real_escape_string($_POST['email']);
		$_POST['username'] = mysqli_real_escape_string($_POST['username']);
		// Escape the input data

						mysqli_query("	INSERT INTO tz_members(usr,pass,email,regIP,dt,permission)
						VALUES(

							'".$_POST['username']."',
							'$pass',
							'".$_POST['email']."',
							'".$_SERVER['REMOTE_ADDR']."',
							NOW(),
							'user'

						)");


		if(mysqli_affected_rows($link)==1)
		{
			send_mail(	'demo-test@emuseum.org',
						$_POST['email'],
						'Registration System Demo - Your New Password',
						'Your password is: '.$pass);

			$_SESSION['msg']['reg-success']='We sent you an email with your new password!';
		}
		else $err[]='This username is already taken!';
	}

	if(count($err))
	{
		$_SESSION['msg']['reg-err'] = implode('<br />',$err);
	}

	header("Location: index.php");
	exit;
}
*/

$script = '';

if($_SESSION['msg'])
{
	// The script below shows the sliding panel on page load

	$script = '
	<script type="text/javascript">

		$(function(){

			$("div#panel").show();
			$("#toggle a").toggle();
		});

	</script>';

}
?>

<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="bg-black">

	<?php
		if(!$_SESSION['id']):
	?>

        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
            <form class="clearfix" action="login.php" method="post">

			<?php
				if($_SESSION['msg']['login-err'])
				{
					echo '<div class="err">'.$_SESSION['msg']['login-err'].'</div>';
					unset($_SESSION['msg']['login-err']);
				}
			?>

                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="username" id="username"  class="form-control" placeholder="User ID"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password"  class="form-control" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <input name="rememberMe" id="rememberMe" type="checkbox" checked="checked" value="1"/> Remember me
                    </div>
                </div>
                <div class="footer">
                    <button type="submit" name="submit" value="Login" class="btn bg-olive btn-block">Sign me in</button>

                    <!-- <p><a href="#">I forgot my password</a></p>


                    <a href="register.php" class="text-center">Register a new membership</a> -->

                </div>
            </form>

			<?php
				endif;
			?>

        </div>


        <!-- jQuery 2.0.2 -->
        <script src="js/jquery-2.0.2.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>
