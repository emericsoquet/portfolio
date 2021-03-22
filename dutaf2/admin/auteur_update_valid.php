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

        <article><h1 class="title-center">Modif. d'un auteur</h1><p class="updates">


                <?php

                $firstName = $_GET['prenom'];
                $lastName = $_GET['nom'];
                $nationality = $_GET['nationalite'];
                $age = $_GET['age'];
                $num_aut = $_GET['num_aut'];

                echo 'Vous venez de modifier l\'auteur nommé(e) « ' . $firstName . ' ' . $lastName . ' ».';

                $bdd = connexionBD();

                $bdd->query('UPDATE auteur SET auteur_nom = \''.$lastName.'\' , auteur_prenom = \''.$firstName.'\' , auteur_nat = \''.$nationality.'\' , auteur_age = '.$age.' WHERE auteur_id = '.$num_aut );

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