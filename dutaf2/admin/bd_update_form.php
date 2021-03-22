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

            $num_bd = $_GET['num_bd'];

            $bdd = connexionBD();

            $selectAlbum = $bdd->query('SELECT * FROM album INNER JOIN auteur ON album.auteur_id_ = auteur.auteur_id INNER JOIN editeur ON album.editeur_id_ = editeur.editeur_id WHERE album_id =' . $num_bd);

            $dataAlbum = $selectAlbum->fetch();

            

        ?>

        <section>
            <article>

                <h1>Modif. d'une BD</h1>

                <form action="bd_update_valide.php" method="get">

                    <input type="hidden" name="num_bd" id="album_id" value="<?php echo $dataAlbum['album_id'] ; ?>" />

                    <label for="titre">Titre</label>
                    <input type="text" name="titre" id="titre" value="<?php echo $dataAlbum['album_titre'] ; ?>" />

                    <label for="prix">Prix</label>
                    <input type="text" name="prix" id="prix" value="<?php echo $dataAlbum['album_prix'] ; ?>" />

                    <label for="isbn">ISBN</label>
                    <input type="text" name="isbn" id="isbn" value="<?php echo $dataAlbum['album_isbn'] ; ?>"/>

                    <label for="serie">Série</label>
                    <input type="text" name="serie" id="serie" value="<?php echo $dataAlbum['album_serie'] ; ?>"/>

                    <label for="auteur">Auteur</label>
                    <select name="auteur" id="auteur">
                        <option value=" <?php echo $dataAlbum['auteur_id']; ?> ">
                            - <?php echo $dataAlbum['auteur_nom']; ?>-
                        </option>

                        <?php

                        $allAuteurs = 'SELECT * FROM auteur';

                        $listAut = $bdd->query($allAuteurs);

                        while( $singleAut = $listAut->fetch()){
                            echo '<option value="'.$singleAut['auteur_id'].'">'.$singleAut['auteur_nom'].'</option>';
                        }
                        ?>

                    </select>

                    <label for="editeur">Éditeur</label>
                    <select name="editeur" id="editeur">
                        <option value=" <?php echo $dataAlbum['editeur_id'] ?>"> - <?php echo $dataAlbum['editeur_nom'] ?> - </option>
                        <?php

                        $editeurs = 'SELECT * FROM editeur';

                        $listeEd = $bdd->query($editeurs);

                        while( $singleEd = $listeEd->fetch()){
                            echo '<option value="'.$singleEd['editeur_id'].'">'.$singleEd['editeur_nom'].'</option>';
                        }

                        deconnexionBD($bdd);
                        ?>

                    </select>

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