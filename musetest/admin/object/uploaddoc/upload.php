<?php
include("classes/easy_upload/upload_class.php"); //classes is the map where the class file is stored

$upload = new file_upload();
$dir = $_REQUEST['dir'];
$newdir = preg_replace('/[^a-z0-9\_\- ]/i', '', $dir);

//$dir = "test";
$path = "../../../pic/big/".$newdir;
$thumbpath = "../../../pic/thumb/".$newdir;
$thumbpath2 = "../../../pic/thumb2/".$newdir;
//echo "xxx $newdir";
//$path = "../../../pic/bigmuse/".$newdir;
//$thumbpath = "../../../pic/thumbmuse/".$newdir;
//$thumbpath2 = "../../../pic/thumbmuse2/".$newdir;

if (!file_exists($path)) {
    mkdir($path, 0777);
	mkdir($thumbpath, 0777);
	mkdir($thumbpath2, 0777);
    echo "The directory $dir was successfully created.";
    //exit;
} else {
    echo "The directory $dir exists.";
}

//mkdir($path, 7777);
//$upload->upload_dir = 'uploads/'.$dir.'/';
$max_size = 10000*10000; // the max. size for uploading
$upload->upload_dir = '../../../pic/big/'.$newdir.'/';
$upload->extensions = array('.png','.jpg','.JPG','.jpeg','.zip','.pdf','.mp4','.mp3','.tif'); // specify the allowed extensions here
$upload->rename_file = true;

mkdir($thumbpath, 0777);
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
		$upload->the_file2 = "Thumb_".Date("Y-m-d_H-i-s")."_".$_FILES['userfile']['name'];
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
include('connect.php');

//$sql = " INSERT INTO `archive_pic` ( `pic_id` , `pic_name` , `thumb_name` , `thumb_name2` , `obj_refcode` ) VALUES ('' , '$upload->file_copy', '$upload->the_file' , '$upload->the_file2' , '$dir');";
//$sql = " INSERT INTO `archive_pic` ( `pic_name` , `thumb_name` , `thumb_name2` , `obj_refcode` )
//VALUES ('$upload->file_copy', '$upload->the_file' , '$upload->the_file2' , '$dir');";
//$query=mysql_query($sql) or die("Can't Query");


$sql = " INSERT INTO `archive_pic` (`pic_name`, `thumb_name`, `thumb_name2`, `obj_id`, `obj_refcode`, `obj_cover`, `pic_detail`, `listorder`, `pic_open`)
VALUES ('$upload->file_copy', '$upload->the_file', '$upload->the_file2', '585507', '$dir', '0', '0', '0', '0');";
$query = mysqli_query($link,$sql) or die("Can't Query");


/////////////////////////
?>
