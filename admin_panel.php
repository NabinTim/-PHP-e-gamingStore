<?php
    $servername = "localhost";
    $username = "root";
    $password = "WbdaXKzC33";
    $database = "my_database";

    // Create connection
    $conn = new PDO('mysql:host=127.0.0.1;dbname=my_database', $username, $password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . $conn->errorInfo());
    }

    // Execute SELECT query
    $sql = "SELECT * FROM `order`"; // Using `order` instead of order as it's a reserved keyword
    $result = $conn->query($sql);

    echo "<table border='1'>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Game</th>
        </tr>";

    // Loop through the results and display them in a table
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['address'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . $row['gamename'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

    // Close connection
    $conn = null;
?>
