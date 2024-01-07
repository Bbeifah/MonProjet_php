<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 11 - Boucle while PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Exercice 11 - Boucle while PHP</h1>

    <?php
    // Exercice 11 : Utilisez une boucle while pour lire les tableaux des exercices 8 et 9.

    $personnes8 = array(
        "Alice" => array("prénom" => "Alice", "ville" => "Paris", "âge" => 25),
        "Bob" => array("prénom" => "Bob", "ville" => "Lyon", "âge" => 30),
        "Charlie" => array("prénom" => "Charlie", "ville" => "Marseille", "âge" => 22)
    );

    $personnes9 = array(
        "Alice" => array("prénom" => "Alice", "ville" => "Paris", "âge" => 25),
        "Bob" => array("prénom" => "Bob", "ville" => "Lyon", "âge" => 30),
        "Charlie" => array("prénom" => "Charlie", "ville" => "Marseille", "âge" => 22)
    );

    // Affichage du tableau de l'exercice 8
    echo "<h2>Exercice 8 - Tableau associatif</h2>";
    $keys8 = array_keys($personnes8);
    $index8 = 0;

    while ($index8 < count($personnes8)) {
        $nom8 = $keys8[$index8];
        $infos8 = $personnes8[$nom8];
        echo "<p>$nom8 - Prénom: {$infos8['prénom']}, Ville: {$infos8['ville']}, Âge: {$infos8['âge']}</p>";
        $index8++;
    }

    // Affichage du tableau de l'exercice 9
    echo "<h2>Exercice 9 - Tableau associatif multidimensionnel</h2>";
    $keys9 = array_keys($personnes9);
    $index9 = 0;

    while ($index9 < count($personnes9)) {
        $nom9 = $keys9[$index9];
        $infos9 = $personnes9[$nom9];
        echo "<p>$nom9 - Prénom: {$infos9['prénom']}, Ville: {$infos9['ville']}, Âge: {$infos9['âge']}</p>";
        $index9++;
    }
    ?>

</body>
</html>