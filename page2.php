<?php
$_GET['text'] = 'Задание 2: Создание HTML-страницы';
echo $_GET['text'];
// $text = urlencode('Задание 2: Создание HTML-страницы');
//$text = $_GET['text'];

//if (!file_exists(__DIR__ . 'test.txt')) {
//    //create file
//}
//file_put_contents(__DIR__ . 'test.txt', $text);
////open file
header($_SERVER["SERVER_PROTOCOL"] . " 200 OK");
header("Cache-Control: public");
header("Content-Type: text/html;charset=UTF-8");
//header("Content-Disposition: attachment; filename=test.txt");
//header("Content-type: application/txt");
header("Content-Transfer-Encoding: Binary");
header("Content-Disposition: inline");
//header("Content-Disposition: attachment; filename=file.txt");
