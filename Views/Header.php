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
        <!-- Logo a la izquierda -->
        <div class="logo">
            <img src="../Issets/img/LogoTipo/NombreLogo.png" alt="Logo">
        </div>
        
        <!-- Barra de búsqueda a la derecha -->
        <div class="container-icons">
	    	<form class="search">
	    		<input type="text" placeholder="Search" class="search__input"/>
	    		<button type="button" class="search__button">
                    <span class="material-symbols-sharp">search</span>
	    		</button>
	    	</form>
            <div class="icons">
                <a class="btn-login" >Iniciar Session</a>
                <span class="material-symbols-sharp">shopping_cart</span>
                <span class="material-symbols-sharp">person</span>
            </div>
        </div>
    </header>

    <!-- Login  -->
    
    <div class="service-modal modalform flex-center">
        <i class="fas fa-times modal-close-btn"></i>
            <?php
              require 'Login.php';
            ?>
    </div>
</body>
    <script>
const serviceModals = document.querySelectorAll(".modalform");
const learnmoreBtns = document.querySelectorAll(".btn-login");
const modalCloseBtns = document.querySelectorAll(".modal-close-btn");

var modal = function(modalClick){
    serviceModals[modalClick].classList.add("active");
}

learnmoreBtns.forEach((learnmoreBtn, i) => {
    learnmoreBtn.addEventListener("click", () => {
        modal(i);
    });
});

modalCloseBtns.forEach((modalCloseBtn) => {
    modalCloseBtn.addEventListener("click", () =>{
        serviceModals.forEach((modalView)=>{
            modalView.classList.remove("active");
        })
    });
});
    </script>
</html>