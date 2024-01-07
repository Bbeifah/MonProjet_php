<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8 - Tableau associatif PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Exercice 8 - Tableau associatif PHP</h1>

    <?php
    // Exercice 8 : Écrivez un tableau multidimensionnel associatif dont les clés sont des noms de personne 
    // et les valeurs des tableaux indicés contenant le prénom, la ville de résidence et l’âge de la personne.

    $personnes = array(
        "Alice" => array("prénom" => "Alice", "ville" => "Paris", "âge" => 25),
        "Bob" => array("prénom" => "Bob", "ville" => "Lyon", "âge" => 30),
        "Charlie" => array("prénom" => "Charlie", "ville" => "Marseille", "âge" => 22)
    );

    // Affichage du tableau
    echo "<table border='1'>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Ville de résidence</th>
                <th>Âge</th>
            </tr>";

    foreach ($personnes as $nom => $infos) {
        echo "<tr>
                <td>$nom</td>
                <td>{$infos['prénom']}</td>
                <td>{$infos['ville']}</td>
                <td>{$infos['âge']}</td>
              </tr>";
    }

    echo "</table>";
    ?>

</body>
</html>