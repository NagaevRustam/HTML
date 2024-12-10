<html>
<head>
    <title>Окно стандартного сообщения о несуществующем URL</title>
</head>

<body>
<?php
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
    echo $_SERVER["SERVER_PROTOCOL"] . " 404 Not Found";
?>
</body>
</html>