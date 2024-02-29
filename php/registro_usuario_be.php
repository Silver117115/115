<?php

include("../admin/bd.php");

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Verificar si los campos están vacíos
if(empty($nombre_completo) || empty($correo) || empty($usuario) || empty($contrasena)) {
    echo '
    <script>
    alert("Por favor, completa todos los campos del formulario.");
    window.location = "../index.php";
    </script>
    ';
    exit();
}

// Validar el formato del correo electrónico
if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    echo '
    <script>
    alert("Por favor, ingresa un correo electrónico válido.");
    window.location = "../index.php";
    </script>
    ';
    exit();
}

// Validar la fortaleza de la contraseña
if(strlen($contrasena) < 8 || !preg_match('/[A-Z]/', $contrasena)) {
    echo '
    <script>
    alert("La contraseña debe tener al menos 8 caracteres y contener al menos una letra mayúscula.");
    window.location = "../index.php";
    </script>
    ';
    exit();
}

// Hash de la contraseña
$contrasena_hash = hash('sha512', $contrasena);

// Verificar si el correo ya está en uso
$verificar_correo = $conexion->prepare("SELECT * FROM usuarios WHERE correo = :correo");
$verificar_correo->bindParam(':correo', $correo);
$verificar_correo->execute();

if($verificar_correo->rowCount() > 0) {
    echo '
    <script>
    alert("Este correo ya está en uso, por favor intenta con otro.");
    window.location = "../index.php";
    </script>
    ';
    exit();
}

// Verificar si el usuario ya está en uso
$verificar_usuario = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
$verificar_usuario->bindParam(':usuario', $usuario);
$verificar_usuario->execute();

if($verificar_usuario->rowCount() > 0) {
    echo '
    <script>
    alert("Este usuario ya está en uso, por favor intenta con otro.");
    window.location = "../index.php";
    </script>
    ';
    exit();
}

// Insertar usuario en la base de datos
$insertar_usuario = $conexion->prepare("INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) VALUES(:nombre_completo, :correo, :usuario, :contrasena)");
$insertar_usuario->bindParam(':nombre_completo', $nombre_completo);
$insertar_usuario->bindParam(':correo', $correo);
$insertar_usuario->bindParam(':usuario', $usuario);
$insertar_usuario->bindParam(':contrasena', $contrasena_hash);

if($insertar_usuario->execute()) {
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

?>
