<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="mostrar.css">
</head>
<body>
    <div class="center">
        <h2>Lista de Productos</h2>
        <a href="formulario.php" class="add-btn">Nuevo Producto</a><br><br>
    </div>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th colspan="2">Operaciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include("Conexion2.php");
            $query = "SELECT * FROM pods";
            $resultado = $conexion->query($query);
            while ($row = $resultado->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"></td>
                <td><?php echo $row['descripcion']; ?></td>
                <td>$<?php echo number_format($row['precio'], 2); ?></td>
                <td><a href="modificar.php?id=<?php echo $row['id']; ?>">Modificar</a></td>
                <td><a href="eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</a></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>
