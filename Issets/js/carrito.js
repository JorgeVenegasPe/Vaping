document.addEventListener("DOMContentLoaded", function() {
    const cartContent = document.getElementById('cartModal');
    let isCartVisible = false;

    // Nuevo botón para mostrar/ocultar el modal
    const btnNuevoCarrito = document.getElementById('yape');

    btnNuevoCarrito.addEventListener('click', function() {
        if (isCartVisible) {
            cartContent.style.display = 'none';
            document.querySelector('.contenedor').classList.remove('active');
            isCartVisible = false;
        } else {
            cartContent.style.display = '';
            document.querySelector('.contenedor').classList.add('active');
            isCartVisible = true;
        }
    });

    const cerrarButton = document.getElementById('cerrar');

    cerrarButton.addEventListener('click', function() {
        cartContent.style.display = 'none';
        document.querySelector('.contenedor').classList.remove('active');
        isCartVisible = false;
    });
});

