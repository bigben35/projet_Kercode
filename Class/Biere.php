<?php

require_once "Class/Alcool.php";

class Biere extends Alcool{

    public function __construct(string $image, string $nom, float $prix, string $lienPageProduit)
    {
        parent::__construct($image, "Biere",$nom,$prix, $lienPageProduit);
    }

    public function afficherTitreCategorie(){
        echo "<h3>Bières :</h3>"."<br>";
    }
}