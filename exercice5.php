<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5 - Calculs sur un cercle PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Exercice 5 - Calculs sur un cercle PHP</h1>

    <?php
    // Exercice 5 : Ecrire un programme qui calcule le diamètre, le périmètre et la surface d’un cercle 
    // dont le rayon est saisi au clavier.

    // Exemple avec un rayon saisi au clavier (à adapter selon vos besoins)
    $rayon = 5;

    // Calculs
    $diametre = $rayon * 2;
    $perimetre = 2 * M_PI * $rayon;  // M_PI représente la constante Pi
    $surface = M_PI * pow($rayon, 2); // pow() pour la puissance

    echo "<p>Rayon du cercle : $rayon</p>";
    echo "<p>Diamètre du cercle : $diametre</p>";
    echo "<p>Périmètre du cercle : $perimetre</p>";
    echo "<p>Surface du cercle : $surface</p>";
    ?>

</body>
</html>