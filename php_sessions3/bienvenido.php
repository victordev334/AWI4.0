<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bienvenido</title>
</head>
<body>
    <?php
        // isset verifica si un varible 
        if (isset($_SESSION["valido"]) && $_SESSION["valido"] === true) {
            echo "Bienvenido, " . $_SESSION["user"] . "!";
        }
    ?>
    <button onclick="window.location.href='borrar.php';">Cerrar Sesion</button>
</body>
</html>