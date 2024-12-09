<!DOCTYPE html>
<html>
<head>
    <title>Счетчик посещений на PHP</title>
</head>
<body>
<?php
session_start();
// Проверяем, существует ли уже счетчик посещений
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}
// Увеличиваем счетчик посещений
$_SESSION['count']++;

if ($_SESSION['count'] % 3 == 0) {
    header('Location: page4.php');
}

// Выводим значение счетчика посещений
echo "<p>Вы посещали третью страницу ".$_SESSION['count']." раз(а).</p>";
?>
</body>
</html>



<?php
////ob_start();
//// Редирект на другую страницу
//header('Location: page4.php');
////ob_end_flush();
//exit();
//
//
//
//
//session_start();
//if ( !isset( $_SESSION['count'] ) )
//    $_SESSION['count'] = 0;
//$_SESSION['count']++;
//
//?>