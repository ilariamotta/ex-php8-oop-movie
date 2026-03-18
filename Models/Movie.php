<?php 

require_once "./Models/Genre.php";


class Movie
{

    use HasRating;

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
            return "Sì";
        } else {
            return "No";
        }
    }
}

?>