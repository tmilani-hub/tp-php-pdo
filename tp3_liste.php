<!--
  TP 3 – LISTER LES JEUX DANS UN TABLEAU HTML

  Afficher tous les jeux dans le tableau ci-dessous, une ligne par jeu.
  La note s'affiche sur 20 : 18/20
-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>TP 3 - Liste des jeux</title>

    <style>
        * {
            gap: 12px;
        }
        
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>Liste des jeux</h1>

    <table border="1">
        
        <?php

            require('./connexion.php');

            $resultat = $base -> query('SELECT * FROM jeu');

            foreach ($resultat as $id) {
                echo '<tr><th>' . $id["titre"] . '</th><th>' . $id["genre"] . '</th><th>' . $id["annee"] . '</th><th>' . $id["note"] . '/20</th></tr>';
            }
        ?>
    </table>
</body>
</html>
