<?php
// Verificar si las cookies ya están configuradas y si aún son válidas
if (isset($_COOKIE['valido']) && $_COOKIE['valido'] == 'true') {
    // Si las cookies están válidas, redirigir automáticamente a bienvenida.php
    header('Location: bienvenida.php');
    exit;
}

// Verificar si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Datos del usuario y contraseña
    $usuario = 'Dejah';
    $password = '1234';
    
    // Obtener los datos ingresados
    $usuario_ingresado = $_POST['usuario'];
    $password_ingresado = $_POST['password'];

    // Validación de usuario y contraseña
    if ($usuario_ingresado == $usuario && $password_ingresado == $password) {
        // Crear cookies con tiempo de expiración (5 segundos)
        setcookie('nombre', 'Dejah Thoris', time() + 5, '/'); // 5 segundos
        setcookie('status', 'activo', time() + 5, '/');
        setcookie('valido', 'true', time() + 5, '/');
        
        // Redirigir a bienvenida.php
        header('Location: bienvenido.php');
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
</head>
<body>
    <h1>Iniciar sesión</h1>
    <form method="POST" action="">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Iniciar sesión</button>
    </form>
    
    <?php
    if (isset($error)) {
        echo "<p style='color: red;'>$error</p>";
    }
    ?>
</body>
</html>
