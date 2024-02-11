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
    <link rel="stylesheet" href="css/style2.css">
</head>
<?php include "headers/menuacceso.php"; ?>

<body>
<section>
        <h2>Aprende más... Prácticando más</h2>
        <h3>Preparación Básica hasta una Especialización</h3>
        <h2>Más Demandados</h2>
</section>
        <section class="container">
        <article class="post">
            <h4>Título de mi post</h4>
            <p>Descripción de mi post</p>
            <img class="img-curso" src="img/secundaria.jpg" alt="cursosecundaria" width="200px">
            <p>Texto del artículo e información</p>
        </article>
        <article class="post">
            <h4>Título de mi post 2</h4>
            <p>Descripción de mi post 2</p>
            <img class="img-curso" src="img/bachillerato.jpg" alt="cursobachillerato" width="200px">
            <p>Texto del artículo e información</p>
        </article>
        <article class="post">
            <h4>Título de mi post 3</h4>
            <p>Descripción de mi post 3</p>
            <img class="img-curso" src="img/universidad.jpg" alt="cursouniversidad" width="200px">
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

    

    </body>

</html>
