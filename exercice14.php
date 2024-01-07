<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 14 - Site d'agence immobilière PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Exercice 14 - Site d'agence immobilière PHP</h1>

    <?php
    // Exercice 14 : Dans la perspective de création d’un site d’agence immobilière,
    // créez un formulaire comprenant trois boutons Submit nommés Vendre, Acheter et Louer.
    // En fonction du choix effectué par le visiteur, redirigez-le vers une page spécialisée
    // dont le contenu réponde au critère choisi.

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $choix = $_POST["choix"];

        // Redirection en fonction du choix
        switch ($choix) {
            case "vendre":
                header("Location: vendre.php");
                break;
            case "acheter":
                header("Location: acheter.php");
                break;
            case "louer":
                header("Location: louer.php");
                break;
            default:
                echo "<p>Choix non valide</p>";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="submit" name="choix" value="Vendre">
        <input type="submit" name="choix" value="Acheter">
        <input type="submit" name="choix" value="Louer">
    </form>

</body>
</html>