<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="titulo">
        <?php 
            // Imprimir el nombre almacenado en la sesión
            echo isset($_SESSION["nombre"]) ? $_SESSION["nombre"] : "No se ha logueado";
        ?>
    </h1>
</body>
</html>
