<?php 
require_once __DIR__.'/classes/Movie.php';
include __DIR__.'/db/films.php';

$filmList = array_map(function ($el) {
    $movie = new Movie($el['titolo'],$el['anno_uscita'],$el['genere']);
    $movie->regia = $el['regia'];
    $movie->getPosterPath($el['poster']);
    
    return $movie;
},$rawFilmList);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Oop Php</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Php Oop Film</h1>
    <div class="container">
        <div class="card-container">
            <?php
            foreach ($filmList as $film) {
                $film->printMovieCard();
            }
            ?>
        </div>
    </div>
</body>
</html>