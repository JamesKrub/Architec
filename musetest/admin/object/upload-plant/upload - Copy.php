<?php
include("classes/easy_upload/upload_class.php"); //classes is the map where the class file is stored
	
$upload = new file_upload();
$dir = $_REQUEST['dir'];
//$dir = "test";
$path = "../pic/big/".$dir;

if (!file_exists($path)) {
    mkdir($path, 0775);
    echo "The directory $dir was successfully created.";
    //exit;
} else {
    echo "The directory $dir exists.";
}

//mkdir($path, 7777);
//$upload->upload_dir = 'uploads/'.$dir.'/';
$upload->upload_dir = '../pic/big/'.$dir.'/';
$upload->extensions = array('.png','.jpg','.jpeg','.zip','.pdf','.mp4','.mp3','.tif'); // specify the allowed extensions here
$upload->rename_file = true;


if(!empty($_FILES)) {
	$upload->the_temp_file = $_FILES['userfile']['tmp_name'];
	$upload->the_file = $_FILES['userfile']['name'];
	$upload->http_error = $_FILES['userfile']['error'];
	$upload->do_filename_check = 'y'; // use this boolean to check for a valid filename
	if ($upload->upload()){
		
		echo '<div id="status">success</div>';
		echo '<div id="message">'. $upload->file_copy .' Successfully Uploaded</div>';
		//return the upload file
		echo '<div id="uploadedfile">'. $upload->file_copy .'</div>';
		
	} else {
		
		echo '<div id="status">failed</div>';
		echo '<div id="message">'. $upload->show_error_string() .'</div>';
		
	}
}

/// ADD ALL PICS To DB //
include('../conf/connectdb.php.inc');

$sql = " INSERT INTO `archive_pic` ( `pic_id` , `pic_name` , `obj_refcode` ) VALUES ('' , '$upload->file_copy', '$dir');";
$query=mysql_query($sql) or die("Can't Query"); 


/////////////////////////
?>