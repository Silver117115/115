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
    <title>Yo no lo hago por que yo ya lo tengo: Cursos y más</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<?php include "headers\menuacceso.php"; ?>

<body id="body">

    <header class="header">
        <div class="icon_menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
        <div class="cont">
            <a class="logo" href="index.php"></a>          
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            <nav>
                <a class="" href="#">Registrate</a>
                <a class="" href="#">¿Quieres saber más?</a>
                <a class="" href="#"></a>
            </nav>
        </div>   
    </header>
    <?php include "footer\footer.php"; ?>
</body>
</html>
