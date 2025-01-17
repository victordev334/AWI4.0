<?php
// Verificar si las cookies están configuradas y aún son válidas
if (isset($_COOKIE['valido']) && $_COOKIE['valido'] == 'true') {
    $nombre = $_COOKIE['nombre'];
} else {
    // Si las cookies ya no son válidas (expiraron), redirigir a index.php
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $nombre; ?></h1>
    <a href="cerrar.php">Cerrar sesión</a>
</body>
</html>
