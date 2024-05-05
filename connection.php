<?php
$host = 'localhost';  
$dbname = 'my_database'; 
$username = 'root'; 
$password = ''; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec("set names utf8");
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
