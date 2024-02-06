<?php 

session_start();

if($_POST){
    include './conexion_be.php';

    $correo = (isset($_POST['correo']))?$_POST['correo']:"";
    $contrasena = (isset($_POST['contrasena']))?$_POST['contrasena']:"";
    $contrasena = hash('sha512', $contrasena);

    $sentencia=$conexion->prepare("SELECT *, count(*) as n_usuario 
                FROM `usuarios`
                WHERE correo=:correo
                AND contrasena=:contrasena
                ");
    $sentencia->bindParam(":correo",$correo);
    $sentencia->bindParam(":contrasena",$contrasena);
    $sentencia->execute();
    print_r($sentencia);

    $lista_usuarios=$sentencia->fetch(PDO::FETCH_LAZY);

    if($lista_usuarios['n_usuario']>0){
        $_SESSION['usuario']=$lista_usuarios['usuario'];
        $_SESSION['logueado']=true;
        header("Location:./binevenido.php");
    }else{
        $mensaje="Error:El usuario o contraseña son incorrectos";
    }
}

?>