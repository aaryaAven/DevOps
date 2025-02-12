<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Skate Shop</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS file -->
    <script src="script.js" defer></script> <!-- Link to your JavaScript file -->
</head>
<body>
    <header>
        <div class="logo">AK Skates</div>
    </header>
    
    <main>
        <div class="form-container">
            <h2>Login</h2>
            <form action="login.php" method="POST" onsubmit="return validateLoginForm()">
                <div class="form-group">
                    <label for="username">Username or Email</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Login</button>
                <p>Don't have an account? <a href="register.php">Register here</a></p>
            </form>
        </div>
    </main>

    <?php
// Database credentials
$host = "localhost";
$dbname = "skate";
$username = "aarya";
$password = "aarya03@k";

try {
    // Connect to the database
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usernameOrEmail = $_POST['username'];
        $password = $_POST['password'];

        // Query to check if the user exists
        $sql = "SELECT * FROM users WHERE username = :usernameOrEmail OR email = :usernameOrEmail";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':usernameOrEmail', $usernameOrEmail);
        $stmt->execute();

        // Fetch the user record
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Successful login
            echo "Login successful! Welcome, " . htmlspecialchars($user['username']) . ".";
            // Redirect to a dashboard or home page (example: dashboard.html)
            // header("Location: dashboard.html");
            exit;
        } else {
            // Invalid login
            echo "Invalid username/email or password.";
        }
    }
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}
?>
</body>
</html>
