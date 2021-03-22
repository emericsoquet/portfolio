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

            <h1>Ajout d'une BD</h1>

            <form action="bd_new_valide.php" method="get">

                <label for="titre">Titre</label>
                <input type="text" name="titre" id="titre" />

                <label for="prix">Prix</label>
                <input type="text" name="prix" id="prix" />

                <label for="isbn">ISBN</label>
                <input type="text" name="isbn" id="isbn" />

                <label for="serie">Série</label>
                <input type="text" name="serie" id="serie" />

                <label for="auteur">Auteur</label>
                <select name="auteur" id="auteur">

                    <?php
                    $bdd = connexionBD();

                    $allAuteurs = 'SELECT * FROM auteur';

                    $listAut = $bdd->query($allAuteurs);

                    while( $singleAut = $listAut->fetch()){
                        echo '<option value="'.$singleAut['auteur_id'].'">'.$singleAut['auteur_nom'].'</option>';
                    }
                    ?>

                </select>

                <label for="editeur">Éditeur</label>
                <select name="editeur" id="editeur">

                    <?php

                    $editeurs = 'SELECT * FROM editeur';

                    $listeEd = $bdd->query($editeurs);

                    while( $singleEd = $listeEd->fetch()){
                        echo '<option value="'.$singleEd['editeur_id'].'">'.$singleEd['editeur_nom'].'</option>';
                    }

                    deconnexionBD($bdd);
                    ?>

                </select>

                <input type="submit" value="Ajouter"/>

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