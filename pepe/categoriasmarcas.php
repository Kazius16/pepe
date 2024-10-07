<?php
// Conectar a la base de datos
$host = 'localhost';  // Si estás usando AMPPS en tu máquina local
$usuario = 'root';  // Cambia por tu nombre de usuario de MySQL
$contraseña = '1234';  // Cambia por tu contraseña de MySQL
$nombre_base_datos = 'wolftech';  // Cambia por el nombre de tu base de datos

$conn = new mysqli($host, $usuario, $contraseña, $nombre_base_datos);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener categorías
$sqlCategories = "SELECT id_categoria, nom_categorias FROM categorias";
$resultCategories = $conn->query($sqlCategories);

// Consulta para obtener marcas
$sqlBrands = "SELECT id_marca, marca FROM marcas";
$resultBrands = $conn->query($sqlBrands);

// Verificar que haya resultados
if ($resultCategories && $resultBrands) {
    $categories = [];
    while ($row = $resultCategories->fetch_assoc()) {
        $categories[] = $row;
    }

    $brands = [];
    while ($row = $resultBrands->fetch_assoc()) {
        $brands[] = $row;
    }

    // Devolver los datos en formato JSON
    header('Content-Type: application/json');
    echo json_encode(['categories' => $categories, 'brands' => $brands]);
} else {
    echo json_encode(['error' => 'No se encontraron categorías o marcas']);
}

// Cerrar la conexión
$conn->close();
?>
