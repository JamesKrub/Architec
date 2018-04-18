<?php
session_name('tzLogin');
session_set_cookie_params(2*7*24*60*60);
session_start();
$id=$_SESSION['id'];
$usr=$_SESSION['usr'];
?>
<?php
/*if($_SESSION['id'] && !isset($_COOKIE['tzRemember']) && !$_SESSION['rememberMe'])
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
}*/
?>
<?php

// $login_session = $_SESSION['username'];
// if(isset($login_session)){
//     // Redirecting To Home Page
// header('Location: object/index.php'); 
// }
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1;url=http:object/login.php">
        <script type="text/javascript">
            window.location.href = "object/index.php"
        </script>
        <title>Page Redirection : e-Museum</title>
    </head>
    <body>
        <!-- Note: don't tell people to `click` the link, just tell them that it is a link. -->
        If you are not redirected automatically, follow the <a href='object/login.php'>link to e-Museum</a>
    </body>
</html>