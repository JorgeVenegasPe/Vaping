<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Issets/css/main.css"/>
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <title>Pagos</title>
</head>
<body>
    <style>
        .a{
            display: none;
        }
        .container-butt{
            display: flex;
            justify-content: space-between;   
        }
        a{
            text-decoration: none;
        }
        .aaa{
            display: flex;
            gap: 10px; 
            flex-direction: row;
        }
        .aaa input[type="checkbox"] {
        width: 40px;
        margin: 0;
        }
        .green-text {
            color: #787878;
        }
                
        .itemTer {
            border: 1px solid #000000;
        }
    </style>
  <!-- Header  -->
  <?php
    require 'Header.php'
  ?>
<main>
    <div class="container-butt">
        <a href="Pods.php" class="button-T">
            <i class="ri-arrow-left-line"></i>
            <p class="text">Seguir Comprando </p>
        </a>
    </div>
    <div class="container-productos-pago" id="productos-en-pago">
        <?php
        // Recibir y mostrar los productos enviados mediante POST
        if (isset($_POST['productos'])) {
            $productos = json_decode($_POST['productos'], true);
            foreach ($productos as $producto) {
                ?>
                <div class="producto-en-pago">
                    <div class="products">  
                        <img  src="<?=$producto['image'] ?>" alt="<?=$producto['title'] ?>">
                        <p><?=$producto['quantity'] ?></p>
                        <h3><?=$producto['title'] ?></h3>
                    </div>
                    <?php
                    $Total = intval($producto['quantity']) * intval(substr($producto['price'], 3));;
                    ?>
                    <p>S/<?= $Total ?>.00</p>
                </div>
                <?php
            }
            // Obtener el valor de valorTotal
            $valorTotal = isset($_POST['valorTotal']) ? $_POST['valorTotal'] : '0';
            }
        ?>
        <div class="total">
            <h2>Total: </h2><span><?= $valorTotal ?></span>
        </div>
    </div>
    <div class="container-butt">
        <a class="button-T RecojoTienda">
            <i class="ri-store-fill"></i>
            <p class="text">Recojo en tienda</p>
        </a>
        <a class="button-T Delivery">
            <i class="ri-truck-line"></i>
            <p class="text">Delivery</p>
        </a>
    </div>
</main>

