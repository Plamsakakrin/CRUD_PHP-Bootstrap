<?php
$db_servername = "localhost";
$db_database = "testdb";
$db_username = "root";
$db_password = "";
$conn= mysqli_connect($db_servername, $db_username, $db_password,   $db_database);
mysqli_set_charset($conn,"utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// $connect= mysqli_connect("localhost","root","","testdb",) or die("เกิดข้อผิดพลาด"); //ใช้อีกแบบได้เหมือนกัน


?>

