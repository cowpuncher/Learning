<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>

<form action="includes/add_product.php" method="post">
    <label for="">Название товара</label>
    <input type="text" name="title">

    <br><br>

    <label for=""> Описание товара</label>
    <textarea name="description" id="" ></textarea>

    <br><br>

    <label for=""> Категория товара</label>
    <select name="category" id="">
        <option value="1">Категория 1</option>
        <option value="2">Категория 2</option>
        <option value="3">Категория 3</option>
        <option value="4">Категория 4</option>
    </select>

    <br><br>

    <label for="">Цена</label>
    <input type="number" name="price">

    <br><br>

    <button type="submit">Добавить</button>
</form>


<form action="includes/uploads.php" method="post" enctype="multipart/form-data">
    <label for="">Загрузите картинку</label>
    <input type="file" name="image">
    <button type="submit">Загрузить</button>
</form>



</body>
</html>