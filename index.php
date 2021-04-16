<?php

const GREETING = "Hello";
$name = "Eugene";
echo GREETING . ', ' . $name;

?>
<br>
<br>
<?php

$arrF = [2020, 'Ivan', true];
$arrS = [
    [
        "id" => 1,
        "name" => 'Eugene',
        "surname" => 'Tevilin',
        "age" => 35,
        "lang" => 'ru'
    ],
    [
        "id" => 2,
        "name" => 'Pit',
        "surname" => 'Dakote',
        "age" => 105,
        "lang" => 'en'
    ],
    [
        "id" => 3,
        "name" => 'Sem',
        "surname" => 'Right',
        "age" => 55,
        "lang" => 'fn'
    ]
];
$arrT = [
    "key" => 'asfadhfapsdaskldhfas',
    "url" => 'http://shlyapa.com',
    "ssl" => 'AK:SFj0290423kzlfdsaLDSAFJSD:',
    "db" => [
        "port" => 3000,
        "host" => 'localhost',
        "login" => 'cowboy',
        "password" => '123klasdjalfk123'
    ]
];
$arrT['db']["port"] = 3309;
print_r($arrT);

?>
<br>
<br>
<?php

const LOGIN = "admin";
const PASSWORD = "secret123";

$tmp_login = 'admin';
$tmp_password = 'secret123';

if ($tmp_login == LOGIN && $tmp_password != PASSWORD) {
    echo 'Check correct your password';
} elseif ($tmp_login != LOGIN ) {
    echo 'User not found';
} else {
    echo 'Auth success';
}

?>
<br>
<br>
<?php

$isStatus = true;

$statusResult = ($isStatus) ? 4322465 : 98645623;
echo $statusResult;

?>
<br>
<br>
<?php

$typeCar = "Lada";

switch ($typeCar) {
    case "BMW";
        echo 'Selected is a very good car';
        break;
    case "Toyota";
        echo 'Toyota is a very reliable car!';
        break;
    case "Lada";
        echo 'Don\'t buy these cars!';
        break;
    default;
        echo 'Car not found';
        break;
}

?>
