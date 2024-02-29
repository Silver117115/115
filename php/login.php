<?php 
session_start();

if(isset($_SESSION['id_usuario'])) {
    header("Location: ../bienvenido.php");
    exit;
}

if($_POST){
    include ("../admin/bd.php");

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $contrasena = hash('sha512', $contrasena);

    // Preparar la consulta SQL con marcadores de posición
    $query = "SELECT id FROM usuarios WHERE correo = :correo AND contrasena = :contrasena";
    $statement = $conexion->prepare($query);

    // Vincular los parámetros con los valores proporcionados
    $statement->bindParam(':correo', $correo);
    $statement->bindParam(':contrasena', $contrasena);

    // Ejecutar la consulta preparada
    $statement->execute();

    // Obtener el resultado
    $resultado = $statement->fetch(PDO::FETCH_ASSOC);

    if($resultado) {
        // Asignar el id de usuario a la sesión
        $_SESSION['id_usuario'] = $resultado['id'];
        header("Location: ../bienvenido.php");
        exit;
    } else {
        echo "<script>alert('Por favor verifique los datos ingresados'); window.location.href = '../index.php';</script>";
        exit;
    }
}
?>
