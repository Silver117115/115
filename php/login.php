<?php 

session_start();


if(isset($_SESSION['id_usuario'])) {
    header("Location: ../bienvenido.php");
    exit;
}

if($_POST){
    include './conexion_be.php';

    $correo = (isset($_POST['correo'])) ? $_POST['correo'] : "";
    $contrasena = (isset($_POST['contrasena'])) ? $_POST['contrasena'] : "";
    $contrasena = hash('sha512', $contrasena);
    $query = "
    SELECT id
    FROM usuarios
    WHERE correo = ?
    AND contrasena = ?
";
    $resultado = $conexion->prepare($query);
    $resultado->bind_param('ss', $correo, $contrasena);
    $resultado->execute();
    $resultado->store_result();

    if($resultado->num_rows > 0) {
        $_SESSION['id_usuario'] = $resultado->id;
        header("Location: ../bienvenido.php");
        exit;
    } else {
        echo "<script>alert('Por favor verifique los datos ingresados'); window.location.href = '../index.php';</script>";
        exit;
    }
}
?>