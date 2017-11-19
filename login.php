<?php
session_start();
require_once 'dbconnection.php';

if($_POST['register']){
    header("Location: register.php");
    exit;
}
$username=$_POST['username'];
$password=$_POST['password'];

$select = "SELECT username,password FROM users WHERE username='$username' AND password='$password'";
$stmt=$conn->prepare($select);
$stmt->execute();

//Look if there are any rows in the result.
$row=$stmt->fetch();
if($row){
    $_SESSION['username']=$username;
}

header('Location: index.php');


