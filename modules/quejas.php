<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <title>Document</title>
</head>
<body >
    <section>
        <h1>Apartado para Estudiantes </h1>
        <h2>¿Con que podemos ayudarte?</h2>
        <h2>Cursos</h2>
        <h2>Suscripción</h2>
        <h2>Ayuda con tu cuenta</h2>
    </section>
    <section>
        <h3>Formulario de Aclaraciones</h3>
        <form  class="formulario" action="php/quejas.php" method="POST">
            <fieldset>
                <div class="campo">
                    <label>Nombre:</label>
                        <input type="text" name="nombre" id="nombre" placeholder="Ingresa tu Nombre">
                </div>    
                <div class="camp"> 
                    <label>Apellidos:</label>
                        <input type="text" name="apellidos" id="apellidos" placeholder="Ingresa tus Apellidos">
                </div>
                <div class="campo">
                    <label>Núm de Estudiante:</label>
                        <input type="tel" name="estudiante" id="n-estudiante" placeholder="Núm de Estudiante">
                </div>
                <div class="campo">    
                    <label>Deja tu comentario:</label>
                        <textarea name="comentario" id="comen" placeholder="Deja tu comentario"></textarea>
                </div>       
                <div class="campo">
                        <input class="" type="submit" value="Enviar"> 
                </div>
            </fieldset>
        </form>
    </section>

    <!--Post send dates -->
     <!--Get to obtain dates -->
      <!--Put actualizar datos -->
       <!--Delete borrar datos -->
</body>
</html>