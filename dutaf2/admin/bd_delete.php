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

        <article><h1 class="title-center">Suppression d'une BD</h1><p class="updates">

                <?php

                $num_bd = $_GET['num_bd'];
                $title = $_GET['album_titre'];

                $bdd = connexionBD();

                $bdd->query('DELETE FROM album WHERE album_id = ' . $num_bd);

                echo 'Vous venez de supprimer la bande dessinée « ' . $title . ' ».';

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