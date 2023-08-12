const diapositivas = document.querySelectorAll(".swiper-slide");

diapositivas.forEach(diapositiva => {
    const numeroSlide = diapositiva.getAttribute("data-slide");

    const contador = document.getElementById(`contar${numeroSlide}`);
    const sumar = document.getElementById(`incr${numeroSlide}`);
    const restar = document.getElementById(`decr${numeroSlide}`);
    const reset = document.getElementById(`reset${numeroSlide}`);

    let numero = 0;

    sumar.addEventListener("click", () => {
        numero++;
        contador.innerHTML = numero;
    });

    restar.addEventListener("click", () => {
        if (numero > 0) {
            numero--;
            contador.innerHTML = numero;
        }
    });

    reset.addEventListener("click", () => {
        numero = 0;
        contador.innerHTML = numero;
    });
});