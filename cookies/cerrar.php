<?php
// Borrar las cookies configuradas
setcookie('nombre', '', time() - 3600, '/');
setcookie('status', '', time() - 3600, '/');
setcookie('valido', '', time() - 3600, '/');

// Redirigir a index.php
header('Location: index.php');
exit;
