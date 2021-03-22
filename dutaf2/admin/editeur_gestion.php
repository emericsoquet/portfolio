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

        <article><h1 class="title-center">Gestion des éditeurs</h1></article>
        <article><a href="editeur_new_form.php">Ajouter un éditeur</a></article>
        <article><a href="admin.php">Retour au panneau d'administration</a></article>


    </section>


    <?php

    $bdd = connexionBD();

    $tout = $bdd->query('SELECT * FROM editeur');

    echo '<table id=\'table_gestion\'> <thead> <tr> <th>Nom</th> <th>Pays</th> <th>Téléphone</th> <th></th> <th></th> </tr> </thead> </tbody>';

    while($ligne = $tout->fetch()){
        echo '<tr><td>'.$ligne['editeur_nom'].'</td> <td>'.$ligne['editeur_pays'].' </td> <td>'.$ligne['editeur_tel'].'</td>';
        echo "<td><a href='editeur_update_form.php?num_ed=" . $ligne['editeur_id'] . "&editeur_nom=" . $ligne['editeur_nom'] . "'>Modifier</a></td>";
        echo "<td><a href='editeur_delete.php?num_ed=" . $ligne['editeur_id'] . "&editeur_nom=" . $ligne['editeur_nom'] . "'>Supprimer</a></td> </tr>";
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