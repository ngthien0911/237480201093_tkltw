<?php
$s = "TRUONG DAI HOC BAC LIEU";
$arr = explode(" ", $s);

$maxWord = "";
foreach ($arr as $word) {
    if (strlen($word) > strlen($maxWord)) {
        $maxWord = $word;
    }
}

echo "Từ dài nhất: $maxWord - " . strlen($maxWord) . " ký tự";
?>