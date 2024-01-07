<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 15 - Transformation de chaînes PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Exercice 15 - Transformation de chaînes PHP</h1>

    <?php
    // Exercice 15 : Écrivez une fonction dont le paramètre passé par référence est un tableau de chaînes de caractères.
    // La fonction transforme chacun des éléments du tableau de manière que le premier caractère soit en majuscule
    // et les autres en minuscules, quelle que soit la casse initiale des éléments, même si elle est mixte.

    function transformeMajuscules(&$tableau)
    {
        foreach ($tableau as &$chaine) {
            $chaine = ucfirst(strtolower($chaine));
        }
    }

    // Exemple d'utilisation
    $mots = array("PHp", "JavAScriPT", "HTML", "CSS");
    transformeMajuscules($mots);

    // Affichage du tableau transformé
    echo "<p>Résultat :</p>";
    echo "<ul>";
    foreach ($mots as $mot) {
        echo "<li>$mot</li>";
    }
    echo "</ul>";
    ?>

</body>
</html>