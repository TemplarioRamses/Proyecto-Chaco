<?php
// Conexión a la base de datos
$host = 'localhost';  // Dirección del servidor de MySQL
$db = 'formulario login-register';  // Nombre de tu base de datos
$user = 'root';  // Usuario de la base de datos
$pass = '';  // Contraseña del usuario de la base de datos

$conexion = new mysqli($host, $user, $pass, $db);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consulta para obtener todos los productos
$query = "SELECT * FROM productos";
$resultado = $conexion->query(query);

if ($resultado->num_rows > 0) {
    while ($producto = $resultado->fetch_assoc()) {
        echo "<div class='producto'>";
        echo "<img src='{$producto['imagen']}' alt='{$producto['nombre']}'>";
        echo "<div class='info-producto'>";
        echo "<h3>{$producto['nombre']}</h3>";
        echo "<p>{$producto['descripcion']}</p>";
        echo "<p>Precio: ${$producto['precio']}</p>";
        echo "<p>Disponibilidad: {$producto['stock']} unidades en stock</p>";
        echo "<button onclick='addToCart({$producto['id']}, 1)'>Agregar al carrito</button>";
        echo "</div></div>";
    }
} else {
    echo "No hay productos disponibles.";
}

$conexion->close();
?>