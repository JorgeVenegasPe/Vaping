// Variables para almacenar la posición inicial del botón y la diferencia de posición mientras se arrastra
var initialX, initialY, offsetX = 0, offsetY = 0;
var isDragging = false;

// Función para iniciar el arrastre del botón
function startDrag(event) {
  event.preventDefault();
  var centeredDiv = document.getElementById('centeredDiv');

  if (centeredDiv.classList.contains('icons')) {
    isDragging = true;
    var button = document.getElementById('redes-sociales');
    centeredDiv.style.zIndex = 2;

    initialX = event.clientX;
    initialY = event.clientY;
    offsetX = 0;
    offsetY = 0;

    button.style.cursor = 'grabbing';

    document.onmousemove = function(event) {
      if (isDragging) {
        var button = document.getElementById('redes-sociales');
        offsetX = event.clientX - initialX;
        offsetY = event.clientY - initialY;
        button.style.transform = `translate(${offsetX}px, ${offsetY}px)`;
      }
    };
  }
}

// Función para detener el arrastre del botón
function stopDrag() {
  if (isDragging) {
    isDragging = false;
    var button = document.getElementById('redes-sociales');
    var centeredDiv = document.getElementById('centeredDiv');
    button.style.cursor = 'pointer';
    document.onmousemove = null;
    centeredDiv.style.zIndex = 1;

    var message = checkPositionAfterDrag();

    if (message === "Derecha") {
      resetPosition();
    } else if (message === "Izquierda") {
      resetPosition();
      var originalPositionX = 0;
      var originalPositionY = window.innerHeight * 0.4;
      button.style.cssText = `left: ${originalPositionX}px; top: ${originalPositionY}px; margin-left:10px;`;
      centeredDiv.style.cssText = `left: ${originalPositionX}px; top: 0px; `;
      offsetX = 0;
      offsetY = 0;
      centeredDiv.style.transform = ``;
    }
  }
}

// Función para verificar la posición después del arrastre y actualizar la posición del botón y el elemento "icons"
function checkPositionAfterDrag() {
  var button = document.getElementById('redes-sociales');
  var buttonRect = button.getBoundingClientRect();
  var windowWidth = window.innerWidth;
  var position = (buttonRect.right >= windowWidth / 2) ? "Derecha" : "Izquierda";

  var centeredDiv = document.getElementById('centeredDiv');
  centeredDiv.style[position.toLowerCase()] = "0";
  button.style[position.toLowerCase()] = "0";

  if (position === "Izquierda") {
    centeredDiv.style.top = "0";
  }

  return position;
}

// Función para resetear la posición original del botón y el elemento "icons"
function resetPosition() {
  var button = document.getElementById('redes-sociales');
  button.style.transform = `translate(0px, 0px)`;
  var centeredDiv = document.getElementById('centeredDiv');
  centeredDiv.style.transform = `translate(0px, 0px)`;

  button.style.left = "";
  button.style.right = "";
  centeredDiv.style.left = "";
  centeredDiv.style.right = "";
  centeredDiv.style.top = "";
}

// Escuchar el evento de clic en "redes-sociales" y mostrar u ocultar el contenido oculto
document.getElementById('redes-sociales').addEventListener('click', function(event) {
  event.stopPropagation();

  if (event.timeStamp - startDragTime < 200) {
    var centeredDiv = document.getElementById('centeredDiv');
    centeredDiv.classList.toggle('icons');
  }
});

// Variable para almacenar el tiempo de inicio del arrastre
var startDragTime;

// Evento para guardar el tiempo de inicio del arrastre
document.getElementById('redes-sociales').addEventListener('mousedown', function(event) {
  startDragTime = event.timeStamp;
  startDrag(event);
});

// Evento para detener el arrastre al soltar el botón
document.getElementById('redes-sociales').addEventListener('mouseup', function(event) {
  stopDrag(event);
});

// Restaurar la posición original del botón y el elemento oculto al recargar la página
window.addEventListener('load', function() {
  resetPosition();
  var centeredDiv = document.getElementById('centeredDiv');
  centeredDiv.classList.add('icons');
});