<!-- Recojo en tienda -->
<div class="service-modal modalformrt flex-center">
    <div class="service-modal-body">
        <i class="fas fa-times modal-close-btn"></i>
        <form class="FormSeleccionTienda">
            <div>
				<h1 style="text-align: center;">Nuestra Tienda</h1>
                <div class="conta" style="width: auto;">
                    <div class="itemTer">
                        <div class="head" id="head1">
                            1.- Nuestra Dirección : 
                            <i class="icone fas fa-plus"></i>
                        </div>
                        <div class="conteTer" id="content1">
                            <h5> Av. Arenales 963, Cercado de Lima, Perú</h5>
                            <h6>LIMA, LIMA, LIMA, PERÚ</h6>
                        </div>
                    </div>
                </div>
			</div>
            <div class="box-input">
                <h1 style="text-align: center;">Horario de Recojos</h1>
			    <div class="inputs-selects">
			    	<h4 for="">Dias</h4>
			    	<select name="" id="">
			    		<option value="1">Lunes</option>
			    		<option value="2">Martes</option>
			    		<option value="3">Miercoles</option>
			    		<option value="4">Jueves</option>
			    	</select>
			    </div>
			    <div class="inputs-selects">
			    	<h4 for="">Horarios</h4>
			    	<select name="" id="">
			    		<option value="1">De 6 A.M a 9 P.M</option>
			    	</select>
			    </div>
                <br>
            </div>
            <div class="container-butt">
                <a href="Pods.php" class="button-T">
                    <i class="ri-arrow-left-line"></i>
                    <p class="text">Seguir Comprando </p>
                </a>
                <a class="button-T datos">
                    <p class="text finalcomp">Finalizar Compra</p>
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
    	</form>

        <form class="FormDatos active">
		    <h1 style="text-align: center;">Datos de facturizacion</h1>
		    <div class="box-input">
            <div class="conta">
                    <div class="itemTer">
                        <div class="head" id="head1">
                            1.- Nuestra Tienda : 
                            <i class="icone fas fa-plus"></i>
                        </div>
                        <div class="conteTer" id="content1">
                            <h5> Av. Arenales 963, Cercado de Lima, Perú</h5>
                            <h6>LIMA, LIMA, LIMA, PERÚ</h6>
                        </div>
                    </div>
                </div>

		    </div>
            <div class="container-butt" style="justify-content: inherit">
                <a class="button-T" href="javascript:void(0);" onclick="toggleRazonSocial(true)">
                    <i class="ri-arrow-left-line"></i>
                    <p class="text">Factura</p>
                </a> 
                <a class="button-T" href="javascript:void(0);" onclick="toggleRazonSocial(false)">
                    <p class="text finalcomp">Boleta</p>
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
		    <h1 style="text-align: center; padding: 25px;">Datos de Personales</h1>
		    <div class="box-input">
		    	<label class="labelimp" for="telefono"> Nombre y Apellido</label>
		    	<input name="apellidos" id="apellidos" type="text" required>
		    </div>
            <div class="box-input-total">
                <div class="box-input">
			        <label for="">Documento:</label>
                    <div class="inputs-selects">
			        	<select style="text-align:center; width: auto;" name="documento" class="documentoSelect">
		            		<option value="1" class="dni">DNI</option>
		            		<option value="2">Pasaporte</option>
		            		<option value="3">Carnet de extranjeria</option>
		            		<option style="display:none" value="3">Ruc</option>
			        	</select>
			        </div>
                </div>
                <div class="box-input">
                        <label class="labelimp" for="numero_documento"> Numero de Documento:</label>
                        <input name="numero_documento" class="numeroDocumento" type="text" required maxlength="8">
                    </div>
                    
            </div>

            <div class="box-input" id="razonSocialInput" style="display: none;">
                        <label class="labelimp" for="razon_social"> Razon Social:</label>
                        <input name="razon_social" class="razonSocial" type="text" required>
                    </div>
                    
		    <div class="box-input">
		    	<label class="labelimp" for="telefono"> Correo Electronico:</label>
		    	<input name="apellidos" id="apellidos" type="text" required>
		    </div>
		    <div class="box-input">
		    	<label class="labelimp" for="telefono"> Celular:</label>
		    	<input name="apellidos" id="apellidos" type="text" required>
		    </div>
            <div class="box-input">
			    <label for="">Distrito</label>
                <br>
                <div class="inputs-selects">
			    	<select style="text-align:center" name="" id="">
		        		<option value="1">Lima</option>
		        		<option value="2">Pasaporte</option>
		        		<option value="3">Carnet de extranjeria</option>
			    	</select>
			    </div>
                <br>
            </div>
		    <div class="box-input">
		    	<label class="labelimp" for="telefono"> Direccion:</label>
		    	<input name="apellidos" id="apellidos" type="text" required>
		    </div>
            <br>
			<div class="metodos-pago">
                <p style="text-align:center;">Metodos de Pago:</p>
                <div class="metodos">
                    <div class="colm text-right">
                        <input type="radio" name="modalOption" value="modal-yape" id="modal-yape">
                        <label for="modal-yape"><img class="yape Yape" src="../Issets/img/LogoTipo/LogoYape.png"></label>
                    </div>
                    <div class="colm text-right">    
                        <input type="radio" name="modalOption" value="modal-visa" id="modal-visa">
                        <label for="modal-visa"><img class="visa Visa" src="../Issets/img/LogoTipo/LogoVisa.png"></label><br>
                    </div>
                    <div class="colm text-right"> 
                        <input type="radio" name="modalOption" value="modal-plin" id="modal-plin">
                        <label for="modal-plin"><img class="plin Plin" src="../Issets/img/LogoTipo/LogoPlin.png"></label><br>
                    </div>
                </div>
            </div>
            <br>
		    <div class="aaa">
		        <input type="checkbox" value="Acepto los Términos y Condiciones y Políticas de privacidad">
                <p>Acepto los Términos y Condiciones y Políticas de privacidad</p>
		    </div>
            <div class="container-butt">
                <a href="Pods.php" class="button-T">
                    <i class="ri-arrow-left-line"></i>
                    <p class="text">Seguir Comprando </p>
                </a>
                <a class="button-T" id="openSelectedModalBtn">
                    <p class="text finalcomp">Pagar</p>
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
		</form>
    </div>
