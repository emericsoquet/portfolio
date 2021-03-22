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

        <article><h1 class="title-center">Modif. d'une BD</h1><p class="updates">

                <?php

                $title = $_GET['titre'];
                $isbn = $_GET['isbn'];
                $price = $_GET['prix'];
                $serie = $_GET['serie'];
                $writer = $_GET['auteur'];
                $publisher = $_GET['editeur'];
                $num_bd = $_GET['num_bd'];

                echo 'Vous venez de modifier la bande dessinée « '.$title.' ».';

                $bdd = connexionBD();

                $bdd->query('UPDATE album  SET album_titre = \''.$title.'\' , album_serie = \''.$serie.'\' , album_isbn = \''.$isbn.'\' , album_prix = '.$price.' , editeur_id_ = '.$publisher.' , auteur_id_ = '.$writer.' WHERE album_id = '.$num_bd.'');


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