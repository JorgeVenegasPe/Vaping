<?php
require_once("C:/xampp/htdocs/Vaping-main/Controllers/ControllerProducto.php");
$obj = new usernameControlerProducto();

$imagen = addslashes(file_get_contents($_FILES['imagenactualizado']['tmp_name'] ));
$precio = floatval($_POST['precioactualizado']);

$obj->ModificarProducto($_POST['nombreActualiado'],$imagen,$_POST['descripcionactualizado'],$precio);
?>