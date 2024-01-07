<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 - PPCM de deux entiers PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Exercice 4 - PPCM de deux entiers PHP</h1>

    <?php
    // Exercice 4 : Ecrire un programme qui permet de calculer le PPCM de deux entiers saisis au clavier.
    
    // Fonction pour calculer le PGCD (Plus Grand Commun Diviseur)
    function pgcd($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }

    // Fonction pour calculer le PPCM (Plus Petit Commun Multiple)
    function ppcm($a, $b) {
        return ($a * $b) / pgcd($a, $b);
    }

    // Exemple avec des nombres saisis au clavier (à adapter selon vos besoins)
    $nombre1 = 24;
    $nombre2 = 36;

    $resultat = ppcm($nombre1, $nombre2);

    echo "<p>Le PPCM de $nombre1 et $nombre2 est $resultat.</p>";
    ?>

</body>
</html>