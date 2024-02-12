<?php 

session_start();

if($_POST){
    include './conexion_be.php';

    $correo = (isset($_POST['correo']))?$_POST['correo']:"";
    echo "correo:". $correo;
    $contrasena = (isset($_POST['contrasena']))?$_POST['contrasena']:"";
    echo "contrasena". $contrasena; 
  //  $contrasena = hash('sha512', $contrasena);
    $query = "
    SELECT count(*)
    FROM usuarios
    WHERE usuario = ?
    AND contrasena = ?
";
$resultado=$conexion->prepare($query);
$resultado->bind_param('ss',$user,$pass);
$resultado->execute();
$resultado->bind_result($idUsuario);
if($resultado->fetch())
    echo 'Ingreso exitoso';
else echo 'Datos incorrectos';
   
}

?>