
// Get all the plus-btn and minus-btn buttons
const plusBtns = document.querySelectorAll('.plus-btn');
const minusBtns = document.querySelectorAll('.minus-btn');

// Add click event listener to each plus-btn button
plusBtns.forEach((btn) => {
    btn.addEventListener('click', (e) => {
        const id = e.currentTarget.dataset.id;
        const quantityInput = document.querySelector(`#quantity-${id}`);
        const price = parseFloat(quantityInput.dataset.price);
        const quantity = parseInt(quantityInput.value);

        quantityInput.value = quantity + 1;
        const totalPriceElement = document.querySelector('#total-price');
        const totalPrice = parseFloat(totalPriceElement.innerText.substring(1));
        totalPriceElement.innerText = '$' + (totalPrice + price).toFixed(2);
    });
});

// Add click event listener to each minus-btn button
minusBtns.forEach((btn) => {
    btn.addEventListener('click', (e) => {
        const id = e.currentTarget.dataset.id;
        const quantityInput = document.querySelector(`#quantity-${id}`);
        const price = parseFloat(quantityInput.dataset.price);
        const quantity = parseInt(quantityInput.value);

        if (quantity > 1) {
            quantityInput.value = quantity - 1;
            const totalPriceElement = document.querySelector('#total-price');
            const totalPrice = parseFloat(totalPriceElement.innerText.substring(1));
            totalPriceElement.innerText = '$' + (totalPrice - price).toFixed(2);
        }
    });
});

const decreaseBtn = document.querySelector('#decrease');
const increaseBtn = document.querySelector('#increase');
const quantityInput = document.querySelector('#quantity');

decreaseBtn.addEventListener('click', () => {
let quantity = parseInt(quantityInput.value);
if (quantity > 1) {
  quantityInput.value = quantity - 1;
}
});

increaseBtn.addEventListener('click', () => {
let quantity = parseInt(quantityInput.value);
quantityInput.value = quantity + 1;
});
