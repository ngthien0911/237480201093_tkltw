<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        /* tạo khung */
        .box { width: 350px; border: 2px solid #000; padding: 20px; border-radius: 15px; margin: 0 auto; background: #f9f9f9; }
        .title { text-align: center; font-weight: bold; margin-bottom: 15px; text-decoration: underline; }
        input[type="text"] { width: 150px; margin-bottom: 5px; }
        .buttons { margin-top: 10px; text-align: center; }
        input[type="submit"] { cursor: pointer; padding: 5px 10px; }
    </style>
</head>
<body>

<?php
// 1. Khởi tạo giá trị ban đầu để không bị lỗi trống biến
$so1 = "";
$so2 = "";
$ketqua = "";

// 2. Kiểm tra xem người dùng có bấm nút nào không
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $so1 = $_POST['txtSo1'];
    $so2 = $_POST['txtSo2'];

    // Kiểm tra nếu người dùng chọn nút Cộng
    if (isset($_POST['btnCong'])) {
        $ketqua = $so1 + $so2;
    }
    // Nếu chọn nút Trừ
    elseif (isset($_POST['btnTru'])) {
        $ketqua = $so1 - $so2;
    }
    // Nếu chọn nút Nhân
    elseif (isset($_POST['btnNhan'])) {
        $ketqua = $so1 * $so2;
    }
    // Nếu chọn nút Chia
    elseif (isset($_POST['btnChia'])) {
        if ($so2 != 0) $ketqua = $so1 / $so2;
        else $ketqua = "Lỗi chia cho 0";
    }
    // Nếu chọn nút Mod (Chia lấy dư)
    elseif (isset($_POST['btnMod'])) {
        if ($so2 != 0) $ketqua = $so1 % $so2;
        else $ketqua = "Lỗi chia cho 0";
    }
}
?>

<div class="box">
    <div class="title">TÍNH TOÁN SỐ HỌC</div>
    <form method="POST">
        Số thứ 1: <input type="text" name="txtSo1" value="<?php echo $so1; ?>"><br>
        Số thứ 2: <input type="text" name="txtSo2" value="<?php echo $so2; ?>"><br>
        Kết quả: <input type="text" name="txtKetQua" value="<?php echo $ketqua; ?>" readonly style="background: #eee;"><br>

        <div class="buttons">
            <input type="submit" name="btnCong" value="Cộng">
            <input type="submit" name="btnTru" value="Trừ">
            <input type="submit" name="btnNhan" value="Nhân">
            <input type="submit" name="btnChia" value="Chia">
            <input type="submit" name="btnMod" value="Mod">
        </div>
    </form>
</div>
</body>
</html>