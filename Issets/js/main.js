document.addEventListener("DOMContentLoaded", function() {
    // Esperar 5 segundos antes de mostrar las secciones
    setTimeout(function() {
    mostrarSecciones();
    }, 2000);
});

function mostrarSecciones() {
    document.getElementById("section1").style.display = "block";
};


const pagar = document.querySelector('.pagar');
const metpago = document.querySelector('.metodos-pago');
pagar.addEventListener("click", () => {
    metpago.classList.remove("active");
});







/*===================== CARRITO ====================*/
const btnCart = document.querySelector('.container-cart-icon');
const containerCartProducts = document.querySelector(
	'.container-cart-products'
);

btnCart.addEventListener('click', () => {
	containerCartProducts.classList.toggle('hidden-cart')
    if (!allProducts.length) {
		cartEmpty.classList.remove('hidden');
		rowProduct.classList.add('hidden');
		cartTotal.classList.add('hidden');

	}
});

/* ========================= */
const cartInfo = document.querySelector('.cart-product');
const rowProduct = document.querySelector('.row-product');

// Lista de todos los contenedores de productos

// Variable de arreglos de Productos
let allProducts = [];

const valorTotal = document.querySelector('.total-pagar');

const countProducts = document.querySelector('#contador-productos');

const cartEmpty = document.querySelector('.cart-empty');
const cartTotal = document.querySelector('.cart-total');
const DOMbotonVaciar = document.querySelector('#vaciar');

const productsList = document.querySelector('.swiper-wrapper');

productsList.addEventListener('click', e => {
    if (e.target.classList.contains('Añadir')) {
        const buttonContainer = e.target.closest('.container-butt'); // Buscar el contenedor más cercano
        const productContainer = buttonContainer.parentElement;

        const infoProduct = {
            quantity: 1,
            title: productContainer.querySelector('h1').textContent,
            price: productContainer.querySelector('h2').textContent,
        };

        const exists = allProducts.some(
            product => product.title === infoProduct.title
        );

        if (exists) {
            const updatedProducts = allProducts.map(product => {
                if (product.title === infoProduct.title) {
                    product.quantity++;
                    return product;
                } else {
                    return product;
                }
            });
            allProducts = [...updatedProducts];
        } else {
            allProducts = [...allProducts, infoProduct];
        }

        showHTML();
    }
});
rowProduct.addEventListener('click', e => {
	if (e.target.classList.contains('icon-close')) {
		const product = e.target.parentElement;
		const title = product.querySelector('p').textContent;

		allProducts = allProducts.filter(
			product => product.title !== title
		);

		console.log(allProducts);

		showHTML();
	}
});

// Funcion para mostrar  HTML
const showHTML = () => {
    if (!allProducts.length) {
        cartEmpty.classList.remove('hidden');
        metpago.classList.add('active');
        rowProduct.classList.add('hidden');
        cartTotal.classList.add('hidden');
    } else {
        cartEmpty.classList.add('hidden');
        rowProduct.classList.remove('hidden');
        cartTotal.classList.remove('hidden');
    }

    // Limpiar HTML
    rowProduct.innerHTML = '';

    let total = 0;
    let totalOfProducts = 0;

    allProducts.forEach(product => {
        const containerProduct = document.createElement('div');
        containerProduct.classList.add('cart-product');

        // Calculamos el precio total por producto
        const totalPricePerProduct = parseInt(product.quantity) * parseInt(product.price.slice(3));

        containerProduct.innerHTML = `
            <div class="info-cart-product">
                <span class="cantidad-producto-carrito">${product.quantity}</span>
                <p class="titulo-producto-carrito">${product.title}</p>
                <span class="precio-producto-carrito">S/.${totalPricePerProduct}</span>
            </div>
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="icon-close"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12"
                />
            </svg>
        `;

        rowProduct.append(containerProduct);

        total += totalPricePerProduct;
        totalOfProducts += parseInt(product.quantity);
    });

    valorTotal.innerText = `S/.${total}`;
    countProducts.innerText = totalOfProducts;
};





function vaciarca() {
    allProducts=[];
    showHTML();
    //borarr lcal
    localStorage.clear();

}

DOMbotonVaciar.addEventListener('click', vaciarca);