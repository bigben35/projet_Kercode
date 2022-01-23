<?php

abstract class Alcool{
    private string $categorie;
    private string $nom;
    private float $prix;


    public function __construct(string $categorie, string $nom, float $prix)

    {
        $this->categorie = $categorie;
        $this->nom = $nom;
        $this->prix = $prix;    
    }

    public function __toString()
    {
        $affichage = "Catégorie : ".$this->categorie."<br>";
        $affichage = "Nom : ".$this->nom."<br>";
        $affichage = "Prix (en €) : ".$this->prix."<br>";
        return $affichage;
    }
}