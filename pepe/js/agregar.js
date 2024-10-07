 // Obtener elementos del DOM
 var modal = document.getElementById("addProductModal");
 var btn = document.getElementById("addProductBtn");
 var span = document.getElementsByClassName("closevv")[0];
 var form = document.getElementById("productForm");

 // Abrir el modal
 btn.onclick = function() {
     modal.style.display = "block";
 }

 // Cerrar el modal
 span.onclick = function() {
     modal.style.display = "none";
 }

 // Cerrar el modal si se hace clic fuera de él
 window.onclick = function(event) {
     if (event.target == modal) {
         modal.style.display = "none";
     }
 }

 // Manejar el envío del formulario
 form.onsubmit = function(e) {
     e.preventDefault();
     // Aquí puedes agregar la lógica para guardar el producto
     console.log("Producto guardado:", {
         name: document.getElementById("productName").value,
         description: document.getElementById("productDescription").value,
         price: document.getElementById("productPrice").value
     });
     modal.style.display = "none";
     form.reset();
 }

 document.addEventListener("DOMContentLoaded", function() {
    fetch('../categorias_marcas.php')  // Aquí pones la ruta a tu archivo PHP
        .then(response => response.json())
        .then(data => {
            const categorySelect = document.getElementById('productCategory');
            const brandSelect = document.getElementById('productBrand');

            // Llenar el select de categorías
            data.categories.forEach(category => {
                const option = document.createElement('option');
                option.value = category.id_categoria;
                option.textContent = category.nombre;
                categorySelect.appendChild(option);
            });

            // Llenar el select de marcas
            data.brands.forEach(brand => {
                const option = document.createElement('option');
                option.value = brand.id_marca;
                option.textContent = brand.nombre;
                brandSelect.appendChild(option);
            });
        })
        .catch(error => console.error('Error:', error));
});

document.getElementById('productForm').addEventListener('submit', function(event) {
    event.preventDefault();  // Evita que la página se recargue

    const formData = new FormData(this);

    fetch('guardar_producto.php', {  // Aquí pones la ruta a tu archivo PHP de guardar
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        alert(result);  // Mensaje de éxito o error
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

// Hacer una solicitud AJAX para obtener las categorías y marcas
fetch('categoriasmarcas.php')
    .then(response => response.json())
    .then(data => {
        // Rellenar las categorías
        let categorySelect = document.getElementById('categoryId');
        data.categories.forEach(category => {
            let option = document.createElement('option');
            option.value = category.id_categoria;
            option.text = category.nom_categorias;
            categorySelect.appendChild(option);
        });

        // Rellenar las marcas
        let brandSelect = document.getElementById('brandId');
        data.brands.forEach(brand => {
            let option = document.createElement('option');
            option.value = brand.id_marca;
            option.text = brand.marca;
            brandSelect.appendChild(option);
        });
    })
    .catch(error => console.error('Error al cargar las categorías y marcas:', error));