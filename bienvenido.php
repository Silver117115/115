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
   <div>
   <?php include "headers/menuacceso.php"; ?>
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
    <?php include "footer\footer.php"; ?>
    <script src="scripts\scripts_index-2.js"></script>
</body>
</html>
