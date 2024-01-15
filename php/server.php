<?php
$servername = "localhost";
$username = "nombreUsuario";
$password = "contraseña";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname0);

if($conn->connect_error) {
    die("Conexion Fallida: " . $conn->connect_error);
}

$sql = "CREATE TABLE Usuarios (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, nombreUsuario VARCHAR(30) NOT NULL)";

if ($conn->query($sql) === TRUE){
    echo "Tabla Usuarios Creada Correctamente";
}else {
    echo "Error creando tabla: " . $conn->error;
}

$conn->close();
?>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombreUsuario = $_POST["nombreUsuario"];
    $contraseña = $_POST["contraseña"];

    $conn = new mysqli("localhost", "nombreUsuario", "contraseña", "myDB");

    if($conn->connect_error) {
        die("Conexion Fallida: " . $conn->connect_error);
    }

    $sql = "SELECT id FROM Usuarios WHERE nombreUsuario = '$nombreUsuario' AND contraseña ='$contraseña'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        $_SESSION["nombreUsuario"] = $nombreUsuario;
        header("location:/php/bienvenido.php");
    } else {
        $error = "Tu nombre de usuario o contraseña son incorrectos";
    }

    $conn->close();

    
}
?>

<?php
session_start();

if(!isset($_SESSION["nombreUsuario"])){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<body>

Bienvenido, <?php echo $_SESSION["nombreUsuario"]; ?>!

</body>
</html>
