<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = rand(1, 10);
    $y = rand(1, 10);
    echo "<h3>Trường hợp 2: x và y ngẫu nhiên</h3>";
    echo "Cộng: " . ($x + $y) . "<br>";
    echo "Trừ: " . ($x - $y) . "<br>";
    echo "Nhân: " . ($x * $y) . "<br>";
    echo "Chia: " . ($x / $y) . "<br>";
    echo "Mod: " . ($x % $y) . "<br>";
    ?>

    
</body>
</html>