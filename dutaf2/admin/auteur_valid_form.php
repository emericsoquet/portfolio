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

        <article><h1 class="title-center">Ajout d'un auteur</h1><p class="updates">


    

    <?php

        $lastName = $_GET['nom'];
        $firstName = $_GET['prenom'];
        $age = $_GET['age'];
        $nationality = $_GET['nationalite'];

        $bdd = connexionBD();

        $bdd->query('INSERT INTO auteur VALUES(NULL, \''.$lastName.'\', \''.$firstName.'\', \''.$nationality.'\', \''.$age.'\')');

        echo 'Vous venez d\'ajouter l\'auteur nommé(e) « '.$firstName. ' ' . $lastName.' ».';

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