<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 - Tirages aléatoires PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Exercice 3 - Tirages aléatoires PHP</h1>

    <?php
    // Exercice 3 : Choisissez un nombre de trois chiffres. Effectuez ensuite des tirages aléatoires, 
    // et comptez le nombre de tirages nécessaire pour obtenir le nombre initial. 
    // Arrêtez les tirages, et affichez le nombre de coups réalisés.
    
    $nombreInitial = 456;
    $nombreTire = 0;
    $nombreCoups = 0;

    while ($nombreTire !== $nombreInitial) {
        $nombreTire = rand(100, 999);  // Génère un nombre aléatoire entre 100 et 999
        $nombreCoups++;
    }

    echo "<p>Le nombre initial est $nombreInitial. Il a été obtenu en $nombreCoups tirages aléatoires.</p>";
    ?>

</body>
</html>