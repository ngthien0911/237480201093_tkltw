<?php
$mang = [5, 2, 9, 12, 7, 4, 8]; // Ví dụ mảng

// a. Xuất mảng
echo "Mảng: " . implode(", ", $mang) . "<br>";

// c. Đếm tổng số chẵn (có lẽ đề bài là Tổng các số chẵn hoặc Đếm số lượng số chẵn)
$tong_chan = 0;
$dem_chan = 0;
foreach ($mang as $v) {
    if ($v % 2 == 0) {
        $tong_chan += $v;
        $dem_chan++;
    }
}
echo "Số lượng số chẵn: $dem_chan <br>";

// d. Tính tổng các số lẻ
$tong_le = 0;
foreach ($mang as $v) {
    if ($v % 2 != 0) $tong_le += $v;
}
echo "Tổng các số lẻ: $tong_le <br>";

// e. Giá trị lớn nhất, nhỏ nhất
echo "Max: " . max($mang) . " - Min: " . min($mang) . "<br>";

// f. Đảo ngược mảng
$dao_nguoc = array_reverse($mang);
echo "Mảng đảo ngược: " . implode(", ", $dao_nguoc);
?>