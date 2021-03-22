<?php

    if ($_POST['prenom'] == NULL ) {
        // echo 'Vous n\'avez pas renseigné votre prénom.';
        $erreurs['prenom'] = 'Vous n\'avez pas renseigné votre prénom';
    }

    if ($_POST['email'] == NULL ) {
        // echo 'Vous n\'avez pas renseigné votre adresse mail.';
        $erreurs['email'] = 'Vous n\'avez pas renseigné votre adresse mail';
    }

    elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        // echo 'Cette adresse n\'est pas valide';
        $erreurs['email'] = 'Cette adresse n\'est pas valide';
    }

    if (isset($erreurs)) {
        echo json_encode($erreurs);
    }

    else {
        echo json_encode(true);
    }

