<!DOCTYPE html>
<html>
<body>

<h2>Đăng nhập khách hàng</h2>

<form method="post">
    Tên khách hàng:<br>
    <input type="text" name="ten"><br><br>

    Số điện thoại:<br>
    <input type="text" name="sdt"><br><br>

    <button type="submit">Lưu</button>
</form>

<?php
// khi submit thì lưu cookie
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("ten", $_POST["ten"], time() + 600);
    setcookie("sdt", $_POST["sdt"], time() + 600);

    echo "<br>Đã lưu cookie! Reload lại trang để xem.<br>";
}

// hiển thị cookie
if (isset($_COOKIE["ten"]) && isset($_COOKIE["sdt"])) {
    echo "<h3>Thông tin:</h3>";
    echo "Tên: " . $_COOKIE["ten"] . "<br>";
    echo "SĐT: " . $_COOKIE["sdt"];
}
?>

</body>
</html>