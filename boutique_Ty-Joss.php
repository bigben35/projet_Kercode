<?php
require_once "Class/Alcool.php";
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
                <div class="choix-alcool">
                    <a href="page_cabernet-franc.html">
                        <img src="images/cabernet-franc-stephane-orieux.webp" alt="vin rouge stephane orieux">
                    </a>
                    <h3>Cabernet Franc - Rouge Loire <br>
                        5,50 €</h3>

                    <a class="btn-voirPlus" href="page_cabernet-franc.html">Voir plus</a>
                </div>


                <div class="choix-alcool">
                    <a href="page_les-houx.html">
                        <img src="images/Les-Houx-Jo-Landron.webp" alt="muscadet de chez Jo Landron">
                    </a>
                    <h3>Les Houx - Muscadet Loire <br>
                        11 €</h3>

                    <a class="btn-voirPlus" href="page_les-houx.html">Voir plus</a>
                </div>
            </article>
            <div class="orange-line-title">
                <h2>Nos Spiritueux</h2>
                <span class="orange-line"></span>
            </div>
            <article class="bloc-alcool">
                <div class="choix-alcool">
                    <a href="page_talisker-18.html">
                        <img src="images/talisker18.webp" alt="whisky 18 ans écosse rare">
                    </a>
                    <h3>Talisker 18 ans - Whisky Ecosse <br>
                        90 €</h3>

                    <a class="btn-voirPlus" href="page_talisker-18.html">Voir plus</a>
                </div>

                <div class="choix-alcool">
                    <a href="page_neisson.html">
                        <img src="images/neisson.webp" alt="rhum martinique">
                    </a>
                    <h3>Rhum - Martinique <br>
                        49 €</h3>
                    <a class="btn-voirPlus" href="page_neisson.html">Voir plus</a>
                </div>
            </article>
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