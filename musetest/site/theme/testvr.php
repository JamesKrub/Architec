

<?php
$allowed_types=array('jpg','JPG','jpeg','gif','png');
//$dir    = "../../pic/vr/H001/thumb_DSC00195_1024.jpg";
$dirs    = "../../pic/vr/H001/";
//echo "<img style='width:100px;' src='".$dir."'/>";   

$files1 = scandir($dirs);
foreach($files1 as $key=>$value){
    if($key>1){
        $file_parts = explode('.',$value);
        $ext = strtolower(array_pop($file_parts));
        if(in_array($ext,$allowed_types)){
            echo "<img style='width:100px;' src='".$dirs.$value."'/>&nbsp;"; 
            
        }
 
    }
}
echo "test";
echo "<img style='width:100px;' src='".$dirs.$value."'/>&nbsp;"; 
?>

