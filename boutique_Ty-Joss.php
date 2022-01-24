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
                        <?=$vin->getPrix() ?> €</h3>

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
                        <?= $spi->getPrix() ?></h3>

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
                <div class="choix-alcool">
                    <a href="page_la-flemme.html">
                        <img src="images/la-flemme-75cl.webp" alt="bière blonde de Vannes">
                    </a>
                    <h3>La Dilettante 75cl - Bière Blonde Vannes <br>
                        6,50 €</h3>
                    <a class="btn-voirPlus" href="page_la-flemme.html">Voir plus</a>
                </div>

                <div class="choix-alcool">
                    <a href="page_cantillon.html">
                        <img src="images/cantillon.webp" alt="bière fermentation spontanée de belgique">
                    </a>
                    <h3>Cantillon 75cl - Bière Fermentation spontanée Belgique <br>
                        15,50 €</h3>
                    <a class="btn-voirPlus" href="page_cantillon.html">Voir plus</a>
                </div>
            </article>
        </section>

    </main>

    <aside id="infos-conseils" class="container">
        <div class="bloc-conseil">
            <img src="images/grape.webp" alt="conseil en accords mets et vins">
            <div class="orange-line-title">
                <h4>Nos Conseils</h4>
                <span class="orange-line"></span>
            </div>
            <p>Au <strong>02 41 43 70 70</strong> ou par email <a href="contact_Ty-Joss.html">en cliquant ici</a></p>
        </div>
        <div class="bloc-conseil">
            <img src="images/world.webp" alt="sauver les vignerons">
            <div class="orange-line-title">
                <h4>Soutenons Nos Producteurs</h4>
                <span class="orange-line"></span>
            </div>
            <p>"Boire un canon, c'est sauver un vigneron"</p>
        </div>
        <div class="bloc-conseil">
            <img src="images/clicandcollect.webp"
                alt="click and collect, choisissez votre vin et venez le récupérer chez Ty Joss">
            <div class="orange-line-title">
                <h4>Click & Collect</h4>
                <span class="orange-line"></span>
            </div>
            <p>Validez votre panier et retirez votre commande à la cave <br><br><i
                    class="fas fa-lock"></i>&nbsp;<strong>Paiement sécurisé</strong></p>
        </div>
    </aside>

    <aside id="newsletter">
        <div>
            <h3>Inscrivez-vous à notre Newsletter</h3>
            <p class="sous-titre">Et recevez toute notre actualité</p>
        </div>
        <div class="input-newsletter">
            <input type="email" name="email" placeholder="Entrez votre adresse mail ici...">
        </div>
        <div class="btn-newsletter">
            <button type="submit">Envoyer</button>
        </div>
    </aside>

    <?php
        include "commun/footer.php";
    ?>