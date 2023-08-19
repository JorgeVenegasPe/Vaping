<html>  
    <head>  
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
    <head>  
<body>
<div class="service-modal-body">
    <i class="fas fa-times modal-close-btn"></i>
    <form id="formulario" >
		<h1>Libro de reclamaciones</h1>
        <br>
		<div class="box-input">
			<label class="labelimp" for="telefono"> Escbriba su Nombre y Apellido</label>
			<input name="nombre" id="nombre" type="text" id="txt_documento" required>
		</div>
		<div class="box-input">
			<label class="labelimp" for="telefono">Escriba su Numero de Celular </label>
			<input name="apellidos" id="apellidos" type="text" id="txt_celular" placeholder="(Codigo de pais, obligatorio) Numero"required>
		</div>
		<div class="box-input">
			<label class="labelimp" for="telefono"> Escbriba su Reclamo</label>
			<textarea name="reclamo" id="reclamo" id="txt_documento1"required></textarea>
		</div>
        
		<div class="mb-3">
 <input type="button" class="btn btn-primary"  id="btn_notificar" value="Enviar"/>
</div>
	</form>
</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    
	<script type='text/javascript'>
    	

	
    $(document).ready(function() {
		
    	var token="ESCRIBA EL TOQUEN DE TU CELULAR ";
		var api ="https://script.google.com/macros/s/AKfycbyoBhxuklU5D3LTguTcYAS85klwFINHxxd-FroauC4CmFVvS0ua/exec";
		 
			
		$("#btn_notificar").click(function() {
			 var  payload = {"op": "registermessage","token_qr": token, "mensajes": [
							{"numero": $("#txt_celular").val(),"mensaje": "Mi nombre y apellidos son:*"+$("#txt_documento").val()+"*"},
                            {"numero": $("#txt_celular").val(),"mensaje": "Mi reclamo es: *"+$("#txt_documento1").val()+"*"},
							]};
			 $.ajax({
				 url: api,
				 jsonp: "callback",
				 method: 'POST',
				 data : JSON.stringify(payload),
				 async: false,
				 success: function(respuestaSolicitud) {
						alert(respuestaSolicitud.message);
				 }
			 });
         });
    });	

	function base64(file, callback){
		  var coolFile = {};
		  function readerOnload(e){
			var base64 = btoa(e.target.result);
			coolFile.base64 = base64;
			callback(coolFile)
		  };

		  var reader = new FileReader();
		  reader.onload = readerOnload;

		  var file = file[0].files[0];
		  coolFile.filetype = file.type;
		  coolFile.size = file.size;
		  coolFile.filename = file.name;
		  reader.readAsBinaryString(file);
	}
	async function subirFoto(id){
		var foto = await new Promise((resolve, reject) => {
			base64( $('#'+id), function(data){
				resolve(data.base64)
			});
		});
		$("#"+id+"_base64").val(foto);
		console.log(foto);
	}
    </script>   

  </body>
  </html>



