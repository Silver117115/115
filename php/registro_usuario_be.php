<?php 

include 'conexion_be.php';

$nombre_completo = mysqli_real_escape_string($conexion, $_POST['nombre_completo']);
$correo = mysqli_real_escape_string($conexion, $_POST['correo']);
$usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
$contrasena = mysqli_real_escape_string($conexion, $_POST['contrasena']);

if(empty($nombre_completo) || empty($correo) || empty($usuario) || empty($contrasena)) {
    echo '
    <script>
    alert("Por favor, completa todos los campos del formulario.");
    window.location = "../index.php";
    </script>
    ';
    exit();
}

if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    echo '
    <script>
    alert("Por favor, ingresa un correo electrónico válido.");
    window.location = "../index.php";
    </script>
    ';
    exit();
}

if(strlen($contrasena) < 8 || !preg_match('/[A-Z]/', $contrasena)) {
    echo '
    <script>
    alert("La contraseña debe tener al menos 8 caracteres y contener al menos una letra mayúscula.");
    window.location = "../index.php";
    </script>
    ';
    exit();
}

$contrasena = hash('sha512', $contrasena);

$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

if(mysqli_num_rows($verificar_correo) > 0){
    echo '
    <script>
    alert("Este correo ya está en uso, por favor intenta con otro.");
    window.location = "../index.php";
    </script>
    ';
    exit();
}

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
    <script>
    alert("Este usuario ya está en uso, por favor intenta con otro.");
    window.location = "../index.php";
    </script>
    ';
    exit();
}
   
$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
    alert("Usuario almacenado exitosamente.");
    window.location = "../index.php";
    </script>
    ';
} else {
    echo '
    <script>
    alert("Intenta nuevamente, usuario no registrado.");
    window.location = "../index.php";
    </script>
    ';
}

mysqli_close($conexion);

?>