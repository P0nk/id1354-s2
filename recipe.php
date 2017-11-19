<?php
if (file_exists('resources/cookbook.xml')) {
    $recipes = simplexml_load_file('resources/cookbook.xml', 'SimpleXMLElement');
    //print_r('Succesfully opened cookbook.xml');
} else {
    exit('Failed to open cookbook.xml.');
    echo "<br/>";
    return;
}
//Dynamically picks out the correct recipe from the xml file.
$recipePath="//recipe" . "[title=\"" . $page . "\"]";
$recipe =  $recipes->xpath($recipePath)[0];
//Title

echo "<h2 class=\"recipetitle\">" . $recipe->title . "</h2>";
//Image
echo "<img class=\"recipeimg\" src=\"$recipe->url\" alt=\"Image of the prepared recipe\">";
//Ingredients list
echo "<h3>Ingredienser</h3>";
echo "<ul>";
foreach($recipe->ingredient->li as $ingredient){
    echo "<li>".$ingredient."</li>";
}
echo "</ul>";

//Cooking instructions
echo "<h3>Instruktioner</h3>";
echo "<ol>";
foreach($recipe->recipetext->li as $direction){
    echo "<li>".$direction."</li>";
}
echo "</ol>";

//Nutritional values
echo "<h3>Näringsvärden</h3>";
echo "<ul>";
foreach($recipe->nutrition->li as $nutritionalFact){
    echo "<li>".$nutritionalFact."</li>";
}
echo "</ul>";

include 'comments.php';
/*
//Comments
echo "<h3>Kommentarer</h3>";
echo "<ul>";
foreach ($recipe->comments->li as $comment) {
    echo "<li class=\"comment\">".$comment."</li>";
}
echo "</ul>";   
*/



