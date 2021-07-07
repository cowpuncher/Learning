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

$project = "Сообщение"; 
    $server = "info@proetoshop.ru"; 
    
    $subject =  "Письмо с сайта  \r\n"; 

    $date=date("d.m.y");
    $time=date("H:i");
    
    $headers = "Date: ".date("D, d M Y H:i:s")." UT\r\n";
    $headers.= "MIME-Version: 1.0\r\n";
    $headers.= "Content-Type: text/html; charset=\"UTF-8\"\r\n";
    $headers.= "Content-Transfer-Encoding: 8bit\r\n";
    $headers.= "From: =?UTF-8?B?".base64_encode("$project")."?= <".$server.">\r\n";
	$link = '<a style="color: red;" href="https://avto-prokat.spb.ru/os/uploads/' . time() . '-' .  $name .'">Ссылка на вложение</a>';

    $message = "Требуется связаться с клиентом:
    <br><br>
    Файлы: $link<br>    
    Дата и время заявки: $date, $time
    ";

    mail("e.tevilin@gmail.com", $subject, $message, $headers);
