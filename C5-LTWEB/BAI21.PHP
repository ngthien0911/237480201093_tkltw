<?php
session_start();

$user = $_POST["user"];
$email = $_POST["email"];
$pass = $_POST["pass"];

// giả lập dữ liệu đúng
if ($user == "admin" && $email == "admin@gmail.com" && $pass == "123") {

    $_SESSION["user"] = $user;
    $_SESSION["email"] = $email;

    echo "Thông tin đăng nhập hợp lệ <br>";
    echo "<a href='mainpage.php'>Trang chính</a>";

} else {
    echo "Sai thông tin <br>";
    echo "<a href='BAI21.HTML'>Quay lại</a>";
}
?>