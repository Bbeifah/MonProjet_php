<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 18 - Affichage de résultat PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Exercice 18 - Affichage de résultat PHP</h1>

    <?php
    // Exercice 18 : Ecrire un programme qui permet d’afficher le résultat suivant.

    // Tableau multidimensionnel
    $tableau = array(
        array(1),
        array(2, 2),
        array(3, 3, 3),
        array(4, 4, 4, 4),
        array(5, 5, 5, 5, 5),
        array(6, 6, 6, 6, 6, 6),
        array(7, 7, 7, 7, 7, 7, 7),
        array(8, 8, 8, 8, 8, 8, 8, 8),
        array(9, 9, 9, 9, 9, 9, 9, 9, 9),
        array(10, 10, 10, 10, 10, 10, 10, 10, 10, 10)
    );

    // Affichage du résultat
    echo "<pre>";
    foreach ($tableau as $ligne) {
        foreach ($ligne as $valeur) {
            echo $valeur;
        }
        echo PHP_EOL;
    }
    echo "</pre>";
    ?>

</body>
</html>