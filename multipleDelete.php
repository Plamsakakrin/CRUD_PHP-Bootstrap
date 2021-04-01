<?php
//การลบข้อมูลทีละหลายๆแถว
include('connection.php');

// print_r($_POST["idcheckbox"]);

$id_arr=$_POST["idcheckbox"]; // ตั้งตัวแปรที่ชื่อ id_arr แล้วเรียกใช้nameืั้ชื่อว่า idcheckbox มาใช้

$mutiple_id=implode(",",$id_arr); // นำid ที่เป็นarray มาแปลงเป็นstring
// var_dump ("$mutiple_id"); //คำสั่งเช็คการลบตัวแปร

$sql="DELETE FROM test WHERE id in ($mutiple_id)";
$result=mysqli_query($conn,$sql);

mysqli_query($conn,$sql);

if($result){
    header("location:index.php");  //เพิ่มข้อมูลแบบกลับไปหน้าหลักเลยแต่ไม่มีการแจ้งเตือน
    exit(0);
    }
    else{
    echo "เกิดข้อผิดพลาด";
    
}
?>