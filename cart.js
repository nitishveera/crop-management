let cartItems = [];
let cartTotal = 0;

function addToCart(productName, price) {
    cartItems.push(productName);
    cartTotal += price;
    
    updateCart();
}

function updateCart() {
    const cartItemsList = document.getElementById('cart-items');
    const cartTotalSpan = document.getElementById('cart-total');
    
    cartItemsList.innerHTML = '';
    
    cartItems.forEach(item => {
        const listItem = document.createElement('li');
        listItem.textContent = item;
        cartItemsList.appendChild(listItem);
    });
    
    cartTotalSpan.textContent = cartTotal;
}