<?php
include("Conexion2.php");

$id=$_REQUEST['id'];
$query ="DELETE FROM pods WHERE id='$id'";
$resultado=$conexion->query($query);
if($resultado){
    header("Location:mostrar.php");
}else{
    echo 'no se elimino';
}
?>