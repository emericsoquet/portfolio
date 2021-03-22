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

        <article><h1 class="title-center">Suppression d'un éditeur</h1><p class="updates">

                <?php

                $num_ed = $_GET['num_ed'];
                $name = $_GET['editeur_nom'];

                $bdd = connexionBD();

                $bdd->query('DELETE FROM editeur WHERE editeur_id = ' . $num_ed);

                echo 'Vous venez de supprimer l\'éditeur nommé « ' .$name. ' ».';

                deconnexionBD($bdd);

                ?>

            </p></article>
        <article><a href="admin.php">Retour au panneau d'administration</a></article>
    </section>


<?php
    require '../footer.inc.php';
?>


<?php
    require '../fin_html.inc.php';
?>