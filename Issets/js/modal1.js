const modal = document.getElementById('myModal');
const openModalBtn = document.getElementById('openModalBtn');
const closeModalBtn = document.getElementsByClassName('close')[0];
const enviarBtn = document.getElementById('enviarBtn');
const cancelarBtn = document.getElementById('cancelarBtn');

document.getElementById('file').onchange = function(e) {
    let reader = new FileReader();
    reader.readAsDataURL(e.target.files[0]);
    reader.onload = function() {
    let preview = document.getElementById('preview');
    imagen = document.createElement('img');
    imagen.src = reader.result;
    imagen.style.width = "100%";
    preview.append(imagen);

    // Ocultar el botón de "Añadir imagen" después de cargar la imagen
    document.getElementById('fileLabel').style.display = 'none';
    }
}
openModalBtn.onclick = function() {
    modal.style.display = 'block';
}

closeModalBtn.onclick = function() {
    modal.style.display = 'none';
}

window.onclick = function(event) {
    if (event.target === modal) {
    modal.style.display = 'none';
    }
}

enviarBtn.onclick = function() {
  // Aquí puedes agregar la lógica para enviar la imagen
    modal.style.display = 'none';
}

cancelarBtn.onclick = function() {
    modal.style.display = 'none';
}