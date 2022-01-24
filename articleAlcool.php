<?php
require_once "Class/Alcool.php";
require_once "Class/Vin.php";
require_once "Class/Spi.php";
require_once "Class/Biere.php";
 
    include "commun/header.php";
?>

<h1>site e-commerce</h1>

<h2>Alcools :</h2>


<?php

$vin1 = new Vin("VIN1IMG",$categorie,"Vin 1",5.50);
$vin2 = new Vin("VIN2IMG",$categorie,"Vin 2",11);

$spi1 = new Spi("SPI1IMG",$categorie,"Spi 1",90);
$spi2 = new Spi("SPI2IMG",$categorie,"Spi 2",49);

$biere1 = new Biere("BIERE1IMG",$categorie,"Biere 1",6.50);
$biere2 = new Biere("BIERE2IMG",$categorie,"Biere 2",15.50);

$alcools = [$vin1, $vin2, $spi1, $spi2, $biere1, $biere2];

foreach($alcools as $alcool){
    echo $alcool;
    echo "<br>--------------------<br>";
}



?>








<?php
    include "commun/footer.php";
?>