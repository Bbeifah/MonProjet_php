<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 - Expression conditionnelle PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="exercise-page">

    <h1>Exercice 2 - Expression conditionnelle PHP</h1>

    <?php
    // Exercice 2 : Rédigez une expression conditionnelle pour tester si un nombre est à la fois un multiple de 3 et de 5.
    $nombre = 15;

    if ($nombre % 3 == 0 && $nombre % 5 == 0) {
        echo "<p class='multiple'>$nombre est un multiple de 3 et de 5.</p>";
    } else {
        echo "<p class='not-multiple'>$nombre n'est pas un multiple de 3 et de 5.</p>";
    }
    ?>

</body>
</html>