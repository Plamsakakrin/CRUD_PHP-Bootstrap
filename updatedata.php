<?php
include('connection.php');

echo $id=$_POST['id'];
echo $fname=$_POST['fname'];
echo $lname=$_POST['lname'];
echo $gender=$_POST['gender'];
$skill=implode(",",$_POST["skill"]); //แปลง Array เป็น String

$sql="UPDATE test SET fname = '$fname', lname='$lname', gender='$gender',skill='$skill' WHERE id=$id";

$result=mysqli_query($conn,$sql);

// if($result){
//     echo "<script type='text/javascript'>";
//     echo "alert('อัพเดตข้อมูลสำเร็จ');";
//     echo "window.location = 'index.php'; ";
//     echo "</script>";
//     }
//     else{
//     echo "<script type='text/javascript'>";
//     echo "alert('เกิดข้อผิดพลาด'.mysqli_error($conn);";
//     echo "</script>";
// }



if($result){
    header("location:index.php");  //เพิ่มข้อมูลแบบกลับไปหน้าหลักเลยแต่ไม่มีการแจ้งเตือน
    exit(0);
    }
    else{
    echo "เกิดข้อผิดพลาด".mysqli_error($conn);
    
}
?>