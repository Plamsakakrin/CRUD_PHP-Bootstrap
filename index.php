<?php
include('connection.php');
$sql = "SELECT * FROM `test`ORDER BY fname ASC "; //คำสั่ง sql   ORDER BY fname ASC คือการเรียงลำดับของข้อมูล จากcolumที่จะใช้ให้เรียง
$result = mysqli_query($conn, $sql); // ประกาศให้connection กับฐานข้อมูล
$count=mysqli_num_rows($result);

$order =1;  //เปลี่ยนจากรหัสพนักงาน ให้แสดงเป็นลำดับที่แทน

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
    <h1 class="headder">ตารางข้อมูลพนักงาน</h1>
    <hr>
    <?php if($count>0){ // ทำการเช็คว่ามีข้อมูลในฐานข้อมูลไหม ถ้าไม่มีจะไม่แสดงตัวหัวข้อตาราง แต่ถ้ามีข้อความจะแสดงตัวตาราง?>  
    <form action="searchdata.php" class="form-group" method="POST">
            <label for="">รหัสพนักงาน</label>
            <input type="text" placeholder="ป้อนช่ือพนักงาน" name="namedb" class="form-control">
            <input type="submit" value="ค้นหาข้อมูล" class="btn btn-dark my-2">
    </form>
    <hr> 
   <table class="table  table-striped table-bordered">
        <thead>
            <tr>
                <th>ลำดับที่</th>
                <th>ชื่อพนักงาน</th>
                <th>นามสกุลพนักงาน</th>
                <th>เพศ</th>
                <th>ทักษะ/ความสามารถ</th>
                <th>แก้ไขข้อมูล</th>
                <th>ลบข้อมูล</th>
                <th>ลบข้อมูล</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row=mysqli_fetch_array($result)) {?>
            <tr>
                <?php //การเปลี่ยนลำจากรหัสเป็นลำดับที่ ?>
                <td><?php echo$order++ ;?></td> 
                <td><?php echo$row['1']?></td>
                <td><?php echo$row['2']?></td>
                <td>
                <?php // การที่จะloop ออกมาให้เป็นชาย หญิง และ อื่นๆ  หรืออกีวิธีการเปลี่ยนvalue ที่หน้า insert
                    if($row['3'] == "male"){?> 
                        ชาย
                    <?php }else if ($row['3'] == "female"){?>
                        หญิง
                    <?php }else{?>
                        อื่นๆ
                    <?php }?>
                </td>
                <td><?php echo$row['4']?></td>
                <td>
                    <a href="editform.php?id=<?php echo$row['id']?>" class="btn btn-secondary">แก้ไขข้อมูล</a>
                </td>
                <td>
                    <a href="deleteQueryString.php?id=<?php echo$row['id']?>" class="btn btn-danger" onclick="return confirm('ต้องการลบข้อมูลหรือไม่')">ลบข้อมูล</a>
                </td>
                <form action="multipleDelete.php" method="POST">
                <td>
                    <input type="checkbox"   name="idcheckbox[]" value="<?php echo$row['id'];?>">
                </td>
                
            </tr>
            <?php }?>
        </tbody>
    </table>

    <?php }else{
        echo"<div class='alert alert-danger' role='alert'>
        <b>ไม่มีข้อมูลพนักงานในฐานข้อมูล!</b>
        </div>";?>
    <?php }?>
    <a  class="btn btn-success" href="insertform.php">เพิ่มข้อมูลพนักงาน</a>
    <?php if($count>0){?>
        <input type="submit" class="btn btn-danger" value="ลบข้อมูลแบบcheckbox">
        <?php }?>
        </form>
        <?php if($count>0){?>
        <button class="btn btn-info" onclick="checkAll()">เลือกทั้งหมด</button>
        <button class="btn btn-warning" onclick="uncheckAll()">ยกเลิก</button>
        <?php }?>
   </div>
</body>
<script src="js/main.js"></script>
</html>
