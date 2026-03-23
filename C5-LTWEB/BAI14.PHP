<?php
$matrix = [
    [1.1, 2.3, 3.1, 4.0, 5.0],
    [6.2, 7.7, 8.8, 9.5, 1.2],
    [4.6, 1.9, 3.6, 8.9, 1.5],
    [1.6, 1.7, 1.8, 1.9, 2.0]
];

function maxMatrix($m) {
    $max = $m[0][0];
    foreach ($m as $row)
        foreach ($row as $x)
            if ($x > $max) $max = $x;
    return $max;
}

function minMatrix($m) {
    $min = $m[0][0];
    foreach ($m as $row)
        foreach ($row as $x)
            if ($x < $min) $min = $x;
    return $min;
}

function sumMatrix($m) {
    $sum = 0;
    foreach ($m as $row)
        foreach ($row as $x)
            $sum += $x;
    return $sum;
}

echo "<br>Max: " . maxMatrix($matrix);
echo "<br>Min: " . minMatrix($matrix);
echo "<br>Tổng: " . sumMatrix($matrix);

echo "<h3>Ma trận:</h3>";
echo "<table border='1'>";
foreach ($matrix as $row) {
    echo "<tr>";
    foreach ($row as $x) {
        echo "<td>$x</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>