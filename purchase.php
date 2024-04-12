<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle credit card information
    $game = $_POST['game'];
    $price = $_POST['price'];
    
    echo "<h2>Enter Credit Card Information</h2>";
    echo "<p>Game: $game</p>";
    echo "<p>Price: $$price</p>";
    echo "<form method='post' action='confirmation.php'>";
    echo "<input type='hidden' name='game' value='$game'>";
    echo "<input type='hidden' name='price' value='$price'>";
    echo "<label for='credit_card'>Credit Card Number:</label><br>";
    echo "<input type='text' id='credit_card' name='credit_card' pattern='^\d{4}-\d{4}-\d{4}-\d{4}$' required><br>";
    echo "<input type='submit' value='Submit'>";
    echo "</form>";
} else {
    // Redirect back to index.php if accessed directly
    header("Location: index.php");
    exit();
}
?>
