<?php
if ($_FILES['file']['name']) {
    if (!$_FILES['file']['eror'])
        $name = md5(rand(100, 200));
    $ext = explode('.', $_FILES['file']['name']);
    $filename = $name . '.' . $ext[1];
    $destinatin = '../gambar/'. $filename; //change this directory
    $lacatoin = $_FILES['file']["tmp_name"];
    move_uploaded_file($lacation, $destination);
    echo '../gambar/'. $filename;//change this URL
}