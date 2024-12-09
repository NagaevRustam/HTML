<html>
<head>
    <title>Сохранение файла на локальный компьютер</title>
</head>

<body>

<?php

$text = $_GET['text'];

// http://localhost?text=my%20name%20is%20Rustam
if (!file_exists(__DIR__ . 'test.txt')) {
    //create file
}
file_put_contents(__DIR__ . 'test.txt', $text);
//open file
header($_SERVER["SERVER_PROTOCOL"] . " 200 OK");
header("Cache-Control: public");
header("Content-type: application/txt");
header("Content-Transfer-Encoding: Binary");
header('Content-Length: '.filesize('$attachment_location'));
header("Content-Disposition: attachment; filename=file.txt");
readfile('$attachment_location');

?>
</body>
</html>
