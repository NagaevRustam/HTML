<!DOCTYPE html>
<html>
<head>
    <title>Вывод количество посещений третьей страницы на четвертой</title>
</head>
<body>
<?php
    session_start();
    echo "Вы на четвертой странице";
    echo "<p>Вы посещали третью страницу ".$_SESSION['count']." раз(а).</p>";
?>
</body>
</html>