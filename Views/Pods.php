<!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vaping - Pods</title>
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="../Issets/css/main.css"/>
  <link rel="stylesheet" href="../Issets/css/modal_AñadidoCar.css"/>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
</head>
<body>
  <!-- Header  -->
    <?php
    require("../Controllers/ControllerProducto.php");
    $obj = new usernameControlerProducto();
    $rows = $obj->VerProductoPods();
    require 'Header.php'
    ?>

  <!-- Carrusel  -->
  <main class="main">
    <div class="swiper carousel">
      <div class="swiper-wrapper">
        <?php if ($rows):?>
            <?php foreach ($rows as $row): ?>

              <div class="swiper-slide">
                <div class="imagenpods">
                  <img height="50px" src="data:image/webp;base64,<?= base64_encode($row[3]) ?>"/>
                  <div class="container-descrip">
                    <h1><?=$row[2]?></h1>
                    <p><?=$row[4]?></p>
                    <h2>S/.<?=$row[5]?></h2>
                    <div class="container-butt">
                      <button type="button" class="button-cantidad Añadir" >Añadir</button>
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
  
  <!-- Modal Añadido al Carrito -->
  <div class="modal" id="myModal">
    <div class="modal-content">
      
      <div class="checkmark-container">
        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
          <circle class="checkmark-circle" cx="26" cy="26" r="25" fill="none" />
          <path class="checkmark-check" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
        </svg>
      </div>
      <p class="added-text"></p>
    </div>
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


    <!-- Chat Bot -->

    <script type="text/javascript">(function () { 
    var ldk = document.createElement('script'); 
    ldk.type = 'text/javascript'; 
    ldk.async = true; 
    ldk.src = 'https://s.cliengo.com/weboptimizer/64d053e1e3a858003279d24e/64d053e3e3a858003279d251.js?platform=view_installation_code'; 
    var s = document.getElementsByTagName('script')[0]; 
    s.parentNode.insertBefore(ldk, s); 
  })();</script>



<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="../Issets/js/main.js"></script>
<script src="../Issets/js/modal_AñadidoCar.js"></script>


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
