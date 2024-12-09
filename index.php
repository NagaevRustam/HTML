<html>
<head>
    <title>PHP задание</title>
</head>

<body>

<?php
$_GET['text'] = 'Задание 2: Создание HTML страницы';
echo $_GET['text'];
$text = urlencode('dsfdsfdsf dfds');
?>

<ul>
    <li><a href="page1.php">Первая страница!</a></li>
    <li><a href="page2.php?text=<?= $text; ?>">Вторая страница!</a></li>
    <li><a href="page3.php">Третья страница!</a></li>
    <li><a href="page4.php">Четвертая страница!</a></li>
</ul>
</body>
</html>
