
<!------------------ End Get Session ------------------>
<?php

# Redirect HTTPS to HTTP
//RewriteCond %{HTTP:X-Forwarded-Proto} = https
//RewriteRule ^(.*)$ http://www.museumspool.com/adt_anurak/index.php/Adapter/get_link_item

//if ($_SERVER['HTTPS'] == "on") {
//    $url = "http://". $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
//    header("Location: http://www.museumspool.com/adt_anurak/index.php/Adapter/get_link_item");
include("connect.php");
$museum_code=$_REQUEST['museum_code'];
$item_code=$_REQUEST['item_code'];

    header("Refresh:0; url=http://www.museumspool.com/adt_anurak/index.php/Adapter/get_link_item?museum_code=$museum_code&item_code=$item_code");
//    echo "<meta http-equiv='refresh' content=\"0; url=http://www.museumspool.com/adt_anurak/index.php/Adapter/get_link_item?museum_code=2&item_code=H1-11/056 \" />";
    exit;

//} 
?>