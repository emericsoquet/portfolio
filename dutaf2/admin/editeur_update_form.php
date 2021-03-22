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

            $num_ed = $_GET['num_ed'];

            $bdd = connexionBD();

            $selectAlbum = $bdd->query('SELECT * FROM editeur WHERE editeur_id =' . $num_ed);

            $dataAlbum = $selectAlbum->fetch();

            deconnexionBD($bdd);

        ?>

        <section>
            <article>

                <h1>Modif. d'un éditeur</h1>

                <form action="editeur_update_valid.php" method="get">

                    <input type="hidden" name="num_ed" id="editeur_id" value="<?php echo $dataAlbum['editeur_id'] ; ?>" />

                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom" value="<?php echo $dataAlbum['editeur_nom'] ; ?>" />

                    <label for="pays">Pays</label>
                    <input type="text" name="pays" id="pays" value="<?php echo $dataAlbum['editeur_pays'] ; ?>" />

                    <label for="tel">Téléphone</label>
                    <input type="text" name="tel" id="tel" value="<?php echo $dataAlbum['editeur_tel'] ; ?>"/>

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