</div>

<!-- delivery -->
<div class="service-modal modalformdv flex-center">
    <div class="service-modal-body">
        <i class="fas fa-times modal-close-btn"></i>
        <form class="FormDatosDelivery active">
		    <h1 style="text-align: center;">Informacion de Contacto</h1>
		    <div class="box-input">
		    	<label class="labelimp" for="telefono"> Nombre y Apellido</label>
		    	<input name="apellidos" id="apellidos" type="text" required>
		    </div>
            <div class="box-input-total">
                <div class="box-input">
			        <label for="">Documento:</label>
                    <div class="inputs-selects">
                        <select style="text-align:center; width: auto;" name="documento" class="documentoSelect">
                            <option value="1" class="dni">DNI</option>
                            <option value="2">Pasaporte</option>
                            <option value="3">Carnet de extranjeria</option>
                        </select>
                    </div>
                </div>
                <div class="box-input">
                    <label class="labelimp" for="numero_documento"> Numero de Documento:</label>
                    <input name="numero_documento" class="numeroDocumento" type="text" required maxlength="8">
                </div>
            </div>
		    <div class="box-input">
		    	<label class="labelimp" for="telefono"> Correo Electronico:</label>
		    	<input name="apellidos" id="apellidos" type="email" required>
		    </div>
		    <div class="box-input">
		    	<label class="labelimp" for="telefono"> Celular:</label>
		    	<input name="apellidos" id="apellidos" type="text" required>
		    </div>
		    <h1 style="text-align: center;">Direccion de Envio</h1>
            <div class="box-input">
			    <label for="">Distrito</label>
                <br>
                <div class="inputs-selects">
			    	<select style="text-align:center" name="" id="">
		        		<option value="1">Lima</option>
		        		<option value="2">Pasaporte</option>
		        		<option value="3">Carnet de extranjeria</option>
			    	</select>
			    </div>
                <br>
            </div>
		    <div class="box-input">
		    	<label class="labelimp" for="telefono"> Direccion:</label>
		    	<input name="apellidos" id="apellidos" type="text" required>
		    </div>
		    <div class="box-input">
		    	<label class="labelimp" for="telefono">Referencia</label>
		    	<textarea name="reclamo" id="reclamo" required></textarea>
		    </div>
            <br>
            <div class="metodos-pago">
                <p style="text-align:center;">Metodos de Pago:</p>
                <div class="metodos">
                    <div class="colm text-right">
                        <input type="radio" name="modalOption" value="modal-yape" id="modal-yape">
                        <label for="modal-yape"><img class="yape Yape" src="../Issets/img/LogoTipo/LogoYape.png"></label>
                    </div>
                    <div class="colm text-right">    
                        <input type="radio" name="modalOption" value="modal-visa" id="modal-visa">
                        <label for="modal-visa"><img class="visa Visa" src="../Issets/img/LogoTipo/LogoVisa.png"></label><br>
                    </div>
                    <div class="colm text-right"> 
                        <input type="radio" name="modalOption" value="modal-plin" id="modal-plin">
                        <label for="modal-plin"><img class="plin Plin" src="../Issets/img/LogoTipo/LogoPlin.png"></label><br>
                    </div>
                </div>
            </div>
            <br>
		    <div class="aaa">
		        <input type="checkbox" value="Acepto los Términos y Condiciones y Políticas de privacidad">
                <p>Acepto los Términos y Condiciones y Políticas de privacidad</p>
		    </div>
            <div class="container-butt">
                <a href="Pods.php" class="button-T">
                    <i class="ri-arrow-left-line"></i>
                    <p class="text">Seguir Comprando </p>
                </a>
                <a class="button-T" id="openSelectedModalBtndv">
                    <p class="text finalcomp">Pagar</p>
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
		</form>
    </div>
