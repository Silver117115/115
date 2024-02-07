<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <title>Document</title>
</head>
<body>



<nav class="sidebar close">
        <header>
            <div class="text logo">
                <span class="name">Aprende Tu</span>
                <span class="profe">Desarrollando ideas</span>
            </div>
            <i class="bx bx-menu toogle"></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class="bx bx-search icon"></i>
                    <input type="text" placeholder="Buscar...">
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-home-alt icon"></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-bar-chart-alt-2 icon"></i>
                            <span class="text nav-text">Estadístca</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-bell icon"></i>
                            <span class="text nav-text">Notificaciones</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-pie-chart-alt icon"></i>
                            <span class="text nav-text">Analíticas</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-heart icon"></i>
                            <span class="text nav-text">Reacciones</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-wallet icon"></i>
                            <span class="text nav-text">Cartera</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                <a href="php/cerrar_sesion.php">
                        <i class="bx bx-log-out icon"></i>
                        <span class="text nav-text">Salir</span>
                    </a>
                </li>
                <li class="mode">
                    <div class="sun-moon">
                        <i class="bx bx-moon icon moon"></i>
                        <i class="bx bx-sun icon sun"></i>
                    </div>
                    <span class="mode-text text">Modo oscuro</span>
                    <div class="toogle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>
    </nav>

    <section class="home">
    <nav>
        <a class="home__nav" href="index.php">Registrate</a>
        <a class="home__nav" href="#">¿Quieres saber más?</a>
        <a class="home__nav" href="#">Aprende a Aprender</a>
    </nav>
        <div class="text">
            Dashboard
        </div>
        <section>
            <h2>Aprende más... Prácticando más</h2>
            <h3>Preparación Básica hasta una Especialización</h3>
            <h2>Más Demandados</h2>
        </section>
        <section class="container">
        <article class="post">
            <h4>Título de mi post</h4>
            <p>Descripción de mi post</p>
            <img src="img/secundaria.jpg" alt="cursosecundaria">
            <p>Texto del artículo e información</p>
        </article>
        <article class="post">
            <h4>Título de mi post 2</h4>
            <p>Descripción de mi post 2</p>
            <img src="img/bachillerato.jpg" alt="cursobachillerato">
            <p>Texto del artículo e información</p>
        </article>
        <article class="post">
            <h4>Título de mi post 3</h4>
            <p>Descripción de mi post 3</p>
            <img src="img/universidad.jpg" alt="cursouniversidad">
            <p>Texto del artículo e información</p>
        </article>
        </section>
        <aside>
            <h4>Categorías</h4>
            <div>
                <h4>Tecnología</h4>
                <p>Introducción a la programación</p>
                <p>JavaScript</p>
                <p>Desarrollo Web</p>
            </div>
            <div>
                <h4>Educación Básica y Medio-Superior</h4>
                <p>Primaria</p>
                <p>Secundaria</p>
                <p>Bachillerato</p>
            </div>
            <div>
                <h4>Metodos de Aprendizaje</h4>
                <p>Técnicas de Estudio</p>
                <p>Meditación</p>
                <p>Deja el Ciclo infinito del Estudiante</p>
            </div>
        </aside>
    
        <?php include "footer/footer.php"; ?>
    </section>
    <script src="scripts\scripts_index-2.js"></script>
</body>
</html>