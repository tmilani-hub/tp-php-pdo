<?php
   /*
   TP 5 – AJOUTER, MODIFIER, SUPPRIMER AVEC exec()

   1. Ajouter le jeu Pac-Man (genre Action, année 1980, note 16)
      puis afficher : Pac-Man ajouté avec l'id ...
   2. Passer la note de Fortnite à 15
      puis afficher le nombre de jeux modifiés.
   3. Supprimer Pac-Man
      puis afficher le nombre de jeux supprimés.

   Vérifier le résultat avec la page du TP 3.

   Question : que se passerait-il avec DELETE FROM jeu sans WHERE ?
   Réponse :
   */



   require 'connexion.php';

// AJOUT
//   $ajout = $base -> exec('INSERT INTO jeu (titre, genre, annee, note) VALUES ("pac-girl", "réflexion", 1980, 17)');
   
   $resultat = $base -> query('SELECT * FROM jeu WHERE titre = "pac-girl"');

   foreach ($resultat as $test) {
      echo $test["id"] . '</br>' . $test["titre"] . '</br>' . $test["note"] . '/20</br>' . $test["genre"] . '</br>' . $test["annee"] . '</br>';
   }

//


?>
