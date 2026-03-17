<?php


class Movie
{
    public $title;
    public $director;
    public $genre;
    public $netflix;


    public function __construct($_title, $_director, Genre $_genre, $_netflix)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->genre = $_genre;
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

$movie1 = new Movie("Interstellar", "Christopher Nolan", $fantascienza, true);
$movie2 = new Movie("Blade Runner", "Ridley Scott", $fantascienza, false);

echo $movie1->title . " - " . $movie1->genre->name . " - " . $movie1->isOnNetflix() . "<br>";
echo $movie2->title . " - " . $movie2->genre->name . " - " . $movie2->isOnNetflix();


