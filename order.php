<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle age verification
    $dob = $_POST['dob'];
    $game = $_POST['game'];
    $price = $_POST['price'];
    
    // Check if age verification is successful (for demonstration, assume age is valid if dob is not empty)
    if (!empty($dob)) {
        // Display game details and confirm purchase
        echo "<h2>Confirm Purchase</h2>";
        echo "<p>Game: $game</p>";
        echo "<p>Price: $$price</p>";
        echo "<form method='post' action='purchase.php'>";
        echo "<input type='hidden' name='game' value='$game'>";
        echo "<input type='hidden' name='price' value='$price'>";
        echo "<input type='submit' value='Confirm Purchase'>";
        echo "</form>";
    } else {
        // Redirect back to index.php if age is not provided
        header("Location: index.php");
        exit();
    }
} else {
    // Redirect back to index.php if accessed directly
    header("Location: index.php");
    exit();
}
?>
