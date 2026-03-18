<?php

require_once "./Models/Movie.php";
require_once "./Models/Genre.php";
require_once "./Traits/HasRating.php";


$fantascienza = new Genre("Fantascienza");
$drammatico = new Genre("Drammatico");
$azione = new Genre("Azione");
$thriller = new Genre("Thriller");
$avventura = new Genre("Avventura");


$movies = [

    new Movie("Interstellar", "Christopher Nolan", [$fantascienza, $drammatico], true),
    new Movie("Blade Runner", "Ridley Scott", [$fantascienza, $thriller], false),
    new Movie("Mad Max: Fury Road", "George Miller", [$azione, $avventura], true),
    new Movie("Inception", "Christopher Nolan", [$fantascienza, $thriller], true),
    new Movie("The Dark Knight", "Christopher Nolan", [$azione, $drammatico], true),
    new Movie("Arrival", "Denis Villeneuve", [$fantascienza, $drammatico], false),
    new Movie("Gladiator", "Ridley Scott", [$azione, $drammatico], false),
    new Movie("The Matrix", "Wachowski Sisters", [$fantascienza, $azione], true),
    new Movie("Dune", "Denis Villeneuve", [$fantascienza, $avventura], true),
    new Movie("Fight Club", "David Fincher", [$drammatico, $thriller], false)

];


$movies[0]->setRating(9);
$movies[1]->setRating(8);
$movies[2]->setRating(7);
$movies[3]->setRating(9);
$movies[4]->setRating(10);
$movies[5]->setRating(8);
$movies[6]->setRating(7);
$movies[7]->setRating(9);
$movies[8]->setRating(8);
$movies[9]->setRating(9);


?>