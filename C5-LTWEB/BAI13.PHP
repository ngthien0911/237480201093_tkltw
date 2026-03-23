<?php
function nhapMang() {
    return [5, 2, 9, 4, 7, 6];
}

function timMax($arr) {
    return max($arr);
}

function timMin($arr) {
    return min($arr);
}

function soChinhPhuong($arr) {
    $kq = [];
    foreach ($arr as $x) {
        if (sqrt($x) == floor(sqrt($x))) {
            $kq[] = $x;
        }
    }
    return $kq;
}

function soChan($arr) {
    return array_filter($arr, fn($x) => $x % 2 == 0);
}

function soLe($arr) {
    return array_filter($arr, fn($x) => $x % 2 != 0);
}

function sapXep($arr) {
    sort($arr);
    return $arr;
}

// TEST
$arr = nhapMang();

echo "Mảng: "; print_r($arr);
echo "<br>Max: " . timMax($arr);
echo "<br>Min: " . timMin($arr);

echo "<br>Số chính phương: ";
print_r(soChinhPhuong($arr));

echo "<br>Số chẵn: ";
print_r(soChan($arr));

echo "<br>Số lẻ: ";
print_r(soLe($arr));

echo "<br>Sắp xếp tăng dần: ";
print_r(sapXep($arr));
?>