<?php 
require_once __DIR__.'/classes/Movie.php';

$film1 = new Movie("Gran Torino",2008,"drammatico");
$film2 = new Movie("Apostolo",2018,"horror");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Oop Php</title>
</head>
<body>
    <div class="container">
        <div>
            <?php $film1->getMovie();
            $film2->getMovie();?>
        </div>
    </div>
</body>
</html>