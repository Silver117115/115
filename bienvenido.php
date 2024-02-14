<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    echo '
    <script>
    alert("Por favor, completa todos los campos del formulario.");
    window.location = "index.php";
    </script>
    ';
    exit();
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
    <link rel="stylesheet" href="./css\style2.css">
</head>
<?php include "headers/menuacceso.php"; ?>

<body>
<section class="titulos">
        <h2>Aprende más... Prácticando más</h2>
        <h3>Preparación Básica hasta una Especialización</h3>
        <h2>Más Demandados</h2>
</section>
<div class="cont-flex"> 
    <div class="container">
        <div class="card card-1">
            <img src="img/secundaria.jpg" alt="secundaria" >
            <h4>Educacion Basica</h4>
            <p>En esta seccion tenemos como vision dar apoyo a los jiovenes y facilitarles su aprendizaje en materias complicadas</p>
        </div>
    </div>
    <div class="container">
        <div class="card card-2">
            <img src="img/bachillerato.jpg" alt="bachillerato" >
            <h4>Educacion Media</h4>
            <p>En esta seccion tenemos como vision dar induccion a los jovenes para que puedan desarrollar una carrera tecnica</p>
        </div>
    </div>
    <div class="container">
        <div class="card card-3">
            <img src="img/universidad.jpg" alt="universidad" >
            <h4>Educacion Superior</h4>
            <p>En esta seccion tenemos como visión dar apoyo a los jovenes y facilitarles su aprendizaje en materias complicadas</p>
        </div>
    </div>
    <div class="container">
        <div class="card card-4">
            <img src="img/secundaria.jpg" alt="secundaria" >
            <h4>Educacion Basica</h4>
            <p>En esta seccion tenemos como vision dar apoyo a los jiovenes y facilitarles su aprendizaje en materias complicadas</p>
        </div>
    </div>
    <div class="container">
        <div class="card card-5">
            <img src="img/bachillerato.jpg" alt="bachillerato" >
            <h4>Educacion Media</h4>
            <p>En esta seccion tenemos como vision dar induccion a los jovenes para que puedan desarrollar una carrera tecnica</p>
        </div>
    </div>
    <div class="container">
        <div class="card card-6">
            <img src="img/universidad.jpg" alt="universidad" >
            <h4>Educacion Superior</h4>
            <p>En esta seccion tenemos como visión dar apoyo a los jovenes y facilitarles su aprendizaje en materias complicadas</p>
        </div>
    </div>
</div>
       
        <aside><br>
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

    

    </body>

</html>
