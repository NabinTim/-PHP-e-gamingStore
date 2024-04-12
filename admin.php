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
$sql = "SELECT id, game, price, credit_card FROM purchases";
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
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Purchase Data</h2>
    <table>
        <thead>
            <tr>
                <th>Game</th>
                <th>Price</th>
                <th>Credit Card</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["game"] . "</td>";
                    echo "<td>$" . $row["price"] . "</td>";
                    echo "<td>" . $row["credit_card"] . "</td>";
                    echo "<td><form method='POST'><input type='hidden' name='delete_id' value='" . $row["id"] . "'><button type='submit' name='delete'>Delete</button></form></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No purchases yet</td></tr>";
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
