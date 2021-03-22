<?php
    function connexionBD() {
        try {
            $idConnexion=new PDO('mysql:host='.SERVER.';port='.PORT.';
            dbname='.DATABASE.';charset=UTF8;', LOGIN, PASSWORD);
            $idConnexion->query('SET NAMES utf8;');
            return $idConnexion;
        } catch (PDOException $e) {
            echo 'Erreur : '.$e->getMessage().'<br />'; die();
        }
    }

    function deconnexionBD(&$idConnexion) {
        $idConnexion=null;
    }
?>