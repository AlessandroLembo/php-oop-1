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

    public function printMovie()
    {
        echo $this->infoMovie();
    }

    public function infoMovie()
    {
        return "Cult movie: $this->title, $this->director, $this->year, $this->genre, $this->vote";
    }
}

$first_movie = new Movie('Pulp fiction', 'Quentin tarantino', 1994, 8, 'gangster');

$second_movie = new Movie('Arancia meccanica', 'Stanley Kubrik', 1971, 10, 'drammatico');


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
    <ul>
        <li><?= $first_movie->title ?></li>
        <li><i><?= $first_movie->director ?></i></li>
        <li>Anno di uscita: <?= $first_movie->year ?></li>
        <li>Media recensioni: <?= $first_movie->vote  ?></li>
        <li>Genere: <?= $first_movie->genre  ?></li>
    </ul>
    <ul>
        <li><?= $second_movie->title ?></li>
        <li><i><?= $second_movie->director ?></i></li>
        <li>Anno di uscita: <?= $second_movie->year ?></li>
        <li>Media recensioni: <?= $second_movie->vote  ?></li>
        <li>Genere: <?= $second_movie->genre  ?></li>
    </ul>
</body>

</html>