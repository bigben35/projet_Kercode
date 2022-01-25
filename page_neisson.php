<?php
    include "commun/header.php";
?>
    <main id="contenu">
        <section id="main-shop" class="container">
            <div class="chemin">
                <a href="index.php">Accueil</a> >> <a href="boutique_Ty-Joss.php"> Boutique</a> >> Rhum
                >> Neisson
            </div>
            <article class="shop">
                <div class="shop-article">
                    <div class="img-shop-article">
                        <img src="images/neisson.webp" alt="Neisson profil 105, rhum martiniquais">
                    </div>
                    <div class="title-article">
                        <h2>Neisson - Profil 105</h2>
                        <p class="domaine">Distillerie Neisson</p>
                        <p class="price">49€</p>
                        <span>100% Canne à sucre</span>
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
                        <span>Catégories: Rhum ~ Martinique</span>
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