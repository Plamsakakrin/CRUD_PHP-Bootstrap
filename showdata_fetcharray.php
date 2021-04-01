<?php  

include('connection.php');

$sql = "SELECT * FROM `test`"; //คำสั่ง sql 
$result = mysqli_query($conn, $sql); // ประกาศให้connection กับฐานข้อมูล

//MYSQLI_NUM สอบถามจ้อมูลจากตารางที่สร้าง โดยมีindex ระบุเป็นตัวเลข   
//MYSQLI_ASSOC สอบถามจ้อมูลจากตารางที่สร้าง โดยมีindex ระบุเป็นตัวอักษร    
//MYSQLI_BOTH จะระบุได้ทั้งแบบเลขและตัวอักษร
$row=mysqli_fetch_array($result,MYSQLI_BOTH); 

// print_r($row);
echo "รหัสพนักงาน :".$row[0]."<br>";
echo "ชื่อ :".$row[1]."<br>";
echo "นามสกุล :".$row[2]."<br>";
echo "เพศ :".$row[3]."<br>";
echo "ทักษะ :".$row[4]."<br>";
echo"<hr>";

$row=mysqli_fetch_assoc($result);
echo "รหัสพนักงาน :".$row['id']."<br>";
echo "ชื่อ :".$row['fname']."<br>";
echo "นามสกุล :".$row['lname']."<br>";
echo "เพศ :".$row['gender']."<br>";
echo "ทักษะ :".$row['skill']."<br>";
echo"<hr>"; 

?>