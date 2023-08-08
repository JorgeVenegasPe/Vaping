document.addEventListener('DOMContentLoaded', () => {
    const openModalButton = document.getElementById('openModal');
    const closeModalButton = document.getElementById('closeModal');
    const modal = document.getElementById('myModal');
    const checkmarkContainer = document.querySelector('.checkmark-container');
    const addedText = document.querySelector('.added-text');
  
    const animateButtons = document.querySelectorAll('.Añadir');
  
    // Función para mostrar el modal con animación
    const showModal = () => {
      modal.style.display = 'block';
      checkmarkContainer.style.display = 'flex';
      addedText.innerText = 'Añadido al Carro';
  
      // Cerrar modal después de 5 segundos
      setTimeout(() => {
        closeModal();
      }, 1000);
    };
  
    // Función para ocultar el modal
    const closeModal = () => {
      modal.style.display = 'none';
      checkmarkContainer.style.display = 'none';
      addedText.innerText = '';
    };
  
    // Abrir modal al hacer clic en el botón "Añadir"
    animateButtons.forEach(button => {
      button.addEventListener('click', () => {
        showModal();
      });
    });
  
    // Cerrar modal al hacer clic en el botón de cierre
    closeModalButton.addEventListener('click', () => {
      closeModal();
    });
  
    // Cerrar modal al hacer clic fuera del contenido del modal
    window.addEventListener('click', event => {
      if (event.target === modal) {
        closeModal();
      }
    });
  });
  