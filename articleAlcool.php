<?php
require_once "Class/Alcool.php";
require_once "Class/Vin.php";
require_once "Class/Spi.php";
require_once "Class/Biere.php";
 
    // include "commun/header.php";



$vin1 = new Vin("images/cabernet-franc-stephane-orieux.webp","Cabernet Franc - Rouge Loire",5.50, "page_cabernet-franc.php");
$vin2 = new Vin("images/Les-Houx-Jo-Landron.webp","Les Houx - Muscadet Loire",11, "page_les-houx.php");
// echo ($vin1);
// echo $vin1->getPrix();
$vins = [$vin1, $vin2];

$spi1 = new Spi("images/talisker18.webp", "Talisker 18 ans - Whisky Ecosse", 90, "page_talisker-18.php");
$spi2 = new Spi("images/neisson.webp", "Rhum - Martinique", 49, "page_neisson.php");
$spis = [$spi1, $spi2];
// foreach($vins as $vin){
//     echo $vin->__toString();
// }
// $vin2 = new Vin("VIN2IMG","Vin 2",11);

// $spi1 = new Spi("SPI1IMG","Spi 1",90);
// $spi2 = new Spi("SPI2IMG","Spi 2",49);

// $biere1 = new Biere("BIERE1IMG","Biere 1",6.50);
// $biere2 = new Biere("BIERE2IMG",$categorie,"Biere 2",15.50);

// $alcools = [$vin1, $vin2, $spi1, $spi2, $biere1, $biere2];

// foreach($alcools as $alcool){
//     echo $alcool;
//     echo "<br>--------------------<br>";
// }



?>