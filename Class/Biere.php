<?php

require_once "Class/Alcool.php";

class Biere extends Alcool{

    public function __construct()
    {
        parent::__construct($this->image, "Biere",$this->nom,$this->prix);
    }

    public function afficherTitreCategorie(){
        echo "<h3>Bières :</h3>"."<br>";
    }
}