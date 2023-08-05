<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Issets/css/ajustes.css">
    <style>
      .oculto {
        display: none;
      }
    </style>
</head>
<body>
  <div class="btn_perfil">
    <button id="perfilBtn" class="perfil" >perfil</button>
  </div>

  <div class="conteiner oculto">
    <div class="contend_padre">
        <div class="contend_img">
            <img class="img_usuario" src="https://static.vecteezy.com/system/resources/previews/018/765/757/non_2x/user-profile-icon-in-flat-style-member-avatar-illustration-on-isolated-background-human-permission-sign-business-concept-vector.jpg">
        </div>
        <div>
            <h3 class="usuario">Usuario</h3>
        </div>
        <div class="contend_datos">
            <div class="datos">
            <h3>ID</h3>
            <input value="1"></div>
            <button href="#">Editar</button>
        </div>
        <div class="contend_datos">
        <div class="datos">
            <h3>Nombre</h3>
            <input value="Mario">
        </div>
            <button href="#">Editar</button>
        </div>
        <div class="contend_datos">
        <div class="datos">
            <h3>Contraseña</h3>
            <input type="password" value="123456">
        </div>
            <button href="#">Editar</button>
        </div>
        <div class="contend_datos">
        <div class="datos">
            <h3>Correo</h3>
            <input type="email"  value="mario@gmail.com">
        </div>
            <button href="#">Editar</button>
        </div>
        <div class="contend_datos">
        <div class="datos">
            <h3>Telefono</h3>
            <input type="text"  value="987789234" maxlength="9">
        </div>
            <button href="#">Editar</button>
        </div>
        <div class="btn_editar">
            <button type="input">Editar</button>
        </div>
    </div>
  </div>

  <script>
   const perfilBtn = document.getElementById('perfilBtn');
const contenedor = document.querySelector('.conteiner');
const contendPadre = document.querySelector('.contend_padre');

perfilBtn.addEventListener('click', () => {
  contenedor.classList.toggle('oculto');
});

document.addEventListener('click', (event) => {
  if (!contendPadre.contains(event.target) && !perfilBtn.contains(event.target)) {
    contenedor.classList.add('oculto');
  }
});
  </script>
</body>
</html>