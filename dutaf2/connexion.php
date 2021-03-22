<?php
    require 'config.inc.php';
    require 'debut_html_search.inc.php';
?>

        <?php require 'header.inc.php'; ?>

    <section>

        <article>

            <h1>Connexion</h1>

            <p>Vous êtes déjà inscrit chez nous ? Entrez votre mail et votre mot de passe pour vous connecter.</p>
            <form action="connexion_verif.php" method="post">
                <label for="email">Adresse mail</label>
                <input type="text" name="email" id="email" /><br />
                <label for="mdp">Mot de passe</label>
                <input type="password" name="mdp" id="mdp"><br />

                <input type="submit" value="Envoyer">
            </form>

        </article>

            <?php // DESTRUCTION DE L'ERREUR
            if (!empty($_SESSION['erreur'])) { // ON VÉRIFIE SI L'UTILISATEUR A FAIT UNE ERREUR
                echo '<article>';
                echo $_SESSION['erreur']; // ON PLACE L'ERREUR
                unset ($_SESSION['erreur']); // ON LA DÉTRUIT ICI
                echo '</article>';
            }
            ?>

    </section>



        <?php require 'footer.inc.php'; ?>

<?php require 'fin_html.inc.php'; ?>