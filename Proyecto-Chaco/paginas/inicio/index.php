<!DOCTYPE html>
<html lang="es">
<head>
    <link href="..\..\assets\Css\style.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Biryani:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extintores Chaco</title>
</head>
<header class = "header-container">
        <div class="logo-container">
            <img src="..\..\assets\imagen\EXTINTORES_CHACO.png" width="500" alt="Chaco_logo">
        </div>
        <div class="login-register-button">
            <a href="..\Login-Register\index.php" class="btn-login">Iniciar sesión/Registrarse</a>
        </div>
</header>
<body> 
    <main>
        <div class="menu">
            <button><a href="../inicio/index.php">Inicio</a></button>
            <button><a href="../Productos/productos.php">Productos</a></button>
            <button><a href="../Cotizacion/cotizacion.php">Cotizar</a></button>
            <button><a href="../Contacto/contacto.php"> Contacto</a></button>
        </div>
    

        <h1>Extintores Chaco</h1>

        <p style="color:rgb(255, 0, 0);"><strong>Venta y mantención de equipos contra incendios.</strong></p>
        <hr>
        <div class="container">
            <div class="image-container">
                <img src="..\..\assets\imagen\ext-hold.png" alt="Extintor sostenido">
            </div>
            <div class="text-container">
                <p style="font-size: 24px;"><strong>Sobre nosotros</strong></p>
                <hr>
                <p>En Extintores Chaco nos enorgullece ofrecer soluciones de seguridad contra incendios para la comunidad de Iquique y la región de Tarapacá. Con años de experiencia en el campo, nos hemos ganado la confianza de nuestros clientes gracias a nuestra dedicación a la excelencia y nuestro compromiso con la seguridad.</p>
                <p>Ofrecemos una amplia gama de productos y servicios, incluyendo la venta de extintores, mantención de equipos contra incendios, y capacitación en prevención de incendios.</p>
                <p>En Extintores Chaco, entendemos la importancia de la seguridad contra incendios y nos comprometemos a proporcionar soluciones efectivas y asequibles para proteger a su hogar o negocio. Ya sea que necesite un nuevo sistema de extinción de incendios, la recarga de sus extintores existentes o una inspección de seguridad, estamos aquí para ayudarlo.</p>
                <p>Explore nuestro sitio para conocer más sobre nuestros servicios y productos, y no dude en ponerse en contacto con nosotros para obtener más información o para programar una consulta. En Extintores Chaco, su seguridad es nuestra prioridad. </p>
            </div>
        </div>
        <hr>
        <p style="font-size: 32px; color: black;"><strong>Nuestros productos</strong></p>
        <div class="carousel">
            <div class="carousel-container">
                <div class="slide active">
                    <img src="..\..\assets\imagen\pqs.png" class="carrusel-img" alt="Slide 1">
                </div>
                <div class="slide">
                    <img src="..\..\assets\imagen\co2.png" class="carrusel-img" alt="Slide 2">
                </div>
                <div class="slide">
                    <img src="..\..\assets\imagen\acetato-de-potasio.png" class="carrusel-img" alt="Slide 3">
                </div>
            </div>
            <button class="prev" onclick="prevSlide()">&#10094;</button>
            <button class="next" onclick="nextSlide()">&#10095;</button>
        </div>
        <hr>
        <p style="font-size: 32px; color: black;"><strong>Servicios</strong></p>
        <div class="container2">
            <div class="info-container">
                <p style="font-size: 24px; color: brown;"><strong>Mantención</strong></p>
                <img src="..\..\assets\imagen\mantencion.png" alt="Mantencion">
                <div class="texto">
                    <p>Brindamos servicio de mantención a equipos dañados o vencidos. Se evalúa el estado del extintor y se realizan cambios de repuestos si es que es necesario.</p>
                </div>
            </div>
            <div class="info-container">
                <p style="font-size: 24px; color: brown;"><strong>Recarga</strong></p>
                <img src="..\..\assets\imagen\recarga.png" alt="Recarga">
                <div class="texto">
                    <p>También realizamos servicio de recarga de extintores, este servicio es necesario solo si el extintor ya no dispone del agente químico dentro del cilindro.</p>
                </div>
            </div>
        </div>
        

    </main>

    <br>

    <footer>
        
        <div class="footer-links">
            <a href="mailto:ventas@comercialchaco.cl">
                <img src="..\..\assets\imagen\email-icon.png" alt="Correo">
            </a>
            <a href="https://www.instagram.com/extintoreschaco/">
                <img src="..\..\assets\imagen\instagram-icon.png" alt="Instagram">
            </a>
            <a href="https://www.facebook.com/extintoreschaco">
                <img src="..\..\assets\imagen\facebook-icon.png" alt="Facebook">
            </a>
        </div>
        <p>Extintores Chaco &copy; 2024</p>
        <p>Comercialización, fabricación, reparación y distribución de extintores y sistemas contra incendios</p>
        <p>Videla 988-A, Iquique, Región de Tarapacá</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>