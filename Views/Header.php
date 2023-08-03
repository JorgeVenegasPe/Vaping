<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Issets/css/header.css">
    <script src="https://kit.fontawesome.com/b408879b64.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../Issets/css/carrito.css">
    <title>Header</title>
</head>

<body>
    <div class="contenedor"></div>
    <header class="header-container">
        <!-- Logo a la izquierda -->
        <div class="logo">
            <img src="../Issets/img/LogoTipo/logooriginal1.png" alt="Logo">
        </div>

        <!-- Barra de búsqueda a la derecha -->
        <div class="search-container">
            <input type="text" placeholder="Buscar...">
            <button class="button"><i class="fa-solid fa-magnifying-glass"></i></button>
            <div class="icons">
                <span class="material-symbols-sharp" data-icon="shopping_cart">shopping_cart</span>
                <span class="material-symbols-sharp" data-icon="person">person</span>
            </div>
        </div>
    </header>

    <!--Daniel Carahuatay-->
    <div class="content_cart" id="cartModal" style="display: none;">
        <div class="datos">
            <img class="yape" src="https://www.yape.com.pe/assets/images/logo.png"><br>
            <div class="qr"><img class="escaner" src="../Issets/img/LogoTipo/scanner.jpeg"></div>
            <h3>Número: +51 989 999 976</h3>
            <h3>Monto a pagar: S/.35.00</h3>
            <button class="btn_yape" id="cerrar">Cerrar</button>
            <button class="btn_yape">Listo</button>
        </div>
    </div>
    <!---->

    <!-- Nuevo botón para mostrar/ocultar el modal -->
    <button id="yape" class="btn_yape">Yape</button>

</body>
<script src="../Issets/js/carrito.js"></script>

</html>
