<?php

abstract class Alcool{
    private string $image;
    private string $categorie;
    private string $nom;
    private float $prix;

    const VIN1IMG = "images/cabernet-franc-stephane-orieux.webp";
    const VIN2IMG = "images/Les-Houx-Jo-Landron.webp";
    const BIERE1IMG = "images/la-flemme-75cl.webp";
    const BIERE2IMG = "images/cantillon.webp";
    const SPI1IMG = "images/talisker18.webp";
    const SPI2IMG = "images/neisson.webp";


    public function __construct(string $image, string $categorie, string $nom, float $prix)

    {
        $this->image = $image;
        $this->categorie = $categorie;
        $this->nom = $nom;
        $this->prix = $prix;    
    }

    public function __toString()
    {
        $affichage = $this->image."<br>";
        $affichage .= "Catégorie : ".$this->categorie."<br>";
        $affichage .= "Nom : ".$this->nom."<br>";
        $affichage .= "Prix (en €) : ".$this->prix."<br>";
        return $affichage;
    }
}