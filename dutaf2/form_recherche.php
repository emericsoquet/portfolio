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

                <h1>recherche</h1>

                <p>Saisissez quelques mots, quelques lettres même pour trier votre recherche et vous facilitez la vie.</p>

                <form method="get" action="reponse_recherche.php">
                    <label for="texte">recherche personnalisée</label>
                    <input type="text" id="texte" name="recherche" />
                    <input type="submit" />
                </form>

            </article>

            <article><a href="index.php">Retour</a></article>

        </section>

<?php
    require 'footer.inc.php';
?>


<?php
    require 'fin_html.inc.php';
?>