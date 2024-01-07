<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 16 - Fonction sinus en PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Exercice 16 - Fonction sinus en PHP</h1>

    <?php
    // Exercice 16 : À partir de la fonction sinus de PHP, écrivez une fonction qui donne le sinus d’un angle donné en radian,
    // en degré ou en grade. Les paramètres sont la mesure de l’angle, et l’unité est symbolisée par une lettre.
    // Le deuxième paramètre doit avoir une valeur par défaut correspondant aux radians.

    function sinusAngle($angle, $unite = "radian")
    {
        switch ($unite) {
            case "degre":
                $angle = deg2rad($angle);
                break;
            case "grade":
                $angle = deg2rad($angle * 9 / 10);
                break;
            // Si l'unité est radian, pas besoin de conversion
        }

        return sin($angle);
    }

    // Exemple d'utilisation
    $angleEnRadians = 1.5;
    $angleEnDegres = 90;
    $angleEnGrades = 100;

    echo "<p>Sinus de $angleEnRadians radians : " . sinusAngle($angleEnRadians) . "</p>";
    echo "<p>Sinus de $angleEnDegres degrés : " . sinusAngle($angleEnDegres, "degre") . "</p>";
    echo "<p>Sinus de $angleEnGrades grades : " . sinusAngle($angleEnGrades, "grade") . "</p>";
    ?>

</body>
</html>