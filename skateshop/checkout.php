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

    // Check if the request is POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $customerName = $_POST['customer_name'];
        $skateNames = $_POST['skate_names']; // Should be a comma-separated string of skate names
        $totalAmount = $_POST['total_amount'];

        // Insert the purchase into the database
        $sql = "INSERT INTO purchases (customer_name, skate_names, total_amount) VALUES (:customer_name, :skate_names, :total_amount)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':customer_name', $customerName);
        $stmt->bindParam(':skate_names', $skateNames);
        $stmt->bindParam(':total_amount', $totalAmount);

        if ($stmt->execute()) {
            echo "Purchase successfully recorded.";
        } else {
            echo "Failed to record the purchase.";
        }
    }
} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}   
?>
