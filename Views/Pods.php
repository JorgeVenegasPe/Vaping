<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vaping - Pods</title>
  <link rel="stylesheet" href="../Issets/css/main.css"/>
  

</head>
<body>
  
  <!-- Carrusel  -->
  <main>
  <button id="loginButton">Iniciar sesión</button>
  </main>
  
  <!-- Carrito  -->
  <div>

  </div>

  <!-- Modals  -->
  <div id="loginModal" style="display: none;">
  <?php
    require 'Login.php';
  ?>
    

</div>

  </div>
  <script>
    const loginButton = document.getElementById('loginButton');
    const loginModal = document.getElementById('loginModal');

  // Asigna un controlador de eventos al botón de inicio de sesión
    loginButton.addEventListener('click', function() {
  // Muestra el modal
    loginModal.style.display = 'block';
    });
  </script>

  <!-- Redes Sociales -->
  <div>

  </div>
  
</body>
</html>