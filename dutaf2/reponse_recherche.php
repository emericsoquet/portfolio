<?php
    require 'config.inc.php';
?>

<?php
    require 'debut_html_tables.inc.php';
?>

<?php
    require 'header.inc.php';
?>


        <a href="index.php"><button>Retour à l'accueil</button></a>

        <?php

        $bdd = connexionBD();

        $texte = $_GET['recherche'];

        $tout = $bdd->query("SELECT * FROM album INNER JOIN auteur ON auteur.auteur_id = album.auteur_id_ WHERE auteur_nom LIKE '%$texte%' ");

        echo '<table id="table_gestion"><thead><tr><td>titre</td><td>prix</td><td>auteur</td></tr></thead><tbody>';

        while($ligne = $tout->fetch()){
            echo '<tr><td>'.$ligne['album_titre'].'</td> <td>'.$ligne['album_prix'].' euro </td> <td>'.$ligne['auteur_nom'].'</td> </tr>';
        }
        echo '</tbody></table>';

        deconnexionBD($bdd);

        ?>

    <?php
        require 'footer.inc.php';
    ?>


<?php
require 'fin_html.inc.php';
?>