<?php 
class UserModelUsuario {
    private $PDO;

    public function __construct() {
        require_once("C:/xampp/htdocs/Vaping-main/Conexion/Conexion.php");
        $con = new conexion();
        $this->PDO = $con->conexion();
    }

    public function UsuarioExiste($Nombre, $Email) {
        $statement = $this->PDO->prepare("SELECT COUNT(*) FROM usuarios WHERE Nombre = :Nombre OR Email = :Email");
        $statement->bindParam(':Nombre', $Nombre);
        $statement->bindParam(':Email', $Email);
        $statement->execute();
        $count = $statement->fetchColumn();

        return $count > 0;
    }

    public function InsertarUsuario($IdRol, $Nombre, $Email, $Contrasena) {
        if ($this->UsuarioExiste($Nombre, $Email)) {
            return false; 
        }

        $statement = $this->PDO->prepare("INSERT INTO usuarios (IdRol, Nombre, Email, Contrasena) 
        VALUES (:IdRol, :Nombre, :Email, :Contrasena)");
        $statement->bindParam(':IdRol', $IdRol);
        $statement->bindParam(':Nombre', $Nombre);
        $statement->bindParam(':Email', $Email);
        $statement->bindParam(':Contrasena', $Contrasena);
    
        return ($statement->execute()) ? $this->PDO->lastInsertId() : false;
    }
    public function iniciarSesionDespuesDeRegistro($Nombre, $Contrasena, $IdRol) {
        session_start();
    
        $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $this->PDO->prepare("SELECT * FROM usuarios WHERE Nombre = :u AND Contrasena = :p");
        $statement->bindParam(":u", $Nombre);
        $statement->bindParam(":p", $Contrasena);
        $statement->execute();
        $userData = $statement->fetch(PDO::FETCH_ASSOC);
    
        if ($userData) {
            $_SESSION['Nombre'] = $userData["Nombre"];
            $_SESSION['Email'] = $userData["Email"];
        }
    }
    
}
?>
