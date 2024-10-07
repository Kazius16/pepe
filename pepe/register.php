<?php
// Datos de conexión a la base de datos
$servername = "localhost"; 
$username = "root";        
$password = "1234";        
$dbname = "wolftech";      

// Crear la conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Obtener los datos enviados desde el formulario (usando el método POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar que los campos están presentes
    $nombre = isset($_POST['username']) ? $_POST['username'] : '';
    $correo = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Verificar que los campos no estén vacíos
    if (!empty($nombre) && !empty($correo) && !empty($password)) {
        
        // Encriptar la contraseña
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Crear la consulta SQL para insertar los datos
        $sql = "INSERT INTO usuarios (username, email, password, created_at) VALUES (?, ?, ?, NOW())";

        // Preparar la consulta SQL (evitar inyección de SQL)
        if ($stmt = $conn->prepare($sql)) {
            // Vincular los parámetros a la consulta preparada
            $stmt->bind_param("sss", $nombre, $correo, $hashed_password);

            // Ejecutar la consulta
            if ($stmt->execute()) {
                // Redirigir al usuario a la página de inicio de sesión después de registrarse
                header("Location: login.php");
                exit();
            } else {
                // En caso de error en la ejecución de la consulta
                echo "Error al registrar: " . $stmt->error;
            }

            // Cerrar el statement
            $stmt->close();
        } else {
            echo "Error en la preparación de la consulta: " . $conn->error;
        }
    } else {
        echo "Todos los campos son obligatorios.";
    }
}

// Cerrar la conexión
$conn->close();
?>
