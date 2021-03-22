<?php
    require 'config.inc.php';
?>

<?php
    require 'debut_html_tables.inc.php';
?>

<?php
    require 'header.inc.php';
?>

    <section>

        <article><h1 class="title-center">Catalogue</h1></article>
        <article><a href="index.php">Retour à l'accueil</a></article>


    </section>

<?php

            $bdd = connexionBD();

            $tout = $bdd->query('SELECT * FROM album INNER JOIN auteur ON auteur.auteur_id = album.auteur_id_ ');

            echo '<table id="table_gestion"> <thead> <tr> <th>titre</th> <th>prix</th> <th>auteur</th> <th>achat</th> </tr> </thead> <tbody>';

            while($ligne = $tout->fetch()){
                echo '<tr><td>'.$ligne['album_titre'].'</td> <td>'.$ligne['album_prix'].' euro </td> <td>'.$ligne['auteur_nom'].'</td> <td> <a href="ajout_panier.php?album_id='.$ligne['album_id'].'">Ajouter au panier</a></td> </tr>';
            }
            echo '</tbody> </table>';

            deconnexionBD($bdd);

        ?>


<?php
    require 'footer.inc.php';
?>


<?php
    require 'fin_html.inc.php';
?>