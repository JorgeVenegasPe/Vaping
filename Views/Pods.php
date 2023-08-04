<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vaping - Pods</title>
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="../Issets/css/main.css"/>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
</head>
<body>
  <!-- Header  -->
  <?php
  require_once ('Header.php');
  ?>

  <!-- Carrusel  -->
  <main>
    <div class="swiper carousel">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="imagenpods">
            <img src="../Issets/img/Pods/black-twist.webp" alt="" />
          <div class="container-descrip">
            <h1>Black Twist</h1>
            <p>Nicotina 5%</p>
            <h2>S/.59.00 </h2>
            <div class="container-butt">
              <button type="button" class="button-añadir">
                <span>Añadir</span>
                <i class="bx bx-check"></i>
              </button>
              <button type="button" class="button-cantidad">Cantidad</button>
            </div>
          </div>
          </div>
        </div>
        
        <div class="swiper-slide">
          <div class="imagenpods">
            <img src="../Issets/img/Pods/black-twist.webp" alt="" />
          <div class="container-descrip">
            <h1>Black Twist</h1>
            <p>Nicotina 5%</p>
            <h2>S/.59.00 </h2>
            <div class="container-butt">
              <button type="button" class="button-añadir">
                <span>Añadir</span>
                <i class="bx bx-check"></i>
              </button>
              <button type="button" class="button-cantidad">Cantidad</button>
            </div>
          </div>
          </div>
        </div>
        
        <div class="swiper-slide">
          <div class="imagenpods">
            <img src="../Issets/img/Pods/black-twist.webp" alt="" />
          <div class="container-descrip">
            <h1>Black Twist</h1>
            <p>Nicotina 5%</p>
            <h2>S/.59.00 </h2>
            <div class="container-butt">
              <button type="button" class="button-añadir">
                <span>Añadir</span>
                <i class="bx bx-check"></i>
              </button>
              <button type="button" class="button-cantidad">Cantidad</button>
            </div>
          </div>
          </div>
        </div>
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
    <a href="#" class="icon icon--twitter">
      <i class="ri-twitter-line"></i>
    </a>
    <a href="#" class="icon icon--linkedin">
      <i class="ri-linkedin-line"></i>
    </a>
    <a href="#" class="icon icon--github">
      <i class="ri-github-line"></i>
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