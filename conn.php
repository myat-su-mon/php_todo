<?php 

try {
    $host = "localhost";
    $dbname = "todos";
    $user = "root";
    $password = "root";

    $conn = new PDO("mysql:host=$host;dbname=$dbname",
        $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "error is: " .$e->getMessage();
}