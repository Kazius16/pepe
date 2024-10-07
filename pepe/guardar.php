<?php
$servername = "localhost"; 
$username = "root";        
$password = "1234";        
$dbname = "wolftech";      

// Crear la conexión a la base de datos
// Verificamos que la solicitud es de tipo POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recibir los datos del formulario
    $productName = $_POST['productName'];
    $productDescription = $_POST['productDescription'];
    $productPrice = $_POST['productPrice'];
    $productStock = $_POST['productStock'];
    $productReference = $_POST['productReference'];
    $categoryId = $_POST['categoryId'];
    $brandId = $_POST['brandId'];
    
    // Procesamiento de la imagen
    if (isset($_FILES['productImage'])) {
        $image = $_FILES['productImage'];
        $imagePath = 'uploads/' . basename($image['name']);
        
        // Mover la imagen subida a la carpeta deseada
        if (move_uploaded_file($image['tmp_name'], $imagePath)) {
            echo "Imagen subida exitosamente a: " . $imagePath . "<br>";
        } else {
            echo "Error al subir la imagen.<br>";
        }
    }

    // Aquí puedes procesar estos datos para guardarlos en la base de datos
    echo "Producto: $productName <br>";
    echo "Descripción: $productDescription <br>";
    echo "Precio: $productPrice <br>";
    echo "Stock: $productStock <br>";
    echo "Referencia: $productReference <br>";
    echo "Categoría ID: $categoryId <br>";
    echo "Marca ID: $brandId <br>";

    // Aquí puedes realizar la inserción de los datos en tu base de datos
    // Ejemplo:
    // $conn = new mysqli('localhost', 'root', '1234', 'wolftech');
    // $sql = "INSERT INTO productos (nombre, descripcion, precio, stock, referencia, id_categoria, id_marca, imagen) VALUES ('$productName', '$productDescription', '$productPrice', '$productStock', '$productReference', '$categoryId', '$brandId', '$imagePath')";
    // $conn->query($sql);
}
?>
