<?php

// creo classe movie
class Movie {

    // inserisco chiavi che corrispondono alle caratteristiche della classe
    public string  $title;   // uso type hinting (anteponendo la definizione del tipo di dato)
    public string  $country;
    public string  $duration;
    public string  $release_date;
    private string $adults_only; // determinare la visibilità con public/private


    // le richiamo col costruttore, che mi permette di popolare la struttura presente nel file index php 
    public function __construct(string $title, string $country, string $duration, string $release_date)
    {
        $this-> $title          = $title;
        $this-> $country        = $country;
        $this-> $duration       = $duration;
        $this-> $release_date   = $release_date;

        
    }



}