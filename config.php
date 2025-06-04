<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "mysql-l8";

    try{
        $conn = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
        $sql = "CREATE TABLE users(
                    id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    username VARCHAR(255) NOT NULL UNIQUE,
                    password VARCHAR(255) NOT NULL
                )";
        $conn->exec($sql);
    }catch(Exeption $e){
        echo "Error".$e->getMessage();
    }
?>