<?php
session_start();

// Check if password is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace 'your_password' with your desired password
    $stored_password = 'admin';
    
    // Check if the entered password matches the stored password
    if ($_POST['password'] == $stored_password) {
        // Password is correct, set a session variable to indicate authentication
        $_SESSION['authenticated'] = true;
        // Redirect to the admin.php page
        header("Location: admin.php");
        exit();
    } else {
        // Password is incorrect, display an error message
        $error = "Invalid password. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h2>Login</h2>
    <form method="post">
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
    <?php
    if (isset($error)) {
        echo "<p>$error</p>";
    }
    ?>
</body>
</html>
