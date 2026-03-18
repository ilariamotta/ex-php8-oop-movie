<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Collection</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="container">
<?php 


?>

</div>


</body>
</html>





<?php

require_once "./Traits/HasRating.php";
require_once "./Models/Movie.php";
require_once "./Models/Genre.php";
require_once "./db.php";



echo $movie1->title . " - ";

foreach ($movie1->genres as $genre) {
    echo $genre->name . " ";
}

echo "- " . $movie1->isOnNetflix() . "<br>";

$movie1->setRating(8);
echo $movie1->getRating();



?>