<?php
    session_start();
    session_unset();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Sesion acabada</p>
    <button onclick="window.location.href='index.php';">Regresar al inicio sesion</button>
</body>
</html>