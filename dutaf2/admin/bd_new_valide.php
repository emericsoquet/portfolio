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

        <article><h1 class="title-center">Ajout d'une BD</h1><p class="updates">

                <?php

                $title = $_GET['titre'];
                $isbn = $_GET['isbn'];
                $price = $_GET['prix'];
                $serie = $_GET['serie'];
                $writer = $_GET['auteur'];
                $publisher = $_GET['editeur'];

                $bdd = connexionBD();

                $bdd->query("INSERT INTO album VALUES(NULL, '$isbn', '$serie', '$title', '$publisher', '$price', '$writer')");

                echo 'Vous venez d\'ajouter la bande dessinée « '.$title.' ».';

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