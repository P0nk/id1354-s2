<?php
session_start();
require_once 'dbconnection.php';

try { 
    $newusername = $_POST['username'];
    $newpassword = $_POST['password'];
    $sql = "INSERT INTO users (username,password) VALUES('$newusername','$newpassword')";
    $conn->exec($sql);
    $_SESSION['username'] = $newusername;
    header("Location: index.php");
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;