<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro - Proyecto Chaco</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    
    <main>

        <div class="contenedor_todo">
            <div class="recuadro_fondo">
                <div class="recuadro_fondo-login">
                    <h3>¿Tienes una cuenta registrada?</h3>
                    <p>Inicia sesión para ingresar</p>
                    <button id="btn_iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="recuadro_fondo-register">
                    <h3>¿No tienes cuenta registrada?</h3>
                    <p>Registrate para iniciar sesión</p>
                    <button id="btn_registrarse">Registrarse</button>
                </div>
            </div>
        </div>

        <!--Formulario de login y registro-->
        <div class="contenedor_login-register">
            <!--Login-->
            <form action="" class="formulario_login" id="loginForm">
                <h2>Iniciar Sesión</h2>
                <input type="email" id="loginEmail" placeholder="Correo Electronico" required>
                <input type="password" id="loginPassword" placeholder="Contraseña" required>
                <button type="submit">Entrar</button>
            </form>
            <!--Registro-->
            <form action="" class="formulario_register" id="registerForm">
                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre Completo" required>
                <input type="email" placeholder="Correo Electronico" required>
                <input type="text" placeholder="Usuario" required>
                <input type="password" placeholder="Contraseña" required>
                <button type="submit">Registrarse</button>
            </form>

        </div>

        <!-- Bienvenida -->
        <div id="welcomeMessage" style="display: none;">
            <h3>Bienvenido, <span id="user"></span>!</h3>
            <button id="logoutButton">Cerrar Sesión</button>
        </div>

    </main>
    <script src="js/script.js"></script>
</body>
</html>
