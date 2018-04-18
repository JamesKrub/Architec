<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Digital Archive | จดหมายเหตุดิจิตัล</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="../css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />

		<!-- PDF Preview -->

		<link href="css/examples.css" rel="stylesheet" type="text/css" />
		<style type="text/css">
		#pdf {
		width: 900px;
		height: 400px;
		margin: 2em auto;
		border: 10px solid #CCCCCC;
		}

		#pdf p {
		padding: 1em;
		}

		#pdf object {
		display: block;
		border: solid 1px #666;
		}
		</style>
		<script type="text/javascript" src="css/pdfobject.js"></script>

		<!-- End of PDF Preview --->

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="skin-blue">
                 <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1 class='text-center'>
						แก้ไขรายละเอียดเอกสาร
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Main row -->
                    <div class="row">
						<div class="col-md-12">

<!--------------   Process ----------------->

<?php
error_reporting(0);
include_once("../conf/connectdb.php.inc");
$picid = $_REQUEST['picid'];
$refcode = $_REQUEST['refcode'];
$editdetail = $_REQUEST['editdetail'];
$detail = $_REQUEST['detail'];

if($editdetail == 1)
{
echo "
<div id='alert-message' class='alert alert-success alert-dismissable'>
	<i class='fa fa-check'></i>
	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
	บันทึกข้อมูลเสร็จสิ้น
</div>";
	//echo "$detail";
	$sql = "UPDATE botanic_".$_REQUEST['type']."_pic SET `pic_detail`='$detail' WHERE `botanic_".$_REQUEST['type']."_pic`.`pic_id` =$picid";
	$query=mysql_query($sql) or die("Can't Query0");
}

//echo "$picid -- ";

$sql = "SELECT * FROM `botanic_".$_REQUEST['type']."_pic` WHERE pic_id = $picid ";
$query =mysql_query($sql) or die("Can't Query");
$num_rows=mysql_num_rows($query);
	for ($i=0; $i<$num_rows; $i++) {
		$result=mysql_fetch_array($query);
		$picid = $result[pic_id];
        $picname = $result[pic_name];
        $picdetail = $result[pic_detail];
    }

$filetype = explode(".", $result[pic_name]);
$filetype = $filetype[1];


	#echo "<img id='yourImageID' src ='../pic/big/$refcode/$picname'>";

echo "<div class='box box-primary'>  <!-- Start box-primary -->";
echo "<div class='box-body'>";
echo "<table width='100%'><tr><td align='center'>";
if(($filetype == 'jpg') or ($filetype =='JPG'))
	{
		echo "<img id='yourImageID' src ='../../../pic/big-".$_REQUEST['type']."/$refcode/$picname'>";
	}
else if($filetype =='mp4')
	{
		//echo "../pic/big/$refcode/$picname";
		echo "<video   controls>
  			  <source src='../pic/big/$refcode/$picname' type='video/mp4'>
  			  <object data='../pic/big/$refcode/$picname'  >
    		  </object>
			  </video>";
		echo "<br>";
	}
else if($filetype =='mp3')
	{
		//echo "$picname <br>";
				  //echo "<a href ='player.php?picname=$result3[pic_name]'>$result3[pic_name]</a>";
		echo "<audio width='200' controls>
  			  <source src='../pic/big/$refcode/$picname' type='audio/mpeg'>
  			  <embed src='../pic/big/$refcode/$picname' width='200'>
			  </audio>";
        echo "<br>";
	 }
else if($filetype =='pdf')
	 {
		//echo "$result3[pic_name] <br>";
		echo "<script type=\"text/javascript\">
			  window.onload = function (){
			  var myPDF = new PDFObject({
			  url: \"../pic/big/$refcode/$picname\",
			  pdfOpenParams: {
				navpanes: 1,
				view: \"FitV\",
				pagemode: \"thumbs\"
			    }
			  }).embed(\"pdf\");
			  };
			  </script>";
		echo "<div id='pdf'><a href='css/sample.pdf'>Click here to download the PDF</a></div>";
		//echo "<a href ='../pic/big/$refcode/$result3[pic_name]' target='_blank'><img src='../images/pdf-icon.png' width='150'></a>";
        echo "<br>";
	 }
echo "</td></tr></table>";
echo "</div>  <!-- End box-body -->";

echo "
<form class='form-horizontal' role='form' name='form1' method='post' action='picdetail-botanic.php?picid=$picid&refcode=$refcode&editdetail=1&type=".$_REQUEST['type']."'>
<input type='hidden' name='type' value='".$_REQUEST['type']."'>
	<div class='box-body'>  <!-- Start box-body -->
		<div class='form-group'>
		<div class='col-sm-12'>
			<textarea id='editor1' class='form-control' rows='5' name ='detail'>$picdetail</textarea>
		</div>
		</div>
	</div>  <!-- End box-body -->
	<div class='box-footer'> <!-- Start box-footer -->
		<input type='hidden' name='picid' value='$picid'>
		<button type='submit' name='submit' class='btn btn-primary center-block'>บันทึก</button>
	</div>  <!-- End box-footer -->
</form>
</div> <!-- End box-primary -->
";

?>

						</div>
                    </div><!-- /.row (main row) -->
                    </section>

        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="../js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../js/AdminLTE/demo.js" type="text/javascript"></script>
		<!-- CK Editor -->
        <script src="../js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <!-- page script -->
        <script type="text/javascript">
            $(function() {
				$("#alert-message").alert();
					window.setTimeout(function() { $("#alert-message").alert('close'); }, 3000);

				// Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
            });
        </script>

    </body>
</html>
