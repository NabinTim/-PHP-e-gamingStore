<?php
try {
    $db = new PDO('mysql:host=172.31.22.43;dbname=Min200560575', 'Min200560575', 'WbdaXKzC33');
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
