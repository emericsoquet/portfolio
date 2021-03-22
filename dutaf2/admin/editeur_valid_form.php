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

        <article><h1 class="title-center">Ajout d'un éditeur</h1><p class="updates">

                <?php

                $name = $_GET['nom'];
                $country = $_GET['pays'];
                $phoneNumber = $_GET['tel'];

                $bdd = connexionBD();

                $bdd->query('INSERT INTO editeur VALUES(NULL, \''.$name.'\', \''.$country.'\', \''.$phoneNumber.'\')');

                echo 'Vous venez d\'ajouter l\'éditeur nommé « '.$name.' ».';

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