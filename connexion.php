<?php
    /*
    CONNEXION.PHP
    Recopier ici le code de connexion du TP 1, sans le message "Connexion réussie !".
    Ce fichier sera inclus dans les TP 2 à 9 avec : require 'connexion.php';
    */

    $data_base = "mysql:dbname=ludotheque;host=127.0.0.1";

    try {
        $base = new PDO($data_base, 'root', '');
        $base -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(Exception $e) {
        // message en cas d'erreur
        die('Erreur : ' . $e -> getMessage());
    }

?>
