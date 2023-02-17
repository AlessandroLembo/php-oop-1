<?php
class Movie
{
    public $title;
    public $director;
    public $year;
    public $genre;
    public $vote;


    public function __construct($_title, $_director, $_year, $_genre, $_vote)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->vote = $_vote;
        $this->genre = $_genre;
    }

    public function cultMovie()
    {
        echo "Cult movie: $this->title, $this->director, $this->year, $this->genre, $this->vote";
    }
}

$first_movie = new Movie('Pulp fiction', 'Quentin tarantino', 1994, 8, 'gangster');

$second_movie = new Movie('Arancia meccanica', 'Stanley Kubrik', 1971, 10, 'drammatico');


$first_movie->cultMovie();





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
</head>

<body>

</body>

</html>