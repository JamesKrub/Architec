<?
///////////////////////////////////////////////////////////
	$temp = explode(".", $_FILES["userfile"]["name"]);
	$ext = end($temp);
	copy($_FILES['userfile']['tmp_name']);
	$width=270;
	$height=220;
	if($ext=="jpg" || $ext=="jpeg" || $ext=="png" || $ext=="gif"){  
		if($ext=="jpg" || $ext=="jpeg"){  
			$images_orig = imagecreatefromjpeg($upload->the_temp_file);//ฟังก์ชั่นสำหรับ create file ตามนามสกุลไฟล์  
		}  
		else if($ext=="png"){  
			$images_orig = imagecreatefrompng($upload->the_temp_file);  
		}  
		else if($ext=="gif"){  
			$images_orig = imagecreatefromgif($upload->the_temp_file);  
		}
	$photoX = ImagesX($images_orig);
	$photoY = ImagesY($images_orig);
	$images_fin = ImageCreateTrueColor($width, $height);
	ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
	$upload->the_file = "thumb_".Date("Y-m-d_H-i-s").$upload->get_extension($upload->the_file);
	ImageJPEG($images_fin,"$thumbpath/".$upload->the_file);
	ImageDestroy($images_orig);
	ImageDestroy($images_fin);
	}
///////////////////////////////////////////////////////////
?>