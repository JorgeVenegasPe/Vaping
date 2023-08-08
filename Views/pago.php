<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Issets/css/main.css">
    <title>Pagos</title>
</head>
<body>
    <style>
        .a{
            display: none;
        }
    </style>
  <!-- Header  -->
    <div class="container-cart-products hidden-cart">
        <div class="row-product hidden">
            <div class="cart-product">
                <div class="info-cart-product">
                    <span class="cantidad-producto-carrito"></span>
                    <p class="titulo-producto-carrito"></p>
                    <span class="precio-producto-carrito"></span>
                </div>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="icon-close">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </div>
        </div>

        <div class="cart-total">
            <div style="display:flex; flex-direction:row">
                <h3>Total :</h3>
                <span class="total-pagar" id="total-pagar">$0</span>
            </div>
              <div class="container-butt">
                  <button class="button-metod-pago" id="vaciar">Vaciar carrito</button>
                  <a href="pago.php" class="button-metod-pago pagar">Pagar</a>
              </div>
        </div>
        <p class="cart-empty">El carrito está vacío</p>
    </div>
    <script src="../Issets/js/main.js"></script>
</body>
</html>