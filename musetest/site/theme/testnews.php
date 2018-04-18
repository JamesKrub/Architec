<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Example of Bootstrap 3 Thumbnails</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
</style>
</head> 
<body>
<?php    
   ini_set('display_errors', 1);
   error_reporting(~0);

   //กำหนดค่าการเชื่อมต่อ DB
	$host = "emuseum_db";
	$username = "root";
	$dbname = "culture_thailue";
	//$password2 = "";	
	$password = "heavygeese24"; 
	
	date_default_timezone_set('Asia/Bangkok');	

   $conn = mysqli_connect($host,$username,$password,$dbname);
   mysqli_query($conn, "SET NAMES utf8");    
?>  
    
<div class="bs-example">
   <div class="container">
        <div class="row">
        <?php 
   /* Get data. */

   $sql3 = "select * from archive_news";
   $query3 = mysqli_query($conn,$sql3);
$i=1;
while($result3 = mysqli_fetch_array($query3,MYSQLI_ASSOC))  
    { 
?>    
            <div class="col-xs-6">
                <div class="thumbnail">
                    
                    <div class="caption">
                        <h3><?php echo $result3['news_title'];?></h3>
                        <p><?php echo $result3['news_detail'];?></p>
<!--                        <p><a href="#" class="btn btn-primary">Share</a> <a href="#" class="btn btn-default">Download</a></p>-->
                    </div>
                </div>
            </div>
<? }
$i++; ?>            
<!--
            <div class="col-xs-6">
                <div class="thumbnail">
                    <img src="/examples/images/avatar.jpg" alt="Sample Image">
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula.</p>
                        <p><a href="#" class="btn btn-primary">Share</a> <a href="#" class="btn btn-default">Download</a></p>
                    </div>
                </div>
            </div>
-->
        </div>
    </div>     
</div>
</body>
</html>                            