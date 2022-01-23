<?php

include "commun/header.php";
?>

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
   
    <?php
    
    include "commun/footer.php";
    ?>