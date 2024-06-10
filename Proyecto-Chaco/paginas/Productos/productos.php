<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="../../assets/Css/style.css">
</head>
<body> 
<header class = "header-container">
        <div class="logo-container">
            <img src="..\..\assets\imagen\EXTINTORES_CHACO.png" width="500" alt="Chaco_logo">
        </div>
        <div class="login-register-button">
            <a href="..\Login-Register\index.php" class="btn-login">Iniciar sesión/Registrarse</a>
        </div>
</header>
    
    <div class="menu">
        <button><a href="../inicio/index.php">Inicio</a></button>
        <button><a href="../Productos/productos.php">Productos</a></button>
        <button><a href="../Cotizacion/cotizacion.php">Cotizar</a></button>
        <button><a href="../Contacto/contacto.php"> Contacto</a></button>
    </div>
    <div class="search-cart">
        <input type="search" placeholder="Buscar...">
        <a href="#carrito"><img src="../../assets/imagen/shopping-cart.png" alt="Carrito de Compras"></a>
    </div>
    
    <section class="productos">
        <!-- Ejemplo de producto -->
        <div class="producto">
            <img src="../../assets/imagen/ext1.jpg" alt="Nombre del Producto">
            <h3>Nombre del Producto</h3>
            <p>$XXXX (Precio)</p>
            <p>Stock: XX</p>
            <p>Descripción: Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, veritatis. Eius, facere corrupti sed quo nisi consequatur quasi repellendus ipsam? Accusamus tempora adipisci fugit amet explicabo corporis eos architecto deserunt!</p>
            <button class="add-to-cart-btn" data-name="Extintor Modelo A" data-price="120">Agregar a carro</button>
        </div>
        <div class="producto">
            <img src="../../assets/imagen/ext1.jpg" alt="Nombre del Producto">
            <h3>Nombre del Producto</h3>
            <p>$XXXX (Precio)</p>
            <p>Stock: XX</p>
            <p>Descripción: Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut, adipisci recusandae excepturi laboriosam inventore fugit eligendi odit! Provident culpa quaerat iure sequi optio rem, corporis eos voluptatum, sit esse repellat.</p>
            <button class="add-to-cart-btn" data-name="Extintor Modelo B" data-price="120">Agregar a carro</button>
        </div>
        <div class="producto">
            <img src="../../assets/imagen/ext1.jpg" alt="Nombre del Producto">
            <h3>Nombre del Producto</h3>
            <p>$XXXX (Precio)</p>
            <p>Stock: XX</p>
            <p>Descripción: Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae voluptate, consequatur ut veritatis necessitatibus sint magnam quos, reiciendis voluptatem repudiandae tenetur ea aperiam id officia minima officiis nostrum sed excepturi.</p>
            <button class="add-to-cart-btn" data-name="Extintor Modelo C" data-price="120">Agregar a carro</button>
        </div>
        <div class="producto">
            <img src="../../assets/imagen/ext1.jpg" alt="Nombre del Producto">
            <h3>Nombre del Producto</h3>
            <p>$XXXX (Precio)</p>
            <p>Stock: XX</p>
            <p>Descripción: Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nesciunt ullam animi impedit quos? Mollitia soluta odio ex corporis, repudiandae, ipsam quis vel adipisci numquam natus nemo amet, eum rerum.</p>
            <button class="add-to-cart-btn" data-name="Extintor Modelo D" data-price="120">Agregar a carro</button>
        </div>
        <div class="producto">
            <img src="../../assets/imagen/ext1.jpg" alt="Nombre del Producto">
            <h3>Nombre del Producto</h3>
            <p>$XXXX (Precio)</p>
            <p>Stock: XX</p>
            <p>Descripción: Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nesciunt ullam animi impedit quos? Mollitia soluta odio ex corporis, repudiandae, ipsam quis vel adipisci numquam natus nemo amet, eum rerum.</p>
            <button class="add-to-cart-btn" data-name="Extintor Modelo E" data-price="120">Agregar a carro</button>
        </div>
        <div class="producto">
            <img src="../../assets/imagen/ext1.jpg" alt="Nombre del Producto">
            <h3>Nombre del Producto</h3>
            <p>$XXXX (Precio)</p>
            <p>Stock: XX</p>
            <p>Descripción: Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus nesciunt ullam animi impedit quos? Mollitia soluta odio ex corporis, repudiandae, ipsam quis vel adipisci numquam natus nemo amet, eum rerum.</p>
            <button class="add-to-cart-btn" data-name="Extintor Modelo F" data-price="120">Agregar a carro</button>
        </div>
        <!-- Repetir bloques similares para otros productos -->
    </section>

    <div class="cart-container">
        <h2>Carrito de Compras</h2>
        <table id="cart-items">
            <thead>
                <tr>
                    <th>Productos</th>
                    <th>Cantidad</th>
                    <th>Total</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <!-- Los productos se añadirán aquí dinámicamente -->
            </tbody>
        </table>
        <div class="cart-summary">
            <div>Total General: <span id="total-general">$0</span></div>
            <button id="empty-cart">Eliminar todo</button>
            <button id="confirm-order">Confirmar pedido</button>
        </div>
    </div>
<footer>
        
    <div class="footer-links">
        <a href="mailto:ventas@comercialchaco.cl">
            <img src="../../assets/imagen/email-icon.png" alt="Correo">
        </a>
        <a href="https://www.instagram.com/extintoreschaco/">
            <img src="../../assets/imagen/instagram-icon.png" alt="Instagram">
        </a>
        <a href="https://www.facebook.com/extintoreschaco">
            <img src="../../assets/imagen/facebook-icon.png" alt="Facebook">
        </a>
    </div>
    <p>Extintores Chaco &copy; 2024</p>
    <p>Comercialización, fabricación, reparación y distribución de extintores y sistemas contra incendios</p>
    <p>Videla 988-A, Iquique, Región de Tarapacá</p>
</footer>
<script src="Javascript/script_product.js"></script>


</body>
</html>
