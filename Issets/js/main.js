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





/*FARDYYYYYY */
const btnAbrirModal=document.querySelector("#btn-abrir-modal");
const btnCerrarModal=document.querySelector("#btn-cerrar-modal");
const modal = document.querySelector("#modal");
btnAbrirModal.addEventListener("click",()=>{modal.showModal(); })
btnCerrarModal.addEventListener("click",()=>{modal.close(); })


const btnAbrirModal1=document.querySelector("#btn-abrir-modal1");
const btnCerrarModal1=document.querySelector("#btn-cerrar-modal1");
const modal1 = document.querySelector("#modal1");
btnAbrirModal1.addEventListener("click",()=>{modal1.showModal(); })
btnCerrarModal1.addEventListener("click",()=>{modal1.close(); })

const btnAbrirModal2=document.querySelector("#btn-abrir-modal2");
const btnCerrarModal2=document.querySelector("#btn-cerrar-modal2");
const modal2= document.querySelector("#modal2");
btnAbrirModal2.addEventListener("click",()=>{modal2.showModal(); })
btnCerrarModal2.addEventListener("click",()=>{modal2.close(); })

const btnAbrirModal3=document.querySelector("#btn-abrir-modal3");
const btnCerrarModal3=document.querySelector("#btn-cerrar-modal3");
const modal3= document.querySelector("#modal3");
btnAbrirModal3.addEventListener("click",()=>{modal3.showModal(); })
btnCerrarModal3.addEventListener("click",()=>{modal3.close(); })

const btnAbrirModal4=document.querySelector("#btn-abrir-modal4");
const btnCerrarModal4=document.querySelector("#btn-cerrar-modal4");
const modal4= document.querySelector("#modal4");
btnAbrirModal4.addEventListener("click",()=>{modal4.showModal(); })
btnCerrarModal4.addEventListener("click",()=>{modal4.close(); })


/*FARDYYYYYY */
function isMobile() {
    if (sessionStorage.desktop)
        return false;
    else if (localStorage.mobile)
        return true;
    var mobile = ['iphone', 'ipad', 'android', 'blackberry', 'nokia', 'opera mini', 'windows mobile', 'windows phone', 'iemobile'];
    for (var i in mobile)
        if (navigator.userAgent.toLowerCase().indexOf(mobile[i].toLowerCase()) > 0) return true;
    return false;
}

const formulario = document.querySelector('#formulario');
const buttonSubmit = document.querySelector('#submit');
const urlDesktop = 'https://web.whatsapp.com/';
const urlMobile = 'whatsapp://';
const telefono = '913245598';

function MostrarMensaje(){
    $.get('wsp.php',function(mensaje,estado){
        document.getElementById('resultado').innerHTML=mensaje;
    })
}

formulario.addEventListener('submit', (event) => {
    event.preventDefault()
    buttonSubmit.innerHTML = '<i class="fas fa-circle-notch fa-spin"></i>'
    buttonSubmit.disabled = true
    setTimeout(() => {
        let nombre = document.querySelector('#nombre').value
        let apellidos = document.querySelector('#apellidos').value
        let reclamo = document.querySelector('#reclamo').value
        let mensaje = 'send?phone=' + telefono + '&text=*_Formulario de RECLAMOS_*%0A*¿Cual es tu nombre?*%0A' + nombre + '%0A*¿Cuáles son tus apellidos?*%0A' + apellidos + '%0A*¿Cuál es tu correo reclamo?*%0A' + reclamo + ''
        if(isMobile()) {
            window.open(urlMobile + mensaje, '_blank')
        }else{
            window.open(urlDesktop + mensaje, '_blank')
        }
        buttonSubmit.innerHTML = '<i class="fab fa-whatsapp"></i> Enviar WhatsApp'
        buttonSubmit.disabled = false
    }, 3000);
});