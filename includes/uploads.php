<?php

$name = $_FILES["image"]["name"];
$type = $_FILES["image"]["type"];
$tmp_name = $_FILES["image"]["tmp_name"];
$error = $_FILES["image"]["error"];
$size = $_FILES["image"]["size"];

if($type === 'image/png' || $type === 'image/jpeg') {
    move_uploaded_file($tmp_name, "../uploads/" . time() . '-' .  $name);
    echo ' Файл загружен';
} else {
    echo 'Формат файла не поддерживается';
}