</div>

<div class="service-modal modal-yape flex-center" >
    <div class="service-modal-body">
        <i class="fas fa-times modal-close-btnmodal"></i>
        <h1>Pago con yape</h1>
        <div class="box-input">
            <img src="../Issets/img/kr.webp">
            <h2>Numero: +51 999 999 999</h2>
            <h2>Monto a pagar: <?= $valorTotal ?></h2>
        </div>
        <div class="container-butt">
            <a class="button-T">
                <p class="text">Listo</p>
            </a>
        </div>
    </div>
</div>

<div class="service-modal modal-visa flex-center" >
    <div class="service-modal-body">
        <i class="fas fa-times modal-close-btnmodal"></i>
        <h1>Pago con Tarjeta</h1>
        <div class="box-input">
            <img src="../Issets/img/kr.webp" >
            <br>
            <h2>Numero de Cuenta Bancario: <br>
                1234 5678 9012 3456</h2>
            <br>
            <h2>Numero de Cuenta Inter Bancario: <br>
                12345 67891 54321 98765</h2>
            <br>
            <h2>Monto a pagar: <?= $valorTotal ?></h2>
        </div>
        <div class="container-butt">
            <a class="button-T">
                <p class="text">Listo</p>
            </a>
        </div>
    </div>
</div>

<div class="service-modal modal-plin flex-center" >
    <div class="service-modal-body">
        <i class="fas fa-times modal-close-btnmodal"></i>
        <h1>Pago con plin</h1>
        <div class="box-input">
            <img src="../Issets/img/kr.webp">
            <h2>Numero: +51 999 999 999</h2>
            <h2>Monto a pagar: <?= $valorTotal ?></h2>
        </div>
        <div class="container-butt">
            <a class="button-T">
                <p class="text">Listo</p>
            </a>
        </div>
    </div>
</div>

<script>
// Modals Formas de compra
const finalcompra = document.querySelectorAll(".finalcomp");
const FormSeleccionTienda = document.querySelector(".FormSeleccionTienda"); // Cambiado a querySelector
const FormDatos = document.querySelector(".FormDatos"); // Cambiado a querySelector

    finalcompra.forEach((finalcompr, i) => {
        finalcompr.addEventListener("click", () => {
            FormSeleccionTienda.classList.add('active');
            FormDatos.classList.remove('active');
        });
    });

const serviceModalsrt = document.querySelectorAll(".modalformrt");
const serviceModalsdv = document.querySelectorAll(".modalformdv");
const RecojoTiendaBtns = document.querySelectorAll(".RecojoTienda");
const DeliveryBtns = document.querySelectorAll(".Delivery");
const modalCloseBtns = document.querySelectorAll(".modal-close-btn");
const modalCloseBtnsModal = document.querySelectorAll(".modal-close-btnmodal");

    var modalrt = function(modalClick){
        serviceModalsrt[modalClick].classList.add("active");
    }

    var modaldv = function(modalClick){
        serviceModalsdv[modalClick].classList.add("active");
    }

    RecojoTiendaBtns.forEach((RecojoTiendaBtn, i) => {
        RecojoTiendaBtn.addEventListener("click", () => {
            modalrt(i);
      });
    });

    DeliveryBtns.forEach((DeliveryBtn, i) => {
        DeliveryBtn.addEventListener("click", () => {
            modaldv(i);
      });
    });

    const modalYapeOption = document.getElementById("modal-yape");
    const modalVisaOption = document.getElementById("modal-visa");
    const modalPlinOption = document.getElementById("modal-plin");
    const openSelectedModalBtn = document.getElementById("openSelectedModalBtn");
    const openSelectedModalBtndv = document.getElementById("openSelectedModalBtndv");
    const modalYape = document.querySelector(".modal-yape");
    const modalVisa = document.querySelector(".modal-visa");
    const modalPlin = document.querySelector(".modal-plin");

    openSelectedModalBtn.addEventListener("click", function() {
        if (modalYapeOption.checked) {
            modalYape.classList.add("active");
        }
        else if (modalVisaOption.checked){
            modalVisa.classList.add("active");
        }
        else if (modalPlinOption.checked){
            modalPlin.classList.add("active");
        }
    });

    openSelectedModalBtndv.addEventListener("click", function() {
        if (modalYapeOption.checked) {
            modalYape.classList.add("active");
        }
        else if (modalVisaOption.checked){
            modalVisa.classList.add("active");
        }
        else if (modalPlinOption.checked){
            modalPlin.classList.add("active");
        }
    });

    modalCloseBtns.forEach((modalCloseBtn) => {
        modalCloseBtn.addEventListener("click", () =>{
            serviceModalsrt.forEach((modalView)=>{
                FormSeleccionTienda.classList.remove('active');
                FormDatos.classList.add('active');
                modalView.classList.remove("active");
            });
            serviceModalsdv.forEach((modalView)=>{
                modalView.classList.remove("active");
            });
        });
    });

    modalCloseBtnsModal.forEach((modalCloseBtn) => {
        modalCloseBtn.addEventListener("click", () =>{
            modalYape.classList.remove("active");
            modalVisa.classList.remove("active");
            modalPlin.classList.remove("active");
        });
    });


