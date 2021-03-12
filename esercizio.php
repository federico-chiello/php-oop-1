<?php

class Movie {
    public $titolo;
    public $genere;
    public $anno;
    public $durata;

    function __construct($_titolo, $_genere) {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
    }
}

$filmUno = new Movie('Il signore degli anelli', 'fantasy');
//var_dump($filmUno);
echo $filmUno->titolo .' ' .$filmUno->genere;

$filmDue = new Movie('John Wick', 'azione');
//var_dump($filmDue);
echo $filmDue->titolo .' ' .$filmDue->genere;