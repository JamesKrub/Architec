<?PHP
//########################### Start Variable Declarations  ###########################

$status = 0; //(int) : รหัส สถานะ  
$status_description = array(0 => "", 1 => "Successful", 2 => "input Error", 3 => "Query Error", 4 => "Not Found Museum"); //(string) : คำอธิบายสถานะ
//*หมายเหตุ 1 Successful 2 input Error 3 Query Error 4 Not Found Museum

$museum_code = ""; //(string) :รหัสพิพิธภัณฑ์ 
if (!empty($_GET["museum_code"])) 
{
    $museum_code = $_GET["museum_code"];
}

//$museum_name = "";
$thumbnail = ""; //(string): link รูปตัวแทน
$museum_infos = array(
    "museum_name" => "",
 	"language" => "", //(string): ภาษา
 	"description" => "", //(string): คำอธิบาย
// 	"address" => "", //(string): ที่อยู่
// 	"open_date" => "", //(string): วัน เวลา เปิด
// 	"close_date" => "" //(string): วัน เวลา ปิด
);
$images = array(
	"name" => "", //(string) : ชื่อของรูป
	"description" => "", //(string) : รายละเอียดของรูปภาพ
	"url" => "" //(string) : link รูป
);
$address = ""; //(string): ที่อยู่
$open_date = ""; //(string): วัน เวลา เปิด
$close_date = ""; //(string): วัน เวลา ปิด
$latitude = 0.0; //(float)
$longitude = 0.0; //(float)
$website = ""; //(string) :  เว็บไซต์หลัก
$address = ""; //(string) เลขที่บ้าน
$tambon = ""; //(string) ตำบล
$ampher = ""; //(string):อำเภอ
$province = ""; //(string):จังหวัด
//- region(string):ภูมิภาค
$country = ""; //(string):ประเทศ
$zipcode = ""; //(string):รหัสไปรษณ๊ย์
$tel = ""; //(string) เบอร์โทร
$email = ""; //(string) อีเมลสำหรับติดต่อ
$open_date = ""; //(string) : วันและเวลาที่เปิดให้บริการ
//- close_date (string) : วันและเวลาที่ปิดให้บริการ
//$server_path = $_SERVER['SERVER_ADDR']; //(string):ที่อยู่ของ Server 'SERVER_ADDR' or 'SERVER_NAME'
//-ssid(string): ชื่อ wifi
$museum_status = 0; //(int) : สถานะ 1=open,0 =close
$type = ""; //(string): e-museum,walk-in-museum***
$fee = ""; //(string) : ค่าบริการ
$bg_update = ""; //(string) : วันที่อัพเดทข้อมูล

//At function $resultJSON must use as Global variable ($GLOBALS['resultJSON'][key])
$resultJSON = array(
    "status" => $status,
    "status_description" => $status_description[$status],
    "museum_code" => $museum_code,
    "museum_name" => $museum_name,
    "thumbnail" => $thumbnail,
    "museum_infos" => $museum_infos,
    "images" => $images,
    "latitude" => $latitude,
    "longitude" => $longitude,
    "website" => $website,
    "address" => $address,
    "tambon" => $tambon,
    "ampher" => $ampher,
    "province" => $province,
    "country" => $country,
    "zipcode" => $zipcode,
    "tel" => $tel,
    "email" => $email,
    "open_date" => $open_date,
    //"server_path" => $server_path
    "museum_status" => $museum_status,
    "type" => $type,
    "fee" => $fee,
    "bg_update" => $bg_update);

//########################### End   Variable Declarations  ###########################

//########################### Start Check Parameter ###########################

if(IsNullOrEmptyString($museum_code))
{
    $status = 2; //input Error
    SetJSONResult("status", $status);
    SetJSONResult("status_description", $status_description[$status]);
    
    header("Content-Type: application/json; charset=UTF-8");
    echo json_encode($resultJSON, JSON_UNESCAPED_UNICODE);

    return $resultJSON;
}

//########################### End   Check Parameter ###########################

//########################### Start Connect&Query MySQL ###########################
$servername = "emuseum_db";
$username = "root";
$password = "heavygeese24";
$dbname = "culture_api";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

// Change character set to utf8
mysqli_set_charset($conn,"utf8");

$sql = "SELECT museum_code, museum_name, description, open_date, latitude, longitude, address, tambon, ampher, province, zipcode, tel, email, website, thumbnail, bg_picshow, bg_update
        FROM museum";

try{$result = $conn->query($sql);} 
catch(Exception $e)
{
    //echo 'Caught exception: '. $e->getMessage();

    $status = 3; //Query Error
    SetJSONResult("status", $status);
    SetJSONResult("status_description", $status_description[$status]);

    header("Content-Type: application/json; charset=UTF-8");
    echo json_encode($resultJSON, JSON_UNESCAPED_UNICODE);
    
    return $resultJSON;
}

if ($result->num_rows > 0) 
{
    $status = 1; //Successful
    SetJSONResult("status", $status);
    SetJSONResult("status_description", $status_description[$status]);
    // output data of each row
    while($row = $result->fetch_assoc())  
    {
        //echo "museum_code: " . $row["museum_code"]. " - museum_name: " . $row["museum_name"]. "<br>";
        SetJSONResult("museum_code", $row["museum_code"]);
        SetJSONResult("museum_name", $row["museum_name"]);
        
        $museum_infos["language"] = "th-TH";
        $museum_infos["description"] = $row["description"];
        $museum_infos["address"] = $row["address"]." ".
                                   $row["tambon"]." ".
                                   $row["ampher"]." ".
                                   $row["province"]." ".
                                   $row["zipcode"];
        $museum_infos["open_date"] = $row["open_date"];
        SetJSONResult("museum_infos", $museum_infos);
        
        SetJSONResult("open_date", $row["open_date"]);
        SetJSONResult("latitude", $row["latitude"]);
        SetJSONResult("longitude", $row["longitude"]);
        SetJSONResult("address", $row["address"]);
        SetJSONResult("tambon", $row["tambon"]);
        SetJSONResult("ampher", $row["ampher"]);
        SetJSONResult("province", $row["province"]);
        SetJSONResult("country", "Thailand");
        SetJSONResult("zipcode", $row["zipcode"]);
        SetJSONResult("tel", $row["tel"]);
        SetJSONResult("email", $row["email"]);
        SetJSONResult("website", $row["website"]);
        SetJSONResult("thumbnail", $row["thumbnail"]);
        SetJSONResult("bg_update", $row["bg_update"]);
        //SetJSONResult("", $row["bg_picshow"]);
        SetJSONResult("museum_status", 1);
        SetJSONResult("type", "e-museum");
        SetJSONResult("fee", "0");
    }

} 
else 
{
    $status = 4; //Not Found Museum
    SetJSONResult("status", $status);
    SetJSONResult("status_description", $status_description[$status]);
    //echo "0 results";
}
$conn->close();

//########################### End   Connect&Query MySQL ###########################

//########################### Start JSON Encode ###########################

header("Content-Type: application/json; charset=UTF-8");
//echo json_encode($resultJSON);

echo json_encode($resultJSON, JSON_UNESCAPED_UNICODE);

//########################### End   JSON Encode ###########################

return $resultJSON;

?>

<?php
//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< PHP Function >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

function IsNullOrEmptyString($question)
{
    return (!isset($question) || trim($question)==='');
}

function SetJSONResult($key, $value)
{
    $GLOBALS['resultJSON'][$key] = $value;
}
?>