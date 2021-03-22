<?php
require 'config.inc.php';

    $genre = $_POST['genre'];
    $prenom = ucfirst($_POST['prenom']);
    $nom = strtoupper($_POST['nom']);
    $adr = $_POST['adresse'];
    $cp = $_POST['cp'];
    $ville = $_POST['ville'];
    $pays = $_POST['pays'];
    $tel = $_POST['tel'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp1'];
    $mdp_confirm = $_POST['mdp2'];

    $_SESSION['cli_genre'] = $genre;
    $_SESSION['cli_prenom'] = $prenom;
    $_SESSION['cli_nom'] = $nom;
    $_SESSION['cli_adr'] = $adr;
    $_SESSION['cli_cp'] = $cp;
    $_SESSION['cli_ville'] = $ville;
    $_SESSION['cli_pays'] = $pays;
    $_SESSION['cli_tel'] = $tel;
    $_SESSION['cli_mail'] = $mail;

    if ((empty($mdp)) || ( $mdp != $mdp_confirm)) {

        $_SESSION['erreur_co'] = 'Les deux mots de passe entrés ne sont pas identiques.';

        header('location:inscription.php');

    }

    else {

        $bdd = connexionBD();

        $reqCli = 'SELECT * FROM clients WHERE client_email="' . $mail . '"';
        $exeCli = $bdd->query($reqCli);
        $nbCli = $exeCli->rowCount();

        deconnexionBD($bdd);

        if ($nbCli > 0) {
            $_SESSION['erreur_mail'] = 'Désolé, cet email existe déjà. Vous êtes déjà inscrit !';

            header('location: inscription.php');
        } else {

            $bdd = connexionBD();
            $mdpCry = password_hash($mdp, PASSWORD_DEFAULT);
            $reqCli = 'INSERT INTO clients (client_genre, client_prenom, client_nom, client_adr, client_cp, client_ville, client_pays, client_tel, client_email, client_mdp) VALUES("' . $genre . '", "' . $prenom . '", "' . $nom . '", "' . $adr . '", "' . $cp . '", "' . $ville . '", "' . $pays . '", "' . $tel . '", "' . $mail . '", "' . $mdpCry . '" )';

            $exeCli = $bdd->query($reqCli);

        }


        deconnexionBD($bdd);

    }




?>

<?php
require 'debut_html_search.inc.php';
?>

<?php
require 'header.inc.php';
?>

<section>
    <article>
        <h1>Inscription réussie</h1>

        <p>Vous êtes maintenant inscrit chez Dutaf</p>
    </article>

    <article><a href="index.php">Retour à l'accueil</a></article>
</section>


<?php
require 'footer.inc.php';
?>


<?php
require 'fin_html.inc.php';
?>
