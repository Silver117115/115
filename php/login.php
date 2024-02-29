<?php 
session_start();

if(isset($_SESSION['id_usuario'])) {
    header("Location: ../bienvenido.php");
    exit;
}

if($_POST){
    include ("../admin/bd.php");

    echo "Correo: " . $_POST['correo'] . "<br>";
    echo "Contraseña: " . $_POST['contrasena'] . "<br>";

    

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
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
        $resultado->bind_result($id_usuario);
        $resultado->fetch();

        // Asignar el id de usuario a la sesión
        $_SESSION['id_usuario'] = $id_usuario;
        header("Location: ../bienvenido.php");
        exit;
    } else {
        echo "<script>alert('Por favor verifique los datos ingresados'); window.location.href = '../index.php';</script>";
        exit;
    }
}
?>