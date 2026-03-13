<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Số n</th>
        <th>Số n<sup>2</sup></th>
    </tr>
    <?php
    for ($n = 0; $n <= 50; $n++) {
        echo "<tr>";
        echo "<td>$n</td>";
        echo "<td>" . ($n * $n) . "</td>";
        echo "</tr>";
    }
    ?>
</table>