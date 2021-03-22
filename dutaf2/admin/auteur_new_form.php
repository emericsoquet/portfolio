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

            <h1>Ajout d'un auteur</h1>

            <form action="auteur_valid_form.php" method="get">

                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" />

                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom" />

                <label for="nationalite">Nationalité</label>
                <input type="text" name="nationalite" id="nationalite" />

                <label for="age">Âge</label>
                <input type="text" name="age" id="age" />

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