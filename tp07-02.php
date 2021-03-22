<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$from = "emeric.soquet@etudiant.univ-reims.fr";
$to = "prof@h205.online";
$subject = "TP07-02 by mmi19d13";
$message = "PHP mail marche";
$headers = "From:" . $from;

mail($to,$subject,$message, $headers);

echo "L'email a été envoyé.";
?>
