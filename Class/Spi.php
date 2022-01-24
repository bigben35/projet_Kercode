<?php

require_once "Class/Alcool.php";

class Spi extends Alcool{

    public function __construct(string $image, string $nom, float $prix, string $lienPageProduit)
    {
        parent::__construct($image, "Spiritueux",$nom,$prix, $lienPageProduit);
    }

    public function afficherTitreCategorie(){
        echo "<h3>Spiritueux :</h3>"."<br>";
    }
}