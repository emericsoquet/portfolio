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

        <article><h1 class="title-center">Gestion des auteurs</h1></article>
        <article><a href="auteur_new_form.php">Ajouter un auteur</a></article>
        <article><a href="admin.php">Retour au panneau d'administration</a></article>


    </section>


    <?php

    $bdd = connexionBD();

    $tout = $bdd->query('SELECT * FROM auteur');

    echo '<table id=\'table_gestion\'> <thead> <tr> <th>Nom</th> <th>Prénom</th> <th>Nationalité</th> <th>Âge</th> <th></th> <th></th> </tr> </thead> </tbody>';

    while($ligne = $tout->fetch()){
        echo '<tr><td>'.$ligne['auteur_nom'].'</td> <td>'.$ligne['auteur_prenom'].' </td> <td>'.$ligne['auteur_nat'].'</td> <td>'.$ligne['auteur_age'].'</td>';
        echo "<td><a href='auteur_update_form.php?num_aut=" . $ligne['auteur_id'] . "&auteur_prenom=" . $ligne['auteur_prenom'] . " &auteur_nom=" . $ligne['auteur_nom'] . " '>Modifier</a></td>";
        echo "<td><a href='auteur_delete.php?num_aut=" . $ligne['auteur_id'] . "&auteur_prenom=" . $ligne['auteur_prenom'] . " &auteur_nom=" . $ligne['auteur_nom'] . " '>Supprimer</a></td> </tr>";
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