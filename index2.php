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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Yo no lo hago por que yo ya lo tengo: Cursos y más</title>
    <script src="https://kit.fontawesome.com/3abdfc9b28.js" crossorigin="anonymous"></script>
</head>
<body>

    <header class="header">
        <div class="cont">
            <a class="logo" href="index.php">
                <h1 class="logo">Hazlo <span class="logo-span">tu</span></h1>
            </a>
            <a href="php/cerrar_sesion.php">Cerrar sesion</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="32" 
             height="32" viewBox="0 0 24 24" 
             stroke-width="1.5" stroke="#9e9e9e" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                <path d="M21 21l-6 -6" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" 
               width="32" height="32" viewBox="0 
               0 24 24" stroke-width="1.5" stroke="#9e9e9e" fill="none" stroke-linecap="round" stroke- 
                linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                <path d="M17 17h-11v-14h-2" />
                <path d="M6 5l14 1l-1 7h-13" />
              </svg>
            <nav>
                <a class="" href="#">Registrate</a>
                <a class="" href="#">¿Quieres saber más?</a>
                <a class="" href="#"></a>
            </nav>
        </div>
        
    </header>
        <main>
            <h3>
                ¿Tu CV no es suficiente? ¿Estancado en tu   
                desarrollo de  personaje?
            </h3>       
        </main>
    <section>

    <main>
        <h3>¿Tu CV no es suficiente? ¿Estancado en tu   
            desarrollo de  personaje?
       </h3>       
    </main>

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


</body>
</html>
