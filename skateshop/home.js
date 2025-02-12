$(document).ready(function () {
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    $(".add-to-cart").click(function () {
        let photoBox = $(this).closest(".photo-box");
        let id = photoBox.data("id");
        let name = photoBox.find(".name").text();
        let price = photoBox.data("price");

        // Check if the item is already in the cart
        let existingItem = cart.find((item) => item.id === id);
        if (existingItem) {
            existingItem.quantity += 1; // Increment quantity
        } else {
            cart.push({ id, name, price, quantity: 1 });
        }

        localStorage.setItem("cart", JSON.stringify(cart));
        alert(`${name} added to cart!`);
    });
});
