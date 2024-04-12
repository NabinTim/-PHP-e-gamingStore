<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle confirmation
    $game = $_POST['game'];
    $price = $_POST['price'];
    $credit_card = $_POST['credit_card'];
    
    // Process the purchase and display confirmation
    echo "<h2>Confirmation</h2>";
    echo "<p>Thank you for your purchase!</p>";
    echo "<p>Game: $game</p>";
    echo "<p>Price: $$price</p>";
    echo "<p>Credit Card: $credit_card</p>";

    // Insert purchase data into the database
    $sql = "INSERT INTO purchases (game, price, credit_card) VALUES ('$game', '$price', '$credit_card')";
    if ($conn->query($sql) === TRUE) {
        echo "Purchase data recorded successfully";
    } else {
        echo "Error recording purchase data: " . $conn->error;
    }
} else {
    // Redirect back to index.php if accessed directly
    header("Location: index.php");
    exit();
}

// Close database connection
$conn->close();
?>
