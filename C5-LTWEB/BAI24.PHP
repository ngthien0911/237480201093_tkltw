<?php

$folder = "BoSuuTap/";

// tạo thư mục nếu chưa có
if (!is_dir($folder)) {  
    /*
is_dir($folder)
=> kiểm tra thư mục có tồn tại chưa
*/

    mkdir($folder);// tạo thư mục nếu chưa có
}
/*
$_FILES["files"] là mảng 2 chiều

$_FILES["files"]["name"] => tên file
$_FILES["files"]["tmp_name"] => file tạm
*/
foreach ($_FILES["files"]["tmp_name"] as $key => $tmp_name) {

    $name = $_FILES["files"]["name"][$key];
    $target = $folder . $name;

    if (move_uploaded_file($tmp_name, $target)) {
        echo "Upload $name thành công<br>";
    } else {
        echo "Upload $name thất bại<br>";
    }
}

?>