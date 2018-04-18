<?php

    $serverName  = "emuseum_db";
	$userName = "root";
	$dbName = "culture_thailue";
	//$password2 = "";	
	$userPassword = "heavygeese24"; 

	

	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	
	if(trim($_POST["txtUsername"]) == "")
	{
		echo "Please input Username!";
		exit();	
	}
	
	if(trim($_POST["txtPassword"]) == "")
	{
		echo "Please input Password!";
		exit();	
	}	
		
//	if($_POST["txtPassword"] != $_POST["txtConPassword"])
//	{
//		echo "Password not Match!";
//		exit();
//	}
	
//	if(trim($_POST["txtName"]) == "")
//	{
//		echo "Please input Name!";
//		exit();	
//	}	
	
	$strSQL = "SELECT * FROM tz_members WHERE usr = '".trim($_POST['txtUsername'])."' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if($objResult)
	{
			//echo "Username already exists!";
            echo "<meta http-equiv='refresh' content=\"0; url=index.php\" />";
	}
	else
	{	
		
//		$strSQL = "INSERT INTO member (Username,Password,Name,Status) VALUES ('".$_POST["txtUsername"]."', 
//		'".$_POST["txtPassword"]."','".$_POST["txtName"]."','".$_POST["ddlStatus"]."')";
//		$objQuery = mysqli_query($objCon,$strSQL);
//		
	     echo "Register NOT Completed!<br>";		
//	
//		echo "<br> Go to <a href='index.php'>Login page</a>";
		
	}

	mysqli_close($objCon);
?>