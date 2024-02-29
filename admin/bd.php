<?php 
$dsn = 'mysql:host=localhost;dbname=login_register_db';
$usuario = 'root';
$contraseña = '';

try {
    $conexion = new PDO($dsn, $usuario, $contraseña);
    //echo "Conexion realizada...";
} catch (PDOException $e) {
    echo 'Error de conexión: ' . $e->getMessage();
    exit;
}


?>

