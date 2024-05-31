<?php

// importo le classi

require_once "Models/movie.php";


// Creo prima istanza salvandola in una variabile

$movie1 = new Movie("The Ring", "USA", "110", "1999");
$movie2 = new Movie("PAZ", "Italy", "99", "1972");

var_dump("$movie1");
var_dump("$movie2");


// richiamo la funzione setadults

var_dump($movie1->setAdults("famiglia"));

?>