<?php
    include("../../connect.php");
    
    if($_REQUEST['con'] == 'load'){
        
        $data = array();
        $photoID =  $_REQUEST['photoID'];

        $sql = "SELECT * FROM `architec_tagging_pic` WHERE archPic_Id = $photoID";
        $query = mysqli_query($link,$sql) or die("Can't Select tagging picture.");	
        $num_rows = mysqli_num_rows($query);
        
        // while($result = mysql_fetch_assoc($results)) {
        while($result = mysqli_fetch_array($query)) {  
            $vir = [];  
            $vir['id'] = $result['archTag_tagId'];
            $vir['x'] = $result['archTag_xPos'];
            $vir['y'] = $result['archTag_yPos'];
            $vir['width'] = $result['archTag_Width'];
            $vir['height'] = $result['archTag_Height'];
            $vir['message'] = $result['archTag_Message'];
            array_push($data, $vir);
        }  
        echo json_encode($data);

    } else if ($_REQUEST['con'] == 'save'){

        $taggingId =  $_REQUEST['id'];
        $xPos =  $_REQUEST['x'];
        $yPos =  $_REQUEST['y'];
        $width =  $_REQUEST['width'];
        $height =  $_REQUEST['height'];
        $message =  $_REQUEST['message'];
        $photoID =  $_REQUEST['photoID'];
        

        $sql = "INSERT INTO `architec_tagging_pic` (`archTag_Id`, `archTag_xPos`, `archTag_yPos`, `archTag_Width`
                        , `archTag_Height`, `archTag_Message`, `archPic_Id`, `archTag_tagId`
                        , `archTag_Level`)
                VALUES (NULL, $xPos, $yPos, $width
                        , $height, '$message', $photoID, $taggingId
                        , '')";
        print_r( $sql);
        mysqli_query($link,$sql) or die("Can't Insert tagging picture.");	
        echo json_encode('save');
    } else if ($_REQUEST['con'] == 'del'){

        $tagId =  $_REQUEST['id'];
        $picId =  $_REQUEST['picId'];

        $sql = "DELETE FROM `architec_tagging_pic` WHERE archPic_Id = $picId and archTag_tagId = '$tagId'";
        mysqli_query($link,$sql) or die("Can't Delete picture. ".$sql);
        echo json_encode('delete');
        
    } else if ($_REQUEST['con'] == 'setId'){

        $picId =  $_REQUEST['picId'];
        
        $sql = "SELECT archTag_tagId FROM `architec_tagging_pic`
                WHERE archPic_Id = $picId
                ORDER BY archTag_tagId DESC LIMIT 1";
        $query = mysqli_query($link,$sql) or die("Can't Select highest tag id.");	
        $result = mysqli_fetch_array($query);
        
        
        if( isset($result) ){
            echo json_encode($result['archTag_tagId']);
        } else {
            echo json_encode(0);
        }
    } 
    
?>