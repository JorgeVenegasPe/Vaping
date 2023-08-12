<!DOCTYPE html>
<html lang="es">
<head>
    <title>Modalimagen</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Issets/css/modal.css">
</head>
<body>
    <button id="openModalBtn">Abrir Modal</button>

    <div id="myModal" class="modal">
        <div class="modal-content">
        <span class="close">&times;</span>
        <h2 class="Comprobante">Subir comprobante de pago</h2>
        
        <div id="preview" class="imagen">
        <div class="file-container">
            <label for="file" id="fileLabel">Añadir imagen</label>
            <input type="file" name="file" id="file">
        </div>
        <button id="cambiarImagenBtn" style="display: none;">Cambiar Imagen</button>
        </div>

        <div class="button-container">
            <button id="enviarBtn">Enviar</button>
            <button id="cancelarBtn">Cancelar</button>
        </div>
        </div>
    </div>

    <script src="../Issets/js/modal1.js"></script>
</body>
</html>
