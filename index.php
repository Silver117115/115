<!DOCTYPE html>
<html lang="es-es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <main>
    <div class="contenedor__todo">

        <div class="caja__trasera">
            <div class="caja__trasera-login">
                <h3>¿Ya tienes cuenta?</h3>
                <p>Inicia sesion para entrar en la pagina</p>
                <button id="btn__iniciar-sesion">Iniciar Sesion</button>
            </div>
            
                <div class="caja__trasera-register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para que puedas acceder</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
        </div>

        <div class="contenedor__login-register">

            <form action="" class="formulario__login">

                <h2>Iniciar Sesion</h2>
                <input type="text" placeholder="Correo Electronico">
                <input type="password" placeholder="Contraseña">
                <button>Entrar</button>
            </form>

            <form action="" class="formulario__register">
                <h2>Resgistrarse</h2>
                <input type="text" placeholder="Nombre Completo">
                <input type="text" placeholder="Correo Electronico">
                <input type="text" placeholder="Usuario">
                <input type="password" placeholder="Contraseña">
                <button>Registrarse</button>
            </form>
        </div>
    </div>

   </main>
   <script src="scripts/usuario.js"></script>
</body>
</html>
