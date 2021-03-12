<?php

class Movie {
    // Variabili
    public $titolo;
    public $genere;
    public $anno;
    public $durata;
    public $eta;
    public $prezzo = 8;
    public $sconto;

    // Constructor
    function __construct($_titolo, $_genere) {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
    }

    //Metodo
    public function calcolaSconto($eta){
        if($eta > 14) {
            $this->sconto = 15;
        } else {
            $this->sconto = 20; 
        }
        return $this->prezzo - ($this->prezzo * $this->sconto / 100);
    }
}

$filmUno = new Movie('Il signore degli anelli', 'fantasy');
//var_dump($filmUno);
echo $filmUno->titolo .' , ' .'genere: ' .$filmUno->genere .'<br>';

$filmDue = new Movie('John Wick', 'azione');
//var_dump($filmDue);
echo $filmDue->titolo .' , ' .'genere: ' .$filmDue->genere .'<br>';



$prezzoBiglietto = $filmUno->calcolaSconto('15');
$prezzoBiglietto2 = $filmUno->calcolaSconto('8');
echo 'Biglietto over: ' .'euro ' .$prezzoBiglietto  .'<br>';
echo 'Biglietto under 14: ' .'euro ' .$prezzoBiglietto2;