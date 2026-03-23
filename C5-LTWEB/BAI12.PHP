<?php
echo "<table border='1' cellspacing='0' cellpadding='0'>";
for ($i = 0; $i < 8; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 8; $j++) {
        $color = (($i + $j) % 2 == 0) ? "white" : "black";
        echo "<td style='width:40px; height:40px; background:$color'></td>";
    }
    echo "</tr>";
}
echo "</table>";
?>