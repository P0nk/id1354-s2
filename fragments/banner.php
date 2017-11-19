<?php
session_start();
echo "<h1>Tasty Recipes</h1>";
echo "<div class=\"login\">";

if(isset($_SESSION['username'])){
    //echo "logged in";
    include 'loggedin.php';
}
else{
    //echo "not logged in";
    include 'loginform.php';
}
echo "</div>";


