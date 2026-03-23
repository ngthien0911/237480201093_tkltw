<?php
echo "Chào bạn<br>";

if (isset($_COOKIE['thoigian'])) {
    echo "Lần truy cập trước: " . date("d/m/Y H:i:s", $_COOKIE['thoigian']);
}

setcookie("thoigian", time(), time() + 600);
?>