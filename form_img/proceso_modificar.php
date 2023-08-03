<?php
include("Conexion2.php");
$nombre =$_POST['nombre'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name'] ));
$descripcion=$_POST['descripcion'];
$precio = floatval($_POST['precio']); // Convertir el precio a un número decimal
$id=$_REQUEST['id'];
$query ="UPDATE pods SET nombre = '$nombre', imagen='$imagen', descripcion='$descripcion', precio='$precio' WHERE id='$id'";
$resultado=$conexion->query($query);
if($resultado){
    header("Location:mostrar.php");
}else{
    echo 'no se modifico';
}
?>