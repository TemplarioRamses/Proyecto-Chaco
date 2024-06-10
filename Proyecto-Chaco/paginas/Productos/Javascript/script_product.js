document.addEventListener('DOMContentLoaded', function() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    document.querySelectorAll('.add-to-cart-btn').forEach(button => {
        button.addEventListener('click', function() {
            const name = this.getAttribute('data-name');
            const price = parseFloat(this.getAttribute('data-price'));
            const product = { name, price, quantity: 1 };

            // Verifica si el producto ya está en el carrito
            const existingProductIndex = cart.findIndex(item => item.name === name);
            if (existingProductIndex >= 0) {
                // Incrementa la cantidad si el producto ya está en el carrito
                cart[existingProductIndex].quantity += 1;
            } else {
                // Agrega el producto al carrito si es la primera vez
                cart.push(product);
            }

            // Guarda el carrito actualizado en localStorage
            localStorage.setItem('cart', JSON.stringify(cart));

            // Opcional: Actualiza la visualización del carrito
            updateCartDisplay();
        });
    });

    function updateCartDisplay() {
        const cartItemsContainer = document.querySelector('#cart-items tbody');
        cartItemsContainer.innerHTML = ''; // Limpia el contenido actual
        let totalGeneral = 0;

        cart.forEach(item => {
            const row = document.createElement('tr');
            row.innerHTML = `<td>${item.name}</td><td>${item.quantity}</td><td>$${item.price}</td><td>$${item.price * item.quantity}</td>`;
            cartItemsContainer.appendChild(row);
            totalGeneral += item.price * item.quantity;
        });

        document.getElementById('total-general').textContent = `$${totalGeneral}`;
    }

    // Opcional: Inicializa el carrito al cargar la página
    if (cart.length > 0) {
        updateCartDisplay();
    }
});




// Función para agregar productos al carrito
/*function addToCart(productId, quantity) {
    const existingProduct = cart.find((product) => product.id === productId);

    if (existingProduct) {
        // Si el producto ya está en el carrito, incrementa la cantidad
        existingProduct.quantity += quantity;
    } else {
        // Agrega un nuevo producto al carrito
        cart.push({ id: productId, quantity });
    }

    // Guardar el carrito en localStorage
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartView();
}

// Función para actualizar la vista del carrito
function updateCartView() {
    const cartElement = document.getElementById('cart');

    if (cart.length === 0) {
        cartElement.innerHTML = "El carrito está vacío.";
    } else {
        cartElement.innerHTML = '';

        cart.forEach((product) => {
            cartElement.innerHTML += `<div>
                <p>Producto ID: ${product.id}</p>
                <p>Cantidad: ${product.quantity}</p>
                <button onclick="removeFromCart(${product.id})">Eliminar</button>
            </div>`;
        });
    }
}

// Función para eliminar un producto del carrito
function removeFromCart(productId) {
    cart = cart.filter((product) => product.id !== productId);
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartView();
}

// Inicializar la vista del carrito al cargar la página
window.onload = function() {
    updateCartView();
};*/