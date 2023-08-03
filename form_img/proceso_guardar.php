<?php
include("Conexion2.php");
// Resto del código para procesar el formulario y guardar los datos en la base de datos
$nombre = $_POST['nombre'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$descripcion = $_POST['descripcion'];
$precio = floatval($_POST['precio']); // Convertir el precio a un número decimal

$query = "INSERT INTO pods(nombre,imagen,descripcion,precio) VALUES('$nombre','$imagen','$descripcion','$precio')";
$resultado = $conexion->query($query);

if ($resultado) {
    header("Location: mostrar.php");
} else {
    echo 'no se inserto';
}

?>