<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Producto</title>
    <link rel="stylesheet" href="formulario.css">
    <!-- Agregar el enlace a la librería Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php
        include("Conexion2.php");
        $id = $_REQUEST['id'];
        $query = "SELECT * FROM pods WHERE id='$id'";
        $resultado = $conexion->query($query);
        $row = $resultado->fetch_assoc();
    ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Modificar Producto</h3>
                    </div>
                    <div class="card-body">
                        <form action="proceso_modificar.php?id=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre..." value="<?php echo $row['nombre']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="imagen">Imagen:</label>
                                <img height="80px" width="140px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" class="img-thumbnail" alt="Imagen del producto">
                                <input type="file" name="imagen" id="imagen" class="form-control-file mt-2" required>
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripción:</label>
                                <textarea name="descripcion" id="descripcion" class="form-control" placeholder="Descripción del producto..." required><?php echo $row['descripcion']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="precio">Precio:</label>
                                <input type="text" name="precio" id="precio" class="form-control" placeholder="Precio..." value="<?php echo $row['precio']; ?>" required>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="Aceptar" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
