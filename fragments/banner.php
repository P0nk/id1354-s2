<?php
session_start();
echo "<a id=\"tastyrecipes\" href=\"index.php\">";
echo "<h1>Tasty Recipes</h1>";
echo "</a>";
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


