<?php

session_start();
require_once 'dbconnection.php';
if (isset($_SESSION['username'])) {
    $currentuser = $_SESSION['username'];
}
//Select comments based on the recipe
$select = "SELECT username, message, time "
        . "FROM comments "
        . "WHERE recipe IN "
        . "(SELECT id FROM recipes WHERE recipe='$page')"
        . "ORDER BY time ASC;";

$stmt = $conn->prepare($select);
$stmt->execute();
$comments = $stmt->fetchall(PDO::FETCH_ASSOC);
//var_dump($comments);
echo "<div class=\"comments\">";
echo "<h3>Kommentarer</h3>";
foreach ($comments as $comment) {
    $username = $comment['username'];
    $timestamp = $comment['time'];
    $date = substr($timestamp, 0, 10);
    $message = $comment['message'];
    echo "<div class=\"comment\">";
    echo "<form action=\"deletecomment.php\" method=\"post\">";
    echo "<h4>" . $username . " ($date)" . "</h4>";

    echo "<input type=\"hidden\" name=\"timestamp\" value=\"$timestamp\"/>";
    if (strtolower($currentuser) == strtolower($username)) {
        echo "<input type=\"submit\" class=\"deletecomment\" name=\"deletebutton\" value=\"Radera\"/>";
    }
    echo "<p>" . $message . "</p>";
    echo "</form>";
    echo "</div>";
}
echo "</div>";
echo "<div class=\"writecomment\">";
include 'fragments/writecomment.php';
echo "</div>";

