<?php
session_start();
session_destroy(); // Destruye todas las variables de sesión
header("Location: signin.php"); // Redirige al usuario al login
exit();
?>
