<?php

    require 'config.inc.php';

    $database=connexionBD(); // Connexion à la bdd

    $pseudo = htmlspecialchars($_GET['pseudo']);
    $message = htmlspecialchars($_GET['message']);

    // str_replace("'", "\'", $pseudo);
    // str_replace("'", "\'", $message);

    $requestWrite = 'INSERT INTO chat(chat_pseudo, chat_message) VALUES("'.$pseudo.'", "'.$message.'")'; // requête : un utilisateur écrit un message accolé à un pseudo

    if( (!empty($pseudo) && !empty($message)) ) {

            $executionRequestWrite = $database->query($requestWrite);

            // parse_str($message);

    }


    // Exécution de la requête

    deconnexionBD($database); // Déconnexion de la bdd


?>