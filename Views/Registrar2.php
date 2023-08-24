<?php
$conex = mysqli_connect("localhost", "root", "", "Vaping");

if (!$conex) {
    echo "Error de conexión: " . mysqli_connect_error();
}

if (isset($_POST['register2'])) {
    $nombre_cliente = isset($_POST['nombre_cliente']) ? trim($_POST['nombre_cliente']) : '';
    $celular = isset($_POST['celular']) ? trim($_POST['celular']) : '';
    $correo = isset($_POST['correo']) ? trim($_POST['correo']) : '';
    $documento_tipo = isset($_POST['documento']) ? trim($_POST['documento']) : ''; 
    $documento_numero = isset($_POST['n_document']) ? trim($_POST['n_document']) : ''; 
    $distrito = isset($_POST['distrito']) ? trim($_POST['distrito']) : ''; 
    $direccion = isset($_POST['direccion']) ? trim($_POST['direccion']) : ''; 
    $referencia = isset($_POST['referencia']) ? trim($_POST['referencia']) : ''; 
    $tipo_entrega = isset($_POST['tipo_entrega']) ? trim($_POST['tipo_entrega']) : ''; 
    $total = isset($_POST['total_input']) ? trim($_POST['total_input']) : '';

    $productosJSON = isset($_POST['productos_titulos']) ? $_POST['productos_titulos'] : '[]';
    $productosArray = json_decode($productosJSON);

    $ubicacion = isset($_POST['ubicacion']) ? trim($_POST['ubicacion']) : ''; 
    $dia = isset($_POST['dia']) ? trim($_POST['dia']) : ''; 
    $categoria = isset($_POST['categoria']) ? trim($_POST['categoria']) : ''; 

    $consulta = "INSERT INTO `ventas2`(`tipo_entrega`, `productos`, `total`, `nombre_cliente`, `documento_tipo`, `documento_numero`, `correo`, `celular`, `distrito`, `direccion`, `referencia`, `acepto_terminos`, `ubicacion`, `dia`, `categoria`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conex, $consulta);
    
    mysqli_stmt_bind_param($stmt, "ssdssssssssdsss", $tipo_entrega, $productosJSON, $total, $nombre_cliente, $documento_tipo, $documento_numero, $correo, $celular, $distrito, $direccion, $referencia, $acepto_terminos, $ubicacion, $dia, $categoria);
    
    $acepto_terminos = 1;

    $resultado = mysqli_stmt_execute($stmt);

    if ($resultado) {
        ?>
        <h3 class="ok">Te has registrado correctamente</h3>
        <?php
    } else {
        ?>
        <h3 class="bad">Error en la inserción</h3>
        <?php
    }

    mysqli_stmt_close($stmt);

    // Mostrar los elementos de la matriz sin comillas y comas
    foreach ($productosArray as $producto) {
        echo "value0: " . $producto->value0 . "<br>";
        echo "title: " . $producto->title . "<br>";
    }
}
?>
