<?php
class Movie
{
    public $title;
    public $director;
    public $year;
    public $genre;
    public $vote;


    public function __construct($_title, $_director, $_year, $_genre, $_vote = Null)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->vote = $_vote;
        $this->genre = $_genre;
    }
}

$first_movie = new Movie('Pulp fiction', 'Quentin tarantino', 1994, 'gangster');

$second_movie = new Movie('Arancia meccanica', 'Stanley Kubrik', 1971, 'drammatico');

var_dump($first_movie);
var_dump($second_movie);




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