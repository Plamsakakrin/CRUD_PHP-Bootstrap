<?php
//การลบทีละแถว
include('connection.php');

$id=$_GET["id"]; //["id"] รับค่ามากจาก ?id ของไฟล์ index.php
$sql="DELETE FROM test WHERE id =$id"; // $id ก็คือการรับค่ามากจากตัวแปรที่ชื่อid ที่ตั้ง
$result=mysqli_query($conn,$sql);

mysqli_query($conn,$sql);

if($result){
	echo "<script type='text/javascript'>";
	echo "alert('ลบข้อมูลสำเร็จ');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('เกิดข้อผิดพลาด');";
	echo "</script>";
}

?>