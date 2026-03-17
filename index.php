<?php


class Movie
{
    public $title;
    public $director;
    public $genres;
    public $netflix;


    public function __construct($_title, $_director, $_genres, $_netflix)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->genres = $_genres;
        $this->netflix = $_netflix;
    }

    public function isOnNetflix()
    {
        if ($this->netflix == true) {
            return "Yes";
        } else {
            return "No";
        }
    }
}



class Genre
{
    public $name;

    public function __construct($_name)
    {
        $this->name = $_name;
    }
}

$fantascienza = new Genre("Fantascienza");
$drammatico = new Genre("Drammatico");

$movie1 = new Movie("Interstellar", "Christopher Nolan", [$fantascienza, $drammatico], true);
$movie2 = new Movie("Blade Runner", "Ridley Scott", [$fantascienza], false);

echo $movie1->title . " - ";

foreach ($movie1->genres as $genre) {
    echo $genre->name . " ";
}

echo "- " . $movie1->isOnNetflix() . "<br>";




