<?php
include ("admin/bd.php");
session_start();



$sentencia=$conexion->prepare("SELECT * FROM `tbl_entradas`");
$sentencia->execute(); 
$lista_entradas=$sentencia->fetchAll(PDO::FETCH_ASSOC);
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
<?php foreach($lista_entradas as $registros){ ?>
    <div class="container">
        <div class="card card-1">
            <img src="assets/img/about/<?php echo $registros["imagen"];?>" >
            <h4><?php echo $registros['titulo'];?></h4>
            <p><?php echo $registros['descripcion'];?></p>
        </div>
    </div>
    <?php }?>
    
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
