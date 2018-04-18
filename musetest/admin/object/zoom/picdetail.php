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
include "../connect.php";
$picid = $_REQUEST['picid'];
$refcode = $_REQUEST['refcode'];
$editdetail = $_REQUEST['editdetail'];
$detail = $_REQUEST['detail'];
// $objref =$result3['obj_refcode'];
//$refcode = preg_replace('/[^a-z0-9\_\- ]/i', '', $refcode);
if($editdetail == 1)
{
echo "
<div id='alert-message' class='alert alert-success alert-dismissable'>
	<i class='fa fa-check'></i>
	<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
	บันทึกข้อมูลเสร็จสิ้น
</div>";
	//echo "$detail";
	$sql = "UPDATE `muse_pic` SET `pic_detail`='$detail' WHERE `muse_pic`.`pic_id` = $picid";
	$query= mysqli_query($link,$sql) or die("Can't Query0");
}

//echo "$picid -- ";

$sql = "SELECT * FROM `muse_pic` WHERE pic_id = $picid ";
$query =mysqli_query($link,$sql) or die("Can't Query");
$num_rows=mysqli_num_rows($query);
	for ($i=0; $i<$num_rows; $i++) {
		$result=mysqli_fetch_array($query);
		$picid = $result[pic_id];
        $picname = $result[pic_name];
//        $picname = $result['thumb_name'];
        $picdetail = $result[pic_detail];
        $refcode =$result['obj_refcode'];
        $foldref =$result['folder_refcode'];  
        //$refcode = preg_replace('/[^a-z0-9\_\- ]/i', '', $refcode);
    }

$filetype = explode(".", $result[pic_name]);
$filetype = $filetype[1];

 $data = $refcode ;
function ConvertTH_EN($data) 
{	
    $CovertedText = "";
    $CharacterTable = array("ก" => "k", 
                            "ข" => "kh",
                            "ฃ" => "kh",
                            "ค" => "kh",
                            "ฅ" => "kh",
                            "ฆ" => "kh",
                            "ง" => "ng",
                            "จ" => "ch",
                            "ฉ" => "ch",
                            "ช" => "ch",
                            "ซ" => "s",
                            "ฌ" => "ch",
                            "ญ" => "y",
                            "ฎ" => "d",
                            "ฏ" => "t",
                            "ฐ" => "th",
                            "ฑ" => "th",
                            "ฒ" => "th",
                            "ณ" => "n",
                            "ด" => "d",
                            "ต" => "t",
                            "ถ" => "th",
                            "ท" => "th",
                            "ธ" => "th",
                            "น" => "n",
                            "บ" => "b",
                            "ป" => "p",
                            "ผ" => "ph",
                            "ฝ" => "f",
                            "พ" => "ph",
                            "ฟ" => "f",
                            "ภ" => "ph",
                            "ม" => "m",
                            "ย" => "y",
                            "ร" => "r",
                            "ล" => "l",
                            "ว" => "w",
                            "ศ" => "s",
                            "ษ" => "s",
                            "ส" => "s",
                            "ห" => "h",
                            "ฬ" => "l",
                            "อ" => "o",
                            "ฮ" => "h", 
                            "๑" => "1",
                            "๒" => "2",
                            "๓" => "3",
                            "๔" => "4",
                            "๕" => "5",
                            "๖" => "6",
                            "๗" => "7",
                            "๘" => "8",
                            "๙" => "9",
                            "๐" => "0",);

    //echo "Original Input : ".$data."<br>";

    $data = trim($data);
    $data = preg_replace('/[^A-Za-z0-9ก-๙\\s]/', '', $data);

    //echo "New Input : ".$data."<br>";

    $charArray;
    $length = mb_strlen($data, 'utf-8');
    $strlen = $length;
    
    //echo $strlen."<br>"; 
    
    while ($strlen) 
    { 
        $charArray[] = mb_substr($data,0,1,"UTF-8"); //to Character Array
        $data = mb_substr($data,1,$strlen,"UTF-8"); //decrease string by 1
        $strlen = mb_strlen($data); //decrease strlen by 1
    }
    
    //print_r($charArray);
    //echo "<br>";

    for ($i=0; $i < $length; $i++) 
    {
        if(strcmp('', preg_replace('/[^ก-๙]/', '', $charArray[$i])) == 0)
        {
            $CovertedText .= $charArray[$i];
        }
        else
        {
            $CovertedText .= $CharacterTable[$charArray[$i]];
           // echo $charArray[$i]." to ".$CharacterTable[$charArray[$i]]."<br>";
        }            
    }

    //echo "Output : ".strtolower($CovertedText)."<br>";
    //echo mb_strlen($CovertedText, 'utf-8');

    return strtolower($CovertedText);
}                           

	#echo "<img id='yourImageID' src ='../pic/big/$refcode/$picname'>";
$ref = ConvertTH_EN($data);
echo "<div class='box box-primary'>  <!-- Start box-primary -->";
echo "<div class='box-body'>";
echo "<table width='100%'><tr><td align='center'>";
if(($filetype == 'jpg') or ($filetype =='jpeg') or ($filetype =='png') or ($filetype =='JPG') or ($filetype =='PNG') or ($filetype =='JPEG'))
	{
  // echo "bigmuse/$foldref/$result3[pic_name]";
		echo "<img id='yourImageID' src ='../../../pic/bigmuse/$foldref/$result[pic_name]'>";
	}
else if($filetype =='mp4' or $filetype =='MP4')
	{
		//echo "../pic/big/$refcode/$picname";
		echo "<video   controls>
  			  <source src='../pic/big/$refcode/$picname' type='video/mp4'>
  			  <object data='../pic/big/$refcode/$picname'  >
    		  </object>
			  </video>";
		echo "<br>";
	}
else if($filetype =='mp3' or $filetype =='MP3')
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
<form class='form-horizontal' role='form' name='form1' method='post' action='picdetail.php?picid=$picid&refcode=$refcode&editdetail=1'>
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
