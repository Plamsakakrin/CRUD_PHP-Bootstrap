<?php
include('connection.php');

$sql = "SELECT * FROM `test`"; //คำสั่ง sql 
$result = mysqli_query($conn, $sql); // ประกาศให้connection กับฐานข้อมูล

$row=mysqli_fetch_assoc($result); //fetch_assoc กำหนดเป็นชื่อKey

// print_r($row);

echo "รหัสพนักงาน :".$row['id']."<br>";
echo "ชื่อ :".$row['fname']."<br>";
echo "นามสกุล :".$row['lname']."<br>";
echo "เพศ :".$row['gender']."<br>";
echo "ทักษะ :".$row['skill']."<br>";
echo"<hr>";

$row=mysqli_fetch_assoc($result);
echo "รหัสพนักงาน :".$row['id']."<br>";
echo "ชื่อ :".$row['fname']."<br>";
echo "นามสกุล :".$row['lname']."<br>";
echo "เพศ :".$row['gender']."<br>";
echo "ทักษะ :".$row['skill']."<br>";
echo"<hr>"; 

$row=mysqli_fetch_assoc($result);
echo "รหัสพนักงาน :".$row['id']."<br>";
echo "ชื่อ :".$row['fname']."<br>";
echo "นามสกุล :".$row['lname']."<br>";
echo "เพศ :".$row['gender']."<br>";
echo "ทักษะ :".$row['skill']."<br>";
echo"<hr>";

$row=mysqli_fetch_assoc($result);
echo "รหัสพนักงาน :".$row['id']."<br>";
echo "ชื่อ :".$row['fname']."<br>";
echo "นามสกุล :".$row['lname']."<br>";
echo "เพศ :".$row['gender']."<br>";
echo "ทักษะ :".$row['skill']."<br>";
echo"<hr>";

?>