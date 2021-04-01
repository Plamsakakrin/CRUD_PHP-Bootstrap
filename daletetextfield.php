<?php
    include('connection.php');
    $id=$_POST["id"];

    $sql= "DELETE FROM test WHERE id = $id";
    $result=mysqli_query($conn,$sql);
    
    if($result){
        header("location:index.php");  //เพิ่มข้อมูลแบบกลับไปหน้าหลักเลยแต่ไม่มีการแจ้งเตือน
        exit(0);
        }
        else{
        echo "เกิดข้อผิดพลาด";
        
    }
    
?>