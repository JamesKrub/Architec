<?php
include("classes/easy_upload/upload_class.php"); //classes is the map where the class file is stored

$upload = new file_upload();
$dir = $_REQUEST['dir'];
$objid = $_REQUEST['objectid'];
$newdir = preg_replace('/[^a-z0-9\_\- ]/i', '', $dir);
//    $newrefcode = explode("/",$refcode);
//    if(!isset($newrefcode[2])) {
//		$newrefcode[2] = "";
//	}
//	if(!isset($newrefcode[1])) {
//		$newrefcode[1] = "";
//	}
//    $refcode = $newrefcode[0]."_".$newrefcode[1]."_".$newrefcode[2];
//$dir = "test";

echo "xxx $newdir";
$path = "../../../pic/muse_upload/".$newdir;
$thumbpath = "../../../pic/muse_upload/".$newdir;
$thumbpath2 = "../../../pic/muse_upload2/".$newdir;

if (!file_exists($path)) {
    mkdir($path, 0775);
	mkdir($thumbpath, 0775);
	mkdir($thumbpath2, 0775);
    echo "The directory $dir was successfully created.";
    //exit;
} else {
    echo "The directory $dir exists.";
}

//mkdir($path, 7777);
//$upload->upload_dir = 'uploads/'.$dir.'/';
$max_size = 10000*10000; // the max. size for uploading
$upload->upload_dir = '../../../pic/muse_upload/'.$newdir.'/';
$upload->extensions = array('.png','.jpg','.jpeg','.zip','.pdf','.mp4','.mp3','.tif'); // specify the allowed extensions here
$upload->rename_file = true;

mkdir($thumbpath, 0775);
if(!empty($_FILES)) {
	$upload->the_temp_file = $_FILES['userfile']['tmp_name'];
	$upload->the_file = $_FILES['userfile']['name'];

///////////////////////////////////////////////////////////
	copy($_FILES['userfile']['tmp_name']);
		$width=270; //*** Fix Width & Heigh (Autu caculate) ***//
		$size=GetimageSize($upload->the_temp_file);
		$height=round($width*$size[1]/$size[0]);
		//$height=220;
		$images_orig = ImageCreateFromJPEG($upload->the_temp_file);
		$photoX = ImagesX($images_orig);
		$photoY = ImagesY($images_orig);
		$images_fin = ImageCreateTrueColor($width, $height);
		ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
		$upload->the_file = "Thumb_".Date("Y-m-d_H-i-s")."_".$_FILES['userfile']['name'];
		//$upload->the_file = "Thumb220_".$upload->file_copy.$upload->get_extension($upload->the_file);
		ImageJPEG($images_fin,"$thumbpath/".$upload->the_file);
		ImageDestroy($images_orig);
		ImageDestroy($images_fin);


	copy($_FILES['userfile']['tmp_name']);
		$width=800; //*** Fix Width & Heigh (Autu caculate) ***//
		$size=GetimageSize($upload->the_temp_file);
		$height=round($width*$size[1]/$size[0]);
		//$height=220;
		$images_orig = ImageCreateFromJPEG($upload->the_temp_file);
		$photoX = ImagesX($images_orig);
		$photoY = ImagesY($images_orig);
		$images_fin = ImageCreateTrueColor($width, $height);
		ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
		$upload->the_file2 = "Thumb2_".Date("Y-m-d_H-i-s")."_".$_FILES['userfile']['name'];
		//$upload->the_file2 = "Thumb2_".$upload->file_copy.$upload->get_extension($upload->the_file);
		ImageJPEG($images_fin,"$thumbpath2/".$upload->the_file2);
		ImageDestroy($images_orig);
		ImageDestroy($images_fin);
///////////////////////////////////////////////////////////

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

$sql = " INSERT INTO `muse_upload` (`bpu_id`,`bpu_file`,`bpu_upload_time`,`obj_id` ) VALUES ('' , '$upload->file_copy', '$upload->the_file' , CURRENT_TIMESTAMP , '$objid');";
$query=mysqli_query($sql) or die("Can't Query");


/////////////////////////
?>
