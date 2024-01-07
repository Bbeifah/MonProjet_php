<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10 - Boucle foreach PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Exercice 10 - Boucle foreach PHP</h1>

    <?php
    // Exercice 10 : Utilisez une boucle foreach pour lire les tableaux des exercices 8 et 9.

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
    foreach ($personnes8 as $nom => $infos) {
        echo "<p>$nom - Prénom: {$infos['prénom']}, Ville: {$infos['ville']}, Âge: {$infos['âge']}</p>";
    }

    // Affichage du tableau de l'exercice 9
    echo "<h2>Exercice 9 - Tableau associatif multidimensionnel</h2>";
    foreach ($personnes9 as $nom => $infos) {
        echo "<p>$nom - Prénom: {$infos['prénom']}, Ville: {$infos['ville']}, Âge: {$infos['âge']}</p>";
    }
    ?>

</body>
</html>