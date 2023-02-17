<?php
class Movie
{
    public $id;
    public $title;
    public $director;
    public $year;
    public $genre;
    public $vote;


    public function __construct($_id, $_title, $_director, $_year, $_genre, $_vote)
    {
        $this->id = $_id;
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
        $this->genre = $_genre;
        $this->vote = $_vote;
    }
}

$movies = [
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
    ],
    [
        'id' => 3,
        'title' => 'Babylon',
        'director' => 'Damien Chazelle',
        'year' => 2022,
        'genre' => 'commedia',
        'vote' => 6.5
    ],
];

$movie_object = [];

foreach ($movies as $movie) {
    $cult_movie = new Movie($movie['id'], $movie['title'], $movie['director'], $movie['year'], $movie['genre'], $movie['vote']);
    $movie_object[] = $cult_movie;
};


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
        <?php foreach ($movie_object as $movie) : ?>
            <ul class="movie">
                <li><strong><?= $movie->title ?></strong></li>
                <li><i><?= $movie->director ?></i></li>
                <li>Anno di uscita: <?= $movie->year ?></li>
                <li>Media recensioni: <?= $movie->vote  ?></li>
                <li>Genere: <?= $movie->genre ?></li>
            </ul>
        <?php endforeach; ?>

    </div>

</body>

</html>