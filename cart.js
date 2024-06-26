// cart.js

// Function to add a product to the cart
function addToCart(productId) {
    fetch('addtocart.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `product_id=${productId}`
    })
    .then(response => response.text())
    .then(data => {
        alert(data); // Show an alert with the server's response
        updateCartCount(); // Update cart count after adding a product
    })
    .catch(error => console.error('Error:', error))
}

// Function to remove a product from the cart
function deleteFromCart(productId) {
    fetch('deletefromcart.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `product_id=${productId}`
    })
    .then(response => response.text())
    .then(data => {
        alert(data); // Show an alert with the server's response
        updateCartCount(); // Update cart count after removing a product
    })
    .catch(error => console.error('Error:', error))
}

// Function to update the cart count on the page

function updateCartCount() {
    fetch('get_cart_count.php')
    .then(response => response.text())
    .then(data => {
        document.getElementById('cart-count').innerText = data; // Update cart count element
    })
    .catch(error => console.error('Error:', error));
}
