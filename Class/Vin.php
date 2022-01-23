<?php

require_once "Class/Alcool.php";

class Vin extends Alcool{

    public function __construct()
    {
        parent::__construct($this->image, "Vin",$this->nom,$this->prix);
    }

    public function afficherTitreCategorie(){
        echo "<h3>Vins :</h3>"."<br>";
    }
}