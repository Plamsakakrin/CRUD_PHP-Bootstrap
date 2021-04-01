<?php 
include('connection.php');

$sql = "SELECT * FROM `test`"; //คำสั่ง sql 
$result = mysqli_query($conn, $sql); // ประกาศให้connection กับฐานข้อมูล
$count=mysqli_num_rows($result); // จำนวนแถวที่ไปดึงมาจากฐานข้อมูล
// echo $count;


//Loop for
// ข้อแตกต่างระหว่าง for loop  กับ while loop
//for loop  จำนวนรอบที่ชัดเจน
//while loop  จำนวนรอบที่ไม่ชัดเจน
for($i=0;$i<$count;$i++){  // i=0 i น้อยกว่า count   i++ คือ การเพิ่มค่า
//ถ้ากำหนดให้ i มีค่าเท่ากับ5 แล้วในตารางมีข้อมูลมี7  จะแสดงผลลัพธ์ที่ได้เป็น 2
    $row=mysqli_fetch_array($result);
    echo "รหัสพนักงาน :".$row[0]."<br>";
    echo "ชื่อ :".$row[1]."<br>";
    echo "นามสกุล :".$row[2]."<br>";
    echo "เพศ :".$row[3]."<br>";
    echo "ทักษะ :".$row[4]."<br>";
    echo"<hr>";
}
?>