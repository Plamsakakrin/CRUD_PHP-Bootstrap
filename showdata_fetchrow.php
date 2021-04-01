<?php 

include('connection.php');

$sql = "SELECT * FROM `test`"; //คำสั่ง sql 
$result = mysqli_query($conn, $sql); // ประกาศให้connection กับฐานข้อมูล

$row=mysqli_fetch_row($result); //fetch_row กำหนด Array เป็นตัวเลข

// print_r($row);


echo "รหัสพนักงาน :".$row[0]."<br>";
echo "ชื่อ :".$row[1]."<br>";
echo "นามสกุล :".$row[2]."<br>";
echo "เพศ :".$row[3]."<br>";
echo "ทักษะ :".$row[4]."<br>";
echo"<hr>";
$row=mysqli_fetch_row($result);
echo "รหัสพนักงาน :".$row[0]."<br>";
echo "ชื่อ :".$row[1]."<br>";
echo "นามสกุล :".$row[2]."<br>";
echo "เพศ :".$row[3]."<br>";
echo "ทักษะ :".$row[4]."<br>";
echo"<hr>";
$row=mysqli_fetch_row($result);
echo "รหัสพนักงาน :".$row[0]."<br>";
echo "ชื่อ :".$row[1]."<br>";
echo "นามสกุล :".$row[2]."<br>";
echo "เพศ :".$row[3]."<br>";
echo "ทักษะ :".$row[4]."<br>";
echo"<hr>";
$row=mysqli_fetch_row($result);
echo "รหัสพนักงาน :".$row[0]."<br>";
echo "ชื่อ :".$row[1]."<br>";
echo "นามสกุล :".$row[2]."<br>";
echo "เพศ :".$row[3]."<br>";
echo "ทักษะ :".$row[4]."<br>";
echo"<hr>";
$row=mysqli_fetch_row($result);
echo "รหัสพนักงาน :".$row[0]."<br>";
echo "ชื่อ :".$row[1]."<br>";
echo "นามสกุล :".$row[2]."<br>";
echo "เพศ :".$row[3]."<br>";
echo "ทักษะ :".$row[4]."<br>";
?>