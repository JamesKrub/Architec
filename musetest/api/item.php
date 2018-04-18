
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


$item_code = $_GET['obj_id'];
$item_code = $_GET['obj_id'];
echo "id = $item_code";
$museum_code=$_GET['ownermuseum_code'];
echo "muse = $museum_code";

if($item_code<>''){
 $link = mysqli_connect($host,$username,$password2,$dbname);
    mysqli_query($link, "SET NAMES utf8");
  	$sql = "SELECT * FROM `items` where `obj_id` ='$item_code'";
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