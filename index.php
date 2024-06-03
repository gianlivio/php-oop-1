<?php
// Importimo le classi
require_once "Models/movie.php";
require_once "Models/genre.php";



//Creiamo prima istanza

$movie1 = new Movie("Fuori di Cresta", "Usa", "110","2012");
$movie2 = new Movie("PAZ","Italy","109","1979");
$movie1->setAdults("maggiore di 16");
$movie2->setAdults("famiglia");
// var_dump($movie1);
// var_dump($movie2);

// var_dump($movie1->getAdults());

?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elenco Film</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <header>
    
    </header>
    <div class="container">
        <div class="movie">
            <img src="<?php echo $poster1; ?>" alt="Poster di Fuori di Cresta">
            <h2><?php echo $movie1->title; ?></h2>
            <p><strong>Country:</strong> <?php echo $movie1->country; ?></p>
            <p><strong>Duration:</strong> <?php echo $movie1->duration; ?> minutes</p>
            <p><strong>Release Date:</strong> <?php echo $movie1->release_date; ?></p>
            <p><strong>Parental Control:</strong> <?php echo $movie1->getAdults(); ?></p>
        </div>
        <div class="movie">
            <img src="<?php echo $poster2; ?>" alt="Poster di PAZ">
            <h2><?php echo $movie2->title; ?></h2>
            <p><strong>Country:</strong> <?php echo $movie2->country; ?></p>
            <p><strong>Duration:</strong> <?php echo $movie2->duration; ?> minutes</p>
            <p><strong>Release Date:</strong> <?php echo $movie2->release_date; ?></p>
            <p><strong>Parental Control:</strong> <?php echo $movie2->getAdults(); ?></p>
        </div>
    </div>
</body>
</html>