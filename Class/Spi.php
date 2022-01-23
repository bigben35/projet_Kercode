<?php

require_once "Class/Alcool.php";

class Spi extends Alcool{

    public function __construct()
    {
        parent::__construct($this->image, "Spiritueux",$this->nom,$this->prix);
    }

    public function afficherTitreCategorie(){
        echo "<h3>Spiritueux :</h3>"."<br>";
    }
}