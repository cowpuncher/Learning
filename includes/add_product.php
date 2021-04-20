<?php

print_r($_POST);

$title = $_POST["title"];
$description = $_POST["description"];
$category = $_POST["category"];
$price = $_POST["price"];

$content = "\n Название товара: $title \n Описание товара: $description \n Категория: $category \n Цена товара: $price  ";

$nameFile = 'products.txt';

$fp = fopen($nameFile, 'a'); // w - write
fwrite($fp, $content);
fclose($fp);

