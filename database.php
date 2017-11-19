<?php

$username = "admin";
$password = "password";
$servername = "localhost";
$dbname = "tastyrecipes";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully" . "<br/>";

    $newuser = "foodlover" . rand(1,10000);
    $newpassword = "mat";
    $sql = "INSERT INTO users (username,password) VALUES('$newuser','$newpassword')";
    $conn->exec($sql);
    echo "New user " . $newuser . " has been added in the database." . "<br/>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;
echo "Connection closed" . "<br/>";
