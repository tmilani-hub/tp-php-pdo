<!--
  TP 4 – TRIER ET FILTRER (base ludotheque, table jeu)

  1. Classement : tous les jeux, du mieux noté au moins bien noté.
     Format : Tetris : 19/20

  2. Jeux récents : les jeux sortis après 2015, du plus ancien au plus récent.
     Format : Fortnite (2017)

  3. Jeux de sport : afficher le nombre de jeux de sport, puis leur liste.
     Format : 2 jeu(x) de sport :
-->
<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="utf-8">
      <title>TP 4 - Trier et filtrer</title>
   </head>
   <body>

      <?php
         require 'connexion.php';
      ?>

      <h2>Classement</h2>
      <ul>
         <?php
            $resultat = $base -> query('SELECT * FROM jeu ORDER BY note DESC');

            foreach ($resultat as $id) {
                echo '<li>' . $id["titre"] . '</li><li>' . $id["note"] . '/20</li>';
            }
         ?>
      </ul>

      <h2>Jeux récents</h2>
      <ul>
         <?php
            $resultat = $base -> query('SELECT * FROM jeu ORDER BY annee DESC');

            foreach ($resultat as $id) {
                echo '<li>' . $id["titre"] . '</li><li>' . $id["annee"] . '</li>';
            }
         ?>
      </ul>

      <h2>Jeux de sport</h2>
      <?php
        $resultat = $base -> query('SELECT * FROM jeu WHERE genre = "sport"');

        foreach ($resultat as $id) {
            echo '<li>' . $id["titre"] . '</li><li>' . $id["genre"] . '</li>';
        }
      ?>

   </body>
</html>
