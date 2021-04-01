<?php 
include('connection.php'); // ประกาศให้connection กับฐานข้อมูล

$sql = "SELECT * FROM `test`"; //คำสั่ง sql 
$result = mysqli_query($conn, $sql); // เมื่อทำการสั่งคำสั่ง sql แบบไหนให้มาเก็บใน result


// ข้อแตกต่างระหว่าง for loop  กับ while loop
//for loop  จำนวนรอบที่ชัดเจน
//while loop  จำนวนรอบที่ไม่ชัดเจน  (ถ้าเงื่อนไขเป็นจริงจะทำซ้ำด้านใน ถ้ามีข้อมูลที่เพิ่มจะเพิ่มข้อมูลมาวนซ้ำ)
while($row=mysqli_fetch_array($result)){
    echo "รหัสพนักงาน :".$row[0]."<br>";
    echo "ชื่อ :".$row[1]."<br>";
    echo "นามสกุล :".$row[2]."<br>";
    echo "เพศ :".$row[3]."<br>";
    echo "ทักษะ :".$row[4]."<br>";
    echo"<hr>";
}
//ไม่ต้องสร้างตัวแปรนับขึ้นมา เหมือนกับ for loop
?>