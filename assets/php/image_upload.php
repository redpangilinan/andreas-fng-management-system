<?php
$dir = "../../images/products/";
$file_name = $_FILES['image']['name'];
$file_tmp_name = $_FILES['image']['tmp_name'];
$ext = array("jpg", "png", "jpeg", "bmp");
$split = explode('.', $file_name);
$image_ext = strtolower(end($split));

if (empty($_FILES['image']['tmp_name'])) {
    $file_name = 'default.jpg';
} else {
    if (in_array($image_ext, $ext)) {
        $file_name = uniqid() . "-" . time() . "-" . date("Y-m-d") . "." . $image_ext;
        move_uploaded_file($file_tmp_name, "$dir" . $file_name);
    } else {
        $file_name = 'default.jpg';
        echo "no image ";
    }
}
