<?php
session_start();

// Check if user is not authenticated, redirect to login.php
if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header("Location: login.php");
    exit();
}

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

// Handle deleting a record
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $delete_id = $_POST['delete_id'];

    // Delete record from the database
    $sql = "DELETE FROM purchases WHERE id = '$delete_id'";
    if ($conn->query($sql) === TRUE) {
        // Deletion successful, no need to display any message
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Retrieve purchase data from the database
$sql = "SELECT id, game, price, credit_card, name, email, address, postal_code FROM purchases";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="admin_styles.css">
</head>
<div class="table-container">
    <h2>Purchase Data</h2>
    <table>
        <thead>
            <tr>
                <th>Game</th>
                <th>Price</th>
                <th>Credit Card</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Postal Code</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </div>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["game"] . "</td>";
                    echo "<td>$" . $row["price"] . "</td>";
                    echo "<td>" . $row["credit_card"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["address"] . "</td>";
                    echo "<td>" . $row["postal_code"] . "</td>";
                    echo "<td><form method='POST'><input type='hidden' name='delete_id' value='" . $row["id"] . "'><button type='submit' name='delete'>Delete</button></form></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8' class='no-data'>No purchases yet</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>

<?php
// Close database connection
$conn->close();
?>
