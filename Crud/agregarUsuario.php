<?php
require_once("C:/xampp/htdocs/Vaping-main/Controllers/ControllerUsuario.php");
$obj = new usernameControlerUsuario();
$Contrasena = $_POST['Contrasena'];
$obj->InsertarUsuario($_POST['IdRol'],$_POST['Nombre'], $_POST['Email'], $_POST['Contrasena']);
?>
