<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        ul {
            list-style: none;
            padding-left: 0;
        }
        li {
            border: 1px solid transparent;
            margin-bottom: 5px;
            padding: 0 15px 15px;
            cursor: pointer;
            color: #fff;
        }
        .test {
            display: flex;
            justify-content: space-between;
        }
        li.done {
            border: 1px solid green;
            background: green;
        }
        li.wait {
            border: 1px solid darkorange;
            background: darkorange;
        }
    </style>
</head>
<body>

<?php


function discriminant($b,$a,$c) {
    return $b^2-4*$a*$c;
}
echo discriminant(3, -14, -5);

$todos = [
    [
        "id" => 1,
        "title" => "Купить столовые приборы",
        "date" => "03.04.2020",
        "status" => "Выполнено"
    ],
    [
        "id" => 2,
        "title" => "Выбросить мусор",
        "date" => "05.04.2020",
        "status" => "Ожидается"
    ],
    [
        "id" => 3,
        "title" => "Помыть машину",
        "date" => "10.04.2020",
        "status" => "Ожидается"
    ]
];
echo '<ul> <h1>Цикл FOR</h1>';

for($i=0; $i < count($todos); $i++) {
    if($todos[$i]['status'] == 'Ожидается') {
        echo '<li class="wait">';
    } else {
        echo '<li class="done">';
    }
    echo '<h3>'. $todos[$i]['title'] . '</h3><div class="test"><span>' . $todos[$i]['date'] .'</span><span>' . $todos[$i]['status'] .'</span></div></li>';

}
echo '</ul>';
//----------------------------------------

echo '<ul> <h1>Цикл WHILE</h1>';


$e = 0;
while($e < count($todos)) {
    if($todos[$e]['status'] == 'Ожидается') {
        echo '<li class="wait">';
    } else {
        echo '<li class="done">';
    }
    echo '<h3>'. $todos[$e]['title'] . '</h3><div class="test"><span>' . $todos[$e]['date'] .'</span><span>' . $todos[$e]['status'] .'</span></div></li>';
    $e++;
}
echo '</ul>';
//----------------------------------------
echo '<ul> <h1>Цикл FOREACH</h1>';

foreach($todos as $todo) {
    if($todo['status'] == 'Ожидается') {
        echo '<li class="wait">';
    } else {
        echo '<li class="done">';
    }
    echo '<h3>'. $todo['title'] . '</h3><div class="test"><span>' . $todo['date'] .'</span><span>' . $todo['status'] .'</span></div></li>';
}
echo '</ul>';





?>

</body>
</html>
