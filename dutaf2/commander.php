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

        <article><h1 class="title-center">Commande validée</h1>

<?php
        if(!empty($_SESSION['panier'])) {

            $bdd = connexionBD();

            $dateActuelle = date('Y-m-d H:i:s');

            $reqCmd = 'INSERT INTO commandes (commande_date, client_id_) VALUES ("' . $dateActuelle . '", ' . $_SESSION['numero_client'] . ')';

            $exe = $bdd->query($reqCmd);

            $idCmd = $bdd->lastInsertId();


            echo '<p> Votre numéro de commande est le numéro ' . $idCmd . '</p>';

            $nbAlbums = 0;

            foreach ($_SESSION['panier'] as $idAlbum => $infos) {
                $reqInclure = 'INSERT INTO inclure (commande_id_, album_id_, quantite, prix) VALUES (' . $idCmd . ', ' . $idAlbum . ', ' . $infos['quantite'] . ', ' . $infos['prix'] . ')';

                $nbAlbums += $infos['quantite'];

                $exe = $bdd->query($reqInclure);
            }

            echo '<p> Elle comporte ' . $nbAlbums . ' album(s)</p>';

            deconnexionBD($bdd);

            $_SESSION['panier'] = array(); // PANIER VIDÉ

        }

        else {
            echo '<p>Désolé, le panier est vide.</p>'."\n";
        }

?>

        </article>

        <article><a href="catalogue.php">Retour au catalogue</a></article>

    </section>




<?php
require 'footer.inc.php';
?>


<?php
require 'fin_html.inc.php';
?>