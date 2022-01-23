<?php
    include "commun/header.php";
?>
    <main id="contenu">
        <section id="main-shop" class="container">
            <div class="chemin">
                <a href="index.html">Accueil</a> >> <a href="boutique_Ty-Joss.html"> Boutique</a> >> Bières
                >> La Flemme-75cl
            </div>
            <article class="shop">
                <div class="shop-article">
                    <div class="img-shop-article">
                        <img src="images/la-flemme-75cl.webp" alt="bière blonde la flemme, brasserie du pays de Vannes">
                    </div>
                    <div class="title-article">
                        <h2>La Flemme - Blonde</h2>
                        <p class="domaine">Brasserie La Flemme</p>
                        <p class="price">6.50€</p>
                        <span>Bière Blonde</span>
                        <div class="quantite">
                            <div class="quantite-article">
                                <p>Quantité: </p>
                                <input type="number" value="1">
                                <div class="plus-moins">
                                    <i class="fas fa-plus-circle"></i>
                                    <i class="fas fa-minus-circle"></i>
                                </div>
                            </div>
                            <div class="stock-article">
                                <i class="fas fa-check-circle"></i>
                                <p>En stock</p>
                            </div>
                        </div>

                        <button class="bouton-ajout">Ajouter au Panier</button>
                        <span>Catégories: Bière ~ Bretagne</span>
                    </div>
                </div>
                <div class="description-article">
                    <h4>~ Description ~</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi at quibusdam fugit, magnam
                        modi dicta suscipit doloremque praesentium recusandae quisquam, porro fugiat, debitis blanditiis
                        eius asperiores autem eos velit. Totam, laudantium ad explicabo architecto numquam perspiciatis
                        modi esse possimus aliquam ullam dolorem laborum. Sit culpa neque eveniet amet, facere explicabo
                        consequuntur earum adipisci magni placeat optio suscipit blanditiis alias possimus?</p>
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