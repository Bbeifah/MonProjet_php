<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 17 - Lecture de tableaux multidimensionnels PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Exercice 17 - Lecture de tableaux multidimensionnels PHP</h1>

    <?php
    // Exercice 17 : Écrivez une fonction de lecture de tableaux multidimensionnels.
    // L'affichage se fait sous forme de tableau XHTML dont les titres sont les clés des tableaux.

    function afficheTableauMultidimensionnel($tableau)
    {
        if (empty($tableau)) {
            echo "<p>Le tableau est vide.</p>";
            return;
        }

        echo "<table border='1'>";
        // Affichage des titres (clés)
        echo "<tr>";
        foreach (array_keys(current($tableau)) as $titre) {
            echo "<th>$titre</th>";
        }
        echo "</tr>";

        // Affichage des données
        foreach ($tableau as $ligne) {
            echo "<tr>";
            foreach ($ligne as $valeur) {
                echo "<td>$valeur</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
    }

    // Exemple d'utilisation
    $tableauMultidimensionnel = array(
        array("Prénom" => "John", "Ville" => "New York", "Âge" => 30),
        array("Prénom" => "Alice", "Ville" => "Paris", "Âge" => 25),
        array("Prénom" => "Bob", "Ville" => "London", "Âge" => 35)
    );

    afficheTableauMultidimensionnel($tableauMultidimensionnel);
    ?>

</body>
</html>