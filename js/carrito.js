document.addEventListener('DOMContentLoaded', () => {
    const btnCart = document.querySelector('.container-cart-icon')
const containerCartProducts = document.querySelector('.container-cart-products')

btnCart.addEventListener('click', () => {
    containerCartProducts.classList.toggle('hidden-cart')
    if (!allproduct.length) {
		cartEmpty.classList.remove('hidden');
		rowprodcuto.classList.add('hidden');
		cartTotal.classList.add('hidden');
        //console.log('ddddddddddddddd')

	}
    
 
})
const carinfo=document.querySelector('.cart-product');
const rowprodcuto=document.querySelector('.row-product');
//lista de todos los contenedores
const procut_lis=document.querySelector('.container_carrusel');
//variables de arreglos de procutos
let allproduct=[];
const valortotal=document.querySelector('.total-pagar');
const countproducts=document.querySelector('#contador-productos');

const cartEmpty = document.querySelector('.cart-empty');
const cartTotal = document.querySelector('.cart-total');
const miLocalStorage = window.localStorage;
const DOMbotonVaciar = document.querySelector('#vaciar');
//cargarCarritoDeLocalStorage()

procut_lis.addEventListener('click',e=>{
    if (e.target.classList.contains('btn-add')) {
        const product=e.target.parentElement;
        const inprodyct={
            quantity:1,
            title:product.querySelector('h5').textContent,
            price:product.querySelector('samp').textContent,
        };
        
        const exits=allproduct.some(product=> product.title=== inprodyct.title)
        if (exits) {
            guardarCarritoEnLocalStorage();
            
            const prodd=allproduct.map(product =>{
                if (product.title === inprodyct.title) {
                    //cargarCarritoDeLocalStorage()
                    guardarCarritoEnLocalStorage();
                    product.quantity++
                    return product
                    
                }else{
                    
                    return product
                    
                }
                
                
            })
            allproduct=[...prodd]

        }else{
            allproduct=[...allproduct,inprodyct]

        }
        showhtml();
        guardarCarritoEnLocalStorage();

         
    }

   
})
rowprodcuto.addEventListener('click', e => {
	if (e.target.classList.contains('icon-close')) {
		const product = e.target.parentElement;
		const title = product.querySelector('p').textContent;
        
		allproduct = allproduct.filter(
			product => product.title !== title
		);

		//console.log(allproduct);
		showhtml();
        guardarCarritoEnLocalStorage();
            
	}
    
    

});

const showhtml=()=>{
   
    if (!allproduct.length) {
		cartEmpty.classList.remove('hidden');
		rowprodcuto.classList.add('hidden');
		cartTotal.classList.add('hidden');
        console.log('ddddddddddddddd')
	} else {
		cartEmpty.classList.add('hidden');
		rowprodcuto.classList.remove('hidden');
		cartTotal.classList.remove('hidden');
        
        

        
	}
    //limpiar html
    rowprodcuto.innerHTML='';


    let total=0;
    let totalofpodri=0;

    allproduct.forEach(product=>{
        
        const containersproud=document.createElement('div')
        containersproud.classList.add('cart-product')
        containersproud.innerHTML = `
        <div class="info-cart-product">
            <span class="cantidad-producto-carrito">${product.quantity}</span>
            <p class="titulo-producto-carrito">${product.title}</p>
            <span class="precio-producto-carrito">${product.price}</span>
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
    `
    ;


    rowprodcuto.append(containersproud);
    //console.log(product.price.slice(2))
    const por=product.price
    const lo=por.split('/')
    //console.log(lo)
    //console.log(por.split('/'))
    total =total + parseInt(product.quantity * lo.slice(1));
    totalofpodri=totalofpodri+product.quantity;
    });
    
    valortotal.innerText = `S/ ${total}.00`;
    const tot=document.querySelector('.to');
    tot.innerText= `Monto a pagar: S/.${total}.00`;
    const tots=document.querySelector('.tos');
    tots.innerText= `Monto a pagar: S/.${total}.00`;

    const totss=document.querySelector('.toss');
    totss.innerText= `Monto a pagar: S/.${total}.00`;

	countproducts.innerText = totalofpodri;
   

}
cargarCarritoDeLocalStorage()
function guardarCarritoEnLocalStorage () {
    miLocalStorage.setItem('carrito', JSON.stringify(allproduct));
    
}

function cargarCarritoDeLocalStorage () {
    // ¿Existe un carrito previo guardado en LocalStorage?
    if (miLocalStorage.getItem('carrito') !== null) {
        // Carga la información
        allproduct = JSON.parse(miLocalStorage.getItem('carrito'));
        console.log(allproduct)
    }
    else{
        //console.log("csdcsdc")
    }
}
function vaciarca() {
    var si=document.getElementById("si");
    //limpiamos producots
    allproduct=[];
    showhtml();
    //borarr lcal
    localStorage.clear();

}
function vaciarcarrito() {
    if (allproduct==0) {
        console.log("Vacio");
    }else{
        $('#modal-1').modal('show');
                
        si.addEventListener("click", vaciarca);
    }
}
DOMbotonVaciar.addEventListener('click', vaciarcarrito);
//eventos
/**/

//guardarCarritoEnLocalStorage()

 })




