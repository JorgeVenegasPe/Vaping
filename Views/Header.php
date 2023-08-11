<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>header</title>
	<link rel="stylesheet" href="../Issets/css/header.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
	<header class="header-container">

		<div class="nav-menu-btn"></div>
		<!-- Logo a la izquierda -->
		<div class="logo">
			<img class="logots" src="../Issets/img/LogoTipo/NombreLogo.png" alt="Logo">
		</div>

		<!-- Barra de búsqueda a la derecha -->
		<div style="display: flex; flex-direction:row; align-items:center">
			<div class="container-icons">
				<div class="icons">
					<div class="nav-close-btn"></div>
					<form class="search">
						<input type="text" placeholder="Search" class="search__input" />
						<button type="button" class="search__button">
							<span class="material-symbols-sharp buscador">search</span>
						</button>
					</form>
					<a href="Login.php">Iniciar Session</a>


					<!-- FARDYYYYYYYY-->
					<a id="btn-abrir-modal"><span class="material-symbols-sharp ii">import_contacts</span></a>
					<dialog class="modalsito" id="modal">
						<div class="container-contact">

							<form id="formulario" class="formulario">
								<h1>Libro de reclamaciones</h1>

								<div class="box-input">
									<label class="labelimp" for="telefono"> Escbriba su Nombre</label>
									<input name="nombre" id="nombre" type="text" required>
								</div>
								<div class="box-input">
									<label class="labelimp" for="telefono"> Escbriba su Apellido</label>
									<input name="apellidos" id="apellidos" type="text" required>
								</div>
								<div class="box-input">
									<label class="labelimp" for="telefono"> Escbriba su Reclamo</label>
									<input name="reclamo" id="reclamo" type="reclamo" required>
								</div>

								<a class="boton" href="wsp.php" onclick="">Enviar</a>
								<button class="boton" id="btn-cerrar-modal"> Cerrar</button>
							</form>

						</div>
				

				</dialog>




				<a id="btn-abrir-modal1"><span class="material-symbols-sharp ii">home</span></a>
				<dialog class="modalsito" id="modal1">
					<div class="container-contact" >
						<form class="formulario">
							<div class="box-input">
								<h4>SELECIONA UNA DE NUESTRAS DIRECCIONES</h4>
							</div>

							<div class="box-input">
							<input type="radio">
								<label for="">
								
									<span>Usaremos la ubicacion de la tienda </span>
									<br>
									<span><small>Lima,Lima  Peru</small></span>
								</label>

								<small><a href="https://www.google.com/maps/place/ferreteria+gamboa/@-12.0182,-76.8140806,15z/data=!4m6!3m5!
								1s0x9105e95c7de29775:0xb2d159575f83a8d!8m2!3d-12.0169597!4d-76.8156562!16s%2Fg%2F11ll381hgj?entry=ttu">VER EN EL MAPA</a></small>
								<br>
								<input type="radio">
								<label for="">
									<span>Usaremos la ubicacion de la tienda </span>
									<br>
									<span><small>Lima,Lima  Peru</small></span>
								</label>

								<small><a href="https://www.google.com/maps/place/ferreteria+gamboa/@-12.0182,-76.8140806,15z/data=!4m6!3m5!
								1s0x9105e95c7de29775:0xb2d159575f83a8d!8m2!3d-12.0169597!4d-76.8156562!16s%2Fg%2F11ll381hgj?entry=ttu"> VER EN EL MAPA</a></small>
								
							</div>
							

							<div class="box-input">
								<h4>HORARIO DE RECOJO</h4>
								<div>
									<label for="">Dia</label>
									<br>
									<select name="" id="">
										<option value="1">Lunes</option>
										<option value="2">Martes</option>
										<option value="3">Miercoles</option>
										<option value="4">Jueves</option>
									</select>
								</div>

								<div>
									<label for="">Horarios</label>
									<br>
									<select name="" id="">
										<option value="1">De 6 A.M a 9 P.M</option>

									</select>
								</div>
							</div>
							<center><a  class="brr" id="btn-abrir-modal2">finaliza compra</a></center>
							<button class="boton" id="btn-cerrar-modal1"> Seguir comprando</button>
								

						</form>


					</div>
			

			</dialog>

			
				<dialog class="modalsito" id="modal2">
					<div class="container-contact">
						<form class="formulario1">
						<div class="input-group">
								
						<label for="">
									<span>Usaremos la ubicacion de la tienda </span>
									<br>
									<span><small>Lima,Lima  Peru</small></span>
								</label>

								<small><a href="">VER EN EL MAPA</a></small>
								</div>
								<h4>DATOS DE FACTURACION</h4>
								<div class="input-group2">
								<div class="input-group">
								<center><a  class="brr" >BOLETA</a></center>
						 </div>
						 <div class="input-group">
						 <center><a  class="brr" id="btn-abrir-modal3">FACTURA</a></center>
						 </div>
								</div>

						<div class="input-group2">
							
                             <div class="input-group">
							 
                                 <h5 for="NomPaciente">Nombre y apellidos</h5>
                                 <input type="text" id="NomPaciente" name="NomPaciente" class="input" value="" required/>
                             </div>
                             
                         </div>
						 <div class="input-group2">
                             <div class="input-group">
							 <h5 for="Dni">Dni</h5>
  		                         <select style="text-align:center" class="input" value="" id="Dni" name="Dni" required>
									<option value="1">DNI</option>
									<option value="2">Pasaporte</option>
									<option value="3">Carnet de extranjeria</option>
                                 </select>
                             </div>
							 <div class="input-group">
							<br>
                                 <input type="text" id="Dni" name="Dni" class="input" value="" required/>
                             </div>
                         </div>
						 <div class="input-group2">
						 <div class="input-group">
                             <h5 for="Email">Correo</h5>
                             <input class="input" id="Email" type="text" name="Email" value="" required>
                         </div>
                         
                         <div class="input-group">
                             <h5 for="Telefono">Telefono</h5>
                             <input type="text" id="Telefono" name="Telefono" value="" required>
                         </div>
						 </div>
                         
                         <div  class="input-group2">
  	                         <div style="width:190px" class="input-group">
  		                       <h5 for="Distrito">Distrito</h5>
  		                         <select style="text-align:center" class="input" value="" id="Distrito" name="Distrito" required>
                                     <option value=""></option>
                                 </select>
  	                         </div>
                             <div class="input-group">
  		                       <h5 for="Direccion">Dirección</h5>
  		                       <input type="text" id="Direccion" name="Direccion" class="input" value="" required/>
  	                         </div>
                         </div>
                         
							
							<button class="boton" id="btn-cerrar-modal2"> cerrar</button>

						</form>


					  </div>
					</dialog>


					<dialog class="modalsito" id="modal3">
					<div class="container-contact">
						<form class="formulario1">
						<div class="input-group">
								
						<label for="">
									<span>Usaremos la ubicacion de la tienda </span>
									<br>
									<span><small>Lima,Lima  Peru</small></span>
								</label>

								<small><a href="">cambiar</a></small>
								</div>
								<h4>DATOS DE FACTURACION</h4>
								<div class="input-group2">
								<div class="input-group">
								<center><a  class="brr" id="btn-cerrar-modal3" >BOLETA</a></center>
						 </div>
						 <div class="input-group">
						 <center><a  class="brr" >FACTURA</a></center>
						 </div>
								</div>
								<div class="input-group2">
							
							<div class="input-group">
							
								<h5 for="NomPaciente">Nombre y apellidos</h5>
								<input type="text" id="NomPaciente" name="NomPaciente" class="input" value="" required/>
							</div>
							
						</div>
						<div class="input-group2">
						<div class="input-group">
							 <h5 for="Documento">Documento</h5>
  		                         <select style="text-align:center" class="input" value="" id="Documento" name="Documento" required>
									<option value="1">RUC</option>
                                 </select>
                             </div>
							<div class="input-group">
						   <br>
								<input type="text" id="Dni" name="Dni" class="input" value="" required/>
							</div>
						</div>
						
						 <div class="input-group2">
						 <div class="input-group">
                             <h5 for="Social">Razon Social</h5>
                             <input class="input" id="Social" type="text" name="Social" value="" required>
                         </div>
						 </div>
						 <div class="input-group2">
						 <div class="input-group">
                             <h5 for="Email">Correo</h5>
                             <input class="input" id="Email" type="text" name="Email" value="" required>
                         </div>
                         
                         <div class="input-group">
                             <h5 for="Telefono">Telefono</h5>
                             <input type="text" id="Telefono" name="Telefono" value="" required>
                         </div>
						 </div>
                         
                         <div  class="input-group2">
  	                         <div style="width:190px" class="input-group">
  		                       <h5 for="Distrito">Distrito</h5>
  		                         <select style="text-align:center" class="input" value="" id="Distrito" name="Distrito" required>
                                     <option value="1">huaycan</option>
                                 </select>
  	                         </div>
                             <div class="input-group">
  		                       <h5 for="Direccion">Dirección</h5>
  		                       <input type="text" id="Direccion" name="Direccion" class="input" value="" required/>
  	                         </div>
                         </div>
                         
							
						 <button class="boton" id="btn-abrir-modal"> cerrar</button>

						</form>


					  </div>
					</dialog>
			</div>


			

			
			
			<!-- FARDYYYYYYYY-->


















			<a href="Ajustes.php"><span class="material-symbols-sharp ii ajuste">person</span></a>
			<a class="iconossss" href="Ajustes.php">Ajuste</a>
		</div>
		</div>
		<div class="container-iconos">
			<div class="container-cart-icon">
				<span class="material-symbols-sharp ii carrito">shopping_cart</span>
				<div class="count-products">
					<span id="contador-productos">0</span>
				</div>
			</div>
			<div class="container-cart-products hidden-cart">
				<div class="row-product hidden">
					<div class="cart-product">
						<div class="info-cart-product">
							<span class="cantidad-producto-carrito"></span>
							<p class="titulo-producto-carrito"></p>
							<span class="precio-producto-carrito"></span>
						</div>
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-close">
							<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
						</svg>
					</div>
				</div>

				<div class="cart-total">
					<div style="display:flex; flex-direction:row">
						<h3>Total :</h3>
						<span class="total-pagar" id="total-pagar">$0</span>
					</div>
					<div class="container-butt">
						<button class="button-metod-pago" id="vaciar">Vaciar carrito</button>
						<button class="button-metod-pago pagar">Pagar</button>
					</div>
					<div class="metodos-pago active">
						<p style="text-align:center;">Metodos de Pago:</p>
						<div class="metodos">
							<a><img class="yape" src="../Issets/img/LogoTipo/LogoYape.png"></a>
							<a><img class="visa" src="../Issets/img/LogoTipo/LogoVisa.png"></a>
							<a><img class="plin" src="../Issets/img/LogoTipo/LogoPlin.png"></a>
						</div>
					</div>
				</div>
				<p class="cart-empty">El carrito está vacío</p>
			</div>

		</div>
		</div>
	</header>
</body>


</html>