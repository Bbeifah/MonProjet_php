<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7 - Nombre parfait PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Exercice 7 - Nombre parfait PHP</h1>

    <?php
    // Exercice 7 : Ecrire un programme qui teste si un nombre saisi au clavier est parfait.
    // Un nombre égal à la somme de ses diviseurs propres est parfait.

    // Exemple avec un nombre saisi au clavier (à adapter selon vos besoins)
    $nombre = 28;

    $sommeDiviseurs = 0;

    for ($i = 1; $i < $nombre; $i++) {
        if ($nombre % $i == 0) {
            $sommeDiviseurs += $i;
        }
    }

    if ($sommeDiviseurs == $nombre) {
        echo "<p>$nombre est un nombre parfait.</p>";
    } else {
        echo "<p>$nombre n'est pas un nombre parfait.</p>";
    }
    ?>

</body>
</html>