<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Productos</title>
    <link rel="stylesheet" href="formulario.css">
</head>
<body>
    <h1>Formulario de Productos</h1>
    <form action="proceso_guardar.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre del producto..." required>

        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen" id="imagen" required>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion" placeholder="Descripción del producto..." required></textarea>

        <label for="precio">Precio:</label>
        <input type="text" name="precio" id="precio" placeholder="Precio del producto..." required>
        
        <input type="submit" value="Guardar Producto">
    </form>
</body>
</html>
