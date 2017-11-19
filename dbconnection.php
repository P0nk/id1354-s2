<?php

$username = "admin";
$password = "password";
$servername = "localhost";
$dbname = "tastyrecipes";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}