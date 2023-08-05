<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vaping - Pods</title>
  <link rel="stylesheet" href="../Issets/css/main.css"/>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
  <style>
    .swiper-slide {
      opacity: 1;
      transition: opacity 1.3s ease-in-out;
    }
    .swiper-slide:not(.swiper-slide-active) {
      pointer-events: none;
      opacity: 0;
    }
  </style>
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
              <button>Añadir</button>
              <button>Cantidad</button>
            </div>
          </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="imagenpods">
            <img src="../Issets/img/Pods/classic-tobacco.webp" alt="" />
          <div class="container-descrip">
            <h1>Black Tabacco</h1>
            <p>Nicotina 5%</p>
            <h2>S/.59.00 </h2>
            <button>Añadir</button>
            <button>Cantidad</button>
          </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="imagenpods">
            <img src="../Issets/img/Pods/clove menthol.webp" alt="" />
          <div class="container-descrip">
            <h1>Black Clove</h1>
            <p>Nicotina 5%</p>
            <h2>S/.59.00 </h2>
            <button>Añadir</button>
            <button>Cantidad</button>
          </div>
          </div>
        </div>
      </div>
        <button type="button" class="swiper-button-next"></button>
        <button type="button" class="swiper-button-prev"></button>
      <div class="swiper-pagination"></div>
    </div>
  </main>
  
  <!-- Carrito  -->
  <div>
  </div>

  <!-- Modals  -->
  <div>
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
      speed: 15, // Ajustamos la velocidad de transición a 0.8 segundos (800 milisegundos)
      effect: "slide", // Cambiamos el efecto de fade a slide
      slidesPerView: 1, // Muestra solo una diapositiva a la vez
      centeredSlides: true, // Centra la diapositiva activa en el carrusel
      loop: true, // Permite el desplazamiento infinito del carrusel
    });
  </script>

</body>
</html>
