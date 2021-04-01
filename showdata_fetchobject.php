<?php
include('connection.php');

$sql = "SELECT * FROM `test`"; //คำสั่ง sql 
$result = mysqli_query($conn, $sql); // ประกาศให้connection กับฐานข้อมูล

$row=mysqli_fetch_object($result); //fetch_object กำหนดเป็นชื่อKey

// var_dump($row);


echo "รหัสพนักงาน :".$row->id."<br>";  //->  สัญลักษณ์ แบบเชิงวัตถุ(OOP) แล้วก็เรียกใช้ Attribute ในตาราง
echo "ชื่อ :".$row->fname."<br>";
echo "นามสกุล :".$row->lname."<br>";
echo "เพศ :".$row->gender."<br>";
echo "ทักษะ :".$row->skill."<br>";
echo"<hr>";

$row=mysqli_fetch_object($result);
echo "รหัสพนักงาน :".$row->id."<br>";  //->  สัญลักษณ์ แบบเชิงวัตถุ(OOP) แล้วก็เรียกใช้ Attribute ในตาราง
echo "ชื่อ :".$row->fname."<br>";
echo "นามสกุล :".$row->lname."<br>";
echo "เพศ :".$row->gender."<br>";
echo "ทักษะ :".$row->skill."<br>";
echo"<hr>";

$row=mysqli_fetch_object($result);
echo "รหัสพนักงาน :".$row->id."<br>";  //->  สัญลักษณ์ แบบเชิงวัตถุ(OOP) แล้วก็เรียกใช้ Attribute ในตาราง
echo "ชื่อ :".$row->fname."<br>";
echo "นามสกุล :".$row->lname."<br>";
echo "เพศ :".$row->gender."<br>";
echo "ทักษะ :".$row->skill."<br>";
echo"<hr>";

$row=mysqli_fetch_object($result);
echo "รหัสพนักงาน :".$row->id."<br>";  //->  สัญลักษณ์ แบบเชิงวัตถุ(OOP) แล้วก็เรียกใช้ Attribute ในตาราง
echo "ชื่อ :".$row->fname."<br>";
echo "นามสกุล :".$row->lname."<br>";
echo "เพศ :".$row->gender."<br>";
echo "ทักษะ :".$row->skill."<br>";
echo"<hr>";


?>