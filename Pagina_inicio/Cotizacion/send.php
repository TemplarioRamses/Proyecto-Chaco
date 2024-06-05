<?php
// Configuración de la conexión a la base de datos
$host = 'localhost';  // Dirección del servidor de MySQL
$db = 'prueba_cotizacion';  // Nombre de tu base de datos
$user = 'root';  // Usuario de la base de datos
$pass = '';  // Contraseña del usuario de la base de datos

// Conexión a la base de datos usando mysqli
$conexion = new mysqli($host, $user, $pass, $db);

// Verifica si hubo un error de conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Verifica si el formulario fue enviado usando el método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibe y valida los datos enviados desde el formulario
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $details = filter_var($_POST['details'], FILTER_SANITIZE_STRING);

    // Prepara la consulta SQL para insertar datos en la base de datos
    $consulta = $conexion->prepare("INSERT INTO cotizacion(email, mensaje) VALUES (?, ?)");

    // Verifica si la consulta fue preparada con éxito
    $consulta->bind_param("ss", $email, $details);

    // Ejecuta la consulta y verifica si fue exitosa
    if ($consulta->execute()) {
        // Redirigir a cotizacion.php
        header("Location: cotizacion.php");
        exit(); // Asegura que el script se detiene aquí
    } else {
        header("Location: cotizacion.php?status=error&message=" . urlencode($conexion->error));
    }

    // Cierra la consulta
    $consulta->close();
}

// Cierra la conexión a la base de datos
$conexion->close();
?>