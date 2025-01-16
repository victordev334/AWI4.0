<?php
session_start(); 

$nivel = "usuario";  
$user = "Felipe";     
$pass = "1234";       

if (!isset($_COOKIE[$nivel])) {
    setcookie($nivel, $user,  time() + 3600,"/");  
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    
    
    if ($usuario == $user && $contraseña == $pass) {
        $_SESSION["nombre"] = $usuario;  
        header("Location: bienvenido.php");  
        exit;
    } else {
        echo "Credenciales incorrectas. Por favor, intenta nuevamente.";
    }
}

?>

<html>
<body>
<form method="POST">
    <p>Usuario:</p>
    <input type="text" name="usuario" required>
    <p>Contraseña:</p>
    <input type="password" name="contraseña" required>
    <br><br>
    <button type="submit">iniciar</button>
</form>

</body>
</html>