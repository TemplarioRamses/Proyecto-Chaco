document.getElementById("btn_iniciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn_registrarse").addEventListener("click", register);
window.addEventListener("resize", anchoPagina);

//Declaración de variables
var contenedor_login_register = document.querySelector(".contenedor_login-register");
var formulario_login = document.querySelector(".formulario_login");
var formulario_register = document.querySelector(".formulario_register");
var recuadro_fondo_login = document.querySelector(".recuadro_fondo-login");
var recuadro_fondo_register = document.querySelector(".recuadro_fondo-register");

function anchoPagina(){
    if (window.innerWidth > 850) {
        recuadro_fondo_login.style.display = "block";
        recuadro_fondo_register.style.display = "block";
    }
    else{
        recuadro_fondo_register.style.display = "block";
        recuadro_fondo_register.style.opacity = "1";
        recuadro_fondo_login.style.display = "none";
        formulario_login.style.display = "block";
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0px";
    }
}

anchoPagina();

function iniciarSesion(){

    if(window.innerWidth>850){
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "540px";
        formulario_login.style.display = "block";
        recuadro_fondo_register.style.opacity = "1";
        recuadro_fondo_login.style.opacity = "0";
    }
    else{
        formulario_register.style.display = "none";
        contenedor_login_register.style.left = "0px";
        formulario_login.style.display = "block";
        recuadro_fondo_register.style.display = "block";
        recuadro_fondo_login.style.display = "none";
    }
}

function register(){
    formulario_register.style.display = "block";
    contenedor_login_register.style.left = "920px";
    formulario_login.style.display = "none";
    recuadro_fondo_register.style.opacity = "0";
    recuadro_fondo_login.style.opacity = "1";
}

document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    const welcomeMessage = document.getElementById('welcomeMessage');
    const usernameSpan = document.getElementById('user');
    const logoutButton = document.getElementById('logoutButton');
    const loginSection = document.querySelector('.contenedor_login-register');
    const fondoSection = document.querySelector('.contenedor_todo');

    // Verificar si ya hay un usuario logueado
    const storedUser = localStorage.getItem('username');
    if (storedUser) {
        showWelcomeMessage(storedUser);
    }

    loginForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const email = document.getElementById('loginEmail').value;
        const password = document.getElementById('loginPassword').value;
        
        //Guardar el usuario en localStorage
        if (email && password) { // Simple verificación, reemplaza con lógica real
            localStorage.setItem('username', email);
            showWelcomeMessage(email);
        }
    });

    logoutButton.addEventListener('click', function() {
        localStorage.removeItem('username');
        showLoginForm();
    });

    function showWelcomeMessage(username) {
        usernameSpan.textContent = username;
        loginSection.style.display = 'none';
        fondoSection.style.display = 'none';
        welcomeMessage.style.display = 'block';
    }

    function showLoginForm() {
        loginSection.style.display = 'block';
        fondoSection.style.display = 'block';
        welcomeMessage.style.display = 'none';
    }

    // Manejo de botones de inicio de sesión y registro
    document.getElementById('btn_iniciar-sesion').addEventListener('click', function() {
        document.querySelector('.formulario_login').style.display = 'block';
        document.querySelector('.formulario_register').style.display = 'none';
    });

    document.getElementById('btn_registrarse').addEventListener('click', function() {
        document.querySelector('.formulario_login').style.display = 'none';
        document.querySelector('.formulario_register').style.display = 'block';
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.getElementById('loginForm');

    loginForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Evita que el formulario se envíe de forma predeterminada

        // Aquí puedes añadir la lógica de autenticación

        // Redirigir a la página de inicio después de la autenticación
        window.location.href = '../Pagina_inicio/Index/index.html'; // Cambia 'index.html' por la ruta de tu página de inicio
    });
});
