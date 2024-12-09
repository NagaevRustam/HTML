<!DOCTYPE html>
<html>
<head>
    <title>Счетчик посещений на PHP</title>
</head>
<body>
<?php
session_start();
// Проверяем, существует ли уже счетчик посещений
//if (!isset($_SESSION['visits'])) {
//    $_SESSION['visits'] = 0;
//}
//
//// Увеличиваем счетчик посещений
//$_SESSION['visits']++;
//// Выводим значение счетчика посещений
//echo "Вы на четвертой странице";
////echo "<p>Вы посещали четвертую страницу ".$_SESSION['visits']." раз(а).</p>";

echo "<p>Вы посещали третью страницу ".$_SESSION['count']." раз(а).</p>";

?>
</body>
</html>