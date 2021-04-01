<?php
include('connection.php');

$id=$_GET["id"];
$sql= "SELECT * FROM test WHERE id = $id";
$result = mysqli_query($conn, $sql); // ประกาศให้connection กับฐานข้อมูล


$row=mysqli_fetch_array($result);
// print_r ($row);
$skill_arr=array("java","php","python","typescript",); //เตรียมตัวเลือกในแบบ form โดยมี4ตัวเลือก



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>แก้ไข้ข้อมูลพนักงาน</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <h2 class="headder">แก้ไข้ข้อมูลพนักงาน</h2>
    <form action="updatedata.php" method="POST">
    <input type="hidden" class="form-control"  value="<?php echo $row['id'];?>" name="id">
      <div class="mb-3">
        <label for="fname" class="form-label">ชื่อ</label>
        <input type="text" class="form-control" id="" name="fname" value="<?php echo $row['fname'];?>">
      </div>
      <div class="form-group mb-3">
        <label for="lname" class="form-label">นามสกุล</label>
        <input type="text" class="form-control" id="" name="lname" value="<?php echo $row['lname'];?>">
      </div>
      <div class="form-group mb-3">
          <label for="gender">เพศ : </label>
          <?php
                 if($row['gender'] == "male"){
                    echo"<input type='radio' name='gender' value='male' checked>ชาย";
                    echo"<input type='radio' name='gender' value='female' >หญิง";
                    echo"<input type='radio' name='gender' value='other' >อื่นๆ";
                 }else if($row['gender'] == "female"){
                    echo"<input type='radio' name='gender' value='male' >ชาย";
                    echo"<input type='radio' name='gender' value='female' checked>หญิง";
                    echo"<input type='radio' name='gender' value='other' >อื่นๆ";
                 }else{
                    echo"<input type='radio' name='gender' value='male' >ชาย";
                    echo"<input type='radio' name='gender' value='female' >หญิง";
                    echo"<input type='radio' name='gender' value='other' checked>อื่นๆ";
                 }         
          ?>
          <!-- <input type="radio" name="gender" value="male">ชาย 
          <input type="radio" name="gender" value="female">หญิง
          <input type="radio" name="gender" value="other">อื่นๆ -->
      </div>
      <div class="form-group mb-3">
          <label for="">ทักษะ : </label>
          <?php
            $skill=explode(",",$row['skill']); // แปลงจากstring เป็นarray   ไปดึงข้อมูลมาจากฐานข้อมูลที่ชื่อskill
            
            foreach($skill_arr as $value){ //จะสร้างตังเลือกตามจำนวนที่ตั้ง  ในที่นี้คือ4ตัวเลือก
                if(in_array($value,$skill)){
                    echo"<input type='checkbox' name='skill[]' value='$value' checked>$value";
                }else{
                    echo"<input type='checkbox' name='skill[]' value='$value' >$value";
                }
            }
          ?>
          <!-- <input type="checkbox" name="skill[]" value="java">java 
          <input type="checkbox" name="skill[]" value="php">php 
          <input type="checkbox" name="skill[]" value="python">python 
          <input type="checkbox" name="skill[]" value="typescript">type script  -->
      </div>
      <br>
      <input type="submit" value="อัปเดตข้อมูล" class="btn btn-success">
      <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
      <a href="index.php" class="btn btn-outline-primary">กลับหน้าแรก</a>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
</body>
</html>