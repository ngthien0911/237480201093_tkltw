<table border="0" cellpadding="10">
    <tr>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "<td valign='top'>";
        for ($j = 1; $j <= 10; $j++) {
            echo "$i x $j = " . ($i * $j) . "<br>";
        }
        echo "</td>";
        if ($i == 5) echo "</tr><tr>"; // Xuống hàng sau 5 bảng đầu để giống mẫu
    }
    ?>
    </tr>
</table>