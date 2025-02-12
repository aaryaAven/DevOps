$(document).ready(function () {
    // Load cart items from localStorage
    let cart = JSON.parse(localStorage.getItem("cart")) || [];

    // Update the cart table
    function updateCartTable() {
        let cartTable = $("#cart-table tbody");
        cartTable.empty();
        let grandTotal = 0;

        cart.forEach((item, index) => {
            let total = item.price * item.quantity;
            grandTotal += total;

            cartTable.append(`
                <tr>
                    <td class="skate-name">${item.name}</td>
                    <td>₹${item.price}</td>
                    <td>
                        <input type="number" class="quantity" data-index="${index}" value="${item.quantity}" min="1">
                    </td>
                    <td>₹${total}</td>
                    <td>
                        <button class="remove-item" data-index="${index}">Remove</button>
                    </td>
                </tr>
            `);
        });

        $("#grand-total").text(`Grand Total: ₹${grandTotal}`);
    }

    // Update quantity
    $(document).on("change", ".quantity", function () {
        let index = $(this).data("index");
        cart[index].quantity = parseInt($(this).val());
        localStorage.setItem("cart", JSON.stringify(cart));
        updateCartTable();
    });

    // Remove item
    $(document).on("click", ".remove-item", function () {
        let index = $(this).data("index");
        cart.splice(index, 1);
        localStorage.setItem("cart", JSON.stringify(cart));
        updateCartTable();
    });

    // Handle checkout
    $('#checkout-btn').on('click', function (e) {
        e.preventDefault();  // Prevent form submission

        // Get customer name from input
        const customerName = $('#customer-name').val().trim();
        if (!customerName) {
            alert("Please enter your name.");
            return;
        }

        // Initialize skate names and total amount variables
        let skateNames = '';
        let totalAmount = 0;

        // Loop through cart items to get skate names and total amount
        cart.forEach((item) => {
            skateNames += item.name + ', '; // Append skate name to the list
            totalAmount += item.price * item.quantity; // Calculate total amount
        });

        // Trim the trailing comma and space from skate names
        skateNames = skateNames.trim().slice(0, -1);

        // Send data to PHP using AJAX
        $.ajax({
            url: 'checkout.php',
            type: 'POST',
            data: {
                customer_name: customerName,
                skate_names: skateNames,
                total_amount: totalAmount
            },
            success: function (response) {
                alert(response);
                // Clear cart and reset table after successful checkout
                cart = [];
                localStorage.setItem("cart", JSON.stringify(cart));
                updateCartTable();
            },
            error: function () {
                alert('Error during checkout');
            }
        });
    });

    // Initialize the cart display
    updateCartTable();
});
