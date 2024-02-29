<?php 

$conexion = mysqli_connect("localhost", "root", "", "login_register_db");

if (mysqli_connect_error()) {

    exit('Fallo en la conexión de MySQL:' . mysqli_connect_error());
 }

?>

