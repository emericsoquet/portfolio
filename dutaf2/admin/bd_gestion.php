<?php
    require '../config.inc.php';
?>

<?php
    require '../debut_html_tables_admin.inc.php';
?>

<?php
    require '../header_admin.inc.php';
?>


<section>

        <article><h1 class="title-center">Gestion des BD</h1></article>
        <article><a href="bd_new_form.php">Ajouter une BD</a></article>
        <article><a href="admin.php">Retour au panneau d'administration</a></article>


    </section>


    <?php

    $bdd = connexionBD();

    $tout = $bdd->query('SELECT * FROM album INNER JOIN auteur ON auteur.auteur_id = album.auteur_id_ ');

    echo '<table id="table_gestion"> <thead> <tr> <th>titre</th> <th>prix</th> <th>auteur</th> <th></th> <th></th> </tr> </thead> </tbody>';

    while($ligne = $tout->fetch()){
        echo '<tr><td>'.$ligne['album_titre'].'</td> <td>'.$ligne['album_prix'].' euro </td> <td>'.$ligne['auteur_nom'].'</td>';
        echo "<td><a href='bd_update_form.php?num_bd=" . $ligne['album_id'] . "&album_titre=" . $ligne['album_titre'] . "'>Modifier</a></td>";
        echo "<td><a href='bd_delete.php?num_bd=" . $ligne['album_id'] . "&album_titre=" . $ligne['album_titre'] . "'>Supprimer</a></td> </tr>";
    }

    echo '</tbody> </table>';

    deconnexionBD($bdd);
    ?>


<?php
    require '../footer.inc.php';
?>


<?php
    require '../fin_html.inc.php';
?>