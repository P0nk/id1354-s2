<?php

require_once 'dbconnection.php';
session_start();
$recipe = $_POST['page'];
$comment = $_POST['comment'];
$username = $_SESSION['username'];
$selectrecipe = "SELECT id FROM recipes WHERE recipe='$recipe'";

if(strlen($comment)>0 && isset($_SESSION['username'])){
try{
// prepare sql and bind parameters

  $stmt = $conn->prepare("INSERT INTO comments (username, message, time, recipe)
  VALUES ('$username', '$comment', NOW(), ($selectrecipe));");

  $stmt->execute();
  //var_dump($stmt);
  } catch (PDOException $e){
  echo "Error: " . $e->getMessage();
  }

}
header("Location: index.php");
