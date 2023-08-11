<?php
session_start();
if (isset($_SESSION['Nombre'])) {

  require 'Header-log.php';

} else {

require 'Header.php';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vaping - Pods</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="../Issets/css/main.css" />
    <link rel="stylesheet" href="../Issets/css/header.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>

<body>
    <!-- Header  -->
    <?php

    require("../Controllers/ControllerProducto.php");
    $obj = new usernameControlerProducto();
    $rows = $obj->VerProductoPods();
    
?>



    <!-- Carrusel  -->
    <main class="main">
        <div class="swiper carousel">
            <div class="swiper-wrapper">
                <?php if ($rows):?>
                <?php foreach ($rows as $row): ?>

                <div class="swiper-slide">
                    <div class="imagenpods">
                        <img height="50px" src="data:image/webp;base64,<?= base64_encode($row[3]) ?>" />
                        <div class="container-descrip">
                            <h1><?=$row[2]?></h1>
                            <p><?=$row[4]?></p>
                            <h2>S/.<?=$row[5]?></h2>
                            <div class="container-butt">
                                <button type="button" class="button-cantidad Añadir">Añadir</button>
                                <button type="button" class="button-cantidad">Cantidad</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
                <?php endif;?>

            </div>
            <button type="button" class="swiper-button-next"></button>
            <button type="button" class="swiper-button-prev"></button>
        </div>
    </main>

    <!-- Carrito  -->
    <div>
    </div>

    <!-- ================ Modals ================================  -->
    <!-- Login  -->
    <div id="loginModal" style="display: none;">
        <?php
        require 'Login.php';
      ?>
    </div>

    <!-- Redes Sociales -->
    <div class="icons-redes">
        <a href="#" class="icon icon--instagram">
            <i class="ri-instagram-line"></i>
        </a>
        <a href="#" class="icon icon--facebook">
            <i class="ri-facebook-line"></i>
        </a>
        <a href="#" class="icon icon--whatsapp">
            <i class="ri-whatsapp-line"></i>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="../Issets/js/main.js"></script>
    <script>
    var swiper = new Swiper(".carousel", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });


    const loginButton = document.getElementById('loginButton');
    const loginModal = document.getElementById('loginModal');

    // Asigna un controlador de eventos al botón de inicio de sesión
    loginButton.addEventListener('click', function() {
        // Muestra el modal
        loginModal.style.display = 'block';
    });
    </script>

</body>

</html>
