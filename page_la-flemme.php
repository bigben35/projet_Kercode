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



    <?php
        include "commun/asideConseil.php";
   ?>
    <?php
        include "commun/footer.php";
    ?>