</script>

<script>
const items = document.querySelectorAll('.itemTer');
items.forEach((item, index) => {
    const header = item.querySelector('.head');
    const content = item.querySelector('.conteTer');
    const icon = item.querySelector('.icone');

    header.addEventListener('click', () => {
        if (content.style.display === 'none') {
            content.style.display = 'block';
            icon.classList.add('active');
            header.classList.add('green-text'); // Agrega la clase para cambiar el color
        } else {
            content.style.display = 'none';
            icon.classList.remove('active');
            header.classList.remove('green-text'); // Remueve la clase para volver al color original
        }
    });
});
</script>

<script>
    const documentoSelects = document.querySelectorAll('.documentoSelect');
    const numeroDocumentoInputs = document.querySelectorAll('.numeroDocumento');

    documentoSelects.forEach((select, index) => {
        const numeroDocumentoInput = numeroDocumentoInputs[index];

        select.addEventListener('change', function () {
            numeroDocumentoInput.value = ''; // Limpiar el valor del input al cambiar la opción
            if (this.value === '1') { // DNI
                numeroDocumentoInput.maxLength = 8; // DNI limit
                numeroDocumentoInput.pattern = '[0-9]{1,8}'; // Numeric only
                numeroDocumentoInput.addEventListener('input', restrictInput);
            } else if (this.value === '2' || this.value === '3') { // Pasaporte o Carnet de Extranjería
                numeroDocumentoInput.maxLength = 20; // Pasaporte o Carnet de Extranjería limit
                numeroDocumentoInput.removeAttribute('pattern'); // Alphanumeric allowed
                numeroDocumentoInput.removeEventListener('input', restrictInput);
            }
        });

        function restrictInput(event) {
            const inputValue = event.target.value.replace(/[^0-9]/g, ''); // Allow only numbers
            event.target.value = inputValue;
        }
    });
    function toggleRazonSocial(show) {
        const razonSocialInput = document.getElementById('razonSocialInput');
        const boletaButton = document.querySelector('.button-T:not(.active)');
        const facturaButton = document.querySelector('.button-T.active');

        if (show) {
            razonSocialInput.style.display = 'block'; // Mostrar el campo
            facturaButton.style.color = 'white';
            facturaButton.style.backgroundColor = 'black';
            boletaButton.style.color = 'black';
            boletaButton.style.backgroundColor = 'white';
        } else {
            razonSocialInput.style.display = 'none'; // Ocultar el campo
            boletaButton.style.color = 'white';
            boletaButton.style.backgroundColor = 'black';
            facturaButton.style.color = 'black';
            facturaButton.style.backgroundColor = 'white';
        }
    }
</script>

<script src="../Issets/js/main.js"></script>
</body>
</html>