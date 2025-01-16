<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <?php
        $_SESSION["nombre"]="Dejah";
    ?>
    <p><?php echo $_SESSION["nombre"];?></p><br>
    <a href="imprimir.php">Imprimir</a>
    <a href="borrar.php">Borrar</a>
</body>
</html>