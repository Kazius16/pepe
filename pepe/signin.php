<?php
include("conn/conexion.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si los campos email y password están definidos
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Consulta para obtener los datos del usuario con el correo electrónico
        $query = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = $conexion->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        // Verificar la contraseña
        if ($user && password_verify($password, $user['password'])) {
            // Iniciar sesión correctamente
            $_SESSION['username'] = $user['username'];  // Almacenar el username en la sesión
            $_SESSION['email'] = $user['email'];        // Almacenar el email en la sesión

            // Redirigir al index.php o al perfil del usuario
            header("Location: index.php");
            exit();
        } else {
            echo "Usuario o contraseña incorrectos.";
        }
    } else {
        echo "Por favor, rellena todos los campos.";
    }
}
?>
