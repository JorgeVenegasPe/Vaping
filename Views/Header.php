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
            <img src="../Issets/img/LogoTipo/NombreLogo.png" alt="Logo">
        </div>
        
        <!-- Barra de búsqueda a la derecha -->
        <div class="container-icons">
        <div class="nav-close-btn"></div>
	    	<form class="search">
	    		<input type="text" placeholder="Search" class="search__input"/>
	    		<button type="button" class="search__button">
                    <span class="material-symbols-sharp">search</span>
	    		</button>
	    	</form>
            <div class="icons">
                <a href="Login.php" >Iniciar Session</a>
                <span class="material-symbols-sharp">person</span>
                <span class="material-symbols-sharp carrito">shopping_cart</span>
            </div>
        </div>
    </header>
</body>
</html>