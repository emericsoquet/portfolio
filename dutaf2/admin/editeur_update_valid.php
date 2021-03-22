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

        <article><h1 class="title-center">Modif. d'un éditeur</h1><p class="updates">

                <?php

                $name = $_GET['nom'];
                $country = $_GET['pays'];
                $mobilePhone = $_GET['tel'];
                $num_ed = $_GET['num_ed'];

                echo 'Vous venez de modifier l\'auteur nommé(e) « ' . $name . ' ».';

                $bdd = connexionBD();

                $bdd->query('UPDATE editeur SET editeur_nom = \''.$name.'\' , editeur_pays = \''.$country.'\' , editeur_tel = \''.$mobilePhone.'\' WHERE editeur_id = '.$num_ed );

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