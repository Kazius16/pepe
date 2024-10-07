<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['user_id'])) {
    // Redirigir si no está autenticado
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['nombre']; ?>!</h1>
    <p>Tu correo es: <?php echo $_SESSION['correo']; ?></p>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
