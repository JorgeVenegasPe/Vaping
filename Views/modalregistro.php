<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ModalRegistro</title>
    <link rel="stylesheet" href="../Issets/css/modalregistro.css"/>
</head>
<body>

    <div class="container">
        <div class="title">Formulario de Contacto</div>
        <div class="content">
    <form action="" method="POST">
        <div class="user-details">
        <div class="ajuste1">
        <span class="details">Nombre:</span>
        <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>
        <br></div>
        
        <div class="ajuste1">
        <span class="details">Apellidos:</span>
        <input type="apellido" id="apellido" name="apellido" placeholder="Ingresa tu apellido" required>
        <br></div>

        <div class="ajuste1">
        <span class="details">Número de documento:</span>
        <input type="Ndoc" id="Ndoc" name="Ndoc" placeholder="Ingresa tu Nº de Documento" required>
        <br></div>

        <div class="ajuste1">
        <span class="details">Email:</span>
        <input type="email" id="email" name="email" placeholder="Ingresa tu email" required>
        <br></div>

        <div class="ajuste1">
        <span class="details">Teléfono:</span>
        <input type="telefono" id="telefono" name="telefono" placeholder="Ingresa tu teléfono" required>
        <br></div>

        <div class="user-details">
        <div class="ajuste1">
        <span class="details">Distrito:</span>
        <input type="distrito" id="distrito" name="distrito" placeholder="Ingresa tu distrito" required>
        <br></div>

        <div class="ajuste1">
        <span class="details">Dirección:</span>
        <input type="direccion" id="direccion" name="direccion" placeholder="Ingresa tu direccion" required>
        <br></div>
        </div>

        <div class="ajuste2">
            <span class="details">Referencia:</span>
            <textarea id="referencia" name="referencia" placeholder="Ingresa tu referencia" required></textarea>
        <br></div>

        </div>
        <div class="button">
            <input type="submit" value="Enviar">
        </div>
    </form>
        </div>
    </div>
</body>
</html>