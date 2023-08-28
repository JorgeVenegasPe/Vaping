<?php
class usernameControlerUsuario {
    private $model;

    public function __construct() {
        require_once("C:/xampp/htdocs/Vaping-main/Models/ModelUsuario.php");
        $this->model = new UserModelUsuario();
    }

    public function InsertarUsuario($IdRol, $Nombre, $Email, $Contrasena) {
        $existingUser = $this->model->UsuarioExiste($Nombre, $Email);
    
        if ($existingUser !== false) {
            $_SESSION['error_message'] = "El usuario ya existe con el mismo nombre o correo electrónico.";
            header("Location: ../Views/Login.php");
            exit;
        }

$id = $this->model->InsertarUsuario($IdRol, $Nombre, $Email, $Contrasena);

if ($id !== false) {

    $this->model->iniciarSesionDespuesDeRegistro($Nombre, $Contrasena, $IdRol);


    if ($IdRol == 1) {
        header("Location: ../Views/Pods-Vapers.php");
    } elseif ($IdRol == 2) {
        header("Location: ../Views/Pods.php");
    }
    exit;
} else {
    header("Location: ../Views/Login.php");
    exit;
}
    }
    
    
}


?>