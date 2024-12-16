<?php
// header($_SERVER["SERVER_PROTOCOL"] . " 200 OK");
// header("Cache-Control: public");
// header("Content-Type: text/html;charset=UTF-8");
// header("Content-Transfer-Encoding: Binary");
// header("Content-Disposition: inline");

if (!empty($_GET)){
    header('Content-type: text/plain');
    header('Content-Disposition: attachment; filename="text.txt"');
    echo $_GET['text'];
} else {
    echo 'Параметр не передан';
}