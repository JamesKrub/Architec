<?php
session_start();

include("connect.php");
$usr=$_POST['username'];
$password=$_POST['password'];
//$ses_password=md5($password);

$sql="SELECT `usr`, `id` FROM `tz_members` WHERE `usr` = '$usr' AND `pass` = '$password' ";

/* Select queries return a resultset */
if ($result = mysqli_query($link, $sql)) {
    $rowcount=mysqli_num_rows($result);
	$array  = mysqli_fetch_assoc($result);
    /* free result set */
    mysqli_free_result($result);
}


if($rowcount==0) { 
	echo "ไม่พบชื่อผู้ใช้นี้ในฐานข้อมูล"; 
	$_SESSION["access"]="";

}else{

//	$_SESSION['ses_userid'] = session_id();
//	$_SESSION['ses_username'] =$array['personid'];
    
     $_SESSION['usr']= $row['usr'];
     $_SESSION['id'] = $row['id'];
 //   $_SESSION['password'] = $row['pass'];
    
//$_SESSION['rememberMe'] = $_POST['rememberMe'];
    
//	$_SESSION['ses_role'] =$array['role_id'];
//		if($array['role_id']==2){
//			//ถ้าเปลี่ยนจังหวัด ตรงนี้เปลี่ยนด้วย
//			$_SESSION['ses_prov'] =67;
//		}else{
//			$_SESSION['ses_prov'] =0;
//		}
		$_SESSION["access"]=true;
	

//	    $today2=date("Y-m-d H:i:s");
//	    $sql5 = "INSERT INTO `tbl_logperson` (`logperson_ID` ,`PersonID` ,`logperson_Date`,`part_phr`)VALUES (NULL ,'$ses_name', '$today2','adminosm')";
//	    $result5 =  mysqli_query($link,$sql5); 
	    
	echo "<meta http-equiv='refresh' content='0;URL=index2.php' />";
}
mysqli_close($link);
?>