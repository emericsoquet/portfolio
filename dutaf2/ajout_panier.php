<?php

    require('config.inc.php');

    if (!empty($_SESSION['numero_client'])) {

        $album_id = $_GET['album_id']; // RÉCUPÉRATION DE L'ID DE L'ALBUM

        $bdd = connexionBD();
        $req = 'SELECT * FROM album INNER JOIN auteur ON auteur.auteur_id = album.auteur_id_ WHERE album_id='.$album_id ;
        $exe = $bdd->query($req);
        $ligne = $exe->fetch();

        deconnexionBD($bdd);


        if (!empty($_SESSION['panier'][$album_id])) {
            $_SESSION['panier'][$album_id]['quantite']++; // ON AUGMENTE DE UN, LA QUANTITÉ
        }

        else {
            $_SESSION['panier'][$album_id] = array(
                'titre' => $ligne['album_titre'],
                'serie' => $ligne['album_serie'],
                'prix' => $ligne['album_prix'],
                'quantite' => 1 // NE VIENT PAS DE LA BDD
            );
        }

        header('location:listing.php'); // UNE FOIS CELA FAIT, ON REDIRIGE LE CLIENT VERS LE LISTING

    }

    else {

        // SI LE CLIENT N'EST PAS CO, IL SERA RENVOYÉ VERS LA PAGE DE CONNEXION
        header('location:connexion.php');
    }

?>
