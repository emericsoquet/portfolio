<?php
    require 'config.inc.php';

    $email=$_POST['email'];
    $mdp=$_POST['mdp'];

    $mabd=connexionBD();
    $req='SELECT * FROM clients WHERE client_email LIKE "'.$email.'"';
    //echo '<p>'.$req.'</p>';

    //  LANCEMENT DE LA REQUÊTE
    $resultat=$mabd->query($req);

    // COMPTAGE DES LIGNES
    $lignes_resultat=$resultat->rowCount();

    if ($lignes_resultat>0) { // ON VÉRIFIE S'IL Y A DES LIGNES
        // SI OUI POUR CHAQUE RÉSULTAT
        $ligne=$resultat->fetch(PDO::FETCH_ASSOC);

        if (password_verify($mdp,$ligne['client_mdp'])) { // SI LE MDP EST BON
            $_SESSION['prenom_client']=$ligne['client_prenom'];
            $_SESSION['numero_client']=$ligne['client_id'];
            $_SESSION['panier']=array();
            header('location:listing.php'); // RENVOIE DANS LE CATALOGUE

        } else { // SI LE MDP EST INCORRECT
            //echo '<p>KO...</p>';
            // Le mot de passe est incorrect
            $_SESSION['erreur']='<p class="erreur">Ça ne semble pas être le bon mot de passe.</p>';
            header('location:connexion.php'); // RENVOIE A LA PAGE DE CONNEXION
        }

    }
    else {
        $_SESSION['erreur']='<a href="inscription.php" class="erreur">Oups ! Vous n\'êtes pas inscrit.e chez nous. Pourquoi ne pas créer un compte ?</a>';
        header('location:connexion.php'); // RENVOIE A LA PAGE DE CONNEXION
    }
    deconnexionBD($mabd);

?>