<?

$payFlat = $_POST['payFlat'];
$saleFlat = $_POST['saleFlat'];
$termFlat = $_POST['termFlat'];
$compleksCheck = $_POST['compleksCheck'];
$programCheck = $_POST['programCheck'];
$bankCheck = $_POST['bankCheck'];
$minPay = $_POST['minPay'];
$procentBank = $_POST['procentBank'];
$fullPay = $_POST['fullPay'];
$phoneForm = $_POST['phoneForm'];
$mailTo = $_POST['mailTo'];
$mailFrom = $_POST['mailFrom'];
$date=date("d.m.y");
$time=date("H:i");


if($phoneForm !== '' && strlen($phoneForm) == 12 && $programCheck !== '') {
    $text = 'Данные клиента:
    Цена квартиры: ' .$payFlat.' руб.
    Первоначальный взнос: ' .$saleFlat.' руб.
    Кол-во лет: '.$termFlat.'
    Выбранный ЖК: '.$compleksCheck.'
    Выбранная программа:'.$programCheck.'
    Выбранный банк:'.$bankCheck.'
    Минимальный платеж: '.$minPay.' руб.
    Проценты банка: '.$procentBank.'% 
    Полная стоимость: '.$fullPay.' руб.
    Телефон клиенты:  '.$phoneForm.'
    Дата и время заявки: ' . $date .'  '. $time;
    
    $text = nl2br($text, false);
    
    $project = "Сообщение"; 
    $server = $mailFrom; 
    
    $subject =  "Письмо с сайта ЛСР\r\n"; 
    
    $headers = "Date: ".date("D, d M Y H:i:s")." UT\r\n";
    $headers.= "MIME-Version: 1.0\r\n";
    $headers.= "Content-Type: text/html; charset=\"UTF-8\"\r\n";
    $headers.= "Content-Transfer-Encoding: 8bit\r\n";
    $headers.= "From: =?UTF-8?B?".base64_encode("$project")."?= <".$server.">\r\n";
    
    $message = $text;
    
    mail( $mailTo , $subject, $message, $headers);
}

