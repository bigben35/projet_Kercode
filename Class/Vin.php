<?php

require_once "Class/Alcool.php";

class Vin extends Alcool{

    public function __construct(string $image, string $nom, float $prix, string $lienPageProduit)
    {
        parent::__construct($image, "Vin", $nom, $prix, $lienPageProduit);
    }

    public function afficherPageProduit(){
        echo "<h3>Vins :</h3>"."<br>";
    }
}