<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 - Diviseurs d'un nombre PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Exercice 6 - Diviseurs d'un nombre PHP</h1>

    <?php
    // Exercice 6 : Ecrire un programme qui affiche l’ensemble des diviseurs d’un nombre saisi au clavier.

    // Exemple avec un nombre saisi au clavier (à adapter selon vos besoins)
    $nombre = 12;

    echo "<p>Les diviseurs de $nombre sont :</p>";

    for ($i = 1; $i <= $nombre; $i++) {
        if ($nombre % $i == 0) {
            echo "<p>$i</p>";
        }
    }
    ?>

</body>
</html>