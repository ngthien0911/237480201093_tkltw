<?php
session_start();

if (isset($_SESSION["user"])) {
    echo "<h2>TRANG CHÍNH</h2>";
    echo "Người dùng đã đăng nhập với tên <b>" 
        . $_SESSION["user"] . "</b> và Email là <b>" 
        . $_SESSION["email"] . "</b>";

    echo "<br><a href='21logout.PHP'>Đăng xuất</a>";
} else {
    echo "Bạn chưa đăng nhập!";
}
?>