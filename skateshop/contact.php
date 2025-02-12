<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Skate Shop</title>
    <link rel="stylesheet" href="contact.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
        <section class="contact-intro">
            <h1>Contact Us</h1>
            <p>We’d love to hear from you! Whether you have a question about our skates, pricing, or anything else, our team is ready to answer all your questions.</p>
        </section>

        <section class="contact-form">
            <h2>Get in Touch</h2>
            <form id="contactForm">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Your Name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>

                <button type="submit">Send Message</button>
            </form>
        </section>

        <section class="map">
            <h2>Visit Us</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.835434509169!2d-122.4194156846817!3d37.77492957975957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085808c0fbae7a3%3A0x4e0a84f0c92073c!2sSkate%20Shop!5e0!3m2!1sen!2sus!4v1634538717658!5m2!1sen!2sus" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Skate Shop. All rights reserved.</p>
    </footer>
    <script>
        // Form submission handling
        $('#contactForm').submit(function (e) {
            e.preventDefault();
            alert('Thank you for reaching out! We will get back to you soon.');
            $('#contactForm')[0].reset();
        });
    </script>
</body>
</html>
