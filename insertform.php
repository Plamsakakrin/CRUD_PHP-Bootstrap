<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>พนักงาน</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="container">
    <h2 class="headder">แบบฟอร์มพนักงาน</h2>
    <form action="insertdata.php" method="POST">
      <div class="mb-3">
        <label for="fname" class="form-label">ชื่อ</label>
        <input type="text" class="form-control" id="" name="fname">
      </div>
      <div class="form-group mb-3">
        <label for="lname" class="form-label">นามสกุล</label>
        <input type="text" class="form-control" id="" name="lname">
      </div>
      <div class="form-group mb-3">
          <label for="gender">เพศ : </label>
          <input type="radio" name="gender" value="male">ชาย 
          <input type="radio" name="gender" value="female">หญิง
          <input type="radio" name="gender" value="other">อื่นๆ
      </div>
      <div class="form-group mb-3">
          <label for="">ทักษะ : </label>
          <input type="checkbox" name="skill[]" value="java">java 
          <input type="checkbox" name="skill[]" value="php">php 
          <input type="checkbox" name="skill[]" value="python">python 
          <input type="checkbox" name="skill[]" value="typescript">type script 
      </div>
      <br>
      <input type="submit" value="บันทึกข้อมูล"  onclick="return confirm('ต้องการเพิ่มข้อมูลใช่หรือไม่')"  class="btn btn-success">
      <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
      <a href="index.php" class="btn btn-outline-primary">กลับหน้าแรก</a>
    </form>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
</body>
</html>