<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>พิพิธภัณฑ์อิเล็กทรอนิกส์</title>
</head>
<body>
<?php
error_reporting(0);
include_once("../connect.php");
?>
<?php
// get data
    $refcode=$_REQUEST['refcode'];
    //$url = $_SERVER['HTTP_HOST']."/emuseum/emuseum/projects/objects/indexzoom.php?objref=$refcode";
    //$url = "http://www.nectec.or.th";
    //echo "refcode =$refcode";
    $sql = "select * from muse_object where obj_refcode ='$refcode'";
			$query=mysqli_query($link,$sql) or die("Can't Query");
			$num_rows=mysqli_num_rows($query);
			for ($i=0; $i<$num_rows; $i++) {
         		$result=mysqli_fetch_array($query);
			$objid = $result[obj_id] ;
			$refcode = $result[obj_refcode] ;
			$title = $result[obj_title] ;
			$datecreate = $result[obj_datecreate] ;
			$newdate = explode("-",$datecreate);
			$datecreate = $newdate[2]."-".$newdate[1]."-".$newdate[0];
			$level = $result[obj_level] ;
			$extent = $result[obj_extent] ;
			$creator = $result[obj_creator] ;
			$bio = $result[obj_bio] ;
			$dateacc = $result[obj_dateacc] ;
			$history = $result[obj_history] ;
			$acquis = $result[obj_acquis] ;
			$scope = $result[obj_scope] ;
			$appraisal = $result[obj_appraisal] ;
			$accruals = $result[obj_accruals] ;
			$arrangement = $result[obj_arrangement] ;
			$legal = $result[obj_legal] ;
			$condition = $result[obj_condition] ;
			$copyright = $result[obj_copyright] ;
			$lang = $result[obj_lang] ;
			$physicals= $result[obj_physicals] ;
			$aids= $result[obj_aids] ;
			$location = $result[obj_location] ;
			$existence = $result[obj_existence] ;
			$related = $result[obj_related] ;
			$associated = $result[obj_associated] ;
			$pubnote = $result[obj_pubnote] ;
			$note= $result[obj_note] ;
			$date = $result[obj_date] ;
			$category = $result[obj_category] ;
			$access= $result[obj_access] ;
			$keyword = $result[obj_keyword] ;
			$display = $result[obj_display] ;
			$locationdisplay = $result[obj_location_display];
			$existencedisplay = $result[obj_existence_display];
			$creatordisplay = $result[obj_creator_display];
			$biodisplay = $result[obj_bio_display];
			$dateaccdisplay = $result[obj_dateacc_display];
			$historydisplay = $result[obj_history_display];
			$acquisdisplay = $result[obj_acquis_display];
         		}


$sql2 = "select * from muse_pic where obj_refcode = '$refcode' AND obj_cover = 1 limit 0,1  ";
    $query2=mysqli_query($link,$sql2) or die("Can't Query");
    $num_rows2=mysqli_num_rows($query2);
    if($num_rows2 == '0')
           {
           $pic = "../../../pic/thumbmuse/blank.jpg";
           //echo "$pic <br>";
           }
     else
   {
     for ($j=0; $j<$num_rows2; $j++) {
         $result2=mysqli_fetch_array($query2);


           //$pic = "Thumb_".$result2[pic_name];
           $objref =$result2['obj_refcode'];
           $refcode = preg_replace('/[^a-z0-9\_\- ]/i', '', $objref);
           $pic = "../../../pic/thumbmuse/$refcode/$result2[thumb_name]";
           //echo "$pic <br> ";

            }
         }

         		//echo "$title <br>";
         		//echo "<img src= '../pic/thumb/$pic' width='300'>";
echo "<table width='100%'>";
echo "<tr><td align='right'><a href=\"javascript:window.print()\"><img src='../images/printer_icon.gif'></a></td></tr>";
echo "</table>";

echo "<table width='100%' style='border:1px solid black;border-collapse:collapse;'>";
echo "<tr>";
echo "<td style='border:1px solid black;' colspan='2' align='center'>
      <img src= '$pic' width='300'></td>";
echo "</tr>";
echo "<tr>";
echo "<td style='border:1px solid black;' width='100'>รหัสวัตถุ </td>";
echo "<td style='border:1px solid black;'>$refcode</td>";
echo "</tr>";
echo "<tr>";
echo "<td style='border:1px solid black;'>ชื่อวัตถุ </td>";
echo "<td style='border:1px solid black;'>$title</td>";
echo "</tr>";
echo "<tr>";
echo "<td style='border:1px solid black;'>ลักษณะ </td>";
echo "<td style='border:1px solid black;'>$physicals</td>";
echo "</tr>";
echo "<tr>";
echo "<td style='border:1px solid black;'>ขนาด </td>";
echo "<td style='border:1px solid black;'>$extent</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='border:1px solid black;'>สถานที่จับเก็บต้นฉบับ </td>";
echo "<td style='border:1px solid black;'>$location</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='border:1px solid black;'>สถานที่จัดเก็บสำเนา </td>";
echo "<td style='border:1px solid black;'>$existence</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='border:1px solid black;'> ชื่อเจ้าของ </td>";
echo "<td style='border:1px solid black;'>$creator</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='border:1px solid black;'> ประวัติเจ้าของ </td>";
echo "<td style='border:1px solid black;'> $bio  </td>";
echo "</tr>";


echo "<tr>";
echo "<td style='border:1px solid black;'> ประวัติวัตถุจัดแสดง </td>";
echo "<td style='border:1px solid black;'>$history</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='border:1px solid black;'> แหล่งที่ได้มา/โอนย้าย </td>";
echo "<td style='border:1px solid black;'>$acquis</td>";
echo "</tr>";

echo "<tr>";
echo "<td style='border:1px solid black;'> ช่วงเวลาการสะสม </td>";
echo "<td style='border:1px solid black;'>$dateacc</td>";
echo "</tr>";


echo "</table>";
echo "<br>";
echo "<li><a href=\"#\" onclick=\"window.open('createcard.php?objectid=$result[obj_id]&refcode=$result[obj_refcode]', 'newwindow', 'width=600, height=550'); return false;\"><img src='images/card_icon.png' width='30'><input type='button' value='less'></a></li>";
?>

</body>
</html>
