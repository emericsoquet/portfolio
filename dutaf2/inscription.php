<?php
require 'config.inc.php';
?>

<?php
require 'debut_html_search.inc.php';
?>

<?php
require 'header.inc.php';
?>

<section>

    <article>

        <h1>Inscription</h1>


    <form method="post" action="inscription_verif.php">

        <?php

            if(!empty($_SESSION['erreur_co'])) {

                echo '<div class="erreur_sub">Les deux mots de passe sont différents ou vides.</div>';

            }

            if(!empty($_SESSION['erreur_mail'])) {

                echo '<div class="erreur_sub">Vous êtes déjà inscrit chez nous.</div>';

            }

        ?>

        <select name="genre" id="genre">
            <option value="F">Mme</option>
            <option value="H">M.</option>
        </select>

        <div class="line-subscribe">
            <div class="divide-sub"><label for="prenom">Prénom</label><input type="text" name="prenom" id="prenom" <?php if (!empty($_SESSION['cli_prenom'])) { echo 'value="' . $_SESSION['cli_prenom'] . '"'; } ?> required /></div>
            <div class="divide-sub"><label for="nom">Nom</label><input type="text" name="nom" id="nom" <?php if (!empty($_SESSION['cli_nom'])) { echo 'value="' . $_SESSION['cli_nom'] . '"'; } ?> required /></div>
        </div>

        <label for="adresse" id="location-cat">Adresse</label><input type="text" name="adresse" id="adresse"  <?php if (!empty($_SESSION['cli_adr'])) { echo 'value="' . $_SESSION['cli_adr'] . '"'; } ?> required />

        <div class="line-subscribe">
            <div class="divide-sub"><label for="cp">Code postal</label><input type="text" name="cp" id="cp" required <?php if (!empty($_SESSION['cli_cp'])) { echo 'value="' . $_SESSION['cli_cp'] . '"'; } ?> /></div>
            <div class="divide-sub"><label for="ville">Ville</label><input type="text" name="ville" id="ville" required <?php if (!empty($_SESSION['cli_ville'])) { echo 'value="' . $_SESSION['cli_ville'] . '"'; } ?>/></div>
        </div>

        <label for="pays">Pays</label><input type="text" name="pays" id="pays" required <?php if (!empty($_SESSION['cli_pays'])) { echo 'value="' . $_SESSION['cli_pays'] . '"'; } ?> />

        <label for="tel" id="tel-cat">Téléphone</label><input type="text" name="tel" id="tel" required <?php if (!empty($_SESSION['cli_tel'])) { echo 'value="' . $_SESSION['cli_tel'] . '"'; } ?> />

        <label for="mail" id="mail-cat">Adresse mail</label><input type="email" name="mail" id="mail" required <?php if (!empty($_SESSION['cli_mail'])) { echo 'value="' . $_SESSION['cli_mail'] . '"'; } ?> />

        <div class="line-subscribe">
            <div class="divide-sub"><label for="mdp1">Mot de passe</label><input type="password" name="mdp1" id="mdp1" required /></div>
            <div class="divide-sub"><label for="mdp2">Confirmation du mot de passe</label><input type="password" name="mdp2" id="mdp2" required /></div>
        </div>

        <input type="submit" value="S'inscrire" />
    </form>

    </article>

</section>

<?php
    $_SESSION['erreur_co'] = array();
    $_SESSION['erreur_mail'] = array();
?>


<?php
require 'footer.inc.php';
?>


<?php
require 'fin_html.inc.php';
?>
