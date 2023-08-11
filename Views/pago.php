<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Issets/css/main.css"/>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Pagos</title>
</head>
<body>
    <style>
        .a{
            display: none;
        }
        .container-butt{
            display: flex;
            justify-content: space-between;   
        }
    </style>
  <!-- Header  -->
  <?php
    require 'Header.php'
  ?>
<main>
    <div class="container-productos-pago" id="productos-en-pago">

        <?php
        // Recibir y mostrar los productos enviados mediante POST
        if (isset($_POST['productos'])) {
            $productos = json_decode($_POST['productos'], true);
            foreach ($productos as $producto) {
                ?>
                <div class="producto-en-pago">
                    <div class="products">  
                        <img  src="<?=$producto['image'] ?>" alt="<?=$producto['title'] ?>">
                        <p><?=$producto['quantity'] ?></p>
                        <h3><?=$producto['title'] ?></h3>
                    </div>
                    <?php
                    $Total = intval($producto['quantity']) * intval(substr($producto['price'], 3));;
                    ?>
                <p>S/<?= $Total ?>.00</p>
                </div>
                <?php
                
            }
            // Obtener el valor de valorTotal
            $valorTotal = isset($_POST['valorTotal']) ? $_POST['valorTotal'] : '0';
            }
        ?>
        <div class="total">
            <h2>Total: </h2><span><?= $valorTotal ?></span>
        </div>
    </div>
    <div class="container-butt">
        <button class="button-T">
            <i class="ri-store-fill"></i>
            <p class="text">Recojo en tienda</p>
        </button>
        <button class="button-T">
            <i class="ri-truck-line"></i>
            <p class="text">Delivery</p>
        </button>
    </div>
</main>

    <script src="../Issets/js/main.js"></script>
</body>
</html>