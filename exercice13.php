<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 13 - Calcul TVA PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Exercice 13 - Calcul TVA PHP</h1>

    <?php
    // Exercice 13 : Créez un formulaire demandant la saisie d’un prix HT et d’un taux de TVA.
    // Le script affiche le montant de la TVA et le prix TTC dans deux zones de texte créées dynamiquement.
    // Le formulaire maintient les données saisies.

    $prixHT = $tauxTVA = $montantTVA = $prixTTC = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $prixHT = floatval($_POST["prixHT"]);
        $tauxTVA = floatval($_POST["tauxTVA"]);

        // Calculs
        $montantTVA = $prixHT * ($tauxTVA / 100);
        $prixTTC = $prixHT + $montantTVA;
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="prixHT">Prix HT :</label>
        <input type="text" id="prixHT" name="prixHT" value="<?php echo $prixHT; ?>" required><br>

        <label for="tauxTVA">Taux de TVA :</label>
        <input type="text" id="tauxTVA" name="tauxTVA" value="<?php echo $tauxTVA; ?>" required><br>

        <input type="submit" value="Calculer">
    </form>

    <?php
    // Affichage des résultats si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<h2>Résultats :</h2>";
        echo "<p>Montant de la TVA : $montantTVA €</p>";
        echo "<p>Prix TTC : $prixTTC €</p>";
    }
    ?>

</body>
</html>