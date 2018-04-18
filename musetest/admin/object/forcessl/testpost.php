
<script language="javascript" src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript">
$(function(){
    $("input#Send").click(function(){
        var url="testpost.php"; // ไฟล์ที่ต้องการรับค้า
        var dataSet={ name: $("input#name").val(), email: $("input#email").val() }; // กำหนดชื่อและค่าที่ต้องการส่ง
        $.post(url,dataSet,function(data){
            alert("แจ้งเเมื่อทำการส่งข้อมูลเรียบร้อยแล้ว");
         });
    });
});
</script>


<form id="form1" name="form1" method="post" action="">
  <p>ชื่อ
    <input type="text" name="name" id="name" />
    <br />
    อีเมลล์
    <input type="text" name="email" id="email" />
    <br />
    <input type="button" name="Send" id="Send" value="Send" />
  </p>
</form>

<?php
if(isset($_POST['name']) && $_POST['name']!=""){
    echo $_POST['name']; // ตัวอย่าง
}
?>