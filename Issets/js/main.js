document.addEventListener("DOMContentLoaded", function() {
    // Esperar 5 segundos antes de mostrar las secciones
    setTimeout(function() {
    mostrarSecciones();
    }, 2000);
});

function mostrarSecciones() {
    document.getElementById("section1").style.display = "block";
}


