<?php 

$conexion = mysqli_connect("localhost", "root", "", "login_register_db");

if (mysqli_connect_error()) {


    // si se encuentra error en la conexión
 
 
    exit('Fallo en la conexión de MySQL:' . mysqli_connect_error());
 }
/*
if($conexion){
    echo 'Conectado exitosamente a la Base de datos';
}else{
    echo 'No se ha podido conectar a la Base de Datos';
}
*/


?>

