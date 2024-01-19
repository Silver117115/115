<?php 

session_start();

if(isset($_SESSION['usuario'])){
    echo '
    <script>
    alert("Por favor debes iniciar sesion");
    window.location = "index.php";
    </script>
    ';
    session_destroy();
    die();
}

?>

<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Yo no lo hago por que yo ya lo tengo: Cursos y más</title>
    <script src="https://kit.fontawesome.com/3abdfc9b28.js" crossorigin="anonymous"></script>
</head>
<body id="body">

    <header class="header">
        <div class="icon_menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
        <div class="cont">
            <a class="logo" href="index.php"></a>
            <a href="php/cerrar_sesion.php">Cerrar sesion</a>
            <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            <nav>
                <a class="" href="#">Registrate</a>
                <a class="" href="#">¿Quieres saber más?</a>
                <a class="" href="#"></a>
            </nav>
        </div>
        
    </header>
    <div class="menu__side" id="menu_side">
        <div class="name__page">
            <i class="fab fa-youtube"></i>
            <h4>Aprende tu</h4>
        </div>
        <div class="option__menu">
            <a href="#" class="selected">
        
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <i class="far fa-file" title="Portafolio"></i>
                    <h4>Portafolio</h4>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <i class="fas fa-video" title="Cursos"></i>
                    <h4>Cursos</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-sticky-note" title="Blog"></i>
                    <h4>Blog</h4>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <i class="far fa-id-badge" title="Contacto"></i>
                    <h4>Contacto</h4>
                </div>
            </a>
            <a href="#">
                <div class="option">
                    <i class="far fa-address-card" title="Nosotros"></i>
                    <h4>Nosotros</h4>
                </div>
            </a>
        </div>
    </div>
    <div class="body_page">
        <div class="cover"></div>
        <div class="container_article">
            <div class="box_article"></div>
            <div class="box_article"></div>
            <div class="box_article"></div>
            <div class="box_article"></div>
            <div class="box_article"></div>
            <div class="box_article"></div>
            <div class="box_article"></div>
            <div class="box_article"></div>
        </div>
    </div>
    <footer>
        <div class="container_footer">
            <div class="box_footer">
                <div class="logo">
                    <img src="" alt="">
                </div>
                <div class="terms">
                    <p>Esta es una pequeña prueba para el footer hijos de perra a ver si les gusta o comen salchicha</p>
                </div>
            </div>
            <div class="box_footer">
                <h2>Soluciones</h2>
                <a href="#">¿Problemas con tus cursos?</a>
                <a href="#">Consultas</a>
                <a href="#">Aclaraciones</a>
                <a href="#">¿Problemas con tu pago?</a>
            </div>
            <div class="box_footer">
                <h2>Compañia</h2>
                <a href="#">Acerca de</a>
                <a href="#">Trabajos</a>
                <a href="#">Procesos</a>
                <a href="#">Servicios</a>
            </div>
            <div class="box_footer">
                <h2>Redes sociales</h2>
                <a href="#"><i class="fab fa-facebook-square"></i>Facebook</a>
                <a href="#"><i class="fa-brands fa-square-x-twitter"></i>X</i></a>
                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
            </div>
        </div>

        <div class="box__copyright">
            <hr>
            <p>Todos los derechos reservados © 2024 <b>Zorras en servicio</b></p>
        </div>

    </footer>
    <script src="scripts\scripts_index-2.js"></script>
</body>
</html>
