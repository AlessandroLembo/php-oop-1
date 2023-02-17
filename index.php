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
        $this->genre = $_genre;
        $this->vote = $_vote;
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

$movie = [
    [
        'id' => 1,
        'title' => 'Pulp Fiction',
        'director' => 'Quentin tarantino',
        'year' => 1994,
        'genre' => 'gangster',
        'vote' => 8
    ],
    [
        'id' => 2,
        'title' => 'Arancia meccanica',
        'director' => 'Stanley Kubrik',
        'year' => 1971,
        'genre' => 'drama',
        'vote' => 10
    ]
];

$movie_object = [];


// $first_movie = new Movie('Pulp fiction', 'Quentin tarantino', 1994, 'gangster', 8);

// $second_movie = new Movie('Arancia meccanica', 'Stanley Kubrik', 1971, 'drammatico', 10);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Lista dei film</h1>
        <ul class="movie">
            <li><strong><?= $first_movie->title ?></strong></li>
            <li><i><?= $first_movie->director ?></i></li>
            <li>Anno di uscita: <?= $first_movie->year ?></li>
            <li>Media recensioni: <?= $first_movie->vote  ?></li>
            <li>Genere: <?= $first_movie->genre  ?></li>
        </ul>
        <ul class="movie">
            <li><strong><?= $second_movie->title ?></strong></li>
            <li><i><?= $second_movie->director ?></i></li>
            <li>Anno di uscita: <?= $second_movie->year ?></li>
            <li>Media recensioni: <?= $second_movie->vote  ?></li>
            <li>Genere: <?= $second_movie->genre  ?></li>
        </ul>
    </div>

</body>

</html>