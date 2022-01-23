<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Ty Joss, caviste à Angers. Conseil et vente de vins et spiritueux, initiation à la dégustation. Cadeaux ou plaisir hédoniste. 95 avenue Pasteur, ouvert du mardi au dimanche.">
    <link rel="icon" type="image/webp" href="images/logo_size.webp" />
    <script src="https://kit.fontawesome.com/dd4ba2d4ff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,800;1,200;1,300;1,400;1,500;1,600;1,800&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Spectral+SC:ital,wght@0,200;0,300;0,400;0,500;0,800;1,200;1,300;1,400;1,500;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Ty Joss - Caviste au Naturel</title>
</head>

<body>
    <header id="bandeau">
        <div id="bandeau-principal">
            <div id="bandeau-haut">
                <a class="two-lines" href="tel:+33241437070">02 41 43 70 70</a>
                <a href="#"><i class="fas fa-shopping-basket"></i></a>
            </div>
            <div id="logo-title">
                <a href="index.html">
                    <img src="./images/logo_Ty-Joss.png" alt="logo cave Ty Joss">
                </a>
            </div>
            <nav id="hamburger-menu">
                <input id="menu_toggle" type="checkbox" />
                <label class="menu_btn" for="menu_toggle">
                    <span></span>
                </label>

                <ul class="menu_box">
                    <li class="menu_item"><a class="two-lines" href="index.html">Accueil</a></li>
                    <li class="menu_item"><a class="two-lines" href="boutique_Ty-Joss.html">Boutique</a></li>
                    <li class="menu_item"><a class="two-lines" href="#">Ateliers dégustations</a></li>
                    <li class="menu_item"><a class="two-lines" href="#">Idées Cadeaux</a></li>
                    <li class="menu_item"><a class="two-lines" href="contact_Ty-Joss.html">Contact</a></li>
                </ul>


            </nav>
        </div>

        <div id="image-fond-boutique"><a href="contact_Ty-Joss.html">Contact</a></div>


    </header>

    <main id="contenu">
        <section id="container-form">
            <h1>Nous Contacter</h1>
            <form class="bloc-form" method="post" action="#lien supabase?">
                <div class="separation"></div>
                <div class="form-line">
                    <label class="label" for="name">Nom complet *</label>
                    <input class="form-input" type="text" id="name" placeholder="exemple: Paul Dupond" required>
                </div>
                <div class="form-line">
                    <label class="label" for="email">Adresse mail *</label>
                    <input class="form-input" type="email" id="email" placeholder="Email" required>
                </div>
                <div class="form-line">
                    <label class="label" for="address">Adresse *</label>
                    <input class="form-input" type="text" id="address" placeholder="Votre Adresse" required>
                </div>

                <div class="form-line">
                    <label class="label" for="form-message">Votre Message</label>
                    <textarea id="form-message" name="message" class="form-input" cols="50" rows="8"
                        placeholder="Votre message"></textarea>
                </div>
                <div class="form-line">
                    <input type="checkbox" id="autorisation" required>
                    <label for="autorisation">&nbsp; En soumettant ce formulaire, j'autorise ce site à conserver mes données personnelles. Aucune exploitation commerciale ne sera faite des données conservées.</label>
                </div>


                <button class="send-msg active">Envoyer</button>
                <p class="asterix">* Champs obligatoires</p>


            </form>
            <div class="bloc-img">
                <a
                    href="https://www.google.fr/maps/place/95+Av.+Pasteur,+49100+Angers/@47.4740717,-0.5398766,17z/data=!3m1!4b1!4m5!3m4!1s0x480878f131c9b2d7:0x7da8f9b767211b7d!8m2!3d47.4740717!4d-0.5376879"><img
                        src="images/map-ConvertImage.jpg" alt="carte de la cave"></a>
            </div>

        </section>
        <section class="contact">
            <ul>
                <li>
                    <div class="bloc-contact">
                        <span class="circle"><i class=" fas fa-map-marker-alt "></i></span>
                        <div class="title-contact">
                            <p>Adresse : 95, Avenue Pasteur - 49100 ANGERS</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="bloc-contact">
                        <span class="circle"><i class="fa fa-phone"></i></span>
                        <div class="title-contact">
                            <p>Téléphone : <a href="tel:+33241437070">02 41 43 70 70</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="bloc-contact">
                        <span class="circle"><i class="fa fa-paper-plane"></i></span>
                        <div class="title-contact">
                            <p>E-mail: <a href="mailto:josselincrenn@gmail.com">josselincrenn@gmail.com</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="bloc-contact">
                        <span class="circle"><i class="fa fa-globe"></i></span>
                        <div class="title-contact">
                            <p>Site Web: <a href="index.html">https://bigben35.github.io/projet_Kercode/</a>
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
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
    <footer id="pied">
        <a href="#" class="btn-arrow">
            <i class="fas fa-arrow-up"></i>
        </a>
        <aside id="contenu-bas">
            <div class="logo-footer">
                <a href="index.html"><img src="images/logo_Ty-Joss.png" alt="logo cave Ty Joss"></a>
            </div>
            <div class="colonne line-height">
                <h4>Nos Services</h4>
                <ul>

                    <li><a class="two-lines" href="index.html">Accueil</a></li>
                    <li><a class="two-lines" href="boutique_Ty-Joss.php">La Boutique</a></li>
                    <li><a class="two-lines" href="#">Ateliers dégustations</a></li>
                    <li><a class="two-lines" href="#">Idées Cadeaux</a></li>
                    <li><a class="two-lines" href="contact_Ty-Joss.html">Contact</a></li>
                </ul>
            </div>
            <div class="colonne line-height">
                <h4>Nos Partenaires</h4>
                <ul>

                    <li><a class="two-lines" href="#">Restaurants#</a></li>
                    <li><a class="two-lines" href="#">Revue spécialisée</a></li>
                    <li><a class="two-lines" href="#">Journaux locaux</a></li>
                    <li><a class="two-lines" href="#">Boucherie</a></li>
                </ul>
            </div>
            <div class="colonne line-height">
                <h4>Nous Trouvez</h4>
                <div class="find-us">
                    <h5>Adresse</h5>
                    <p>95 Avenue Pasteur, 49100 ANGERS</p>
                </div>
                <div class="find-us">
                    <h5>Numéro de Téléphone</h5>
                    <p><a class="two-lines" href="tel:+33241437070">02 41 43 70 70</a></p>
                </div>
                <div class="find-us">
                    <h5>Nos Horaires</h5>
                    <p><span class="bold">du Mardi au Samedi:</span> 9h30-13h / 15h-19h30 <br>
                        <span class="bold">Dimanche:</span> 10h-12h30 <br>
                        <span class="bold">Fermé le Lundi</span>
                    </p>
                </div>
            </div>

        </aside>
        <div id="reseaux">
            <ul class="icons">
                <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" title="instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" title="snapchat"><i class="fa fa-snapchat"></i></a></li>
            </ul>
        </div>
        <div class="copyright">
            <i class="far fa-copyright"> </i>
            <p> Ty Joss 2021 - <a href="#">Mentions légales</a></p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>

</html>