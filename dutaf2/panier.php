<?php
require 'config.inc.php';

if (empty($_SESSION['numero_client'])) {
    header('location: connexion.php');
}

    if(!empty($_GET['plus'])) {

        $id = $_GET['plus'];
        $_SESSION['panier'][$id]['quantite']++;
    }
    else if (!empty($_GET['moins'])) {

        $id = $_GET['moins'];

        if ($_SESSION['panier'][$id]['quantite']<=1) {
            unset($_SESSION['panier'][$id]);
        }
        else {
            $_SESSION['panier'][$id]['quantite']--;
        }
    }

?>

<?php
require 'debut_html_search.inc.php';
?>

<?php
require 'header.inc.php';
?>



    <?php

        if (!empty($_SESSION['numero_client'])) {

            if(!empty($_SESSION['panier'])) {

                echo '<div class="content-cart">';

                echo '<h1 class="title-center title-others">Panier</h1>';

                echo '<table class="table-dutaf"> <tr> <th>Titre</th> <th>Série</th> <th>Prix</th> <th> </th> <th>Quantité</th> <th> </th> <th>Prix par album</th> </tr>';

                $prixActuel= 0;
                $total= 0;

                foreach($_SESSION['panier'] as $id => $infos) {
                    echo '<tr>';
                    echo '<td>'.$infos['titre'].'</td>'."\n";
                    echo '<td>'.$infos['serie'].'</td>'."\n";
                    echo '<td>'.$infos['prix'].'</td>'."\n";
                    echo '<td><a href="panier.php?moins='.$id.'">-</a></td>'."\n";
                    echo '<td>'.$infos['quantite'].'</td>'."\n";
                    echo '<td><a href="panier.php?plus='.$id.'">+</a></td>'."\n";

                    $prixActuel = $infos['prix'] * $infos['quantite'];
                    $total += $prixActuel;

                    echo '<td>'.$prixActuel.'</td>'."\n";
                    echo '</tr>'."\n";
                }

                echo '<tr> <td colspan="6">Total de votre commande</td> <td colspan="1">'.$total.'</td> </tr>';
                echo '</table>';

                echo '<p><form method="post" action="commander.php"> <input type="submit" value="Commander" /> </form></p>';

                echo '</div>';


            }

            else {
                echo '<section> <article><h1 class="title-center">Panier vide</h1></article>';

                echo '<article><a href="listing.php">Retour au catalogue</a></article> </section>';
            }
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