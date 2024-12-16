<!DOCTYPE html>
<html>
<head>
    <title>Вывод количество посещений третьей страницы на четвертой</title>
</head>
<body>
<?php
    session_start();
    echo "Вы на четвертой странице";
    if (!empty($_SESSION['count'])) {
        echo "<p>Вы посещали третью страницу ".$_SESSION['count']." раз(а).</p>";
    } else {
        echo "<p>Вы не посещали третью страницу.</p>";
    }
?>
</body>
</html>