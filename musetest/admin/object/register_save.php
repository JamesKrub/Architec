<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Registration Page</title>
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

        <div class="form-box" id="login-box">
            <div class="header">Register New Membership</div>
                <div class="body bg-gray">

<?php
	mysql_connect("localhost","root","1234");
	mysql_select_db("archive_db");

	if(trim($_POST["usr"]) == "")
	{
		echo "Please input Username!<br/>";
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		exit();
	}

	if(trim($_POST["pass"]) == "")
	{
		echo "Please input Password!<br/>";
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		exit();
	}

	if($_POST["pass"] != $_POST["pass2"])
	{
		echo "Password not Match!<br/>";
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		exit();
	}

	if(trim($_POST["email"]) == "")
	{
		echo "Please input Email!<br/>";
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		exit();
	}

	$strSQL = "SELECT * FROM tz_members WHERE usr = '".trim($_POST['usr'])."' ";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if($objResult)
	{
			echo "Username already exists!";
			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	else
	{

		$strSQL = "INSERT INTO tz_members (usr,pass,email,permission,mem_pic) VALUES ('".$_POST["usr"]."',
		'".$_POST["pass"]."','".$_POST["email"]."','".$_POST["permission"]."','".$_POST["mem_pic"]."')";
		$objQuery = mysql_query($strSQL);

		echo "Register Completed!<br>";

		echo "<br> Go to <a href='login.php'>Login page</a>";

	}

	mysql_close();
?>
				</div>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="js/jquery-2.0.2.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>
