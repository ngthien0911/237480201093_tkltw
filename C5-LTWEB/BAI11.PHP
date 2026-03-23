<?php
$colors = ["black", "blue", "green", "red", "brown", "magenta"];

echo "<h3>Danh sách màu:</h3>";
foreach ($colors as $color) {
    echo "<span style='color:$color; font-weight:bold;'>$color</span>, ";
}
?>