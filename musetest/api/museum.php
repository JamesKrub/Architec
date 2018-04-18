
<?php
	//ini_set('display_errors', 1);
	//error_reporting(~0);
    header ('Content-type: text/html; charset=utf-8');
   
    $host = "emuseum_db";
    $username = "root";
    $dbname = "culture_api";
    $password2 = "heavygeese24"; 

//	$link = mysqli_connect($host,$username,$password2,$dbname);
//    mysqli_query($link, "SET NAMES utf8");


$museum_code=$_GET['museum_code'];
//$language=$_GET['language'];
//echo "key = $language";

if($museum_code<>''){
 $link = mysqli_connect($host,$username,$password2,$dbname);
    mysqli_query($link, "SET NAMES utf8");
  	$sql = "SELECT * FROM `museum` where `museum_code` ='$museum_code' ";
	$query = mysqli_query($link,$sql);
	if (!$query) {
		printf("Error: %s\n", $link->error);
		exit();
	}
	$resultArray = array();
	while($result = mysqli_fetch_array($query,MYSQLI_ASSOC))
	{
		array_push($resultArray,$result);
	}
	mysqli_close($link);

	echo json_encode($resultArray);  
    
}
else {
  
    exit();
}

?>