<?php

class Panier{
    // Une propriété ou une méthode statique est une propriété ou une méthode qui ne va pas appartenir à une instance de classe ou à un objet en particulier mais qui va plutôt appartenir à la classe dans laquelle elle a été définie.

    // Les méthodes et propriétés statiques vont donc avoir la même définition et la même valeur pour toutes les instances d’une classe et nous allons pouvoir accéder à ces éléments sans avoir besoin d’instancier la classe.
    private static int $premierIdentifiant = 1;

    private $identifiant;
    public $listAlcool;
    // private $pomme;
    // private $cerise;
    // private $poire;

     public function __construct()                                           //Dans la définition d’une classe, « $this » se réfère à l’objet actuel, tandis que « self » se réfère à la classe actuelle.

    // « self » n’est pas précédé par « $ » car « self » ne représente pas une variable mais la classe elle-même. Utiliser avec les fonctions variables statiques
    {
        $this->identifiant =self::$premierIdentifiant;
        self::$premierIdentifiant++;
        $this->listAlcool = [];
    }

    public function getIdentifiant(){       //pour récupérer l'identifiant
        return $this->identifiant;
    }

    public function addFruit($alcool){
        array_push($this->listAlcool, $alcool);
    }

    public static function getPanierById($id,$paniers){   //static car méthode de class
                    
        foreach($paniers as $panier){
            if($panier->getIdentifiant() === $id){
                return $panier;
            }
        }
    }


    public function getListAlcool(){
        return $this->listAlcool;
    }
}