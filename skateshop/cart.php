<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - Skate Shop</title>
    <link rel="stylesheet" href="cart.css"> <!-- Link to your CSS file -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery Library -->
</head>
<body>
    <header>
        <div class="logo">AK Skates</div>
        <nav>
            <ul>
            <li><a href="home.php">HOME</a></li>
                <li><a href="cart.php">CART</a></li>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="cart">
            <h1>Your Cart</h1>
            <table id="cart-table">
                <thead>
                    <tr>
                        <th>Skate Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Cart items will be dynamically added here -->
                </tbody>
            </table>
            
            <div class="cart-summary">
                <p id="grand-total">Grand Total: ₹0</p>
            </div>

            <!-- Checkout Section -->
            <div class="checkout">
                <input type="text" id="customer-name" placeholder="Enter your name" required>
                <button id="checkout-btn">Checkout</button>
            </div>
        </section>
    </main>

    <script src="cart.js"></script> <!-- Link to your cart page JavaScript -->
</body>
</html>
