<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Header</title>
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
    <script src="../scripts/scripts_index-2.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
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
                        <a href="../bienvenido.php">
                            <i class="bx bx-home-alt icon"></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="modules\estadistica.php">
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

    

    
    
</body>
</html>