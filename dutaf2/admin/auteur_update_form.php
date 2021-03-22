<?php
    require '../config.inc.php';
?>

<?php
    require '../debut_html_search_admin.inc.php';
?>

<?php
    require '../header_admin.inc.php';
?>

        <?php

            $num_aut = $_GET['num_aut'];

            $bdd = connexionBD();

            $selectAlbum = $bdd->query('SELECT * FROM auteur WHERE auteur_id =' . $num_aut);

            $dataAlbum = $selectAlbum->fetch();

            deconnexionBD($bdd);

            

        ?>

        <section>
            <article>

                <h1>Modif. d'un auteur</h1>

                <form action="auteur_update_valid.php" method="get">

                    <input type="hidden" name="num_aut" id="auteur_id" value="<?php echo $dataAlbum['auteur_id'] ; ?>" />

                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" value="<?php echo $dataAlbum['auteur_nom'] ; ?>" />

                    <label for="prenom">Prénom</label>
                    <input type="text" name="prenom" id="prenom" value="<?php echo $dataAlbum['auteur_prenom'] ; ?>" />

                    <label for="age">Âge</label>
                    <input type="text" name="age" id="age" value="<?php echo $dataAlbum['auteur_age'] ; ?>"/>

                    <label for="nationalite">Nationalité</label>
                    <input type="text" name="nationalite" id="nationalite" value="<?php echo $dataAlbum['auteur_nat'] ; ?>"/>

                    <input type="submit" value="Modifier"/>

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