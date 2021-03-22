<?php
    require 'config.inc.php';
?>

<?php
    require 'debut_html_search.inc.php';
?>

<?php
    require 'header.inc.php';
?>

<?php

        if (!empty($_SESSION['numero_client'])) {

            echo '<section><article>';

            echo '<h1 class="title-center">Profil</h1>';

            echo '<div id="profile"><div class="profile-txt"><h2 class="title-center title-profile">identité</h2>';

            $bdd= connexionBD();
            $reqProfil = 'SELECT * FROM clients WHERE client_id = '.$_SESSION['numero_client'];;
            $exe = $bdd->query($reqProfil);
            $ligne = $exe->fetch();

                if ($ligne['client_genre'] == 'F') {
                    echo '<p>Madame';
                }
                else {
                    echo '<p>Monsieur';
                }

                echo ' <br />'.$ligne['client_prenom'].' '.$ligne['client_nom'].'</p><br />';

                echo '</div><div class="profile-txt"><h2 class="title-center title-profile">coordonnées</h2>';

                echo $ligne['client_adr'].'<br />';
                echo $ligne['client_cp'].' '.$ligne['client_ville'].'<br />';
                echo $ligne['client_pays'].'<br />';
                echo $ligne['client_tel'].'<br />';

                echo '</div></div></article></section>';


            echo '<h2 class="title-others title-center">Vos commandes</h2>';
            $reqCmd = 'SELECT * FROM commandes WHERE client_id_ = '.$_SESSION['numero_client'];;
            $exe = $bdd->query($reqCmd);
            while ($ligne = $exe->fetch()) {
                $nbCmd = $ligne['commande_id'];

                echo '<table class="table-dutaf">';
                echo '<tr> <th colspan="4" class="th-cmd">Commande numéro '.$nbCmd.' du '.$ligne['commande_date'].'</th> </tr>';


                $reqInclure = 'SELECT * FROM inclure INNER JOIN album ON album.album_id = inclure.album_id_ WHERE commande_id_='.$nbCmd;
                $exeInclure = $bdd->query($reqInclure);

                $prixActuel = 0;
                $total = 0;

                echo '<tr> <th>Titre de l\'album</th> <th>Quantité</th> <th>Prix</th> <th>Prix par album</th> </tr>';

                while ($ligneInclure = $exeInclure->fetch()) {

                    echo '<tr> <td>'.$ligneInclure['album_titre'].'</td> <td>'.$ligneInclure['quantite'].'</td> <td>'.$ligneInclure['prix'].'</td>';

                    $prixActuel = $ligneInclure['prix'] * $ligneInclure['quantite'];

                    echo '<td>'.$prixActuel.'</td> </tr>';

                    $total += $prixActuel;

                }


                echo '<tr> <td colspan="3">Total de la commande</td> <td>'.$total.'</td> </tr>';

                echo '</table>';
            }

            deconnexionBD($bdd);

        }


        else {
            header('location:connexion.php');
        }


?>



<?php
require 'footer.inc.php';
?>


<?php
require 'fin_html.inc.php';
?>