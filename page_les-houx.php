<?php
    include "commun/header.php";
?>
    <main id="contenu">
        <section id="main-shop" class="container">
            <div class="chemin">
                <a href="index.html">Accueil</a> >> <a href="boutique_Ty-Joss.html"> Boutique</a> >> Les Vins
                >> Les Houx
            </div>
            <article class="shop">
                <div class="shop-article">
                    <div class="img-shop-article">
                        <img src="images/Les-Houx-Jo-Landron.webp" alt="Muscadet de chez Jo Landron">
                    </div>
                    <div class="title-article">
                        <h2>Les Houx - 2018</h2>
                        <p class="domaine">Domaine Landron</p>
                        <p class="price">11€</p>
                        <span>100% Melon de Bourgogne</span>
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
                        <span>Catégories: Vin ~ Blanc ~ Loire</span>
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