<?php
require_once "articleAlcool.php";
include "commun/header.php";

?>



    <main id="contenu">
        <h1>Notre Sélection</h1>
        <section id="wine-shop" class="container">
            <div class="orange-line-title">
                <h2>Nos Vins</h2>
                <span class="orange-line"></span>
            </div>
            
            <article class="bloc-alcool">
<?php
foreach($vins as $vin){

?>

                <div class="choix-alcool">
                    
                    <a href=<?= $vin->getLienPageProduit() ?>>
                        <img src=<?= $vin->getImage() ?> alt=<?= $vin->getImage() ?>>
                    </a>
                    <h3><?=$vin->getNom() ?> <br>
                        <?=$vin->getPrix() ?>€</h3>

                    <a class="btn-voirPlus" href=<?= $vin->getLienPageProduit() ?>>Voir plus</a>
                </div>


            <?php
}

?>
                <!-- <div class="choix-alcool">
                    <a href="page_les-houx.html">
                        <img src="images/Les-Houx-Jo-Landron.webp" alt="muscadet de chez Jo Landron">
                    </a>
                    <h3>Les Houx - Muscadet Loire <br>
                        11 €</h3>

                    <a class="btn-voirPlus" href="page_les-houx.html">Voir plus</a>
             </div> -->
            </article>


            <div class="orange-line-title">
                <h2>Nos Spiritueux</h2>
                <span class="orange-line"></span>
            </div>

            <article class="bloc-alcool">

            <?php
                foreach($spis as $spi){
            ?>
                <div class="choix-alcool">
                    <a href=<?= $spi->getLienPageProduit() ?>>
                        <img src=<?= $spi->getImage() ?> alt=<?= $spi->getImage() ?>>
                    </a>
                    <h3><?= $spi->getNom() ?> <br>
                        <?= $spi->getPrix() ?>€</h3>

                    <a class="btn-voirPlus" href=<?= $spi->getLienPageProduit() ?>>Voir plus</a>
                </div>

                <?php
                }
                ?>

                <!-- <div class="choix-alcool">
                    <a href="page_neisson.html">
                        <img src="images/neisson.webp" alt="rhum martinique">
                    </a>
                    <h3>Rhum - Martinique <br>
                        49 €</h3>
                    <a class="btn-voirPlus" href="page_neisson.html">Voir plus</a>
                </div>
            </article> -->
            <div class="orange-line-title">
                <h2>Nos Bières</h2>
                <span class="orange-line"></span>
            </div>
            <article class="bloc-alcool">

            <?php
                foreach($bieres as $biere){
            ?>

                <div class="choix-alcool">
                    <a href=<?= $biere->getLienPageProduit() ?>>
                        <img src=<?= $biere->getImage() ?> alt=<?= $biere->getImage() ?>>
                    </a>
                    <h3><?= $biere->getNom() ?> <br>
                        <?= $biere->getPrix() ?>€</h3>
                    <a class="btn-voirPlus" href=<?= $biere->getLienPageProduit() ?>>Voir plus</a>
                </div>

                <?php
                }
                ?>

                <!-- <div class="choix-alcool">
                    <a href="page_cantillon.html">
                        <img src="images/cantillon.webp" alt="bière fermentation spontanée de belgique">
                    </a>
                    <h3>Cantillon 75cl - Bière Fermentation spontanée Belgique <br>
                        15,50 €</h3>
                    <a class="btn-voirPlus" href="page_cantillon.html">Voir plus</a>
                </div> -->

                

            </article>
        </section>

    </main>

   <?php
        include "commun/asideConseil.php";
   ?>
    <?php
        include "commun/footer.php";
    ?>