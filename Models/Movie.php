<?php
/* 
    Creazione della classe movie
    All interno della classe inseriamo le varie chiavi che la contraddistinguono

*/
class Movie {
    public  string $title;        // type hinting serve per definire il tipo di dato
    public  string $country;
    public  string $duration;
    public  string $release_date;
    private string $parental_control;  // Qualificatore di visibilita  

    public function __construct(string $title, string $country, string $duration, string $release_date)
    {
        $this-> title        = $title;
        $this-> country      = $country;
        $this-> duration     = $duration; 
        $this-> release_date = $release_date;    
    }


    // Definisco un metodo pubblico chiamato setAdults che accetta un parametro di tipo stringa chiamato $parental_control.
    public function setAdults(string $parental_control){

        // Verifico se il valore di $parental_control è uno dei valori all'interno dell'array ["adults", "famiglia", "maggiore di 16"].
        if(in_array($parental_control, ["adults", "famiglia","maggiore di 16"])) {

            // Se $parental_control è uno di questi valori, allora imposto l'oggetto corrente (indicato da $this) svrà il valore di $parental_control passato come parametro.
           $this-> parental_control = $parental_control;
        }     
    }

    public function getAdults() {
        return $this-> parental_control;
    }
}