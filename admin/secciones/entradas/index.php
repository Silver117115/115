<?php 
include("../../bd.php");

if(isset($_GET['txtID'])) {
    $txtID = $_GET['txtID'];

    $sentencia = $conexion->prepare("SELECT imagen FROM tbl_entradas WHERE id=:id");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    $registro_imagen = $sentencia->fetch(PDO::FETCH_ASSOC);

    if(isset($registro_imagen["imagen"]) && !empty($registro_imagen["imagen"])) {
        $imagen_path = "../../../assets/img/main_content/" . $registro_imagen["imagen"];
        if(file_exists($imagen_path)) {
            unlink($imagen_path);
        }
    }

    $sentencia = $conexion->prepare("DELETE FROM tbl_entradas WHERE id=:id");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
}

$sentencia=$conexion->prepare("SELECT * FROM `tbl_entradas`");
$sentencia->execute(); 
$lista_entradas=$sentencia->fetchAll(PDO::FETCH_ASSOC);
include("../../templates/header.php");
?>

<div class="card">
    <div class="card-header"><a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar registro</a>
</div> 
    <div class="card-body">

    <div
        class="table-responsive-sm">
        <table
            class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($lista_entradas as $registros){ ?>
                <tr class="">
                    <td><?php echo $registros['ID'];?></td>
                    <td>
                    <img width="50" src="../../../assets/img/main_content/<?php echo $registros['imagen'];?>" />
                    </td>
                    <td><?php echo $registros['titulo'];?></td>
                    <td><?php echo $registros['descripcion'];?></td>
                    <td>
                    <a name="" class="btn btn-info" href="editar.php?txtID=<?php echo $registros['ID'];?>" role="button">Editar</a>
                     |
                     <a name="" class="btn btn-danger" href="index.php?txtID=<?php echo $registros['ID'];?>" role="button">Eliminar</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
    </div>
    <div class="card-footer text-muted">

    </div>
</div>



<?php include("../../templates/footer.php");?>