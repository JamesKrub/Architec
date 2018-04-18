<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>File Uploader</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" />

<style type="text/css">
body {
	margin: 10px;
	font: 62% Tahoma, Arial, sans-serif;
}
#main_container{
	font-size: 1.4em;
}
h2 {
	font-size: 2em;
	padding-bottom: 20px;
}
</style>

<link href="css/ui-lightness/jquery-ui-1.8.14.custom.css" rel="stylesheet" type="text/css" />
<link href="css/fileUploader.css" rel="stylesheet" type="text/css" />

<script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.8.14.custom.min.js" type="text/javascript"></script>
<script src="js/jquery.fileUploader.js" type="text/javascript"></script>

<?php
   $objectid = $_REQUEST['objectid'];
   $refcode = $_REQUEST['refcode'];
	 echo $refcode;
 ?>
<script language="JavaScript">
<!--
function refreshParent() {
  window.opener.location.href = '../edit.php?objectid=<?php echo $objectid;?>&refcode=<?php echo $refcode;?>';

  if (window.opener.progressWindow)

 {
    window.opener.progressWindow.close()
  }
  window.close();
}
//-->
</script>

</head>

<body>

<div id="main_container">
	<h2>วัตถุจัดแสดง</h2>
	<?php $dir = $_REQUEST['dir'];
		//$dir = date("Y-m-d_H-i-s");
	?>
	<form name='form1' action="<?php echo "upload.php?dir=$dir"; ?>" method="post" enctype="multipart/form-data">
		<input type="file" name="userfile" class="fileUpload" multiple>

		<button id="px-submit" type="submit">Upload</button>
		<button id="px-clear" type="reset">Clear</button>
	</form>
	<script type="text/javascript">
		jQuery(function($){
			$('.fileUpload').fileUploader();
		});
	</script>
</div>

<?php
//echo $dir;
//echo "<br>";
//echo $objectid;
//echo "<br>";
//echo $refcode;
/*
	$sql = "select * from archive_pic where obj_refcode = '$objectid' ";
	$query=mysql_query($sql) or die("Can't Query");
	$result=mysql_fetch_array($query);
	$num_rows=mysql_num_rows($query);

		if($num_rows2 =0 )
		{
			for ($i=0; $i<$num_rows; $i++) {
		}
		else
		{
			for ($i=0; $i<$num_rows; $i++) {
		}
*/
?>

<form name='form2'>
<button id="px-submit" type='submit'onclick=refreshParent();> ปิดการ Upload </button>
</form>
</body>
</html>
