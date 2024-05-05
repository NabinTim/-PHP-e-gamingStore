document.addEventListener('DOMContentLoaded', function() {
    const addToCartButtons = document.querySelectorAll('.addToCart');
    const cartButton = document.getElementById('cartButton');
    let cartCount = 0;

    addToCartButtons.forEach(button => {
        button.addEventListener('click', function(event) {

            cartCount++;
            cartButton.textContent = cartCount;
        });
    });
});
