<?php
include("../../bd.php");
if(isset($_GET['txtID'])){

    $txtID=(isset($_GET['txtID']) )?$_GET['txtID']:"";
    $sentencia=$conexion->prepare("SELECT * FROM tbl_usuarios WHERE id=:id");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();
    $registro=$sentencia->fetch(PDO::FETCH_LAZY);

    $usuario=$registro['usuario'];
    $password=$registro['password'];
    $correo=$registro['correo'];
}
if($_POST){

    $txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
    $usuario=(isset($_POST['usuario']))?$_POST['usuario']:"";
    $password=(isset($_POST['password']))?$_POST['password']:"";
    $correo=(isset($_POST['correo']))?$_POST['correo']:"";

    $sentencia=$conexion->prepare("UPDATE tbl_usuarios
    SET
    usuario=:usuario,
    password=:password,
    correo=:correo
    WHERE id=:id ");

    $sentencia->bindParam(":usuario",$usuario);
    $sentencia->bindParam(":password",$password);
    $sentencia->bindParam(":correo",$correo);

    $sentencia->bindParam(":id",$txtID);
 
    $sentencia->execute();
    $mensaje="Registro modificado con exito.";
    header("Location:index.php?mensaje".$mensaje );
}    
include("../../templates/header.php");?>
<div class="card">
    <div class="card-header">
        Usuario
    </div>
    <div class="card-body">
        <form action="" method="post">

        <div class="mb-3">
        <label for="txtID" class="form-label">ID:</label>
        <input readonly value="<?php echo $txtID?>" type="text"
            class="form-control" name="txtID" id="txtID" aria-describedby="helpId" placeholder="ID"/>
        </div>

            <div class="mb-3">
                <label for="usuario" class="form-label">Nombre del usuario:</label>
                <input type="text" 
                class="form-control" value="<?php echo $usuario?>" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Nombre del usuario"/>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="password"
                    class="form-control" value="<?php echo $password?>" name="password" id="password" aria-describedby="helpId" placeholder="Password"/>
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo:</label>
                <input type="email"
                    class="form-control" value="<?php echo $correo?>" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo:"/>
            </div>

            <button type="submit" class="btn btn-success">Actualizar</button>

            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>
        </form>
        
    </div>
    <div class="card-footer text-muted"></div>
</div>
<?php include("../../templates/footer.php");?>