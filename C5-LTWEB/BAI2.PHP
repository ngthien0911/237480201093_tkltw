<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $hoten = "Nguyễn Thanh Minh";
    $ngaysinh = "12/09/2000";
    $lop = "12A1";
    $diem = "8.9";
    echo "Họ tên: $hoten <br>";
    echo "Ngày sinh: $ngaysinh <br>";   
    echo "Lớp: $lop <br>";
    echo "Điểm: $diem <br>";
    ?>

    <h3>Nhập thông tin sinh viên</h3>

<form method="post">
Họ và tên: <input type="text" name="hoten"><br><br>

Ngày sinh: <input type="text" name="ngaysinh"><br><br>

Lớp: <input type="text" name="lop"><br><br>

Điểm: <input type="text" name="diem"><br><br>

<input type="submit" value="Hiển thị">
</form>

<?php
if(isset($_POST['hoten']))
{
    $hoten = $_POST['hoten'];
    $ngaysinh = $_POST['ngaysinh'];
    $lop = $_POST['lop'];
    $diem = $_POST['diem'];

    echo "<h3>Thông tin sinh viên</h3>";
    echo "Họ và tên: $hoten <br>";
    echo "Ngày sinh: $ngaysinh <br>";
    echo "Lớp: $lop <br>";
    echo "Điểm: $diem";
} 
?>

    
</body>
</html>