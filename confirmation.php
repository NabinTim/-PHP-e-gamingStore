<link rel="stylesheet" type="text/css" href="confirmation_styles.css">
<?php
session_start();

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
    // Retrieve user information from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $postal_code = $_POST['postal_code'];

    // Handle credit card information
    $game = $_POST['game'];
    $price = $_POST['price'];
    $credit_card = $_POST['credit_card'];

    // Store purchase data in the database
    $sql = "INSERT INTO purchases (game, price, credit_card, name, email, address, postal_code) VALUES ('$game', '$price', '$credit_card', '$name', '$email', '$address', '$postal_code')";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='container'>";
        echo "<h2>Thank you for your purchase, $name!</h2>";
        echo "<p>We appreciate time. You can go back to the main page to continue buying more games.</p>";
        echo "<a href='index.php'><input type='button' value='Back to Main Page'></a>";
        echo "</div>";
    } else {
        echo "Error storing purchase data: " . $conn->error;
    }
} else {
    // Redirect back to index.php if accessed directly
    header("Location: index.php");
exit();

}

// Close database connection
$conn->close();
?>
