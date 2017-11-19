<?php

require_once 'dbconnection.php';
$timestamp = $_POST['timestamp'];
$deletestmt = "DELETE FROM comments WHERE time='$timestamp';";
try {
    $stmt = $conn->prepare($deletestmt);
    $stmt->execute();
} catch (PBOException $e) {
    echo "Error: " . $e->getMessage();
}

header("Location: index.php");

