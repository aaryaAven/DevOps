<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Skate Shop</title>
    <link rel="stylesheet" href="home.css">
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
        <section class="intro">
            <h1>Welcome to Skate Shop!</h1>
            <p>Explore our latest collection of skates.</p>
        </section>

        <section class="photo-gallery">
            <div class="photo-box" data-id="1" data-price="100000">
                <img src="skate1.jpeg" alt="Skate 1">
                <p class="name">Speed Demon</p>
                <p class="price">₹100,000</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="photo-box" data-id="2" data-price="120000">
                <img src="skate2.jpeg" alt="Skate 2">
                <p class="name">Blazing Streak</p>
                <p class="price">₹120,000</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="photo-box" data-id="3" data-price="75000">
                <img src="skate3.jpeg" alt="Skate 3">
                <p class="name">Urban Flyer</p>
                <p class="price">₹75,000</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="photo-box" data-id="4" data-price="80000">
                <img src="skate4.jpeg" alt="Skate 4">
                <p class="name">Glide Master</p>
                <p class="price">₹80,000</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="photo-box" data-id="5" data-price="90000">
                <img src="skate5.jpeg" alt="Skate 5">
                <p class="name">Velocity King</p>
                <p class="price">₹90,000</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="photo-box" data-id="6" data-price="98000">
                <img src="skate6.jpeg" alt="Skate 6">
                <p class="name">Stealth Rider</p>
                <p class="price">₹98,000</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="photo-box" data-id="7" data-price="30000">
                <img src="skate7.jpeg" alt="Skate 7">
                <p class="name">Street Surfer</p>
                <p class="price">₹30,000</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="photo-box" data-id="8" data-price="40000">
                <img src="skate8.jpeg" alt="Skate 8">
                <p class="name">Ramp Runner</p>
                <p class="price">₹40,000</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="photo-box" data-id="9" data-price="15000">
                <img src="skate9.jpeg" alt="Skate 9">
                <p class="name">Swift Glide</p>
                <p class="price">₹15,000</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="photo-box" data-id="10" data-price="20000">
                <img src="skate10.jpeg" alt="Skate 10">
                <p class="name">Eco Skater</p>
                <p class="price">₹20,000</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="photo-box" data-id="11" data-price="10000">
                <img src="skate11.jpeg" alt="Skate 11">
                <p class="name">Budget Cruiser</p>
                <p class="price">₹10,000</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="photo-box" data-id="12" data-price="45000">
                <img src="skate12.jpeg" alt="Skate 12">
                <p class="name">Trail Blazer</p>
                <p class="price">₹45,000</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </section>
    </main>
    <script src="home.js"></script> <!-- Link to your home page JavaScript -->
</body>
</html>
