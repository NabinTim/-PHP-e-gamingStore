<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Your Purchase</title>
    <link rel="stylesheet" href="order_styles.css">
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle age verification
    $dob = $_POST['dob'];
    $game = $_POST['game'];
    $price = $_POST['price'];

    // Check if age verification is successful (for demonstration, assume age is valid if dob is not empty)
    if (!empty($dob)) {
        // Display game details and confirm purchase
        echo "<h2 class='confirmation-title'>Confirm Your Purchase</h2>";
        echo "<div class='confirmation-container'>";
        echo "<p>Game: $game</p>";
        echo "<p>Price: $$price</p>";
        echo "<form method='post' action='purchase.php'>";
        echo "<input type='hidden' name='game' value='$game'>";
        echo "<input type='hidden' name='price' value='$price'>";
        echo "<input type='submit' value='Confirm Purchase' class='confirmation-button'>";
        echo "</form>";
        echo "</div>";
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

</body>
</html>
