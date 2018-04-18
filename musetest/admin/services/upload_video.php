<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$file_name = $_FILES['myFile']['name'];
		$file_size = $_FILES['myFile']['size'];
		$file_type = $_FILES['myFile']['type'];
		$temp_name = $_FILES['myFile']['tmp_name'];

  		$location =  '../../pic/bigmuse/test_mobile/';
			
		move_uploaded_file($temp_name, $location.$file_name);
		echo "https://www.anurak.in.th/thailue/pic/bigmuse/test_mobile/".$file_name;
	}else{
		echo "on video upload";
	}

?>