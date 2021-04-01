<?php
    //เชื่อมต่อdatabase
    include('connection.php');

    
    //รับค่าที่ส่งมากจากฟอร์ม
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $gender=$_POST["gender"];
    
    
    $skill=implode(",",$_POST["skill"]); //แปลง Array เป็น String
        
   
    //บันทึกข้อมูล
    $sql="INSERT INTO `test`(`fname`,`lname`,`gender`,`skill`) VALUES('$fname','$lname','$gender','$skill')";
    
    $result=mysqli_query($conn, $sql); //สังรับคำสั่ง SQL
             
    if($result){
        echo "<script type='text/javascript'>";
        echo "alert('เพิ่มข้อมูลสำเร็จ');";
        echo "window.location = 'insertform.php'; ";
        echo "</script>";
        }
        else{
        echo "<script type='text/javascript'>";
        echo "alert('เกิดข้อผิดพลาด');";
        echo "</script>";
    }
?>