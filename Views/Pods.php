<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vaping - Pods</title>
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href="../Issets/css/main.css"/>
  <link rel="stylesheet" href="../Issets/css/contador.css"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
</head>
<body>
  <!-- Header  -->
  <?php
  require_once ('Header.php');
  ?>

  <!-- Carrusel  -->
  <main class="main">
    <div class="swiper carousel">
      <div   class="swiper-wrapper">

        <div class="swiper-slide" data-slide="1">
          <div class="imagenpods">
            <img src="../Issets/img/Pods/black-twist.webp" alt="" />
            <div class="container-descrip">
              <h1>Black Twist</h1>
              <p>Nicotina 5%</p>
              <h2>S/.59.00 </h2>
              <div class="container-butt">

              <span class="contador" id="contar1">0</span>
              <div class="contenedor">
                <button class="cont" id="incr1"><span class="material-icons-round">add</span></button>
                <button class="cont" id="decr1"><span class="material-icons-round">remove</span></button>
                <button class="cont" id="reset1"><span class="material-icons-round">cached</span></button>
              </div>
                <button type="button" class="button-cantidad Añadir" >Añadir</button>
              </div>
            </div>
          </div>
        </div>
        
        <div class="swiper-slide" data-slide="2">
          <div class="imagenpods">
            <img src="../Issets/img/Pods/black-twist.webp" alt="" />
          <div class="container-descrip">
            <h1>Black Twister</h1>
            <p>Nicotina 50%</p>
            <h2>S/.79.00 </h2>
            <div class="container-butt">

            <span class="contador" id="contar2">0</span>
            <div class="contenedor">
              <button class="cont" id="incr2"><span class="material-icons-round">add</span></button>
              <button class="cont" id="decr2"><span class="material-icons-round">remove</span></button>
              <button class="cont" id="reset2"><span class="material-icons-round">cached</span></button>
            </div>
            
              <button type="button" class="button-cantidad Añadir" >Añadir</button>
            </div>
          </div>
          </div>
        </div>
        
        <div class="swiper-slide" data-slide="3">
          <div class="imagenpods">
            <img src="../Issets/img/Pods/black-twist.webp" alt="" />
          <div class="container-descrip">
            <h1>Black Twister 2</h1>
            <p>Nicotina 53%</p>
            <h2>S/.49.00 </h2>
            <div class="container-butt">

            <span class="contador" id="contar3">0</span>
            <div class="contenedor">
              <button class="cont" id="incr3"><span class="material-icons-round">add</span></button>
              <button class="cont" id="decr3"><span class="material-icons-round">remove</span></button>
              <button class="cont" id="reset3"><span class="material-icons-round">cached</span></button>
            </div>
              <button type="button" class="button-cantidad Añadir" >Añadir</button>
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
    <a href="#" class="icon icon--facebook">
      <i class="ri-facebook-line"></i>
    </a>
    <a href="#" class="icon icon--whatsapp">
      <i class="ri-whatsapp-line"></i>
    </a>
  </div>
  
<script>
        const menuBtn = document.querySelector(".nav-menu-btn");
        const closeBtn = document.querySelector(".nav-close-btn");
        const navigation = document.querySelector(".container-icons");
        const navItems = document.querySelectorAll(".icons a");
        const mainItems = document.querySelector(".main");

        menuBtn.addEventListener("click", () => {
            navigation.classList.add("active");
            mainItems.classList.add("active");
        });

        closeBtn.addEventListener("click", () => {
            navigation.classList.remove("active");
            mainItems.classList.remove("active");
        });

        navItems.forEach((navItem) => {
            navItem.addEventListener("click", () => {
                navigation.classList.remove("active");
            });
        });
    </script>
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
<script src="../Issets/js/contador.js"></script>
</body>
</html>