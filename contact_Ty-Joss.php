<?php
    include "commun/header.php";
?>

    <main id="contenu">
        <section id="container-form">
            <h1>Nous Contacter</h1>
            <form class="bloc-form" method="POST" role="form" name="Formulaire-de-contact">
                <div class="separation"></div>
                <div class="form-line">
                    <label class="label" for="name">Nom complet *</label>
                    <input class="form-input" type="text" id="name" name="name" placeholder="exemple: Paul Dupond" required>
                </div>
                <div class="form-line">
                    <label class="label" for="email">Adresse mail *</label>
                    <input class="form-input" type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-line">
                    <label class="label" for="address">Adresse *</label>
                    <input class="form-input" type="text" id="address" name="address" placeholder="Votre Adresse" required>
                    <ul id="listAddress"></ul>
                </div>

                <div class="form-line">
                    <label class="label" for="form-message">Votre Message *</label>
                    <textarea id="form-message" name="message" class="form-input" cols="50" rows="8"
                        placeholder="Votre message"></textarea>
                </div>
                <div class="form-line">
                    <input type="checkbox" id="autorisation" required>
                    <label for="autorisation">&nbsp; En soumettant ce formulaire, j'autorise ce site à conserver mes données personnelles. Aucune exploitation commerciale ne sera faite des données conservées.</label>
                </div>


                <button class="send-msg" type="submit">Envoyer</button>
                <div id="notification">Votre message a bien été envoyé !</div>
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
                            <p>E-mail: <a href="mailto:josselincrenn@gmail.com">cliquez ici</a></p>
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

   
    <script src="https://unpkg.com/@supabase/supabase-js"></script>
    <script src="supabase.js"></script>
    <?php
        include "commun/footer.php";
    ?>