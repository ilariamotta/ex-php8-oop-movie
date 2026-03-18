<?php

require_once "./Traits/HasRating.php";
require_once "./Models/Movie.php";
require_once "./Models/Genre.php";
require_once "./db.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Collection</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>My Movies Collection</h1>
<div class="container">



<?php 

foreach ($movies as $movie) { ?>

<div class="card">
<h2><?php echo $movie->title; ?></h2>
<p><strong>Regista:</strong><?php echo $movie->director; ?></p>
<p><strong>Genere:</strong> <?php 

foreach ($movie->genres as $genre) {
    echo $genre->name . " ";
}

?></p>
<p><strong>Voto:</strong> <?php echo $movie->getRating();?>☆</p>
<p><strong>Lo trovo su Netflix?</strong> <?php echo $movie->isOnNetflix() ?></p>



</div>




<?php }?>

</div>


</body>
</html>





