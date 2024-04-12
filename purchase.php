<!DOCTYPE html>
<html>
<head>
    <title>Payment Form</title>
    <link rel="stylesheet" type="text/css" href="purchase_styles.css">
</head>
<body>

<div class="container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Handle credit card information
        $game = $_POST['game'];
        $price = $_POST['price'];
        
        echo "<h2>Enter Your Information To Continue</h2>";
        echo "<p>Game: $game</p>";
        echo "<p>Price: $$price</p>";
        echo "<form method='post' action='confirmation.php'>";
        echo "<input type='hidden' name='game' value='$game'>";
        echo "<input type='hidden' name='price' value='$price'>";
        echo "<label for='credit_card'>Credit Card Number:</label><br>";
        echo "<input type='text' id='credit_card' name='credit_card' pattern='^\d{4}-\d{4}-\d{4}-\d{4}$' required><br>";
        echo "<label for='name'>Name:</label><br>";
        echo "<input type='text' id='name' name='name' required><br>";
        echo "<label for='email'>Email Address:</label><br>";
        echo "<input type='email' id='email' name='email' required><br>";
        echo "<label for='address'>Address:</label><br>";
        echo "<textarea id='address' name='address' rows='4' required></textarea><br>";
        echo "<label for='postal_code'>Postal Code:</label><br>";
        echo "<input type='text' id='postal_code' name='postal_code' pattern='^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$' required><br>";
        echo "<input type='submit' value='Submit'>";
        echo "</form>";
    } else {
        // Redirect back to index.php if accessed directly
        header("Location: index.php");
        exit();
    }
    ?>
</div>

</body>
</html>
