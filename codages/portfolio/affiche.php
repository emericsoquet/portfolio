<?php

    require 'config.inc.php';

    $database=connexionBD(); // Connexion à la bdd

    $requestShow = 'SELECT chat_pseudo, chat_message, HOUR(chat_heure) as hours, MINUTE (chat_heure) as minutes, SECOND(chat_heure) as seconds, DAY(chat_heure) as day, MONTH(chat_heure) as month, YEAR(chat_heure) as year FROM ( SELECT *  FROM chat ORDER BY chat_id DESC LIMIT 10) x ORDER BY chat_id ASC'; // requête : afficher tous les messages dans le bon ordre

    $executionRequestShow = $database->query($requestShow); // Exécution de la requête

    while ( $record = $executionRequestShow->fetch() ) {

        $record['chat_message'] = str_replace('smiley sourire' , ':)', $record['chat_message']);
        $record['chat_message'] = str_replace('^^', 'vous avez osé faire ce smiley', $record['chat_message'] );

        echo '<div class="record-line"><div class="record-datas"><div class="record-pseudo">' . $record['chat_pseudo'] . '</div> <div class="record-heure">à ' . $record["hours"] . ':' . $record["minutes"] . ':' . $record['seconds'] . ' le ' . $record['day'] . '/' . $record['month'] . '/' . $record['year'] . '</div></div> <div><span class="record—message">' . $record['chat_message'] . '</span></div></div>';

    }

    deconnexionBD($database); // Déconnexion de la bdd


?>