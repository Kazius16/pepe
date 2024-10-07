<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WolfTech</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <link rel="stylesheet" href="css/ventas.css">
    <link href="css/tipos.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/agregar.css">

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        /* Estilo para el contenedor del perfil */
        .profile-container {
            position: relative;
            display: inline-block;
        }

        /* El menú desplegable oculto */
        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: #f9f9f9;
            min-width: 150px;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 5px;
        }

        /* Elementos dentro del menú desplegable */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        /* Estilo de hover */
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        /* Mostrar el dropdown al hacer clic */
        .show {
            display: block;
        }

        /* Icono del perfil */
        .profile-icon img {
            width: 35px;
            height: 35px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <a>WolfTech</a>
        </div>
        <nav class="navegador">
            <ul>
                <li><a href="introduccion\index.php">Inicio</a></li>
                <li><a href="#products">Productos</a></li>
                <li><a href="https://api.whatsapp.com/send/?phone=573016505474&text=Hola%2C+quiero+contactarme+con+un+asesor&type=phone_number&app_absent=0">Contacta un asesor</a></li>
                
                  <!-- Si el usuario ha iniciado sesión, mostrar el icono del perfil -->
                <?php if (isset($_SESSION['username'])): ?>
                    <li class="profile-container">
                        <div class="profile-icon" onclick="toggleDropdown()">
                            <img src="assets/img/usuario.png" alt="Perfil">
                        </div>
                        <div id="dropdownMenu" class="dropdown-content">
                            <!-- Abrir el perfil en una nueva pestaña -->
                            <a href="profile.php" target="_blank">Perfil</a>
                            <a href="#" onclick="logout()">Cerrar sesión</a>
                        </div>
                    </li>
                <?php else: ?>
                    <li><a href="login.php"> <img src="assets/img/usuario.png" alt="" class="logo-image" style="width: 35px; height: 35px;"></a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <div class="cart-icon" id="cartIcon">🛒</div>
    </header>

    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Tecnología del Futuro, Hoy</h1>
            <p>Descubre nuestros productos innovadores que transformarán tu vida digital</p>
            <button class="cta-button">Explora Ahora</button>
        </div>
    </section>

    <section class="filters">
        <div class="menu">
            <div class="seccion" id="mouse">
                <h2>Mouse</h2>
            </div>
            <div class="seccion" id="teclados">
                <h2>Teclados</h2>
            </div>
            <div class="seccion" id="pantallas">
                <h2>Pantallas</h2>
            </div>
            <div class="seccion" id="portatiles" class="filter-button" data-filter="computadoras">
                <h2>Portátiles</h2>
            </div>
            <div class="seccion" id="componentes">
                <h2>Componentes</h2>
            </div>
        </div>

    </section>


    <script src="script.js"></script>
    </>

    <div class="containervv">
        <button id="addProductBtn" class="buttonvv">+</button>
    </div>

    <div id="addProductModal" class="modalvv">
    <div class="modal-contentvv">
        <span class="closevv">&times;</span>
        <h2>Agregar Nuevo Producto</h2>
        <!-- Aquí definimos el archivo PHP que procesará el formulario -->
        <form id="productForm" class="formvv" action="guardar.php" method="POST" enctype="multipart/form-data">
            
            <!-- Campo Nombre del Producto -->
            <label for="productName" class="labelvv">Nombre del Producto:</label>
            <input type="text" id="productName" name="productName" required class="inputvv">
            
            <!-- Campo Descripción del Producto -->
            <label for="productDescription" class="labelvv">Descripción:</label>
            <textarea id="productDescription" name="productDescription" required class="textareavv"></textarea>
            
            <!-- Campo Precio -->
            <label for="productPrice" class="labelvv">Precio:</label>
            <input type="number" id="productPrice" name="productPrice" step="0.01" required class="inputvv">
            
            <!-- Campo Stock -->
            <label for="productStock" class="labelvv">Stock:</label>
            <input type="number" id="productStock" name="productStock" required class="inputvv">
            
            <!-- Campo Referencia -->
            <label for="productReference" class="labelvv">Referencia:</label>
            <input type="text" id="productReference" name="productReference" required class="inputvv">
            
            <!-- Campo Imagen -->
            <label for="productImage" class="labelvv">Imagen:</label>
            <input type="file" id="productImage" name="productImage" accept="image/*" required class="inputvv">
            
            <!-- Selector de Categoría -->
            <label for="categoryId" class="labelvv">Categoría:</label>
            <select id="categoryId" name="categoryId" required class="inputvv">
                <!-- Aquí se rellenarán las categorías con JavaScript -->
            </select>
            
            <!-- Selector de Marca -->
            <label for="brandId" class="labelvv">Marca:</label>
            <select id="brandId" name="brandId" required class="inputvv">
                <!-- Aquí se rellenarán las marcas con JavaScript -->
            </select>

            <!-- Botón de Envío -->
            <input type="submit" value="Guardar Producto" class="submit-buttonvv">
        </form>
    </div>
</div>





    <section class="products" id="products">

        <?php

        include("conn/conexion.php");
        $query = "SELECT productos.Nombre_producto, productos.imagen, productos.Precio, marcas.marca, categorias.nom_categorias FROM productos INNER JOIN marcas ON marcas.id_marca=productos.id_marca INNER JOIN categorias ON productos.id_categoria_p=categorias.id_categoria;";
        $resultado = $conexion->query($query);
        while ($row = $resultado->fetch_assoc()) {
            ?>
            <div class="product" style="width: 16rem;" data-category="<?php echo $row["nom_categorias"]; ?>">

                <img src="data:image/jpeg;base64,<?php echo base64_encode($row['imagen']); ?>" />

                <h3><?php echo $row["Nombre_producto"]; ?></h3>
                <p>$ <?php echo number_format($row["Precio"], 0, '.', ','); ?>
                </p>
                <button class="add-to-cart">Agregar al Carrito</button>
                <br><br>
                <button class="fa-solid fa-trash" style="color:#ff0000;"></i>;"></button>

            </div>
            <?php
        }
        ?>


    </section>

    <footer>
        <p>&copy; 2024 WolfTech. Todos los derechos reservados.</p>
    </footer>

    <div class="modal-overlay" id="modalOverlay"></div>
    <div class="cart-modal" id="cartModal">
        <h2>Tu Carrito</h2>
        <div class="cart-items" id="cartItems"></div>
        <div class="cart-total" id="cartTotal"></div>
        <button class="close-modal" id="closeModal">Cerrar</button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const cartIcon = document.getElementById('cartIcon');
            const cartModal = document.getElementById('cartModal');
            const closeModal = document.getElementById('closeModal');
            const modalOverlay = document.getElementById('modalOverlay');
            const addToCartButtons = document.querySelectorAll('.add-to-cart');
            const cartItems = document.getElementById('cartItems');
            const cartTotal = document.getElementById('cartTotal');
            const filterButtons = document.querySelectorAll('.filter-button');
            const products = document.querySelectorAll('.product');
            let cart = [];

            cartIcon.addEventListener('click', openModal);
            closeModal.addEventListener('click', closeModalFunction);
            modalOverlay.addEventListener('click', closeModalFunction);

            addToCartButtons.forEach(button => {
                button.addEventListener('click', addToCart);
            });

            filterButtons.forEach(button => {
                button.addEventListener('click', filterProducts);
            });

            function openModal() {
                cartModal.style.display = 'block';
                modalOverlay.style.display = 'block';
                updateCartDisplay();
            }

            function closeModalFunction() {
                cartModal.style.display = 'none';
                modalOverlay.style.display = 'none';
            }

            function addToCart(event) {
                const product = event.target.closest('.product');
                const productName = product.querySelector('h3').textContent;
                const productPrice = parseFloat(product.querySelector('p').textContent.replace('$', ''));

                cart.push({
                    name: productName,
                    price: productPrice
                });
                updateCartDisplay();

                // Animación de agregar al carrito
                const clone = product.cloneNode(true);
                clone.style.position = 'fixed';
                clone.style.zIndex = '1000';
                clone.style.transition = 'all 1s ease-in-out';
                clone.style.top = `${event.clientY}px`;
                clone.style.left = `${event.clientX}px`;
                document.body.appendChild(clone);

                setTimeout(() => {
                    const rect = cartIcon.getBoundingClientRect();
                    clone.style.top = `${rect.top}px`;
                    clone.style.left = `${rect.left}px`;
                    clone.style.transform = 'scale(0.1)';
                    clone.style.opacity = '0';
                }, 0);

                setTimeout(() => {
                    document.body.removeChild(clone);
                }, 1000);
            }

            function updateCartDisplay() {
                cartItems.innerHTML = '';
                let total = 0;

                cart.forEach(item => {
                    const itemElement = document.createElement('div');
                    itemElement.textContent = `${item.name} - $${item.price.toFixed(2)}`;
                    cartItems.appendChild(itemElement);
                    total += item.price;
                });

                cartTotal.textContent = `Total: $${total.toFixed(2)}`;
            }

            function filterProducts(event) {
                const filter = event.target.getAttribute('data-filter');

                filterButtons.forEach(btn => btn.classList.remove('active'));
                event.target.classList.add('active');

                products.forEach(product => {
                    if (filter === 'all' || product.getAttribute('data-category') === filter) {
                        product.style.display = 'block';
                    } else {
                        product.style.display = 'none';
                    }
                });
            }

            // Nueva animación para la imagen del hero

        });
    </script>
     <script>
        // Función para mostrar/ocultar el dropdown
        function toggleDropdown() {
            document.getElementById("dropdownMenu").classList.toggle("show");
        }

        // Función para cerrar la sesión sin recargar la página
        function logout() {
            // Realizamos una petición AJAX para destruir la sesión
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "logout.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            xhr.onload = function() {
                if (xhr.status == 200) {
                    // Si la sesión se destruye, ocultamos el perfil y mostramos el login
                    location.reload(); // Recargamos la página para actualizar la UI
                }
            };

            xhr.send(); // Enviar la petición
        }

        // Ocultar el dropdown si el usuario hace clic fuera de él
        window.onclick = function(event) {
            if (!event.target.matches('.profile-icon img')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
    <script src="js/agregar.js"></script>

</body>

</html>