<?php
error_reporting(0);
include_once("../connect.php");
?>
<html lang="en">

	<head>

		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>
<body>
<?php
/*

 * PHP QR Code encoder

 *

 * Exemplatory usage

 *

 * PHP QR Code is distributed under LGPL 3

 * Copyright (C) 2010 Dominik Dzienia <deltalab at poczta dot fm>

 *

 * This library is free software; you can redistribute it and/or

 * modify it under the terms of the GNU Lesser General Public

 * License as published by the Free Software Foundation; either

 * version 3 of the License, or any later version.

 *

 * This library is distributed in the hope that it will be useful,

 * but WITHOUT ANY WARRANTY; without even the implied warranty of

 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU

 * Lesser General Public License for more details.

 *

 * You should have received a copy of the GNU Lesser General Public

 * License along with this library; if not, write to the Free Software

 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA

 */



    echo "<h1>สร้าง QR Code</h1><hr/>";


    //set it to writable location, a place for temp generated PNG files

    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;



    //html PNG location prefix

    $PNG_WEB_DIR = 'temp/';


    //require('../connect.php');
    include "qrlib.php";



    //ofcourse we need rights to create temp dir

    if (!file_exists($PNG_TEMP_DIR))

        mkdir($PNG_TEMP_DIR);




    $filename = $PNG_TEMP_DIR.'test.png';



    //processing form input

    //remember to sanitize user input in real-life solution !!!

    $errorCorrectionLevel = 'L';

    if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))

        $errorCorrectionLevel = $_REQUEST['level'];



    $matrixPointSize = 4;

    if (isset($_REQUEST['size']))

        $matrixPointSize = min(max((int)$_REQUEST['size'], 1), 10);




    if (isset($_REQUEST['data'])) {



        //it's very important!

        if (trim($_REQUEST['data']) == '')

            die('data cannot be empty! <a href="?">back</a>');


        // user data

        $filename = $PNG_TEMP_DIR.'test'.md5($_REQUEST['data'].'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';

        QRcode::png($_REQUEST['data'], $filename, $errorCorrectionLevel, $matrixPointSize, 2);


    } else {



        //default data
        //echo 'You can provide data in GET parameter: <a href="?data=like_that">like that</a><hr/>';
        QRcode::png('PHP QR Code :)', $filename, $errorCorrectionLevel, $matrixPointSize, 2);


    }


    //display generated file
    echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" /><hr/>';

    // get data
    $refcode=$_REQUEST['refcode'];
   // $url = $_SERVER['HTTP_HOST']."/emuseum/emuseum/projects/objects/indexzoom-mobile.php?objref=$refcode";
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $myurl = explode("/",$url);
    //$url = $myurl[0]."/".$myurl[1]."/archive/site/museshowcat2.php?objref=$refcode ";
    $url = $myurl[0]."/".$myurl[1]."/site/theme/muse_show_cat1.php?refcode=$refcode";
    //$url = "http://www.nectec.or.th";
    //echo "refcode =$refcode";
    $sql = "select * from muse_object where obj_refcode ='".$refcode."'";
			$query=mysqli_query($link,$sql) or die("Can't Querdy");
			$num_rows=mysqli_num_rows($query);
			for ($i=0; $i<$num_rows; $i++) {
         		$result=mysqli_fetch_array($query);
         		$objname = $result[obj_title];
         		$objhistory = $result[obj_history];
         		$objphysicals = $result[obj_physicals];
         		//echo "$objname";
         		}

    //config form

    echo "<form action=\"createqr.php?refcode=$refcode\" method=\"post\">

        <!--Data:&nbsp;<input name=\"data\" value=\"$objname\" style=\"width: 500px; height:20px; padding: 2px; border: 1px solid black\"/>&nbsp;-->
        ข้อมูล:&nbsp;<textarea name='data' rows='4' cols='50'>$objname $url</textarea>
        <br>
        คุณภาพไฟล์ (ECC):&nbsp;<select name=\"level\">

            <option value=\"L\"'.(($errorCorrectionLevel=='L')?' selected':'').'>L - smallest</option>

            <option value=\"M\"'.(($errorCorrectionLevel=='M')?' selected':'').'>M</option>

            <option value=\"Q\"'.(($errorCorrectionLevel=='Q')?' selected':'').'>Q</option>

            <option value=\"H\"'.(($errorCorrectionLevel=='H')?' selected':'').'>H - best</option>

        </select>&nbsp;
       <br>
        ขนาด:&nbsp;<select name=\"size\">";



    for($i=1;$i<=10;$i++)

        echo '<option value="'.$i.'"'.(($matrixPointSize==$i)?' selected':'').'>'.$i.'</option>';



    echo '</select>&nbsp;
      <br>
        <input type="submit" value="สร้าง QR CODE"></form><hr/>';



    // benchmark
 //   QRtools::timeBenchmark();
