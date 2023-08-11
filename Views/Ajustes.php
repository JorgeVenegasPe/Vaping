<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../Issets/css/ajustes.css">
    <style>
    .oculto {
        display: none;
    }
    </style>
</head>

<body>


    <div class="conteiner oculto">
        <div class="contend_padre">
            <button class="close"><span class="material-symbols-outlined">
                    close
                </span></button>
            <div>
                <h3 class="usuario">Usuario</h3>
            </div>

            <div class="contend_datos">
                <div class="datos">
                    <h3>Nombre</h3>
                </div><input type="text" value="<?=$_SESSION['Nombre']?>">

            </div>
            <div class="contend_datos">
                <div class="datos">
                    <h3>Contraseña</h3>

                </div><input type="password" value="123456">

            </div>
            <div class="contend_datos">
                <div class="datos">
                    <h3>Correo</h3>

                </div><input type="email" value="<?=$_SESSION['Email']?>">

            </div>

            <div class="btn_editar">
                <button class="button" type="input">Detalle de Venta</button>
                <button class="button" type="input">Editar</button>
            </div>
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const contenedor = document.querySelector('.conteiner');
        const contendPadre = document.querySelector('.contend_padre');
        const perfilBtn = document.getElementById('perfilBtn');
        const closeBtn = document.querySelector('.close');

        const toggleContendPadre = () => {
            if (!contenedor.classList.contains('oculto')) {
                contendPadre.style.opacity = '0';
                contendPadre.style.transform = 'translateY(-20px)';
                contendPadre.style.transition = 'transform 0.3s ease, opacity 0.3s ease';
                setTimeout(() => {
                    contenedor.classList.add('oculto');
                }, 200); // Tiempo para que termine la animación de desaparición antes de ocultar
            } else {
                contenedor.classList.remove('oculto');
                contendPadre.style.opacity = '0';
                contendPadre.style.transform = 'translateY(-20px)';
                contendPadre.style.transition = 'none'; // Eliminar la transición al aparecer nuevamente
                setTimeout(() => {
                    contendPadre.style.opacity = '1';
                    contendPadre.style.transform = 'translateY(0)';
                    contendPadre.style.transition = 'transform 0.2s ease, opacity 0.2s ease';
                }, 0); // Iniciar la animación de aparición después de establecer los valores iniciales
            }
        };

        perfilBtn.addEventListener('click', toggleContendPadre);
        closeBtn.addEventListener('click', toggleContendPadre);

        document.addEventListener('click', (event) => {
            if (!contendPadre.contains(event.target) && !perfilBtn.contains(event.target)) {
                contenedor.classList.add('oculto');
            }
        });
    });
    </script>



</body>

</html>