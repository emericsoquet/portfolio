<?php
    require '../config.inc.php';
?>

<?php
    require '../debut_html_search_admin.inc.php';
?>

<?php
    require '../header_admin.inc.php';
?>

    <section>
        <article>

            <h1>ajout d'un éditeur</h1>

            <form action="editeur_valid_form.php" method="get">

                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" />

                <label for="pays">Pays</label>
                <input type="text" name="pays" id="pays" />

                <label for="tel">Téléphone</label>
                <input type="text" name="tel" id="tel" />

                <input type="submit" value="Enregistrer"/>

            </form>

        </article>

        <article><a href="admin.php">Retour</a></article>

    </section>

<?php
    require '../footer.inc.php';
?>


<?php
    require '../fin_html.inc.php';
?>