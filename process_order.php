<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST["name"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $game = $_POST["game"];
        

        $servername = "localhost";
        $username = "root";
        $password = "WbdaXKzC33";
        $database = "my_database";

        // Create connection
        $conn = new PDO('mysql:host=127.0.0.1;dbname=my_database',$username);

        $sql ="INSERT INTO my_database.order (name, address, email, phone, gamename) VALUES (:name,:address, :email, :phone, :game)";

        $cmd = $conn->prepare($sql);
        $cmd->bindParam(':name',$name);
        $cmd->bindParam(':address',$address);
        $cmd->bindParam(':email',$email);
        $cmd->bindParam(':phone',$phone);
        $cmd->bindParam(':game',$game);
        $cmd->execute();
        $conn = null;

        header('location:index.php');

        
    }
?>
