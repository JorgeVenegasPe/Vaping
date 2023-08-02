document.addEventListener("DOMContentLoaded", function() {
    // Esperar 5 segundos antes de mostrar las secciones
    setTimeout(function() {
    mostrarSecciones();
    }, 2000);
});

function mostrarSecciones() {
    document.getElementById("section1").style.display = "block";
}


/*DANIEL - Carrusel */
/*codigo de movimiento de la seccion de redes sociales */
  // Variables para almacenar la posición inicial del botón y la diferencia de posición mientras se arrastra
  var initialX, initialY, offsetX = 0, offsetY = 0;
  var isDragging = false;
 
  // Variable para almacenar la posición original del botón cuando está a la derecha
  var posicion2 = { X: -1515, Y: 50 };
 
  // Función para iniciar el arrastre del botón
  function startDrag(event) {
    event.preventDefault(); // Evitar el comportamiento predeterminado del enlace
    var centeredDiv = document.getElementById('centeredDiv');
 
    // Verificar si el elemento oculto está cerrado (tiene la clase "hidden")
    if (centeredDiv.classList.contains('hidden')) {
      isDragging = true;
      var button = document.getElementById('redes-sociales');
 
      // Asegurar que el elemento oculto esté por encima del botón durante el arrastre
      centeredDiv.style.zIndex = 2;
 
      initialX = event.clientX - offsetX;
      initialY = event.clientY - offsetY;
      button.style.cursor = 'grabbing'; // Cambiar el cursor al símbolo de agarre mientras se arrastra
 
      // Evento para arrastrar el botón
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
    isDragging = false;
    var button = document.getElementById('redes-sociales');
    var centeredDiv = document.getElementById('centeredDiv');
    // autoPositionButton(); // Remove this line to prevent automatic positioning after dragging
 
    button.style.cursor = 'pointer'; // Cambiar el cursor de vuelta al puntero normal
    document.onmousemove = null; // Eliminar el evento de arrastre
 
    // Restaurar la posición del elemento oculto cuando se detiene el arrastre
    centeredDiv.style.zIndex = 1;
    // centeredDiv.style.transform = `translate(${offsetX}px, ${offsetY}px)`; // Remove this line
 
    // Llamada a la función para verificar la posición después del arrastre
    var message = checkPositionAfterDrag();
 
    // Reset position if it's on the left side
    if (message === "Derecha") {
      resetPosition();
    } else if (message === "Izquierda") {
      // Set the original position to "posicion2" if it's on the right side
      button.style.transform = `translate(${posicion2.X}px, ${posicion2.Y}px)`;
      offsetX = posicion2.X;
      offsetY = posicion2.Y;
      // Move the "hidden" element to the same position
      centeredDiv.style.transform = `translate(${posicion2.X}px, ${posicion2.Y}px)`;
    }
  }
 
  // Función para verificar la posición después del arrastre y mostrar una alerta
  function checkPositionAfterDrag() {
    var button = document.getElementById('redes-sociales');
    var buttonRect = button.getBoundingClientRect();
    var windowWidth = window.innerWidth;
    var position = (buttonRect.right >= windowWidth / 2) ? "Derecha" : "Izquierda";
 
    //alert("La posición del botón después del arrastre es: " + position);
    return position;
  }
 
  // Función para resetear la posición original del botón
  function resetPosition() {
    var button = document.getElementById('redes-sociales');
    button.style.transform = `translate(0px, 0px)`;
    offsetX = 0;
    offsetY = 0;
    // Reset the position of the "hidden" element
    var centeredDiv = document.getElementById('centeredDiv');
    centeredDiv.style.transform = `translate(0px, 0px)`;
  }
 
  // Escuchar el evento de clic en "redes-sociales" y mostrar u ocultar el contenido oculto
  document.getElementById('redes-sociales').addEventListener('click', function(event) {
    event.stopPropagation(); // Evitar la propagación del evento de clic para que no interfiera con el arrastre
 
    // Comprobar si el tiempo entre mousedown y mouseup es menor a 200 ms (puedes ajustar este valor según tu preferencia)
    if (event.timeStamp - startDragTime < 200) {
      var centeredDiv = document.getElementById('centeredDiv');
      centeredDiv.classList.toggle('hidden');
    }
  });
 
  // Variable para almacenar el tiempo de inicio del arrastre
  var startDragTime;
  // Evento para guardar el tiempo de inicio del arrastre
  document.getElementById('redes-sociales').addEventListener('mousedown', function() {
    startDragTime = event.timeStamp;
  });




  let slideIndex = 0;
  showSlides(slideIndex);

  setInterval(function () {
    plusSlides(1);
  }, 10000);

  function plusSlides(n) {
    showSlides(slideIndex + n);
  }

  function currentSlide(n) {
    showSlides(n);
  }

  function showSlides(nextIndex) {
    let i;
    let slides = document.querySelectorAll(".mySlides");
    let quadrates = document.querySelectorAll(".quadrate");

    const currentIndex = slideIndex;
    slideIndex = nextIndex % slides.length;

    // Reiniciamos el slideIndex cuando llega al final o al principio del carrusel
    if (slideIndex < 0) slideIndex = slides.length - 1;

    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; // Ocultar todas las diapositivas
      slides[i].style.opacity = 0; // Asegurarnos de que todas las diapositivas sean transparentes
      slides[i].style.transform = "scale(1)"; // Reiniciar la escala a 1
    }
    for (i = 0; i < quadrates.length; i++) {
      quadrates[i].className = quadrates[i].className.replace("active", "");
    }

    slides[currentIndex].style.display = ""; // Mostrar la diapositiva actual

    // Si estamos en la primera diapositiva, mostrarla sin efecto de desvanecimiento
    if (currentIndex === 0) {
      slides[currentIndex].style.opacity = 1;
      slides[currentIndex].style.transform = "scale(1)";
    } else {
      fadeEffect(slides[currentIndex], 0, 1); // Aplicar el efecto de desvanecimiento (fade in)
    }

    quadrates[currentIndex].className += " active";
  }

  function fadeEffect(element, startOpacity, endOpacity) {
    let opacity = startOpacity;
    element.style.opacity = startOpacity; // Asegurarse de que el elemento sea visible antes de la animación

    const startTime = performance.now();
    const duration = 1200; // Duración de la animación en milisegundos (0.6 segundos)
    const bezier = "linear"; // Función de aceleración lineal

    requestAnimationFrame(function animate(now) {
      const elapsedTime = now - startTime;
      if (elapsedTime > duration) {
        // Asegurarse de que el elemento alcance la opacidad final al final de la animación
        element.style.opacity = endOpacity;
      } else {
        const progress = elapsedTime / duration;
        const easing = getEasingValue(progress, bezier);
        opacity = startOpacity + (endOpacity - startOpacity) * easing; // Efecto de desvanecimiento
        element.style.opacity = opacity;
        requestAnimationFrame(animate);
      }
    });
  }

  function getEasingValue(t, bezier) {
    // Función para obtener el valor de aceleración utilizando la función de bezier
    if (bezier === "linear") {
      return t; // Aceleración lineal
    } else {
      return 1 - getBezierValue(1 - t, bezier);
    }
  }

  function getBezierValue(t, bezier) {
    // Función para calcular el valor de la función de bezier en un punto dado (t)
    const [x1, y1, x2, y2] = bezier.match(/[\d.]+/g).map(Number);
    const term = (1 - t) ** 3 * 0 +
                 3 * (1 - t) ** 2 * t * x2 +
                 3 * (1 - t) * t ** 2 * x1 +
                 t ** 3 * 1;
    return term;
  }




