<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>พิพิธภัณฑ์อิเล็กทรอนิกส์</title>
</head>
<body>
<?php
error_reporting(0);
include_once("../conf/connectdb.php.inc");
?>
<?php
// get data
    $refcode=$_REQUEST['refcode'];
    $url = $_SERVER['HTTP_HOST']."/emuseum/emuseum/projects/objects/indexzoom.php?objref=$refcode";
    //$url = "http://www.nectec.or.th";
    //echo "refcode =$refcode";
    $sql = "select * from archive_object where obj_refcode ='$refcode'";
			$query=mysql_query($sql) or die("Can't Query");
			$num_rows=mysql_num_rows($query);
			for ($i=0; $i<$num_rows; $i++) {
         		$result=mysql_fetch_array($query);
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


$sql2 = "select * from archive_pic where obj_refcode = '$refcode' limit 0,1 ";
    $query2=mysql_query($sql2) or die("Can't Query");
    $num_rows2=mysql_num_rows($query2);
    if($num_rows2 == '0')
           {
           $pic = "blank.jpg";
           //echo "$pic <br>";
           }
     else
   {
     for ($j=0; $j<$num_rows2; $j++) {
         $result2=mysql_fetch_array($query2);


           //$pic = "Thumb_".$result2[pic_name];
           $pic = $result2[thumb_name];
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
echo "<td style='border:1px solid black;' colspan='2' align='center'><img src= '../../../pic/thumb/$refcode/$pic' width='300'></td>";
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
echo "</table>";
?>

</body>
</html>
