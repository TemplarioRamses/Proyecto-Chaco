<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sección de Cotización</title>
    <link rel="stylesheet" href="../Css/stylecot.css"> 
</head>
<body>
    <div class="logo-container">
        <img src="../imagen/EXTINTORES_CHACO.png" width="500" alt="Chaco_logo">
    </div>

<div class="menu">
    <a class="button" href="../Index/index.html">Inicio</a>
    <a class="button" href="../Productos/productos.html">Productos</a>
    <a class="button" href="../Cotizacion/cotizacion.php">Solicitar Cotización</a>
    <a class="button" href="../Contacto/contacto.html">Contacto</a>
</div>



<div class="form-container">
        <h1>Solicitar cotización</h1>
        <form action="send.php" method="POST">
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="details">Detalles de la Cotización:</label>
                <textarea id="details" name="details" rows="5" required></textarea>
            </div>
            <button type="submit" name="send" onClick="myFunction()">Enviar Cotización</button>
        </form>
    </div>

<footer>
        
<div class="footer-links">
        <a href="mailto:ventas@comercialchaco.cl">
            <img src="../imagen/email-icon.png" alt="Correo">
        </a>
        <a href="https://www.instagram.com/extintoreschaco/">
            <img src="../imagen/instagram-icon.png" alt="Instagram">
        </a>
        <a href="https://www.facebook.com/extintoreschaco">
            <img src="../imagen/facebook-icon.png" alt="Facebook">
        </a>
    </div>
    <p>Extintores Chaco &copy; 2024</p>
    <p>Comercialización, fabricación, reparación y distribución de extintores y sistemas contra incendios</p>
    <p>Videla 988-A, Iquique, Región de Tarapacá</p>
</footer>

<?php
    include("send.php");
?>

<script>
    function myFunction() {
        window.location.href="http://localhost/Proyecto_Chaco/Chaco-SW" 
    }
</script>

</body>
</html>
