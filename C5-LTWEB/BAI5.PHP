<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Tính USCLN và BSCNN</title>
    <style>
        .container { width: 400px; border: 2px solid black; border-radius: 20px; padding: 20px; margin: 0 auto; background: #f0f0f0; }
        h2 { text-align: center; margin-top: 0; border-bottom: 1px solid gray; }
        .row { margin-bottom: 10px; }
        label { display: inline-block; width: 80px; }
        input[type="text"] { width: 150px; }
        .buttons { text-align: center; margin-top: 20px; }
        input[type="submit"] { padding: 5px 20px; cursor: pointer; border-radius: 5px; margin: 0 5px; }
    </style>
</head>
<body>

<?php
    $sothu1 = "";
    $sothu2 = "";
    $ketqua = "";

    // Hàm tìm USCLN
    function tim_uscln($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }

    // Xử lý khi nhấn nút
    if (isset($_POST['tinh_uscln']) || isset($_POST['tinh_bscnn'])) {
        $sothu1 = $_POST['num1'];
        $sothu2 = $_POST['num2'];

        if (is_numeric($sothu1) && is_numeric($sothu2)) {
            $uscln = tim_uscln($sothu1, $sothu2);
            
            if (isset($_POST['tinh_uscln'])) {
                $ketqua = $uscln;
            } else {
                // Công thức BSCNN
                $ketqua = ($sothu1 * $sothu2) / $uscln;
            }
        } else {
            $ketqua = "Vui lòng nhập số!";
        }
    }
?>

<div class="container">
    <h2>TÍNH USCLN VÀ BSCNN</h2>
    <form method="post" action="">
        <div class="row">
            <label>Số thứ 1:</label>
            <input type="text" name="num1" value="<?php echo $sothu1; ?>" required>
        </div>
        <div class="row">
            <label>Số thứ 2:</label>
            <input type="text" name="num2" value="<?php echo $sothu2; ?>" required>
        </div>
        <div class="row">
            <label>Kết quả:</label>
            <input type="text" name="result" value="<?php echo $ketqua; ?>" readonly style="background-color: white;">
        </div>
        <div class="buttons">
            <input type="submit" name="tinh_uscln" value="USCLN">
            <input type="submit" name="tinh_bscnn" value="BSCNN">
        </div>
    </form>
</div>

</body>
</html>